<?php

class Login{
	public static $user;

    //com o estático não precisa instanciar a classe
	public static function verificaLogin(){
		echo "O usuario "   . self::$user .   " esta logado";
	}

	public function sairSistema(){
		echo "O usuario deslogou";
	}

}

echo Login::$user = "adm";
echo "<br>";
Login::verificaLogin();

$login = new Login();
echo "<br>";
$login->sairSistema(); 



  ?>