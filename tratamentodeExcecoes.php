<?php  
class NewsLetter{

	public function cadastrarEmail($email){

		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			throw new Exception("Este e-mail é inválido", 1);
			
		}
		else
		{
			echo "e-mail cadastrado com sucesso";
		}
	}
}

$news = new NewsLetter();

try{
$news->cadastrarEmail("contato@");
} catch(Exception $e){
	//message, code file e line
	echo "mensagem ".$e->getMessage();
	echo "<br>";
	echo "code ".$e->getCode();
	echo "<br>";
	echo "file ".$e->getFile();
	echo "<br>";
	echo "line ".$e->getLine();
}

?>