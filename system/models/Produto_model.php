<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Produto_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function listProducts(){ // retorna array de produtos de uma loja especifica
		if(!isset($_SESSION['user_id'])) return NULL;
		$this->select('product', "WHERE store_id =" . $_SESSION['store_id']);
		return $this->get_result();
	}

	public function access(){

	}
}
