<?php
namespace keeko\user\response;

use keeko\core\package\AbstractResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Tobscure\JsonApi\Document;
use Tobscure\JsonApi\Resource;
use keeko\core\model\User;

/**
 * Automatically generated JsonResponse for Updates an user
 * 
 * @author gossi
 */
class UserUpdateJsonResponse extends AbstractResponse {

	/**
	 * Automatically generated run method
	 * 
	 * @param Request $request
	 * @param mixed $data
	 * @return JsonResponse
	 */
	public function run(Request $request, $data = null) {
		$serializer = User::getSerializer();
		$resource = new Resource($data, $serializer);
		$document = new Document($resource);

		return new JsonResponse($document->toArray(), 200);
	}
}
