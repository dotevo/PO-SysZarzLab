<?php
class SaleListaController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju� u�ytkownik nie jest zalogowany (sesje)
		require('application/views/salelista.php');
		$view=new SaleListaView();
		
		//Tutaj model pobieraj�cy list�
		$view->generuj($list);		
	}	
}
?>