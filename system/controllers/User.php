<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * @package		<PJ_API_NAME>
 * @subpackage	Core
 * @author 		Poli Júnior Engenharia - eComp
 */
class User extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load_model('User_model');
	}

	
}
?>