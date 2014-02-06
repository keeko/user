<?php
namespace keeko\user\controllers\website;

use keeko\user\common\user\ListActionTrait;
use keeko\core\action\ControllerInterface;

class UsersController implements ControllerInterface {

	use UsersActionTrait;
	
	/* (non-PHPdoc)
	 * @see \keeko\core\action\ControllerInterface::run()
	 */
	public function run() {
		return $this->twig->render('users.twig');
	}
	
}