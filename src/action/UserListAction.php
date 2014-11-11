<?php
namespace keeko\user\action;

use keeko\core\action\AbstractAction;
use keeko\user\action\base\UserListActionTrait;

/**
 * List all users
 * 
 * @author gossi <http://gos.si>
 */
class UserListAction extends AbstractAction {

	use UserListActionTrait;
}
