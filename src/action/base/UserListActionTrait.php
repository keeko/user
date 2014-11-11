<?php
namespace keeko\user\action\base;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use keeko\core\model\User;
use keeko\core\model\UserQuery;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Base methods for List all users
 * 
 * This code is automatically created
 * 
 * @author gossi <http://gos.si>
 */
trait UserListActionTrait {

	/**
	 * Automatically generated run method
	 * 
	 * @param Request $request
	 * @return Response
	 */
	public function run(Request $request) {
		// read
		$page = $this->getParam('page');
		$perPage = $this->getParam('per_page');
		$user = UserQuery::create()->paginate($page, $perPage);

		// set response and go
		$this->response->setData($user);
		return $this->response->run($request);
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultParams(OptionsResolverInterface $resolver) {
		$resolver->setDefaults([
			'page' => 1,
			'per_page' => 50,
		]);
	}
}
