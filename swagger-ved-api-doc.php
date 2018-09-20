<?php
//swagger api documentaion by @SWG annotation

//heading or starting Info()
/**
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     host="localhost:8000",
 *     basePath="/api/v1",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Ved API Doc",
 *         description="Description of your app",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="jinesh3c@gmail.com"
 *         ),
 *         @SWG\License(
 *             name="Private License",
 *             url="URL to the license"
 *         )
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="api doc git file",
 *         url="https://github.com/DarkaOnLine/L5-Swagger"
 *     )
 * )
*/

//security
/**
 * @SWG\SecurityScheme(
 *   securityDefinition="MyBearerAuthentication", //constant api token
 *   type="apiKey",
 *   in="header",
 *   name="AppKey"
 * ),
 * @SWG\SecurityScheme(
 *   securityDefinition="MyTokenAuthentication", //token from login
 *   type="apiKey",
 *   in="header",
 *   name="Authorization"
 * ),
 */

//Login
/**
*   @SWG\Post(
*   path="/login",
*   tags={"Login"},
*   summary="Login Appuser via Social Media",
*   operationId="postLogin",
*   security={{"MyBearerAuthentication":{}}},
*   @SWG\Parameter(
*          name="email",
*          in="query",
*          required=true,
*          type="string",
*          
*   ),
*   @SWG\Parameter(
*          name="socialMediaToken",
*          in="query",
*          required=true,
*          type="string",
*   ),
*   @SWG\Parameter(
*          name="socialMedia",
*          in="query",
*          required=true,
*          type="string",
*   ),
*   @SWG\Parameter(
*          name="deviceType",
*          in="query",
*          required=true,
*          type="array",
*          items=@SWG\Items(
*               type="string",
*               enum={"Android","iOS"},
*           ),
*   ),
*   @SWG\Parameter(
*          name="deviceId",
*          in="query",
*          required=false,
*          type="string",
*   ),
*   @SWG\Response(response=200, description="Login Successful",
*        @SWG\Schema(
*              @SWG\Property(property="email",type="string"),
*              @SWG\Property(property="socialMediaToken",type="string"),
*              @SWG\Property(property="socialMedia",type="string"),
*              @SWG\Property(property="deviceType",type="string"),
*              @SWG\Property(property="deviceId",type="string"),
*          ),
*   ),
*   @SWG\Response(response=404, description="Login Failed"),
*   @SWG\Response(response=500, description="internal server error")
*   ),
*/

//Update Profile
/**
 *  @SWG\Post(
 *      path="/updateProfile",
 *      tags={"Profile"},
 *      summary="Update profile",
 *      operationId="postUpdateProfile",
 *      security={{"MyBearerAuthentication":{}},{"MyTokenAuthentication":{}}},
 *      @SWG\Parameter(
 *          name="name",
 *          in="query",
 *          required=true,
 *          description="Name of App user",
 *          type="string",
 *      ),
 *      @SWG\Parameter(
 *          name="city",
 *          in="query",
 *          required=true,
 *          description="City of App user",
 *          type="string",
 *      ),
 *      @SWG\Parameter(
 *          name="country",
 *          in="query",
 *          required=true,
 *          description="Country of App user",
 *          type="string",
 *      ),
 *      @SWG\Parameter(
 *          name="placeOfBirth",
 *          in="query",
 *          required=true,
 *          description="Birth Place of App user",
 *          type="string",
 *      ),
 *      @SWG\Parameter(
 *          name="dateOfBirth",
 *          in="query",
 *          required=true,
 *          type="string",
 *          description=" yyyy-mm-dd",
 *          format="date",
 *      ),
 *      @SWG\Parameter(
 *          name="timeOfBirth",
 *          in="query",
 *          required=true,
 *          description="hour:minute:second",
 *          type="string",
 *      ),
 *      @SWG\Parameter(
 *          name="gender",
 *          in="query",
 *          required=true,
 *          description="Male/Female/Other",
 *          type="array",
 *          items=@SWG\Items(
 *              type="string",
 *              enum={"Male","Female","Other"},
 *          ),
 *      ),
 *      @SWG\Response(response=200, description="Profile Updated Successful",
 *          @SWG\Schema(
 *              @SWG\Property(property="name",type="string"),
 *              @SWG\Property(property="city",type="string"),
 *              @SWG\Property(property="country",type="string"),
 *              @SWG\Property(property="placeOfBirth",type="string"),
 *              @SWG\Property(property="dateOfBirth",type="string"),
 *              @SWG\Property(property="timeOfBirth",type="string"),
 *              @SWG\Property(property="gender",type="string"),
 *          ),
 *      ),
 *      @SWG\Response(response=404, description="Profile Update Failed"),
 *      @SWG\Response(response=500, description="internal server error")
 *  ),
*/

//Upload Image
/**
  *  @SWG\Post(
  *     path="/uploadImage",
  *     tags={"Profile"},
  *     summary="Upload image of an appuser",
  *     operationId="postUploadImage",
  *     security={{"MyBearerAuthentication":{}},{"MyTokenAuthentication":{}}},
  *     @SWG\Parameter(
  *         name="image",
  *         in="formData",
  *         description="select image to upload",
  *         required=true,
  *         type="file",
  *     ),
  *     @SWG\Response(response=200, description="Profile Image Uploaded Successful",
  *         @SWG\Schema(
  *              @SWG\Property(property="image",type="string"),
  *          ),
  *     ),
  *     @SWG\Response(response=404, description="Profile Image Upload Failed"),
  *     @SWG\Response(response=500, description="internal server error")
  *  ), 
*/

//POST
/**
 *  @SWG\Post(
 *      path="/store/device_uuid",
 *      tags={"Profile"},
 *      summary="Update device uuid",
 *      operationId="postUpdateUuid",
 *      @SWG\Parameter(
 *          name="deviceId",
 *          in="query",
 *          description="Device unique ID",
 *          required=true,
 *          type="string",
 *      ),
 *      security={{"MyBearerAuthentication":{}},{"MyTokenAuthentication":{}}},
 *      @SWG\Response(response=200, description="Uuid saved Successful",
 *          @SWG\Schema(
 *              @SWG\Property(property="deviceId",type="string"),
 *          ),
 *      ),
 *      @SWG\Response(response=404, description="uuid Failed to save"),
 *      @SWG\Response(response=500, description="internal server error")
 *  ),
 */

 //Simple Get
/**
* @SWG\Get(
*   path="/getastrologerInfo",
*   tags={"Profile"},
*   summary="Astrologer info",
*   operationId="getAstrologerInfo",
*   security={{"MyBearerAuthentication":{}},{"MyTokenAuthentication":{}}},
*   @SWG\Response(response=200, description="Astrologer info"),
*   @SWG\Response(response=404, description="Failed To Display Astrologer Info"),
* ), 
*/

//Get with parameter
/**
* @SWG\Get(
*     path="/message/questions/{qstnId}",
*     tags={"Question"},
*     summary="Question by ID",
*     operationId="getQuestionById",
*     security={{"MyBearerAuthentication":{}},{"MyTokenAuthentication":{}}},
*     @SWG\Parameter(
*       name="qstnId",
*       in="path",
*       required=true,
*       description="question id to view question",
*       type="string",
*     ), 
*     @SWG\Response(response=200, description="Question list Successful",
*           @SWG\Schema(
*              @SWG\Property(property="qstnId",type="integer"),
*          ),
*       ),
*     @SWG\Response(response=404, description="Question list Failed"),
* ),
*/