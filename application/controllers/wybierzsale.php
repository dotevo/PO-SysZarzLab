<?php
class WybierzSaleController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju¿ u¿ytkownik nie jest zalogowany (sesje)
		require('application/views/wybierzsale.php');
		$view=new WybierzSaleView();
		
		//Tutaj model pobieraj±cy listê
		$view->generuj();		
	}	
}
?>