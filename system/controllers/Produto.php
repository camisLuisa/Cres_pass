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
 		$this->load_lib('Validation_lib');
 		$this->load_model('Produto_model');
 	}

 	public function anunciarProduto(){

 	}

 	public function removerAnuncio(){

 	}

 	public function alterarAnuncio(){

 	}

 	public function comprarProduto(){

 	}
 	
 	public function cancelarCompra(){

 	}


 }

 ?>