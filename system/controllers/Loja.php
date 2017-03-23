<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 *
 *
 * @package		<PJ_API_NAME>
 * @subpackage	Core
 * @author 		Poli Júnior Engenharia - eComp
 */

class Loja extends Controller{

	function __construct(){
		parent::__construct();
		$this->load_model('Loja_model');
		$this->load_lib('Validation_lib');
	}

	public function testes(){

		$_SESSION['user_id'] = 1;
		//session_unset();
		$this->criarLoja();
	}

	public function criarLoja(){
		$data = $this->get_post(); // JSON NOT SET
		$id = $_SESSION['user_id'];
		if(!isset($id)){
			$this->setReturn(array('status'=> false, 'msg' => 'Non existent session.'));
			return;
		}else{	// Entrou e vai criar

			$lojaExemplo = array('name' => 'teste2'); // loja stub
			if($this->verifyStore($lojaExemplo)){ // Verificação de existência da loja 
				$this->setReturn(array('status'=> false, 'msg' => 'The store already exists.'));
				 // Recebe o Id da loja adicionada
			}
			if($this->verifyUserStore($_SESSION['user_id'])){ // Verifica se o usuário já possui loja
					$this->setReturn(array('status' => false, 'msg' => 'User already have a store.'));
			}else{
					$this->model['Loja_model']->insert('store', $lojaExemplo);
					$lojaIdentificador = $this->model['Loja_model']->get_result();
					$userStore = array('user_id' => $id, 'store_id' => $lojaIdentificador);
					$this->model['Loja_model']->insert('user_store', $userStore);
					$this->setReturn(array('status'=> true, 'msg' => "Everything is fine."));
			}
				
		}
	}


	//VERIFICACAO EM DB DAS LOJAS

	private function verifyUserStore($store){
		return $this->model['Loja_model']->select('user_store', "WHERE user_id = '" .$store. "'");
	}
	private function verifyStore($store){
		 return $this->model['Loja_model']->select('store', "WHERE name = '" . $store['name'] . "'");
	}

	//Metodo para setar o $this->return apenas por strings

	private function setReturn($msg){
		if(isset($msg)){
			$this->return['success'] = $msg['status'];
			$this->return['error'] .= $msg['msg'];
		}
	}

	public function removerLoja(){
		


	}
	public function alterarLoja(){
		
	}
}



 ?>