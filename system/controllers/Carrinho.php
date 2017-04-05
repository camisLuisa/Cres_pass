<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 *
 *
 * @package		<PJ_API_NAME>
 * @subpackage	Core
 * @author 		Poli Júnior Engenharia - eComp
 */
class Carrinho extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load_model('Carrinho_model');
		$this->return = array('success' => TRUE, 'error' => "");
		if(isset($_SESSION['user_id'])){
			$i = 0;
		}
    $shopcart = array();

		//$this->load_lib('Carrinho_lib');
	}

	public function test(){ //

	}

  public function addProduct($id){
    $shopcart[$i] = $this->model['Carrinho_model']->getProduct($id);
    if(!isset($shopcart[i])){
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Erro ao adicionar.";
      return;
    }else{
			$i++;
		}
  }
  public function removeProduct($id){
		
  }
  public function changeQuantity(){

  }



}
?>
