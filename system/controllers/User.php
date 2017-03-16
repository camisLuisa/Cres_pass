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
	}


	public function login(){
		// pegar os dados do front end
		$data = $this->get_post();

		$this->result = $this->lib['Validation_lib']->callForValidation($data);

		//procura o usuario
		$this->model['User_model']->select('user',"WHERE email = '".$data['email']."'");
		//se achou, login, caso n
		if($this->model['User_model']->get_result()){
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
			'cep' => '33333333',
			'cpf' => '11111111111',
			'ddd_1' => '1222',
			'tel_1' => '1234567891',
			'ddd_2' => '12',
			'tel_2' => '12345678',
			'address' => 'rua trabson xampson',
			'reference' => 'esquina com a 5 rua',
			'complement' => '**apt 123',
			'username' => 'l_a.treta');
		$this->return = $this->lib['Validation_lib']->callForValidation($teste);
	}


	public function signup(){
		// front -> back
		$data = $this->get_post();

		$this->return = $this->lib['Validation_lib']->callForValidation($data);

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
			$this->model['User_model']->insert('user', $data);
			if($this->model['User_model']->get_result()){
					//CASO: Inserção concluída
			}
			else{
				//CASO: Erro na inserção
				$this->return['success'] = FALSE;
				$this->return['error'] .= "Não foi possível cadastrar o user";
			}
		}
	}

}
?>
