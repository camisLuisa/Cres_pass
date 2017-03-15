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
		$this->load_lib('Validation');
	}

	public function testes(){

	}

	public function criarLoja(){
//		$data = $this->get_post(); JSON SET
		$data['name'] = 'teste';
		$teste = $this->lib['Validation']->validateName($data['name']);

		if($this->model['Loja_model']->select('store', $data['name'])){
			$this->return['success'] = FALSE;
			$this->return['error'] .= " Uma Loja com nome '" . $data['name'] . "' ja existe! ";
			return;
		}

		if($teste){
			$this->model['Loja_model']->insert('store', $data);
		}else{
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Nome de loja inválido!";
		}		

	}
	public function removerLoja(){
		//$data = $this->get_post(); JSON SET
		$data['id'] = 2;

		$teste = $this->model['Loja_model']->delete('store', "WHERE id = '".$data['id']."'");

		if($teste){
			return;
		}else{
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Nenhuma loja com esse id foi encontrada! ";
		}


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