<?php  

class Pedido{
public $numero;
public $cliente;

}

class Cliente{
public $nome;
public $endereco;

}


$cliente = new Cliente();
$cliente->nome = "Gabriele";
$cliente->endereco = "Rua a";

$pedido = new Pedido();
$pedido->numero = 10;
$pedido->cliente = $cliente; 

$dados = array(
	'numero' => $pedido->numero,
	'nome_cliente' => $pedido->cliente->nome,
	'endereco_cliente' => $pedido->cliente->endereco 

);


var_dump($dados);



?>