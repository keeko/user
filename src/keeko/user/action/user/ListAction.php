<?php
namespace keeko\user\action\user;

use keeko\user\common\user\ListActionTrait;
use keeko\core\action\ApiActionInterface;

/**
 * @author Super-Keeko 
 */
class ListAction implements ApiActionInterface {
	use ListActionTrait;

	/**
	 */
	public function toJson() {
		
	}
	
}
