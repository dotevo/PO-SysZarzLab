<?php
class InstalatorModel{
	private $linkM = null;
	private $db = null;
	
	private $value_host = null;
	private $value_user = null;
	private $value_pass = null;
	private $value_db = null;
 
   public function __construct($host,$user,$pass, $db){
		$this->value_host=$host;
		$this->value_user=$user;
		$this->value_pass=$pass;
		$this->value_db=$db;
		
		$this->linkM = mysql_connect($host, $user, $pass);		
		$this->db = mysql_select_db($db, $this->linkM);		
   }
   
   public function __destruct(){
		mysql_close($this->linkM);
   }
 
	public function install(){
		if (!$this->linkM) {
			return array("State"=>"1","MySQL_ERROR"=>mysql_error());
		}	
		if (!$this->db) {
			return array("State"=>"2","MySQL_ERROR"=>mysql_error());
		}
		//Je�li wszystko ok to utw�rz plik config.php		
		$fp = fopen("config.php", "w"); 
		flock($fp, 2); 
		fwrite($fp, "<?php \n"); 
		fwrite($fp, "$"."CONFIG_DB='".$this->value_db."';\n"); 
		fwrite($fp, "$"."CONFIG_HOST='".$this->value_host."';\n"); 
		fwrite($fp, "$"."CONFIG_USER='".$this->value_user."';\n"); 
		fwrite($fp, "$"."CONFIG_PASS='".$this->value_pass."';\n"); 
		fwrite($fp, "?>"); 
		flock($fp, 3); 
		fclose($fp);
		
		return;		
	}	
}
?>