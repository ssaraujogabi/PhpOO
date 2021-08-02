<?php

interface Crud {
	//os metodos devem ser publicos
	public function create($data);
	public function read();
	public function update();
	public function delete();

}

class Noticias implements Crud{

	public function create($data){
		//logica
	}
	public function read(){
		//logica
	}
	public function update(){
		//logica
	}
	public function delete(){
		//logica
	}
}



?>