<?php
namespace keeko\user\action\user;

use keeko\user\common\user\DeleteActionTrait;
use keeko\core\action\ApiActionInterface;

/**
 * @author Super-Keeko 
 */
class DeleteAction implements ApiActionInterface {
	use DeleteActionTrait;

	/**
	 */
	public function toJson() {
		
	}
	
}
