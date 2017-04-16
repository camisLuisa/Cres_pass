<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 *
 *
 * @package		<PJ_API_NAME>
 * @subpackage	Core
 * @author 		Poli Júnior Engenharia - eComp
 */

class Produto extends Controller{

	public function __construct(){
		parent::__construct();
		$this->load_model('Produto_model');
		$this->load_lib('Validation_lib');
	}

	public function get_infos(){ //
		$store = $this->model['Loja_model']->logged_user();
		if(is_null($store)){
			$this->return['success'] = FALSE;
		}else{
			$this->return['store'] = $loja;
		}
	}

	public function test(){
		$_SESSION['store_id'] = 1;
		$this->showStoreProducts();
	}

	public function novoProduto(){
		$data = $this->get_post(); // Json set
		$this->callForValidation($data); // Validation of data

		//pega id do produto criado
		$produtoID = $this->model['Produto_model']->insert('product', $data);
		// cria array com os campos necessários, caso o store_id n seja armazenado
		// no session mudar para $data['store_id']
		$productStore = array('store_id'=>$_SESSION['store_id'],'product_id'=> $produtoID);
		//
		$this->model['Produto_model']->insert('store_product', $productStore);

		if(!$this->model['Produto_model']->get_result()){
			$this->return['success'] = false;
			$this->return['error'] .= 'An error happened during the product creating process.';
		}

	}

	public function alterarProduto(){
		$data = $this->get_post(); // Json
		$this->callForValidation($data); // validation of data
		$this->model['Produto_model']->update('product', $data, "WHERE id= '" . $data['id'] ."'");


		if(!$this->model['Produto_model']->get_result()){
			$this->return['success'] = false;
			$this->return['error'] .= "An error happened during the modifying process.";
		}

	}

	public function removerProduto(){
		$data = $this->get_post();
		$this->model['Produto_model']->delete('product', "WHERE id ='" . $data['id'] . "'");
	}

	public function consultarProduto($nameProduct){
		$this->model['Produto_model']->select('produtos', "WHERE name = '" . $nameProduct . "'");
		$produtos = $this->model['Produto_model']->get_result();
		$this->return['produtos'] = $produtos;
	}

	public function showStoreProducts(){
		//$data = $this->get_post(); // $_SESSION['store_id'];
		$data['store_id'] = 1;
		$status = $this->model['Produto_model']->select(PRODUCT_TABLE,"WHERE store_id = '" . $data['store_id'] . "'");
		if($status){
			$this->return['products'] = $this->model['Produto_model']->get_result();
			if(count($this->return['products']) == 0){
				$this->return['success'] = FALSE;
				$this->return['error'] = "Sem produtos.";
			}
		}else{
			$this->return['success'] = FALSE;
			$this->return['error'] = "Erro X";
		}
	}


}
