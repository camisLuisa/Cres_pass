<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * @package		<PJ_API_NAME>
 * @subpackage	Custom Controller
 * @author 		Poli Júnior Engenharia - eComp
 */

class Store extends Controller{

	function __construct(){
		parent::__construct();
		$this->load_model('Store_model');
		$this->load_lib('Validation_lib');
	}

	public function get_infos(){
		$store = $this->model['Store_model']->logged_user();
		if(is_null($store)) {
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Error on find logged user store\n";
		} else {
			$this->return['store'] = $store;
		}
	}

	public function test(){

	}

	public function criarStore(){
		$data = $this->get_post();
		if(is_null($data)){
			$this->return['success'] = FALSE;
			$this->return['error'] .= "JSON data not received\n";
		}
		if(!isset($_SESSION['user_id'])){
			$this->return['success'] = false;
			$this->return['error'] .= "Session user_id is not defined\n";
		}else{
			if($this->model['Store_model']->verifyStore($data['name'])){
				$this->return['success'] = false;
				$this->return['error'] .= "This store already exists.";
				return;
			}else{ // Caso n exista cria
					if($this->model['Store_model']->verifyUserStore()){ // verifica se usuario já possui store
						$this->return['success'] = false;
						$this->return['error'] .= "This user already owns a store.";
					}else{
						$this->model['Store_model']->insert('store', $data);
						$storeid = $this->model['Store_model']->get_result();

						if(isset($storeid)){ // pega o id da store adicionada
							//cria um array com user id e id da store criada e adiciona
							$storeuser = array('user_id' => $_SESSION['user_id'], 'store_id' => $storeid);
							$this->model['Store_model']->insert('user_store', $storeuser);
						}
					}
				}
			}
		}

	public function removerStore($id=""){
		//$data = $this->get_post();
		if(!isset($_SESSION['user_id'])){
			$this->return['success'] = false;
			$this->return['error'] .= "Non-existent session.";
		}else{
			if($this->model['Store_model']->verifyUserStore($_SESSION['user_id'])){// STORE CHECK
				$store = $this->model['Store_model']->get_result();
				// recebe o id da store que pertence ao usuario.
				$storeid =	$store['store_id'];
				// verifica se a store existe
				if($this->model['Store_model']->verifyStore($storeid)){
					//deletar da base de dados de stores
					$this->model['Store_model']->delete('store',"WHERE id = '" . $storeid . "'");
					//deletar da base de dados user com store ou setaria o valor do store_id para NULL
					$this->model['Store_model']->delete('user_store', "WHERE user_id = '" . $_SESSION['user_id'] . "'");
				}else{
					$this->return['success'] = false;
					$this->return['error'] .= "Nao existe essa store";
				}
			}
		}
	}

	public function alterarStore(){
		$data = $this->get_post();
		$id = $_SESSION['user_id'];
		if(!isset($id)){
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Sessao inexistente.";
			return;
		}else{
			// Verifica existência da store no usuário.
			if($this->model['Store_model']->verifyUserStore($id)){
				$store = $this->model['Store_model']->get_result();
				// Recebe o id da store que pertence ao usuário logado
				$storeid = $store['store_id'];
				// Verifica se a store existe
				if($this->model['Store_model']->verifyStore($storeid)){
					//Altera no banco de dados
					$this->model['Store_model']->update('store', $data, "WHERE id = '" . $storeid . "'");
				}else{
					$this->return['success'] = FALSE;
					$this->return['error'] .= "Não existe a store."
				}
			}
		}
	}
}
?>
