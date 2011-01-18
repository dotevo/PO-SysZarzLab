<?php
require('template.php');

class RezerwacjeListaView{
	public function generujListe($array,$date){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Lista rezerwacji
                    </div>
					<form id="form" action="" method="post">
					<fieldset>
								<div class="field">
								
									<?php
									//jeśli konkretna data to pokaż wybór
									if(isset($date)){
									?>
									
										<label style="width: 50px; ">
										Data:</label>
										<input type="text" name="date" value="" style="float: left"/>
										<p style="float: left">(DD-MM-RRRR)</p>
										<a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 10px"><em><b>Przejdź</b></em></a>
									
									<?php
									}
									?>
									
                        </div>
								<br><br>
                        <table class="tabborder" cellspacing="1">
                            <tr class="tabheader">
                                <td style="width: 40px"></td>
                                <td style="width: 100px">Godzina</td>
                                <td style="width: 100px">Data</td>
								<td style="width: 100px">Sala</td>
								<td style="width: 100px">Odwołana</td>								
                                <td style="width: 100px"></td>
                            </tr>
							<?php
							for($i=0;$i<count($array);$i++){
								$w=explode(' ',$array[$i]['data_od']);
							
								echo "<tr><td></td>";                                
                                echo "<td>".$w[1]."</td>";
								echo "<td>".$w[0]."</td>";
								echo "<td>".$array[$i]['sala']."/".$array[$i]['budynek']."</td>";
								echo "<td>".($array[$i]['odwolana']==1?'Tak':'Nie')."</td>";
                                echo "<td>".($array[$i]['odwolana']==1?'':"<a href='index.php?controller=odwolajrezerwacje&id=".$array[$i]['id']."'>Odwołaj</a></td>")."</td>";								
								echo "</tr>";
							}
							?>
                        </table>
							<?php
								if(isset($date)){
									echo '<a href="#">Zaznacz wszystko</a>&nbsp;|&nbsp;<a href="#">Odznacz wszystko</a><br><br>';
									echo '<a href="#" class="link"><em><b>Poprzedni dzień</b></em></a>';
									echo '<a href="#" class="link" style="margin-left: 240px;"><em><b>Następny dzień</b></em></a><br><br>';
									echo '<a href="index.php?controller=odwolajrezerwacje" class="link" style="margin-left: 175px;"><em><b>Odwołaj zaznaczone</b></em></a>';
								}
							?>
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
