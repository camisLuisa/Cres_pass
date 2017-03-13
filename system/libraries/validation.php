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


  	function validateUsername($user){

      return preg_match("^[a-zA-Z0-9_.]$^", $user);

  	}
  	function validateName($name){

  	}
  	function validateCEP($cep){

  		//^\d{5}\-\d{3}$ formato de CEP

  	}
}


/* Expressões regulares comuns

	// --------------- Função de testes  --------------------- //

	ereg(String de formato, variavel do campo); TRUE se dar match, FALSE caso n

	// ------------------------------------------------------- //

	^[0-9][a-z]$ = Valida qualquer string q comece com um número e termine com uma letra lowcase
	^[^0-9][A-Z]$ = valida qualquer string que Não começa com um número e tem letras em Caps
	^z{1,3}$ = valida z, zz , zzz
	^z{3,5}$ = valida zzz,zzzz e zzzzz
	^\d{5}\-\d{3}$ = valida o cep brasileiro

	^([A-Za-z0-9_]{1,}) = Validação Pré @ - Aceita "_" e "."
	^[a-z]([a-z0-9_.]{1,})\@([a-z]{1,}\.)([com]{3})(\.([br]{2}))?$ - Quase perfeito Verificao de email

*/
