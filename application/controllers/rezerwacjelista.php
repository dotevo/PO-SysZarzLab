<?php
class RezerwacjeListaController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju� u�ytkownik nie jest zalogowany (sesje)
		require('application/views/rezerwacjelista.php');
		$view=new RezerwacjeListaView();
		
		//Tutaj model pobieraj�cy list�
		$view->generujListe($list);		
	}	
}
?>