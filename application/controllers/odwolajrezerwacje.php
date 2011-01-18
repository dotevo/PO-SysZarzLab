<?php
class OdwolajRezerwacjeController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju¿ u¿ytkownik nie jest zalogowany (sesje)
		require('application/views/odwolajrezerwacje.php');
		require('application/models/rezerwacje.php');
				
		$model=new RezerwacjeModel();
		
		if($_GET['action']=='odwolaj'){
			//Odwo³aj id rezerwacji jako u¿ytkownik
			$model->odwolajRezerwacje(explode(',',$_GET['id']),$_SESSION['uzytkownikID'],$_POST['powod']);
			//Przekiruj na stronê
			header("Location: index.php"); 
		}
		
		$view=new OdwolajRezerwacjeView();
		$result=$model->rezerwacje(explode(',',$_GET['id']));		
		$view->generujListe($result,$_GET['id']);
	}	
}
?>