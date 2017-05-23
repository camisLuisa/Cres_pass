<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Store_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function listAllStores(){ // retorna um array com todas as stores do banco de dados
		$this->select('store', "WHERE = 1");
		return $this->get_result();
	}

	public function logged_user(){ // retorna a store do user logado
		if(!isset($_SESSION['user_id'])){
			return NULL;
		}
		$this->select('user_store', "WHERE `user_id` = '".$_SESSION['user_id']."'");
		$store_user = $this->get_result();
		$this->select('store', "WHERE `id` = '".$store_user['store_id']."'");
		return $this->get_result();
	}

	//Verificações de dad0s

	public function verifyStore($store){
		 if($this->select('store', "WHERE id = '" . $store . "'")){
		 	return true;
		 }else{
		 	return false;
		 }
	}

	public function verifyUserStore(){
		if($this->select('user_store', "WHERE user_id = '" . $_SESSION['user_id'] . "'")){
			return true;
		}else{
			return false;
		}
	}
}
