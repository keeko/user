<?php
namespace keeko\user\controller\website;

use keeko\user\action\UsersActionTrait;
use keeko\core\action\ControllerInterface;

class UsersController implements ControllerInterface {

	use UsersActionTrait;
	
	/* (non-PHPdoc)
	 * @see \keeko\core\action\ActionInterface::run()
	 */
	public function run(Request $request, Response $response) {
		
	}
	
}