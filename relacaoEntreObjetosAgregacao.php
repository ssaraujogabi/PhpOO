<?php  

class Produto{
	public $nome;
	public $valor;

	function __construct($nome, $valor){
		$this->nome = $nome;
		$this->valor = $valor;
	}

}

class Carrinho{
	public $produtos;

	public function adiciona(Produto $produto){
		$this->produtos[] = $produto;

	}

	public function exibe(){
		foreach ($this->produtos as $produto) {
			echo "Descrição: ".$produto->nome.'<br>';
			echo "Valor: R$".$produto->valor.'<hr>';
		}
	}

}

$produto = new Produto("carne","2");
$produto2 = new Produto("frango","4");

$carrinho = new Carrinho();
$carrinho->adiciona($produto);
$carrinho->adiciona($produto2);

$carrinho->Exibe();


?>