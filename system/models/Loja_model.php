<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Loja_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function access(){

	}

	public function verifyStore($store){
		 if($this->select('store', "WHERE name = '" . $store . "'")){
		 	return true;
		 }else{
		 	return false;
		 }
	}


	public function verifyUserStore(){
		if(is_null($_SESSION['user_id'])){
			return false;
			exit();
		}
		if($this->select('user_store', "WHERE user_id = '" . $_SESSION['user_id'] . "'")){
			return true;
		}else{
			return false;
		}
	}
}
