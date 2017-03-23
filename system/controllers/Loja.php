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

		$_SESSION['user_id'] = 10;
		$this->criarLoja();
	}

	public function criarLoja(){
		//$data = $this->get_post(); // JSON NOT SET
		if(!isset($_SESSION['user_id'])){
			$this->setReturn(array('status'=> false, 'msg' => 'Sessao inexistente.'));
			return;
		}else{	// Entrou e vai criar
			$lojaExemplo = array('name' => 'teste2');
			$this->model['Loja_model']->insert('store', $lojaExemplo);
			$lojaIdentificador = $this->model['Loja_model']->get_result();
			echo $lojaIdentificador;
			if(isset($lojaIdentificador)){
				$userStore = array('user_id' => $_SESSION['user_id'], 'store_id' => $lojaIdentificador);
				$this->model['Loja_model']->insert('user_store', $userStore);
			}
		}
	}

	private function verifyUserStore($store){
		if($this->model['Loja_model']->select('user_store', "WHERE user_id = '" . $store . "'")){
			return false;
		}else{
			return true;
		}
	}

	private function verifyStore($store){
		 if($this->model['Loja_model']->select('store', "WHERE name = '" . $store . "'")){
		 	return false;
		 }else{
		 	return true;
		 }
	}

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

	// Produtos , decidindo se receberá um controller específico

	public function cadastrarProduto(){

	}
	public function alterarProduto(){

	}
	public function removerProduto(){

	}


}



 ?>