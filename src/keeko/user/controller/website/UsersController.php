<?php
namespace keeko\user\controller\website;

use keeko\user\action\UsersActionTrait;
use keeko\core\action\ControllerInterface;

class UsersController implements ControllerInterface {

	use UsersActionTrait;
	
	/* (non-PHPdoc)
	 * @see \keeko\core\action\ControllerInterface::run()
	 */
	public function run() {
		return 'Hello World';
	}
	
}