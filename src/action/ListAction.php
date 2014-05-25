<?php
namespace keeko\user\action;

use keeko\core\action\AbstractAction;
use Symfony\Component\HttpFoundation\Request;
use keeko\core\model\User;
use keeko\core\model\UserQuery;
use keeko\core\utils\HydrateTrait;
use Propel\Runtime\Map\TableMap;

/**
 * @author Super-Keeko 
 */
class ListAction extends AbstractAction {
	
	use HydrateTrait;

	public function run(Request $request) {
		// @TODO max_per_page config variable
		$max_per_page = 50;
		$users = UserQuery::create()->paginate($request->get('page', 1), $max_per_page);
		
		$this->response->setData([
			'users' => $users, 
			'meta' => [
				'total' => $users->getNbResults()
			]
		]);
		
		return $this->response->run($request);
	}
	
}
