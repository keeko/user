<?php
namespace keeko\user\action\user;

use keeko\user\common\user\ReadActionTrait;
use keeko\core\action\ApiActionInterface;

/**
 * @author Super-Keeko 
 */
class ReadAction implements ApiActionInterface {
	use ReadActionTrait;

	/**
	 */
	public function toJson() {
		
	}
	
}
