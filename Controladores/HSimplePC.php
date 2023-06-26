<?php

class HSimplePC{

	public function VerHSimplePC(){

		$tablaBD = "hsimple3";

		$respuesta = HSimplePM::VerHSimplePM($tablaBD);

                echo '<div class="card ">
                <img src="admin/'.$respuesta["imagen"].'" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$respuesta["titulo"].'</h5>
                  <p class="card-text">'.$respuesta["subtitulo"].'</p>
                  <br></br>
                  <a href="#galleryl" class="btn btn-primary" onclick="mostrarl();">Ver mas</a>
                </div>
                </div>';

	}

}