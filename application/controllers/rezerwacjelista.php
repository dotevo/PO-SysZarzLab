<?php
class RezerwacjeListaController{
	public function doAction(){
		require('application/views/rezerwacjelista.php');
		require('application/models/rezerwacje.php');
		$view=new RezerwacjeListaView();
		$model=new RezerwacjeModel();
		$result=$model->listaUzytkownika($_SESSION['uzytkownikID']);		
		

		$view->generujListe($result,null);		
	}	
}
?>