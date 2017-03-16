<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Validation_lib extends Lib
{
	function __construct()
	{
		parent::__construct();
	}

	public function callForValidation($data){
		// Criacao de array semelhante ao return do controller para compatibilidade e retorno dele pronto
		$return = array('success' => TRUE, 'error' => "");
		// Processo simples, se houver um campo com chave e conteudo definidos
		// chama sua respectiva validacao e agrega mensagem e status
		if(isset($data['name'])){
			$status = $this->validateName($data['name']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['name'] . " contem caracteres invalidos. ";
			}
		}
		if(isset($data['last_name'])){
			$status = $this->validateName($data['last_name']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['last_name'] . " contem caracteres invalidos. ";
			}
		}
		if(isset($data['username'])){
			$status = $this->validateUsername($data['username']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['username'] . " contem caracteres invalidos";
			}
		}
		if(isset($data['email'])){
			$status = $this->validateEmail($data['email']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['email'] . " contem caracteres invalidos. ";
			}
		}
		if(isset($data['cep'])){
			$status = $this->validateCEP($data['cep']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['cep'] . " nao e valido. ";
			}
		}
		if(isset($data['cpf'])){
			$status = $this->validateCPF($data['cpf']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['cpf'] . " contem formato incorreto. ";
			}
		}
		if(isset($data['number'])){
			$status = $this->validateNumber($data['number']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['number'] . " contém formato incorreto. ";
			}
		}
		if(isset($data['address'])){
			$status = $this->validateAddress($data['address']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['address'] . " contem caracteres inválidos. ";
			}
		}
		if(isset($data['reference'])){
			$status = $this->validateReference($data['reference']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['reference'] . " contem caracteres inválidos.";
			}
		}
		if(isset($data['complement'])){
			$status = $this->validateReference($data['complement']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['complement'] . " contem caracteres inválidos.";
			}
		}

		return $return;
	}


	public function validateEmail($email){

        // De a-z,0-9, ponto e underscore(underline) com @
        $conta = "^([a-z]|[\._-])+[@]";
        // Provedor do email apenas letras
        $provedor = "[a-z]+[.]";
        // com.br e com
				// Caso exista br no final, deverá vir acompanhado de um ponto, o ? demarca oq vem antes é opcional
        $extension = "[com]{3}([\.][br]{2})?$^";
        //Concatenação de todas as expressões regulares separadas
        $validacao = $conta.$provedor.$extension;
        //Retorno da Validação
        return preg_match($validacao, $email);
  }

 	public function validateName($name){
    	//    Explaining
    	//padrao contém a seguinte expressão, caso algo não pertencente ao grupo
    	//a - z será verdadeiro, logo quando for verdadeiro não deverá ser aceito
        // assim retornando o inverso.
 		$padrao = "/[^a-z]/";
    	return !preg_match($padrao, $name);

 	}

 	public function validateCEP($cep){
        //Se não obedecer o formato 5 números hífen e 3 números, ele torna inválido!
      return preg_match("/[0-9]{5}\-[0-9]{3}/", $cep);
 	}

	public function validateUsername($user){
    	return !preg_match("/[*]/", $user);
 	}

	public function validateCPF($cpf){
		return preg_match("^[0-9]{11}^", $cpf);
	}

	public function validatePhone($telefone){
		return preg_match("^[0-9]{9}^", $telefone);
	}

	public function validateDDD($ddd){
		return preg_match("^[0-9]{2}^", $ddd);
	}

	public function validateAddress($adress){
		return preg_match("^[a-z]{5,}^", $adress);
	}

	public function validateNumber($number){
		return preg_match("^[0-9]{8,9}^", $number);
	}


	public function validateReference($ref){
		// Same method can be used to validate either References or Complement
		// Since both of them can contain numbers and letters like Apt 123
		// Se o conteúdo não pertencer aos grupos de A <-> Z | a <-> z e 0 a 9 | podendo conter espaços
		// ele retorna verdadeiro, portanto retornaremos o inverso, para informar que não foi validado.
		// e quando for validado seria FALSE retornado como TRUE
		return !preg_match("[^a-zA-Z0-9 ]", $ref);
	}

}
