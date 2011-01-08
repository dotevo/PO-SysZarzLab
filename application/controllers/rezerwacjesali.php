<?php
class RezerwacjeSaliController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju¿ u¿ytkownik nie jest zalogowany (sesje)
		require('application/views/rezerwacjesali.php');
		$view=new RezerwacjeSaliView();
		
		//Tutaj model pobieraj¹cy listê
		$view->generuj();		
	}	
}
?>