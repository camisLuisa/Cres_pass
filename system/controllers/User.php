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
		$this->load_lib('Validation_lib');
		$this->return = array('success' => true, 'error' => '');
	}

	public function get_infos(){
		$user = $this->model['User_model']->logged_user();
		if(is_null($user)){
			$this->return['success'] = FALSE;
		}
		else{
			$this->return['user'] = $user;
		}

		#Special character will cause problems
		unset($this->return['user']['street']);

	}

	public function passCheck($email, $pass){
		$this->model['User_model']->select('user', "WHERE email ='" . $email . "'");
		$user = $this->model['User_model']->get_result();
		return password_verify($pass, $user['password']);
	}

	public function login(){
		// pegar os dados do front end
		$data = $this->get_post();

		$this->callForValidation($data);

		if(!$this->return['success']){
			exit();
		}

		$status = $this->passCheck($data['email'], $data['password']);

		if(!$status){
			exit();
		}

		//procura o usuario
		$this->model['User_model']->select('user',"WHERE email = '".$data['email']."'");
		//se achou, login, caso n
		$object = $this->model['User_model']->get_result();
		if($object){
			$_SESSION['user_id'] = $object['id'];
			// a fazer
			#[Alyson] A partir daqui, deixa comigo, vou implementar as sessions
		}else{
			//mensagem de erro
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Não foi encontrado nenhum usuario.";
		}
	}

	public function testes(){

		$teste = array(
			'name' => 'latreta',
			'last_name' => 'sobrenome',
			'email' => 'y@google.com.br',
			'rg' => '1234567',
			'cep' => '33333333',
			'cpf' => '11111111111',
			'ddd_1' => '1222',
			'tel_1' => '1234567891',
			'ddd_2' => '12',
			'tel_2' => '12345678',
			'street' => 'rua trabson xampson',
			'reference' => 'esquina com a 5 rua',
			'complement' => '**apt 123');
		//$this->callForValidation($teste);
		//$this->signup($teste);

		/* Encriptando o password --testes--
		$password = '1234';
		$encryptedpass = password_hash($password, PASSWORD_DEFAULT);
		$verify = password_verify($password, $encryptedpass);
		echo $verify;
		*/
	}

	public function activeAccount(){

	}

	public function signup(){
		// front -> back
		$data = $this->get_post();

		$this->return = $this->callForValidation($data);

		// Caso algum dos casos de invalidação, tenham ocorrido ele cancela o signup e retorna a mensagem de erro referente.
		if($this->return['success'] == FALSE){
			echo "Saindo da inserção. ";
			return;
		}

		//Consultar banco de dados
		$this->model['User_model']->select('user', "WHERE email = '". $data['email'] ."'");

		//Verificar TRUE ou FALSE da Consulta
		if($this->model['User_model']->get_result()){

			//CASO: Já Existe!
			$this->return['success'] = FALSE;
			$this->return['error'] .= "Não foi possível cadastrar o user";

		}else{
			//CASO: Não existe!
			unset($data['passwordcheck']); // Campo não utilizado na hora de inserção
			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
			$this->model['User_model']->insert('user', $data);
			if($this->model['User_model']->get_result()){
				//CASO: Inserção concluída
				$this->return['error'] .= "Insercao concluida.";
			}
			else{
				//CASO: Erro na inserção
				$this->return['success'] = FALSE;
				$this->return['error'] .= "Não foi possível cadastrar o user";
			}
		}
	}

	function busca_cep(){
		$resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode('50721-200').'&formato=query_string');
    if(!$resultado){
        $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";
    }
		parse_str($resultado, $retorno); // transforma string em um array com chaves
		$this->return = $retorno;

		print_r($this->return);
	}

	public function callForValidation($data){
		// Creates a array like $this->return from controller to return it with compatibility
		//Simple process, it verifies if the array $data contains a defined key
		// if it's true, it validates his content and adds any error messages that it needs
		// then return the array to the controller used to show the error messages
		if(isset($data['name'])){
			$status = $this->lib['Validation_lib']->validateName($data['name']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['name'] . " contem caracteres invalidos. ";
			}
		}
		if(isset($data['last_name'])){
			$status = $this->lib['Validation_lib']->validateName($data['last_name']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['last_name'] . " contem caracteres invalidos. ";
			}
		}
		if(isset($data['username'])){
			$status = $this->lib['Validation_lib']->validateUsername($data['username']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['username'] . " contem caracteres invalidos";
			}
		}
		if(isset($data['email'])){
			$status = $this->lib['Validation_lib']->validateEmail($data['email']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['email'] . " contem caracteres invalidos. ";
			}
		}
		if(isset($data['cep'])){
			$status = $this->lib['Validation_lib']->validateCEP($data['cep']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['cep'] . " nao e valido. ";
			}
		}
		if(isset($data['cpf'])){
			$status = $this->lib['Validation_lib']->validateCPF($data['cpf']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['cpf'] . " contem formato incorreto. ";
			}
		}
		if(isset($data['ddd_1'])){
			$status = $this->lib['Validation_lib']->validateDDD($data['ddd_1']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= "O DDD " . $data['ddd_1'] ." do telefone principal e invalido. ";
			}
		}
		if(isset($data['tel_1'])){
			$status = $this->lib['Validation_lib']->validateNumber($data['tel_1']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['tel_1'] . " contem formato incorreto. ";
			}
		}
		if(isset($data['ddd_2'])){
			$status = $this->lib['Validation_lib']->validateDDD($data['ddd_2']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= "O DDD " . $data['ddd_2'] ." do telefone opcional e invalido. ";
			}
		}
		if(isset($data['tel_2'])){
			$status = $this->lib['Validation_lib']->validateNumber($data['tel_2']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['tel_2'] . " contem formato incorreto. ";
			}
		}
		if(isset($data['address'])){
			$status = $this->lib['Validation_lib']->validateAddress($data['address']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['address'] . " contem caracteres inválidos. ";
			}
		}
		if(isset($data['reference'])){
			$status = $this->lib['Validation_lib']->validateReference($data['reference']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['reference'] . " contem caracteres inválidos.";
			}
		}
		if(isset($data['complement'])){
			$status = $this->lib['Validation_lib']->validateReference($data['complement']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= $data['complement'] . " contem caracteres invalidos.";
			}
		}
		if(isset($data['rg'])){
			$status = $this->lib['Validation_lib']->validateRG($data['rg']);
			if(!$status){
				$this->return['success'] = FALSE;
				$this->return['error'] .= "O RG " . $data['rg'] . " esta no formato incorreto. ";
			}
		}
	}
}
?>
