<?php
namespace keeko\user;

use keeko\framework\foundation\AbstractModule;
use keeko\user\widget\WidgetFactory;

/**
 * Users
 * 
 * @license MIT
 * @author gossi <http://gos.si>
 */
class UserModule extends AbstractModule {
	
	const EXT_SETTINGS = 'keeko.user.settings';

	/**
	 */
	public function install() {
	}

	/**
	 */
	public function uninstall() {
	}

	/**
	 * @param mixed $from
	 * @param mixed $to
	 */
	public function update($from, $to) {
	}
	
	public function getWidgetFactory() {
		return new WidgetFactory($this->getServiceContainer());
	}
}
