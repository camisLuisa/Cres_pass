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
		$this->load_lib('Validation');
	}


	public function login(){
		// pegar os dados do front end
		$data = $this->get_post();

		if(!$this->lib['Validation']->validateUsername($data['username'])){
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Username invalid";
			return;
		}

		//procura o usuario
		$this->model['User_model']->select('user',"WHERE username = '".$data['username']."'");
		//se achou, login, caso n
		if($this->model['User_model']->get_result()){
			// a fazer
		}else{
			//mensagem de erro
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Não foi encontrado nenhum usuario.";
		}
	}

	public function testes(){
		$testenome = $this->lib['Validation']->validateName('yvesgregorio');
		$testeemail = $this->lib['Validation']->validateEmail('y_y_@gmail.com');
		$testeusername = $this->lib['Validation']->validateUsername('y***ves');
		$testecep = $this->lib['Validation']->validateCEP('11111111');
		echo "<br>Testando nome<br>";
		if($testenome){ // Caso não tenha e esteja okay
			echo "Tudo certo!";
		}else{ // Caso tenha
			echo "Contém caracteres inválidos!";
		}
		echo "<br>Testando Email<br>";
		if($testeemail){ // Caso não tenha e esteja okay
			echo "Tudo certo!";
		}else{ // Caso tenha
			echo "Contém caracteres inválidos!";
		}
		echo "<br>Testando username<br>";
		if($testeusername){ // Caso não tenha e esteja okay
			echo "Tudo certo!";
		}else{ // Caso tenha
			echo "Contém caracteres inválidos!";
		}
		echo "<br>Testando CEP<br>";
		if($testecep){ // Caso não tenha e esteja okay
			echo "Tudo certo!";
		}else{ // Caso tenha
			echo "Formato inválido!";
		}
	}


	public function signup(){
		// front -> back
		$data = $this->get_post();


		if(!$this->lib['Validation']->validateEmail($data['email'])){ // Valida email
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Email inválido. ";
			
		}
		if(!$this->lib['Validation']->validateUsername($data['username'])){ //Valida user
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Nome de user inválido. ";
		}





		if($this->return['success'] == FALSE){
			echo "Saindo da insercao.   ";
			return;
		}

		//Consultar banco de dados
		$this->model['User_model']->select('user', "WHERE username = '". $data['username'] ."'");
			
		//Verificar TRUE ou FALSE da Consulta
		if($this->model['User_model']->get_result()){

			//CASO: Já Existe!
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Não foi possível cadastrar o user";

		}else{
				
				//CASO: Não existe!
			unset($data['passwordcheck']); // Campo não utilizado na hora de inserção
			$this->model['User_model']->insert('user', $data);
			if($this->model['User_model']->get_result()){
					//CASO: Inserção concluída
			}
			else{
				//CASO: Erro na inserção
				$this->return['success'] = FALSE;
				$this->return['error'] .= "Não foi possível cadastrar o user";
			}
		}
	}

}
?>
