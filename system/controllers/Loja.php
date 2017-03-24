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
			$this->return['success'] = false;
			$this->return['error'] .= "Non-existent session.";
		}else{	// Entrou e vai criar
			$lojaExemplo = array('name' => 'teste2334');
			if($this->verifyStore($lojaExemplo['name'])){
				$this->return['success'] = false;
				$this->return['error'] .= "This store already exists.";
				return;
			}else{
					if($this->verifyUserStore($_SESSION['user_id'])){
						$this->return['success'] = false;
						$this->return['error'] .= "This user already owns a store.";
					}else{
						$this->model['Loja_model']->insert('store', $lojaExemplo);
						$lojaid = $this->model['Loja_model']->get_result();
						if(isset($lojaid)){
							$lojauser = array('user_id' => $_SESSION['user_id'], 'store_id' => $lojaid);
							$this->model['Loja_model']->insert('user_store', $lojauser);
						}
					
				}

			}
		}
	}

	private function verifyUserStore($store){
		if($this->model['Loja_model']->select('user_store', "WHERE user_id = '" . $store . "' and store_id != 0")){
			return true;
		}else{
			return false;
		}
	}
	private function verifyStore($store){
		 if($this->model['Loja_model']->select('store', "WHERE name = '" . $store . "'")){
		 	return true;
		 }else{
		 	return false;
		 }
	}


	public function removerLoja(){
		//$data = $this->get_post();
		if(!isset($_SESSION['user_id'])){
			$this->return['success'] = false;
			$this->return['error'] .= "Non-existent session.";
		}else{

		}


	}
	public function alterarLoja(){
		
	}



}



 ?>