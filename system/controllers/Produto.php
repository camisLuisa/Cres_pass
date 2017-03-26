<<<<<<< HEAD
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

	public function novoProduto(){
		//$data = $this->get_post(); // Json set
		//$this->callForValidation($data); Validation of data

		$this->model['Produto_model']->insert('product', $data);

		if(!$this->model['Produto_model']->get_result()){
			$this->return['success'] = false;
			$this->return['error'] .= 'An error happened during the product creating process.'
		}

	}

	public function alterarProduto(){
		//$data = $this->get_post(); // Json
		//$this->callForValidation($data); // validation of data

		$this->model['Produto_model']->update('product', $data, "WHERE id= '" . $data['id'] ."'");


		if(!$this->model['Produto_model']->get_result()){
			$this->return['success'] = false;
			$this->return['error'] .= "An error happened during the modifying process.";
		}

	}

	public function removerProduto(){
		$data = $this->get_post();
		$this-model['Produto_model']->delete('product', "WHERE id ='" . $data['id'] . "'");
	}

	public function consultarProduto(){
		
	}

}
