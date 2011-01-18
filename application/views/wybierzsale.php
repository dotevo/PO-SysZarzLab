<?php
require('template.php');

class WybierzSaleView{
	public function generujWybor($budynki){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
					<div class="message">
						<?php echo urldecode($_GET['message']);?>
					</div>
                    <div class="title">
                        Wybierz salę, aby uzyskać szczegółowe informacje o niej						
                    </div>
                    <form id="form" action="index.php?controller=salainfo" method="post">
                    <fieldset>
                        <div class="field">
                            <label>
                                Budynek:</label>
                            <select id="Select1" name="budynek" style="width: 100px">
							<?php
								foreach($budynki as $row)
									echo "<option>".$row['nazwa']."</option>";
							?>
                            </select>
                        </div>
                        <div class="field">
                            <label>
                                Sala:</label>
                            <input type="text" name="sala" value="" style="width:100px;"/>
                        </div>
                        <div class="wrapper">
                            <a onclick="document.getElementById('form').submit()" class="link" style="float: right"><em><b>Wybierz</b></em></a></div>
									 <br/>
						  				<a href="index.php?controller=saleszukaj">Przejdź do wyszukiwarki sal</a><br/> <a href="index.php?controller=salelista&action=moje">Moje sale</a>
						  			 <br/>
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