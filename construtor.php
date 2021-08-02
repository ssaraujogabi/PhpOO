<?php 

class Login{

	private $email;
	private $senha;
	private $nome;

   public function __construct($email, $senha, $nome){
   	$this->setEmail($email);
   	$this->setSenha($senha);
   	$this->setNome($nome);

   }


    public function setEmail($e){
 
       //remove caracteres que nao é do email
       $email = filter_var($e, FILTER_SANITIZE_EMAIL);
       $this->email = $e;
    } 

    public function getEmail(){
    	return $this->email;
    } 

    public function setSenha($s){
    	$this->senha = $s;
    }

    public function getSenha(){
    	return $this->senha;
    }

    public function setNome($n){
    	$this->nome = $n;
    }

    public function getNome(){
    	return $this->nome;
    }



	public function Logar(){
		if($this->email == ("email.com" and $this->senha ==(123))){
			echo "logado com sucesso!";
		}else{
			echo "erro ao logar!";
		}
	}
}

   $entrar = new Login("email.com","123","gabi");
	$entrar->Logar();
    
   echo "<br>";
	echo $entrar->getSenha();
   echo "<br>";
	echo $entrar->getEmail();
	echo "<br>";
	echo $entrar->getNome();






?>