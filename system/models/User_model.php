<?php 
defined('BASE_PATH') OR exit('No direct script access allowed');

class User_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function logged_user(){
		if(!isset($_SESSION['user_id'])) return NULL;
		$this->select('user', "WHERE id = ".$_SESSION['user_id']);
		return $this->get_result();
	}
}