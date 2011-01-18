<?php
class SaleListaController{
	public function doAction(){		
		require('application/views/salelista.php');
		
		require('application/models/sale.php');
		$view=new SaleListaView();
		
		//Tutaj model pobieraj¹cy listê
		$view->generuj($list);		
	}	
}
?>