<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Carrinho_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getProduct($id){
		$status = $this->select('products', "WHERE id = " . $id);
		return $this->get_result();
	}
}
