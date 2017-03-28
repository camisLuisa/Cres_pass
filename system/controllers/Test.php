<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 * @package		<PJ_API_NAME>
 * @subpackage	Core
 * @author 		Poli Júnior Engenharia - eComp
 */
class Test extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load_model('test_model');
		$this->load_lib('test_lib');
	}

	public function test(){
		$pass = '123';
		$hash = password_hash($pass, PASSWORD_DEFAULT);
		echo password_verify($pass, $hash);
		echo "<br>";
		echo "HASH FOR $pass IS $hash";
		echo "<br>";
	}

	public function session(){
		if(isset($_SESSION)){
			echo '
				<style type="text/css">
					table {
					    font-family: arial, sans-serif;
					    border-collapse: collapse;
					    width: 100%;
					}
					td, th {
					    border: 1px solid #dddddd;
					    text-align: left;
					    padding: 8px;
					}
					tr:nth-child(even) {
					    background-color: #dddddd;
					}
				</style>
				<h1>Session Array</h1>
				<table>
					<tr>
						<th>KEY</th>
						<th>VALUE</th>
					</tr>
			';
			foreach ($_SESSION as $key => $value) {
				echo '
					<tr>
						<td>'.$key.'</td>
						<td>'.$value.'</td>
					</tr>
				';
			}
			echo '
				</table>
			';
		}
		else{
			echo "<p>No session set<p>";
		}
		unset($this->result);
	}

	public function square(){
		$data = json_decode(file_get_contents("php://input"));

		$result = $this->lib['test_lib']->square($data->num);
		
		echo json_encode($result);
	}
}
?>