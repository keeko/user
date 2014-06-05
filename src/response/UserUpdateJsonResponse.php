<?php
namespace keeko\user\response;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use keeko\core\model\User;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Json Response for Updates an user
 * 
 * @author gossi <http://gos.si>
 */
class UserUpdateJsonResponse extends AbstractUserResponse
{
    /**
     * Automatically generated method, will be overridden
     * 
     * @param Request $request
     * @return Response
     */
    public function run(Request $request)
    {
        // return response
        return new JsonResponse($this->userToArray($this->data));
    }
}
