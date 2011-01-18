<?php
require('template.php');

class SalaInfoView{
	public function generuj($sala,$konfiguracje,$profile,$terminy,$aktywna_konfiguracja,$aktywny_profil){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		?>
		<!-- content -->
        <div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Informacje o wybranej sali
                    </div>
                    <form id="form" action="index.php?controller=salainfo&id=<?php echo $sala[0]; ?>" method="post">
                    <div style="float: left; width: 350px">
                        <fieldset>
                            <div class="field">
                                <label>
                                    Numer sali:</label>
                                <?php echo $sala['numer']; ?>
                            </div>
                            <div class="field hour">
                                <label>
                                    Budynek:</label>
                                <?php echo $sala['nazwa']; ?>
                            </div>
                            <div class="field hour">
                                <label>
                                   Dostępne profile:</label>
                                <select name="profil" id="Select3" onChange="submit();">
                                    <?php 
										foreach($profile as $row){
											if($aktywny_profil['id']==$row['id'])
												echo "<option selected='true' value='".$row['id']."'>".$row['nazwa']."</option>"; 
											else
												echo "<option value='".$row['id']."'>".$row['nazwa']."</option>"; 
										}
									?>
                                </select>
                            </div>
                            <div class="field">
                                <label>
                                    Profil dostępny na stanowiskach:</label>
                                <?php echo $aktywny_profil[0]['stanowiska']; ?>
                            </div>
                            <div class="field">
                                <label>
                                   System operacyjny:</label>
                                <?php echo $aktywny_profil[0]['systemOperacyjny']; ?>
                            </div>
                            <div class="field">
                                <label>
                                   Oprogramowanie w zaznaczonym profilu:</label>
                                <textarea id="TextArea1" cols="35" rows="11">
								<?php
									foreach($aktywny_profil as $row){
										echo $row['nazwa']."\n";
									}
								?>
								</textarea>
                            </div>
                        </fieldset>
                    </div>
                    <div style="float: left; width: 350px">
                        <fieldset class="widelabel">
                            <div class="field">
                                <label>
                                   Liczba stanowisk ogółem:</label>
                                ###
                            </div>
                            <div class="field">
                                <label>
                                   Opiekun:</label>
                                ###
                            </div>
                            <div class="field hour">
                                <label>
                                   Dostępne konfiguracje sprzętowe:</label>
                                <select name="konfiguracja" id="Select1" onChange="submit();">
                                    <?php 
										foreach($konfiguracje as $row){
											if($aktywna_konfiguracja['id']==$row['id'])
												echo "<option selected='true' value='".$row['id']."'>".$row['procesor']."/".$row['iloscRAM']."</option>"; 
											else
												echo "<option value='".$row['id']."'>".$row['procesor']."/".$row['iloscRAM']."</option>"; 
										}
									?>
                                </select>
                            </div>
                            <div class="field">
                                <label>
                                   Ilość stanowisk w wybranej konfiguracji:</label>
                                <?php echo $aktywna_konfiguracja['stanowiska']; ?>
                            </div>
                            <br />
                            <p class="grouptitle" style="clear: both">Szczegóły wybranej <br />konfiguracji sprzętowej:</p>
                            <div class="field">
                                <label>
                                   Procesor:</label>
                                <?php echo $aktywna_konfiguracja['procesor']; ?>
                            </div>
                            <div class="field">
                                <label>
                                   Pamięć RAM[MB]:</label>
                                <?php echo $aktywna_konfiguracja['iloscRAM']; ?>
                            </div>
                            <div class="field">
                                <label>
                                   Typ pamięci:</label>
                                <?php echo $aktywna_konfiguracja['typRAM']; ?>
                            </div>
                            <div class="field">
                                <label>
                                   Karta graficzna:</label>
                                <?php echo $aktywna_konfiguracja['kartaGraficzna']; ?>
                            </div>
                            <div class="field">
                                <label>
                                   Monitor:</label>
                                <?php echo $aktywna_konfiguracja['typMonitora']." ".$aktywna_konfiguracja['modelMonitora']." ".$aktywna_konfiguracja['rozmiarMonitora']; ?>
                            </div>
                        </fieldset>
                    </div>
						  <a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 150px; margin-bottom: 10px"><em><b>Pokaż szczegółowe informacje o stanowiskach</b></em></a>	
                  	
                    <hr />
							<br>
						  <div class="field">	
                            <label style="width: 50px; ">
                                Data:</label>
                            <input type="text" name="date" value="" style="float: left"/>
									 <p style="float: left">(DD-MM-RRRR)</p>
									 <a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 10px"><em><b>Przejdź</b></em></a>
                    </div>
						  <br><br>
                     <table class="tabborder" cellspacing="1">
                            <tr class="timetable">
                                <td>Godzina</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                                <td>DD-MM-RRRR</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
								<br />
								<a href="#" onclick="document.getElementById('form').submit()" class="link"><em><b>Poprzedni tydzień</b></em></a>
								<a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 450px"><em><b>Następny tydzień</b></em></a><br />
								<a href="#" onclick="document.getElementById('form').submit()" class="link" style="margin-left: 280px"><em><b>Rezerwuj wybrany termin</b></em></a>
                       
                        </form>
                </div>
            </div>
        </div>
		<?php
		$template->renderApplicationBottom();
	}	
}
?>