<?php
require('application/models/model.php');
class LogowanieModel extends Model{
	public function __construct(){
		$this->connect();
	}   
	public function __destruct(){
		$this->disconnect();
	} 
   
	public function loguj($login,$pass){
		$rezultat=mysql_query("select * FROM uzytkownicy WHERE login='".$login."' AND haslo='".$pass."'");
		if($row = mysql_fetch_array( $rezultat )){			
			return $row['id'];
		} 
		return -1;
	}	
}
?>