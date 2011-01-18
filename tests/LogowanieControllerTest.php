<?php
require_once('application/controllers/logowanie.php');

class LogowanieControllerTest extends PHPUnit_Framework_TestCase{
    var $obj;


	//Przed testami
    function setUp() {
        $this->obj=new LogowanieController();
    }

    //Po testach
    function tearDown() {
        unset($this->abc);
    }
    function testLogin() {
		$res=$this->obj->login('test','test');
		$this->assertNotEquals(-1,$res);		        
    }	
	/**
     * @depends testLogin
     */
  }
?>