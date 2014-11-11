<?php
namespace keeko\user\action;

use keeko\core\action\AbstractAction;
use keeko\user\action\base\UserDeleteActionTrait;

/**
 * Deletes an user
 * 
 * @author gossi <http://gos.si>
 */
class UserDeleteAction extends AbstractAction {

	use UserDeleteActionTrait;
}
