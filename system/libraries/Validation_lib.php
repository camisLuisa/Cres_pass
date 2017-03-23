<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Validation_lib extends Lib
{
	function __construct()
	{
		parent::__construct();
	}

	public function callForValidation($data){
		// Creates a array like $this->return from controller to return it with compatibility
		$return = array('success' => TRUE, 'error' => "");
		//Simple process, it verifies if the array $data contains a defined key
		// if it's true, it validates his content and adds any error messages that it needs
		// then return the array to the controller used to show the error messages
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
		if(isset($data['ddd_1'])){
			$status = $this->validateDDD($data['ddd_1']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= "O DDD " . $data['ddd_1'] ." do telefone principal e invalido. ";
			}
		}
		if(isset($data['tel_1'])){
			$status = $this->validateNumber($data['tel_1']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['tel_1'] . " contem formato incorreto. ";
			}
		}
		if(isset($data['ddd_2'])){
			$status = $this->validateDDD($data['ddd_2']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= "O DDD " . $data['ddd_2'] ." do telefone opcional e invalido. ";
			}
		}
		if(isset($data['tel_2'])){
			$status = $this->validateNumber($data['tel_2']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= $data['tel_2'] . " contem formato incorreto. ";
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
				$return['error'] .= $data['complement'] . " contem caracteres invalidos.";
			}
		}
		if(isset($data['rg'])){
			$status = $this->validateRG($data['rg']);
			if(!$status){
				$return['success'] = FALSE;
				$return['error'] .= "O RG " . $data['rg'] . " esta no formato incorreto. ";
			}
		}
		return $return;
	}

	public function validateRG($rg){
		$padrao = "/\A[0-9]{7}\z/";
		return preg_match($padrao, $rg);
	}

	public function validateEmail($email){
		// From a to z, 0 to 9, dot and underscore with  @ at the end
        $conta = "^([a-z]|[\._-])+[@]";
        // Email provider, a to z with a dot at the end
        $provedor = "[a-z]+[.]";
        // com.br e com
				// if do exist a "br" at the final, it should come with a dot before it, the ? informs that ".br" is optional
				// the ? means the expression before, in this case .br is optional, not the entire regular expression
        $extension = "[com]{3}([\.][br]{2})?$^";
        //Concatenation of the expressions for modularity purposes
        $validacao = $conta.$provedor.$extension;
        // returning the TRUE or FALSE statement from the validation process
        return preg_match($validacao, $email);
  }

 	public function validateName($name){
		// \A Begin of the string flag
		// \z End of the string flag
		// [a-z] a to z group
		// + * or {0,} quantifiers to set the number of digits i would want
		// since only letters should be allowed, a to z and + after
 		$padrao = "/\A[a-z]+\z/";
    	return preg_match($padrao, $name);
 	}

 	public function validateCEP($cep){
			// Most common known as ZIP CODE, We call it cep
			// it's format is 12345-678
			// So \A to begin string
			//[0-9] 0 to 9
			// {5} five times ([0-9]) meaning 5 numbers in sequence
			// - ? means that the user don't have to type the "-", but yet it accepts
			// then another 0 to 9 3 times ([0-9]{3})
			// then \z to end the string
			$padrao = "/\A[0-9]{5}\-?[0-9]{3}\z/";
      		return preg_match($padrao, $cep);
 	}

	public function validateUsername($user){
			//Username should only contain letters, numbers, underscores and dots
			// So needs to start with a to z
			// then can have as much 0 to 9 or a to z, underscore and dots as it wants
			// Needs at least 4 letters
			$padrao = "/\A[a-z]{4}+([a-z0-9\_\.]{1,}?)\z/";
    		return preg_match($padrao, $user);
 	}

	public function validateCPF($cpf){
		// Format xxx xxx xxx xx
		// 11 numbers without space
		$padrao = "/\A\d{11}\z/";
		return preg_match($padrao, $cpf);
	}

	public function validatePhone($telefone){
		// Allows 8 or 9 digits phone numbers
		return preg_match("/\A[0-9]{8,9}$\z/", $telefone);
	}

	public function validateDDD($ddd){
		//allows only ddd with 2 digits
		$padrao = "/\A[0-9]{2}\z/";
		return preg_match($padrao, $ddd);
	}

	public function validateAddress($adress){
		// Allows any combination of letters of any lenght
		$padrao = "/\A[A-z\ ]*\z/";
		return preg_match($padrao, $adress);
	}

	public function validateNumber($number){
		// allows address numbers with 1 to 6 digits
		return preg_match("/\A\d{1,6}\z/", $number);
	}

	public function validateReference($ref){
		// Allows numbers and letters, spaces of any size
		// Since it contains the same conditions of complement field
		// validates both of them with the same method
		$padrao = "/\A[A-z0-9 ]*\z/";
		return preg_match($padrao, $ref);
	}

}
