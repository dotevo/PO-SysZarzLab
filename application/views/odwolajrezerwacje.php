<?php
require('template.php');

class OdwolajRezerwacjeView{
	public function generujListe($array,$ids){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Odwołaj wybrane rezerwacje
                    </div>
					<form id="form" action="index.php?controller=odwolajrezerwacje&action=odwolaj&id=<?php echo $ids;?>" method="post">
					<fieldset>
								<p class="grouptitle">Lista rezerwacji do odwołania:</p>
                        <table class="tabborder" cellspacing="1">
                            <tr class="tabheader">
                                <td style="width: 100px">Data</td>
                                <td style="width: 100px">Godzina</td>
                                <td style="width: 100px">Sala</td>
										  <td style="width: 100px">Budynek</td>
										  <td style="width: 100px">Prowadzący</td>
                            </tr>
							<?php
							for($i=0;$i<count($array);$i++){
								$w=explode(' ',$array[$i]['data_od']);
								echo "<tr>";                                
                                echo "<td>".$w[1]."</td>";
								echo "<td>".$w[0]."</td>";
								echo "<td>".$array[$i]['sala']."</td>";
								echo "<td>".$array[$i]['budynek']."</td>";
								echo "<td>".$array[$i]['imie'].' '.$array[$i]['nazwisko']."</td>";
								echo "</tr>";
							}
							?>
							
                        </table>
								<br />
								<p class="grouptitle">Powód odwołania rezerwacji:</p>
								<textarea name="powod" cols="110" rows="5"></textarea>
							  
								<a onclick="document.getElementById('form').submit()" class="link" style="margin-left: 190px;"><em><b>Odwołaj wybrane</b></em></a>
						</fieldset>
                    </form>
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
}
?>
