<?php

class HSimpleFC{

	public function VerHSimpleFC(){

		$tablaBD = "hsimple2";

		$respuesta = HSimpleFM::VerHSimpleFM($tablaBD);

                echo '<div class="card ">
                <img src="admin/'.$respuesta["imagen"].'" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$respuesta["titulo"].'</h5>
                  <p class="card-text">'.$respuesta["subtitulo"].'</p>
                  <br></br>
                  <a href="#galleryf" class="btn btn-primary" onclick="mostrarf();">Ver mas</a>
                </div>
                </div>';

	}

}