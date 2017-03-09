<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * @package		<PJ_API_NAME>
 * @subpackage	Core
 * @author 		Poli Júnior Engenharia - eComp
 */
class User extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load_model('User_model');
	}


	public function login(){
		$return = array('success'=> TRUE, 'error' => NULL);
		$data['username'] = $this->get_post('username');
		$this->model['User_model']->select('user',"WHERE username = '".$data['username']."'");
		if($this->model['User_model']->get_result()){
			
		}else{
			$return['success'] = FALSE;
			$return['error'] = "Login inválido.";
		}
		echo json_encode($return);
		//username,password, email
	}

	public function signup(){
		$return = array('success' => TRUE, 'error' => NULL);
		
		// $data = array('username' => $this->get_post('username')
		// ,'email' => $this->get_post('email')
		// ,'password' => $this->get_post('password'));
		$data = array('username' => 'teste', 'email' => 't@g.com', 'password' => '12345');


		$this->model['User_model']->select('user', "WHERE username = '". $data['username'] ."'");


		//verificação
		if($this->model['User_model']->get_result()){
			// existe
			$return['success'] = FALSE;
			$return['error'] = "Não foi possível cadastrar o user";
		}else{
			//n existe
			$this->model['User_model']->insert('user', $data);

			if($this->model['User_model']->get_result()){
				echo "Okay";
			}
			else{
				$return['success'] = FALSE;
				$return['error'] = "Não foi possível cadastrar o user";
			}
		}
		echo json_encode($return);
	}
	
}
?>