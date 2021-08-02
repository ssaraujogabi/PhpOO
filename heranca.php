<?php 

class Veiculo{
	private $modelo;
	private $cor;
	private $ano;

	public function __construct($m, $c, $a){
		$this->setModelo($m);
		$this->setCor($c);
		$this->setAno($a);

	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}

    public function getAno(){
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

    public function Andar(){
        echo $this->getModelo()." do ano ".$this->getAno()." de cor ".$this->getCor()." andou ";
    }

    public function Parar(){
        echo "parou";
    }

}

class Carro extends Veiculo{
    public function ligarLimpador(){
    	echo "limpando em 321";
    }
}

class Moto extends Veiculo{
    public function darGrau(){
    	echo "dando grau em 321";
    }
}

$carro = new Carro("gol","rosa","2021");
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
$moto = new Moto("honda","vermelha","2021");
echo "<br>";
$moto->Andar();
echo "<br>";
$moto->darGrau();

 ?>