<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Authentication;
use DB;
class NavbarComposer{
	public function compose(View $view){
		//execute queries for sidebar
		//add logic for sidebar roles
		$parent_id = 0;
		$role_id = 1;
		//get all the main modules based on authentications
		$auths = DB::select("SELECT count(*) as name FROM authentications as a LEFT JOIN authentication_items as ai ON ai.abs_id = a.id WHERE role = $role_id and parent_id = $parent_id ORDER BY order_id");
		if(count($auths) > 0){
			foreach($auths as $auth){

			}
		}
		$view->with('auths',$auths);
	}
	public function getChild($parent_id,$role_id){
		$childCount = DB::select("SELECT count(*) FROM authentications as a LEFT JOIN authentication_items as ai ON ai.abs_id = a.id WHERE role = $role_id and parent_id = $parent_id ORDER BY order_id");
	}
}
?>
