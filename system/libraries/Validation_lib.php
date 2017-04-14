<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Validation_lib extends Lib
{
	function __construct()
	{
		parent::__construct();
	}



	public function validateRG($rg){
		$padrao = "/\A[0-9].[0-9]{3}.[0-9]{3}\z/";
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
 		$padrao = "/\A[A-z]+\z/";
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
		$padrao = "/\A[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}\z/";
		return preg_match($padrao, $cpf);
	}

	public function validatePhone($telefone){
		// Allows 8 or 9 digits phone numbers
		return preg_match("/\A[0-9]{4,5}\-[0-9]{4}\z/", $telefone);
	}

	public function validateDDD($ddd){
		//allows only ddd with 2 digits
		$padrao = "/\A[0-9]{2,3}\z/";
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
