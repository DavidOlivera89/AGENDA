<?php

class Contactos extends CI_Controller{
	
	public function Index(){
		$this -> load -> view('Plantillas/Header');
		$this -> load -> view('Contactos/Index');
		$this -> load -> view('Plantillas/Footer');
	}
	
	public function Agregar(){
		
		
	}
}

?>