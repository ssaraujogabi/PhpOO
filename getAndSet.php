<?php 

class Login{

	private $email;
	private $senha;

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



	public function Logar(){
		if($this->email == ("email.com" and $this->senha ==(123))){
			echo "logado com sucesso!";
		}else{
			echo "erro ao logar!";
		}
	}
}

    $entrar = new Login();
	$entrar->setEmail("emai**l.com");
	$entrar->setSenha("123");
	$entrar->Logar();
    
    echo "<br>";
	echo $entrar->getSenha();
    echo "<br>";
	echo $entrar->getEmail();






?>