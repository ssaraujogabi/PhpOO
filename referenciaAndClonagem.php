<?php
class Pessoa{
	public $idade;

	public function __clone(){
		echo "clonagem de objetos";
	}
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2=$pessoa;
$pessoa2->idade = 22;

$pessoa3= clone $pessoa;
$pessoa3->idade = 27;

echo $pessoa3->idade;


?>