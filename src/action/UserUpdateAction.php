<?php
namespace keeko\user\action;

use keeko\core\action\AbstractAction;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use keeko\core\model\User;
use keeko\core\model\UserQuery;
use keeko\core\exceptions\ValidationException;
use keeko\core\utils\HydrateUtils;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Updates an user
 * 
 * @author gossi <http://gos.si>
 */
class UserUpdateAction extends AbstractAction
{
    /**
     * Automatically generated method, will be overridden
     * 
     * @param Request $request
     * @return Response
     */
    public function run(Request $request)
    {
        // read
        $id = $this->getParam('id');
        $user = UserQuery::create()->findOneById($id);

        // check existence
        if ($user === null) {
        	throw new ResourceNotFoundException('user not found.');
        }

        // set response and go
        $this->response->setData($user);
        return $this->response->run($request);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultParams(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired(['id']);
    }
}
