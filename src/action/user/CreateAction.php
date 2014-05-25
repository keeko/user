<?php
namespace keeko\user\action\user;

use keeko\user\common\user\CreateActionTrait;
use keeko\core\action\ApiActionInterface;

/**
 * @author Super-Keeko 
 */
class CreateAction implements ApiActionInterface {
	use CreateActionTrait;

	/**
	 */
	public function toJson() {
		
	}
	
}
