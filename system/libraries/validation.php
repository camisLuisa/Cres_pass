<?php
defined('BASE_PATH') OR exit('No direct script access allowed');

class Validation extends Lib
{
	function __construct()
	{
		parent::__construct();
	}

	public function validateEmail($email){
		
        // De a-z,0-9, ponto e underscore(underline) com @
        $conta = "^[a-z][a-zA-Z0-9\._-]+@";
        // Provedor do email
        $provedor = "[a-zA-Z0-9]+.";
        // com.br e com
        $extension = "([com]{3})(\.([br]{2}))?^";
        //Concatenação de todas as expressões regulares separadas
        $validacao = $conta.$provedor.$extension;
        //Retorno da Validação		
        return preg_match($validacao, $email);
  	}

  	public function validateUsername($user){
    	return !preg_match("/[*]/", $user);
 	}

 	public function validateName($name){
    	//    Explaining
    	//padrao contém a seguinte expressão, caso algo não pertencente ao grupo
    	//a - z será verdadeiro, logo quando for verdadeiro não deverá ser validado, retornando o 
    	//inverso.
 		$padrao = "/[^a-z]/";
    	return !preg_match($padrao, $name);

 	}

 	public function validateCEP($cep){
      return preg_match("/[0-9]{5}\-[0-9]{3}/", $cep);
  		//^\d{5}\-\d{3}$ formato de CEP
 	}
}
