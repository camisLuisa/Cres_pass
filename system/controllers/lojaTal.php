<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

/**
* 
*/
class LojaTal extends Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load_model('loja_tal_model');
	}

	public function getLoja(){
		$data = $this->get_post();
		if(is_null($data)){
			$this->set_message('error.');
			return;
		} 

		$exist = $this->model['loja_tal_model']->select('store',"WHERE name ='" .$data['name'] . "'");

		$this->return['loja'] = $this->model['loja_tal_model']->get_result();


	}

}










?>