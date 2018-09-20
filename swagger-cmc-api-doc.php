<?php
//API Doc swagger by OpeanApi  @OA
/**
* @OA\Info(
*   title="Title of the API documentation",
*   version="1.0.0",
*   description = "This is **** Web API Documentation.",
*   termsOfService="http://www.my-url.com/",
*   @OA\Contact(
*     name="Jinesh Subedi",
*     email="jinesh.3c@gmail.com",
*   ),
*   @OA\License(
*      name="Apache 2.0",
*      url="http://www.apache.org/licenses/LICENSE-2.0.html"
*   ),
*    @OA\ExternalDocumentation(
*     description="Find more",
*     url="https://github.com/zircote/swagger-php/blob/master/Examples/petstore-3.0/api.php"
*   ),
* )
*/

//for security
/**
 * @OA\SecurityScheme(
 *   securityScheme="Bearer_auth",
 *   type="http",
 *   scheme="bearer",  
 * ),
 * @OA\SecurityScheme(
 *   securityScheme="App_Key",
 *   type="apiKey",
 *   in="header",
 *   name="X-APP-TOKEN",  
 * ),
 */

 //before the function call

// login
/**
     * @OA\Post(
     *     path="/api/v1/login",
     *     tags={"Auth Appuser"},
     *     description="user login",
     *     security= {
     *      {"App_Key":"",
     *       "Bearer_auth":"",}
     *      },
     *     @OA\RequestBody(
     *         description="User login",
     *         required=true,
     *          @OA\JsonContent(
     *           type="object",
     *            @OA\Property(
     *              property="username",
     *              description="Username",
     *              title="Username",
     *              type="string",
     *              ),
     *            @OA\Property(
     *              property="password",
     *              description="Password",
     *              title="Password",
     *              type="string",
     *              ),
     *           ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="login response",
     *         @OA\JsonContent(
     *             type="object",
     *         ),
     *         @OA\Link(
     *              link="UserPasswordLogin",
     *              operationId="LoginUser",
     *              parameters={
     *                   "username":"abshire.ezekiel",
     *                   "password":"password",
     *              },
     *          ),
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *         @OA\JsonContent(
     *             type="object",
     *         ),
     *     ),
     * )
     */
//Logout
	/**
     * @OA\Get(path="/api/v1/logout/{id}",
     *   tags={"Auth Appuser"},
     *   summary="Get user by Id",
     *   description="",
     *   operationId="getUserById",
	 *   security= {
	 *	        {"App_Key":"",
	 *	         "Bearer_auth":"",}
	 *	        },
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     description="The name that needs to be fetched. Use user1 for testing. ",
     *     required=true,
     *     @OA\Schema(
     *         type="integer"
     *     )
     *   ),
     *   @OA\Response(
     *       response=200, 
     *       description="successful operation", 
     *       @OA\JsonContent(
     *           type="object", 
     *           ),
     *       @OA\Link(
     *           link="LogoutUser",
     *           operationId="LogoutById",
     *           parameters={
     *               "id":"$response.path#/id",
     *           },
     *       ),
     *   ),
     *   @OA\Response(
     *      response=400, 
     *       description="Invalid id supplied",
     *       @OA\JsonContent(
     *           type="object", 
     *           ),
     *   ),
     *   @OA\Response(
     *       response=404, 
     *       description="User not found", 
     *       @OA\JsonContent(
     *          type="object", 
     *          ),
     *  ),
     * )
    */


//Simple Get
/**
     * @OA\Get(
     *     path="/api/v1/general",
     *     tags={"Notification"},
     *     description="Returns all Notification from the system that the user has access to",
     *     security= {
     *               {"App_Key":"",
     *                "Bearer_auth":"",}
     *               },
     *   
     *     @OA\Response(
     *         response=200,
     *         description="Notification response",
     *         @OA\JsonContent(
     *             type="object",
     *         ),
     *         @OA\Link(
     *              link="NotificationUserByRoles",
     *              operationId="ListGeneralNotification",
     *           ),
     *     ),
     *     @OA\Response(
     *          response="default",
     *          description="an ""unexpected"" error",
     *          @OA\JsonContent(
     *             type="object",
     *          ),
     *      ),
     * )
     */

//Get with parameter in path
/**
         * @OA\Get(
         *   path="/api/v1/general/{id}",
         *   tags={"Notification"},
         *   summary="general notification by id",
         *   @OA\Parameter(
         *         description="ID of Notification to fetch",
         *         in="path",
         *         name="id",
         *         required=true,
         *         @OA\Schema(
         *             type="integer",
         *             format="int64",
         *         )
         *     ),
         *   @OA\Response(
         *         response=200,
         *         description="Notification response",
         *         @OA\JsonContent(
         *             type="object",
         *         ),
         *         @OA\Link(
         *              link="NotificationUserByRoles",
         *              operationId="ViewGeneralNotification",
         *              parameters={
         *                  "id":"$request.path.id",
         *              },
         *           ),
         *     ),
         *   @OA\Response(
         *     response="default",
         *     description="an ""unexpected"" error",
         *     @OA\JsonContent(
         *             type="object",
         *         ),
         *   ),
         *   security= {
         *           {"App_Key":"",
         *            "Bearer_auth":""}
         *           },
         * )
         */
//POST
/**
     * @OA\Post(
     *     path="/api/v1/register",
     *     tags={"Register Appuser Device"},
     *     description="Device registration",
     *     security= {
     *      {"App_Key":"",
     *       "Bearer_auth":"",}
     *       },
     *     @OA\RequestBody(
     *         description="Device Registration",
     *         required=true,
     *          @OA\JsonContent(
     *           type="object",
     *            @OA\Property(
     *               property="appuser_id",
     *               description="Appuser ID",
     *               title="appuser_id",
     *               type="integer",
     *               format="int64",
     *            ),
     *            @OA\Property(
     *              property="device_type",
     *              description="Device type",
     *              title="device_type",
     *              type="string",
     *              enum="[IOS,Android]",
     *              ),
     *            ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Register response",
     *         @OA\JsonContent(
     *             type="string",
     *         ),
     *         @OA\Link(
     *              link="RegisterUserDevice",
     *              operationId="UserDevice",
     *              parameters={
     *              },
     *          ),
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *         @OA\JsonContent(
     *            type="string",
     *         ),
     *     ),
     *      
     * )
     */