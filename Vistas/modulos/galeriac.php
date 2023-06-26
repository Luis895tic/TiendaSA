<div class="banner-bottom py-5" id="galleryc">
		<div class="container py-md-3">
			 <div class="w3-head-all mb-3">
		         <h3> Galería carnes</h3>
		       </div>
			<div class="row inner-sec">

                <?php

                $galeria = new GaleriaCC();
                $galeria -> MostrarGaleriaCC();

                ?>
				<a href="#galleryc" class="btn btn-primary"  style="height:50px; width:120px" onclick="ocultarc();">Ver menos</a>
			</div>
		</div>
	</div>