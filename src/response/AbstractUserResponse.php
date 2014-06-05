<?php
namespace keeko\user\response;

use keeko\core\model\User;
use keeko\core\action\AbstractResponse;
use keeko\core\utils\FilterUtils;
use Propel\Runtime\Map\TableMap;

/**
 * Abstract Response for user, containing filter functionality.
 * 
 * This class is generated automatically, your changes may be overwritten - take care.
 * 
 * @author gossi <http://gos.si>
 */
abstract class AbstractUserResponse extends AbstractResponse
{
    /**
     * Automatically generated method, will be overridden
     * 
     * @param array $user
     */
    protected function filter(array $user)
    {
        return FilterUtils::blacklistFilter($user, ['password', 'password_recover_code', 'password_recover_time']);
    }

    /**
     * Automatically generated method, will be overridden
     * 
     * @param User $user
     */
    protected function userToArray(User $user)
    {
        return $this->filter($user->toArray(TableMap::TYPE_STUDLYPHPNAME));
    }
}
