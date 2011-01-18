<?php
require_once('application/controllers/logowanie.php');
require_once 'var\komunikaty.php';

class LogowanieControllerTest extends PHPUnit_Framework_TestCase{
    var $obj;


	//Przed testami
    function setUp() {
        $this->obj=new LogowanieController();
    }

    //Po testach
    function tearDown() {
        unset($this->obj);
    }
    function testLogin() {
		$res=$this->obj->login('test','test');
		$this->assertNotEquals(-1,$res);		        
    }	
	/**
     * @depends testLogin
     */
	 
	 function testLoginChars() {
		$res=$this->obj->login('test!','test');
		$this->assertEquals(LOGIN_WRONG_CHARS,$res);		        
    }	
	/**
     * @depends testLoginChars
     */
	 function testLoginEmpty() {
		$res=$this->obj->login('','test');
		$this->assertEquals(LOGIN_WRONG_CHARS,$res);		        
    }	
  }
?>