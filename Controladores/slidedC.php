<?php

class SlidedC{

	public function MostrarSlideC(){

		$tablaBD = "slide";

		$respuesta = SlideM::MostrarSlideM($tablaBD);

		foreach ($respuesta as $key => $value) {
				
			echo '<li>
                            
                            <div class="carousel-item active">
                                <img src="admin/'.$value["imagen"].'" class="d-block w-100" alt="...">
                            </div>
                            
                            </div>
                        </div>
           
						</li> ';

		}

		echo '</div>';

	}

}

