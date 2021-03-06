<?php
namespace keeko\user\action;

use keeko\framework\domain\payload\Blank;
use keeko\framework\foundation\AbstractAction;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use keeko\user\UserModule;

/**
 * Account Dashboard
 * 
 * This code is automatically created. Modifications will probably be overwritten.
 * 
 * @author gossi
 */
class DashboardAction extends AbstractAction {

	/**
	 * Automatically generated run method
	 * 
	 * @param Request $request
	 * @return Response
	 */
	public function run(Request $request) {
		$reg = $this->getServiceContainer()->getExtensionRegistry();
		return $this->responder->run($request, new Blank([
			'settings' => $reg->getExtensions(UserModule::EXT_SETTINGS)
		]));
	}
}
