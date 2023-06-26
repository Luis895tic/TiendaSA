<?php

class HSimpleAC{

	public function VerHSimpleAC(){

		$tablaBD = "hsimple4";

		$respuesta = HSimpleAM::VerHSimpleAM($tablaBD);

                 echo '<div class="card ">
                 <img src="admin/'.$respuesta["imagen"].'" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h5 class="card-title">'.$respuesta["titulo"].'</h5>
                   <p class="card-text">'.$respuesta["subtitulo"].'</p>
                   <br></br>
                   <a href="#gallerya" class="btn btn-primary" onclick="mostrara();">Ver mas</a>
                 </div>
                 </div>';

	}

}