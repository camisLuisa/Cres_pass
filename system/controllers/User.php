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
		// pegar os dados do front end
		$data = $this->get_post();
		//logica base
		//validar username
		//validateUsername($data['username']);
		//procura o usuario
		$this->model['User_model']->select('user',"WHERE username = '".$data['username']."'");
		//se achou, login, caso n
		if($this->model['User_model']->get_result()){
			// a fazer
		}else{
			//mensagem de erro
			$this->return['success'] = FALSE;
			$this->return['error'] = "Login inválido.";
		}
	}

	public function signup(){
		// front -> back
		$data = $this->get_post();
		
		/* Validações
		
		validateUsername($data['username']);
		validateEmail($data['email']);

		*/
		
		//Consultar banco de dados
		$this->model['User_model']->select('user', "WHERE username = '". $data['username'] ."'");
		
		//Verificar TRUE ou FALSE da Consulta
		if($this->model['User_model']->get_result()){
			
			//CASO: Já Existe!
			$return['success'] = FALSE;
			$return['error'] = "Não foi possível cadastrar o user";

		}else{
			
			//CASO: Não existe!
			unset($data['passwordcheck']); // Campo não utilizado na hora de inserção
			$this->model['User_model']->insert('user', $data);

			if($this->model['User_model']->get_result()){
				
				//CASO: Inserção concluída
				
			}
			else{
				//CASO: Erro na inserção
				$return['success'] = FALSE;
				$return['error'] = "Não foi possível cadastrar o user";
			}
		}
	}

}
?>
