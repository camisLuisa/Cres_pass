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

	}

	public function alterarProduto(){

	}

	public function removerProduto(){

	}

	public function consultarProduto(){
		
	}

}


?>