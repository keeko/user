<?php
namespace keeko\user\response;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use keeko\core\model\User;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Json Response for List all users
 * 
 * @author gossi <http://gos.si>
 */
class UserListJsonResponse extends AbstractUserResponse
{
    /**
     * Automatically generated method, will be overridden
     * 
     * @param Request $request
     * @return Response
     */
    public function run(Request $request)
    {
        $out = [];

        // build model
        $out['users'] = [];
        foreach ($this->data as $user) {
        	$out['users'][] = $this->userToArray($user);
        }

        // meta
        $out['meta'] = [
        	'total' => $this->data->getNbResults(),
        	'first' => $this->data->getFirstPage(),
        	'next' => $this->data->getNextPage(),
        	'previous' => $this->data->getPreviousPage(),
        	'last' => $this->data->getLastPage()
        ];

        // return response
        return new JsonResponse($out);
    }
}
