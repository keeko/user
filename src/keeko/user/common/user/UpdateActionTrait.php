<?php
namespace keeko\user\common\user;

use keeko\core\action\ActionTrait;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * @author Super-Keeko 
 */
trait UpdateActionTrait {
	use ActionTrait;

	/**
	 */
	public function getData() {
		
	}
	
	/**
	 * @param OptionsResolverInterface $resolver  (optional).
	 */
	protected function setDefaultParams(OptionsResolverInterface $resolver) {
		$resolver->setRequired(['id']);
		$resolver->setOptional(['mail', 'given-name', 'family-name']);
	}
	
}
