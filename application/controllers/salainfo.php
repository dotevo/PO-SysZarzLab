<?php
class SalaInfoController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju� u�ytkownik nie jest zalogowany (sesje)
		require('application/views/salainfo.php');
		$view=new SalaInfoView();
		
		//Tutaj model pobieraj�cy list�
		$view->generuj();		
	}	
}
?>