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
		$_SESSION['shopcart'] = array();


		//$this->load_lib('Carrinho_lib');
	}

	public function test(){ //
		
	}

  public function addProduct($id){
    $shopcart[] = $this->model['Carrinho_model']->getProduct($id);
  }
  public function removeProduct($index){
		unset($_SESSION['shopcart'][$index]);
  }
  public function changeQuantity($index, $quantity){
		$_SESSION['shopcart'][$index]['quantidade'] = $quantity;
  }



}
?>
