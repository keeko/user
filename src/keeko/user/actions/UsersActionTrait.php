<?php
namespace keeko\user\actions;

use keeko\core\action\ActionTrait;

trait UsersActionTrait {
	use ActionTrait;
	
	public function getData() {
		
	}

	protected function setDefaultParams(OptionsResolverInterface $resolver) {
		$resolver->setDefaults([
				]);
		// 		$resolver->setOptional([]);
		// 		$resolver->setRequired([]);
	}
}