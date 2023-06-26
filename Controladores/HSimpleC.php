<?php

class HSimpleC{

	public function VerHSimpleC(){

		$tablaBD = "hsimple";

		$respuesta = HSimpleM::VerHSimpleM($tablaBD);

		echo '<div class="card ">
		<img src="admin/'.$respuesta["imagen"].'" class="card-img-top" alt="...">
		<div class="card-body">
		  <h5 class="card-title">'.$respuesta["titulo"].'</h5>
		  <p class="card-text">'.$respuesta["subtitulo"].'</p>
		  <br></br>
		  <a href="#galleryc" class="btn btn-primary"   onclick="mostrarc();">Ver mas</a>
		</div>
	  </div>';
			

	}

}