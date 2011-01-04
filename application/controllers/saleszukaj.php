<?php
class SaleSzukajController{
	public function doAction(){
		//Tutaj sprawdzanie czy ju¿ u¿ytkownik nie jest zalogowany (sesje)
		require('application/views/saleszukaj.php');
		$view=new SaleSzukajView();
		
		//Tutaj model pobieraj¹cy listê
		$view->generuj($list);		
	}	
}
?>