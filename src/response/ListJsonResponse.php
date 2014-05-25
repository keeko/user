<?php
namespace keeko\user\response;

use keeko\core\action\AbstractResponse;
use keeko\core\utils\FilterTrait;
use keeko\core\model\User;
use Propel\Runtime\Map\TableMap;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ListJsonResponse extends AbstractResponse {
	
	use FilterTrait;
	
	/* (non-PHPdoc)
	 * @see \keeko\core\action\AbstractActionResponse::run()
	 */
	public function run(Request $request) {
		$out = [];
		$users = $this->data['users'];
		
		foreach ($users as $user) {
			$out[] = $this->userToArray($user);
		}
		
		$this->data['users'] = $out;
		
		return new JsonResponse($this->data);
	}

	private function userToArray(User $user) {
		return $this->blacklistFilter($user->toArray(TableMap::TYPE_STUDLYPHPNAME), ['password']);
	}
	
}