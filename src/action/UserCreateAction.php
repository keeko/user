<?php
namespace keeko\user\action;

use keeko\core\action\AbstractAction;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use keeko\core\model\User;
use keeko\core\exceptions\ValidationException;
use keeko\core\utils\HydrateUtils;

/**
 * Creates an user
 * 
 * @author gossi <http://gos.si>
 */
class UserCreateAction extends AbstractAction
{
    /**
     * Automatically generated method, will be overridden
     * 
     * @param Request $request
     * @return Response
     */
    public function run(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        // hydrate
        $user = HydrateUtils::hydrate($data, new User(), ['id', 'login_name', 'password' => function($v) {
        	return password_hash($v, PASSWORD_BCRYPT);
        }, 'given_name', 'family_name', 'display_name', 'email', 'country_iso_nr', 'subdivision_id', 'address', 'address2', 'birthday', 'sex', 'city', 'postal_code', 'location_status', 'latitude', 'longitude']);

        // validate
        if (!$user->validate()) {
        	throw new ValidationException($user->getValidationFailures());
        } else {
        	$user->save();
        	$this->response->setData($user);
        	return $this->response->run($request);
        }
    }
}
