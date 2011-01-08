<?php
require('template.php');

class WybierzSaleView{
	public function generuj(){
		$template=new Template();
		$template->sitenav=true;
		$template->renderApplicationTop();
		//Tutaj formularz
		?>
		<div id="content">
            <div class="wrapper">
                <div class="indent">
                    <div class="title">
                        Wybierz salę, aby uzyskać szczegółowe informacje o niej
                    </div>
                    <form id="form" action="index.php?controller=logowanie" method="post">
                    <fieldset>
                        <div class="field">
                            <label>
                                Budynek:</label>
                            <select id="Select1" style="width: 100px">
                                  <option>D1</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>
                                Sala:</label>
                            <input type="text" name="login" value="" style="width:100px;"/>
                        </div>
                        <div class="wrapper">
                            <a href="index.php?controller=salainfo" onclick="document.getElementById('form').submit()" class="link" style="float: right"><em><b>Wybierz</b></em></a></div>
									 <br/>
						  				<a href="index.php?controller=saleszukaj">Przejdź do wyszukiwarki sal</a>
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