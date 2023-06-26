<div class="banner-bottom py-5" id="gallerya">
		<div class="container py-md-3">
			 <div class="w3-head-all mb-3">
		         <h3> Abarrotes</h3>
		       </div>
			<div class="row inner-sec">

                <?php

                $galeria = new GaleriaAC();
                $galeria -> MostrarGaleriaAC();

                ?>
			
			<a  href="#gallerya" name= "menos" class="btn btn-primary"  style="height:50px; width:120px" onclick="ocultara();">Ver menos</a>
			</div>
		</div>
	</div>