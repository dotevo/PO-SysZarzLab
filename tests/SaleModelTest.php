<?php
require_once('application/models/sale.php');


class SaleModelTest extends PHPUnit_Framework_TestCase{
    var $obj;

    function setUp() {
        $this->obj=new SaleModel();
    }

    //Po testach
    function tearDown() {
        unset($this->obj);
    }
	
	//TESTY
	
    function testListaBudynkow() {
		$res=$this->obj->listaBudynkow();		
		$this->assertNotNull($res[0]['nazwa']);
		$this->assertNotNull($res[0]['id']);		
    }	
	
	function testInformacjeSali() {
		$res=$this->obj->informacjeSali("%","%");		
		$this->assertNotNull($res[0]['id']);
		$this->assertNotNull($res[0]['numer']);		
		$this->assertNotNull($res[0]['nazwa']);		
    }	
	 
  }
?>