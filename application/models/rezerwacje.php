<?php
include_once('application/models/model.php');
class RezerwacjeModel extends Model{
	public function __construct(){
		$this->connect();
	}   
	public function __destruct(){
		$this->disconnect();
	} 
   
   public function rezerwacje($ids){   
		$values="(".implode(",",$ids).")";
		$query="SELECT rezerwacje.id AS id, budynki.nazwa as budynek, sale.numer as sala, od as data_od, do as data_do, imie, nazwisko,odwolana, powod FROM rezerwacje, sale, budynki,uzytkownicy WHERE rezerwacje.saleID = sale.id AND sale.budynkiID = budynki.id AND rezerwacje.uzytkownicyID = uzytkownicy.id AND rezerwacje.id IN".$values;				
		return $this->getData($query);		
   }
    
	public function listaUzytkownika($id){
		$query="SELECT rezerwacje.id AS id, budynki.nazwa as budynek,rezerwacje.odwolana, sale.numer as sala, od as data_od FROM rezerwacje, sale, budynki WHERE rezerwacje.saleID = sale.id AND sale.budynkiID = budynki.id  AND uzytkownicyID =".$id;		
		return $this->getData($query);	
	}	
	
	public function listaSali($id){		
		$query="SELECT rezerwacje.id AS id, budynki.nazwa as budynek, sale.numer as sala, od as data_od, do as data_do, imie, nazwisko, odwolana, powod FROM rezerwacje, sale, budynki,uzytkownicy WHERE rezerwacje.saleID = sale.id AND sale.budynkiID = budynki.id AND rezerwacje.uzytkownicyID = uzytkownicy.id AND sale.id =".$id;				
		return $this->getData($query);
	}	
	
	public function odwolajRezerwacje($ids,$userid,$powod){
		//Odwo³ywanie rezerwacji do których ma uprawninia u¿ytkownik (jako opiekun sali lub osoba rezerwuj¹ca)
		$query="UPDATE rezerwacje SET odwolana=1, powod='".$powod."' WHERE id IN (".implode(',',$ids).") AND ( uzytkownicyID=".$userid." OR saleID IN (SELECT id FROM sale WHERE opiekunID=".$userid.") )";		
		mysql_query($query);
	}
	
	public function dodajRezerwacje($idUser,$idSala,$godzina,$dzien){	
		//TODO
	}
}
?>