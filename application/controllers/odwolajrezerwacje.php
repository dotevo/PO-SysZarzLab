<?php
class OdwolajRezerwacjeController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju¿ u¿ytkownik nie jest zalogowany (sesje)
		require('application/views/odwolajrezerwacje.php');
		$view=new OdwolajRezerwacjeView();
		
		//Tutaj model pobieraj±cy listê
		$view->generujListe($list);		
	}	
}
?>