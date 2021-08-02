<?php 

class Pessoa{
	const nome = "Gabriele";

	public function exibirNome(){
		echo self::nome;
	}
}

$pessoa = new Pessoa();
$pessoa->exibirNome();

echo "<br>";

class Gabi extends Pessoa{

	const nome = "Araújo";

		public function exibirNome(){
		echo self::nome;
		echo "<br>";
		echo parent::nome;
	}
}

$gabi = new Gabi();
$gabi->exibirNome();

?>