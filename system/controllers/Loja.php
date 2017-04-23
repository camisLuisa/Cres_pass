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

	public function test(){

	}

	public function criarLoja($data=null){

		if(is_null($data)){
				$data = $this->get_post(); // JSON NOT SET
				if(is_null($data)){
					$this->return['success'] = FALSE;
					$this->return['error'] .= "Data not set.";
					return;
				}
		}

		//Se n existir usuário, n pode criar loja
		if(!isset($_SESSION['user_id'])){

			$this->return['success'] = false;
			$this->return['error'] .= "Non-existent session.";

		}else{	// Entrou e vai criar

			if($this->model['Loja_model']->verifyStore($data['name'])){ //Se já existe a loja com esse nome
				$this->return['success'] = false;
				$this->return['error'] .= "This store already exists.";
				return;
			}else{ // Caso n exista cria
					if($this->model['Loja_model']->verifyUserStore()){ // verifica se usuario já possui loja
						$this->return['success'] = false;
						$this->return['error'] .= "This user already owns a store.";
					}else{
						$this->model['Loja_model']->insert('store', $data);
						$lojaid = $this->model['Loja_model']->get_result();

						if(isset($lojaid)){ // pega o id da loja adicionada
							//cria um array com user id e id da loja criada e adiciona
							$lojauser = array('user_id' => $_SESSION['user_id'], 'store_id' => $lojaid);
							$this->model['Loja_model']->insert('user_store', $lojauser);
						}
					}
				}
			}
		}

	public function removerLoja($id=""){
		//$data = $this->get_post();
		if(!isset($_SESSION['user_id'])){
			$this->return['success'] = false;
			$this->return['error'] .= "Non-existent session.";
		}else{
			if($this->model['Loja_model']->verifyUserStore($_SESSION['user_id'])){// LOJA CHECK
				$loja = $this->model['Loja_model']->get_result();
				// recebe o id da loja que pertence ao usuario.
				$storeid =	$loja['store_id'];
				// verifica se a loja existe
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
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Sessao inexistente.";
			return;
		}else{
			// Verifica existência da loja no usuário.
			if($this->model['Loja_model']->verifyUserStore($id)){
				$loja = $this->model['Loja_model']->get_result();
				// Recebe o id da loja que pertence ao usuário logado
				$storeid = $loja['store_id'];
				// Verifica se a loja existe
				if($this->model['Loja_model']->verifyStore($storeid)){
					//Altera no banco de dados
					$this->model['Loja_model']->update('store', $data, "WHERE id = '" . $storeid . "'");
				}else{
					$this->return['success'] = FALSE;
					$this->return['error'] .= "Não existe a loja."
				}
			}
		}


	}



}


 ?>
