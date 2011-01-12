<?php
require('application/models/model.php');
class RezerwacjeModel extends Model{
	public function __construct(){
		$this->connect();
	}   
	public function __destruct(){
		$this->disconnect();
	} 
   
    //Zwroci liste w array
	public function listaUzytkownika($id){		
		//array(array("id"=>"1","sala"=>"1","budynek"=>"1",godzina=>, dzieñ=> itd),array....)
	}	
	
	public function listaSali($id){		
		//array(array("id"=>"1","sala"=>"1","budynek"=>"1",godzina=>, dzieñ=> itd),array....)
	}	
	public function dodajRezerwacje($idUser,$idSala,$godzina,$dzien){
	
	}
}
?>