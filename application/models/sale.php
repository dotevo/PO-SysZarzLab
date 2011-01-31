<?php
include_once('application/models/model.php');
class SaleModel extends Model{
	public function __construct(){
		$this->connect();
	}   
	public function __destruct(){
		$this->disconnect();
	}    
    
	public function listaBudynkow(){		
		$query="SELECT * FROM budynki";
		return $this->getData($query);		
	}	
	
	public function informacjeSali($budynek,$sala){		
		$query="SELECT * FROM sale,budynki WHERE sale.numer LIKE '".$sala."' AND sale.budynkiID=budynki.id AND budynki.nazwa LIKE '".$budynek."'";				
		return $this->getData($query);		
	}	
	
	public function informacjeSaliID($id){		
		//$query="SELECT *,(SELECT COUNT(id) FROM stanowiska WHERE saleID=".$id.") as stanowiska FROM sale,budynki WHERE sale.budynkiID=budynki.id AND sale.id=".$id;				
		$query="SELECT * FROM (SELECT sale.id,opiekunID,Nazwa,numer,(SELECT COUNT(id) FROM stanowiska WHERE saleID=".$id.") as stanowiska FROM sale,budynki WHERE sale.budynkiID=budynki.id AND sale.id=".$id.") as t JOIN  uzytkownicy ON t.opiekunID=uzytkownicy.id";
		return $this->getData($query);		
	}	
	
	public function konfiguracje($id){		
		$query="SELECT DISTINCT konfiguracjesprzetowe.* FROM stanowiska,konfiguracjesprzetowe WHERE saleID=".$id." AND konfiguracjaSprzetowaID=konfiguracjesprzetowe.id";
		return $this->getData($query);		
	}	
	
	public function konfiguracja($salaID,$id){			
		$query="SELECT DISTINCT konfiguracjesprzetowe.*,(SELECT COUNT(id) FROM stanowiska WHERE saleID=".$salaID." AND konfiguracjaSprzetowaID=".$id." GROUP BY konfiguracjaSprzetowaID) as stanowiska FROM stanowiska,konfiguracjesprzetowe WHERE saleID=".$salaID." AND konfiguracjaSprzetowaID=konfiguracjesprzetowe.id AND konfiguracjesprzetowe.id=".$id;			
		return $this->getData($query);		
	}	
	
	public function profile($id){		
		$query="SELECT DISTINCT profileID as id,nazwa FROM stanowiska,stanowiska_profile,profile WHERE saleID=".$id." AND stanowiskaID=stanowiska.id AND profileID=profile.id";		
		return $this->getData($query);		
	}	
	
	public function profil($salaID,$id){		
		$query="SELECT DISTINCT profile.id as id,profile.*,oprogramowania.*,systemyOperacyjne.nazwa as systemOperacyjny, (SELECT COUNT( id ) FROM stanowiska_profile WHERE profileID=".$id." GROUP BY profileID ) as stanowiska FROM stanowiska,stanowiska_profile,profile,profile_oprogramowania,oprogramowania,systemyoperacyjne WHERE systemyoperacyjne.id=profile.systemyOperacyjneID  AND stanowiska.saleID=".$salaID." AND profile.id=".$id." AND stanowiska_profile.stanowiskaID=stanowiska.id AND stanowiska_profile.profileID=profile.id AND profile_oprogramowania.profileID=profile.id AND profile_oprogramowania.oprogramowaniaID=oprogramowania.id";
		return $this->getData($query);		
	}	
}
?>