<?php
namespace keeko\user\action;

use keeko\core\action\AbstractAction;
use keeko\core\action\ApiActionInterface;

class UsersAction implements ApiActionInterface {
	use keeko\user\action\UsersActionTrait;
	
	protected function setDefaultParams(OptionsResolverInterface $resolver) {
		$resolver->setDefaults([
		]);
// 		$resolver->setOptional([]);
// 		$resolver->setRequired([]);
	}

}