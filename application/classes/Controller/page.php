<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Mycontroller {
	
	public $template = "v_main";
	
	public function action_index()
	{		
		$this->template->content = View::factory('v_page');	
	}
} 
