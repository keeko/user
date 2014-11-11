<?php
namespace keeko\user\action\base;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use keeko\core\model\User;
use keeko\core\model\UserQuery;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Base methods for Reads an user
 * 
 * This code is automatically created
 * 
 * @author gossi <http://gos.si>
 */
trait UserReadActionTrait {

	/**
	 * Automatically generated run method
	 * 
	 * @param Request $request
	 * @return Response
	 */
	public function run(Request $request) {
		// read
		$id = $this->getParam('id');
		$user = UserQuery::create()->findOneById($id);

		// check existence
		if ($user === null) {
			throw new ResourceNotFoundException('user not found.');
		}

		// set response and go
		$this->response->setData($user);
		return $this->response->run($request);
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultParams(OptionsResolverInterface $resolver) {
		$resolver->setRequired(['id']);
	}
}
