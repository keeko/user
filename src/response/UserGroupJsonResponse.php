<?php
namespace keeko\user\response;

use keeko\core\package\AbstractResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use keeko\core\model\User;

/**
 * Automatically generated JsonResponse for Reads the relationship of user to group
 * 
 * @author gossi
 */
class UserGroupJsonResponse extends AbstractResponse {

	/**
	 * Automatically generated run method
	 * 
	 * @param Request $request
	 * @param mixed $data
	 * @return JsonResponse
	 */
	public function run(Request $request, $data = null) {
		$serializer = User::getSerializer();
		$relationship = $serializer->groups();

		return new JsonResponse($relationship->toArray());
	}
}
