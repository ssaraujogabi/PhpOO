<?php 

//ela serve como modelo para as classes que extenderem, não conseguimos instanciar ela
//posso criar metodos abstratos para obrigar as classes que extedenrem ela a ter o mesmo metodo
abstract class Banco{
	protected $saldo;
	protected $limiteSaldo;
	protected $juros;

	public function getSaldo(){
		return $this->saldo;
	}


	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

    abstract public function Sacar($s);
    abstract public function Depositar($d);

}

class Itau extends Banco{

	public function Sacar($s){
		$this->saldo -= $s;
		echo "seu saldo é ".$this->saldo;
	}

	public function Depositar($d){
		$this->saldo += $d;
		echo "seu saldo é ".$this->saldo;
	}
}

class Brandesco extends Banco{

	public function Sacar($s){
		$this->saldo -= $s;
		echo "seu saldo é ".$this->saldo;
	}

	public function Depositar($d){
		$this->saldo += $d;
		echo "seu saldo é ".$this->saldo;
	}
}

$itau = new Itau();
$itau->setSaldo(1000);
$itau->Sacar(2000);
echo "<br>";
//echo "seu saldo é ".$itau->getSaldo();





?>
