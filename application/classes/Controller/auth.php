<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {
	
	public $template = "v_main";

	public function action_index()
	{			
		$auth = Auth::instance();
		$data = array();
		
		if($auth->logged_in())
		{
			$this->redirect('');			
		}
		else
		{
				if(isset($_POST['btnsubmit']))
			{
				$login = Arr::get($_POST, 'login', '');
				$password = Arr::get($_POST, 'password', '');
				
				if($auth->login($login, $password))
				{
					$session = Session::instance();
					$auth_redirect = $session->get('auth_redirect','');
					$session->delete('auth_redirect');
					
					$this->redirect($auth_redirect);
				}
				else
				{
					$data["error"] = "";
				}
			}			
		}
		$this->template->content = View::factory('v_auth', $data);
	}
	
	public function action_reg()
	{
		$data = array();
		if(isset($_POST['btnsubmit']))
		{
			$email = Arr::get($_POST,'email','');
			$regcodevalue = Arr::get($_POST,'regcodevalue');
			
			$register = new Model_Register();
			if($register->reg($email, $regcodevalue))
			{
				$data["regok"]="";
			}
			else
			{
				$data["error"]="";
			}
		}
				
		$this->template->content = View::factory('v_reg',$data);
	}
	
	public function action_hpass()
	{
		$auth = Auth::instance();
		$this->template->content = $auth->hash_password('admin');
	}
	
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		$this->template->content = "Разлогинились";
	}

} 