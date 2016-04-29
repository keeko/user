<?php
namespace keeko\user\responder;

use keeko\framework\domain\payload\PayloadInterface;
use keeko\framework\foundation\AbstractResponder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Automatically generated HtmlResponder for Account Settings
 * 
 * @author gossi
 */
class SettingsHtmlResponder extends AbstractResponder {

	/**
	 * Automatically generated run method
	 * 
	 * @param Request $request
	 * @param PayloadInterface $payload
	 * @return Response
	 */
	public function run(Request $request, PayloadInterface $payload = null) {
		return new Response($this->render('/keeko/user/templates/settings.twig', $payload->get()));
	}
}
