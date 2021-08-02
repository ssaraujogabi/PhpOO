<?php 

class Pessoa
{
	public $nome;
	public $idade;

    public function Falar(){
    	echo $this->nome." de ".$this->idade." anos de idade falou";
    }
    
}

    $pessoa = new Pessoa();
 
    $pessoa->nome = "Gabi";
    $pessoa->idade = "21";

    $pessoa->Falar();  
    //echo $pessoa->nome;






?>