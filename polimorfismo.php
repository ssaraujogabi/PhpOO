<?php

class Animal{
	public function Andar(){
		echo "o animal andou";
	}

	public function Correr(){
		echo "o animal correu";
	}
}

class Cavalo extends Animal{
    public function Andar(){
		echo "o cavalo andou";
        echo "<br>";
		$this->Correr();
	}
}



$animal = new Cavalo;
echo "<br>";
$animal->Andar();




?>