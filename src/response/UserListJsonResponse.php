<?php
namespace keeko\user\response;

use keeko\core\package\AbstractResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Tobscure\JsonApi\Document;
use Tobscure\JsonApi\Collection;
use keeko\core\model\User;

/**
 * Automatically generated JsonResponse for List all users
 * 
 * @author gossi
 */
class UserListJsonResponse extends AbstractResponse {

	/**
	 * Automatically generated run method
	 * 
	 * @param Request $request
	 * @param mixed $data
	 * @return JsonResponse
	 */
	public function run(Request $request, $data = null) {
		$serializer = User::getSerializer();
		$resource = new Collection($data, $serializer);
		$document = new Document($resource);

		// meta
		$document->setMeta([
			'total' => $data->getNbResults(),
			'first' => $data->getFirstPage(),
			'next' => $data->getNextPage(),
			'previous' => $data->getPreviousPage(),
			'last' => $data->getLastPage()
		]);

		// return response
		return new JsonResponse($document->toArray());
	}
}
