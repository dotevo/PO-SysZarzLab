<?php
class Model{
	public $linkM = null;
	public $db = null;
	 
    public function connect(){		
		include('config.php');
		//Po³¹czenie z baz¹ danych		
		$mysql = mysql_connect($CONFIG_HOST, $CONFIG_USER, $CONFIG_PASS);				
		$db = mysql_select_db($CONFIG_DB, $mysql);		
		$this->db=$db;
		$this->linkM=$mysql;
   }
   
   public function disconnect(){
		//Roz³¹czanie z baz¹ danych
		mysql_close($this->linkM);
   }
   
	//Funkcja u³atwiaj¹ca pobieranie danych
	public function getData($query){		
		$rezultat=mysql_query($query);
		echo mysql_error();		
		$ret=array();
		while($row = mysql_fetch_array( $rezultat )){		
			$ret[]=$row;			
		} 
		return $ret;
	}   
}
?>