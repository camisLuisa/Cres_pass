<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Produto_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function listProducts(){ // retorna array de produtos de uma loja especifica
		if(!isset($_SESSION['user_id']))
			return NULL;
		$this->select('store_user', "WHERE user_id = " . $_SESSION['user_id']);
		$storeUser = $this->get_result();
		$this->select('store_product', "WHERE store_id = " . $storeUser['store_id']);
		return $this->get_result(); // return array with products
	}

	public function access(){

	}
}
