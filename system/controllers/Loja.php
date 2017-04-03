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

	public function get_infos(){ // 
		$store = $this->model['Loja_model']->logged_user();
		if(is_null($store)) {
			$this->return['success'] = FALSE;
		} else {
			$this->return['loja'] = $store;
		}
	}

	public function testes(){

		$_SESSION['user_id'] = 1;
		//session_unset();
		$this->criarLoja();
	}

	public function criarLoja(){
		$data = $this->get_post(); // JSON NOT SET
		if(!isset($_SESSION['user_id'])){
			$this->return['success'] = false;
			$this->return['error'] .= "Non-existent session.";
		}else{	// Entrou e vai criar
			if($this->model['Loja_model']->verifyStore($data['name'])){
				$this->return['success'] = false;
				$this->return['error'] .= "This store already exists.";
				return;
			}else{
					if($this->model['Loja_model']->verifyUserStore()){
						$this->return['success'] = false;
						$this->return['error'] .= "This user already owns a store.";
					}else{
						$this->model['Loja_model']->insert('store', $data);
						$lojaid = $this->model['Loja_model']->get_result();
						if(isset($lojaid)){
							$lojauser = array('user_id' => $_SESSION['user_id'], 'store_id' => $lojaid);
							$this->model['Loja_model']->insert('user_store', $lojauser);
						}
					}
				}
			}
		}

	public function removerLoja(){
		//$data = $this->get_post();
		if(!isset($_SESSION['user_id'])){
			$this->return['success'] = false;
			$this->return['error'] .= "Non-existent session.";
		}else{
			if($this->model['Loja_model']->verifyUserStore($id)){// LOJA CHECK
				$loja = $this->model['Loja_model']->get_result();
				$storeid =	$loja['store_id'];

				if($this->model['Loja_model']->verifyStore($storeid)){
					//deletar da base de dados de lojas
					$this->model['Loja_model']->delete('store',"WHERE id = '" . $storeid . "'");
					//deletar da base de dados user com loja ou setaria o valor do store_id para NULL
					$this->model['Loja_model']->delete('user_store', "WHERE user_id = '" . $_SESSION['user_id'] . "'");
				}else{
					$this->return['success'] = false;
					$this->return['error'] .= "Nao existe essa loja";
				}
			}
		}
	}

	public function alterarLoja(){
		$data = $this->get_post();
		$id = $_SESSION['user_id'];
		if(!isset($id)){
			$this->setReturn(array('status'=>false, 'msg' => 'Non existent session.'));
			return;
		}
	}



}


 ?>
