<?php

class HSimplePC{


	//Ver HSimple
	public function VerHSimplePC(){

		$tablaBD = "hsimple3";

		$respuesta = HSimple2M::VerHSimpleFM($tablaBD);

		echo '<h3>Imagen Principal:</h3>';

			if($respuesta != ""){

				echo '<img src="'.$respuesta["imagen"].'" class="img-thumbnail" width="250px">';

			}else{

				echo '<img src="Vistas/img/hs3" class="img-thumbnail" width="250px">';

			}
			
			echo'<hr>
			<h3>Titulo:</h3>
				<h2>'.$respuesta["titulo"].'<h2>
			<div class="price-list">
				<ul>';

				

				
				
					
			echo '</ul>
			</div>

			<hr>
			<h3>Subtitulo:</h3>

			<h2> '.$respuesta["subtitulo"].'</h2>';

	}




	//Editar HSimple
	public function EditarHSimplePC(){

		$tablaBD = "hsimple3";

		$id = "1";

		$respuesta = HSimplePM::EditarHSimplePM($tablaBD, $id);

		echo '<div class="modal-body">
					
				<div class="box-body">
					
					<div class="form-group">
						
						<h3>Imagen:</h3>

						<input type="file" name="imagenE">';

						if($respuesta["imagen"] != ""){

							echo '<img src="'.$respuesta["imagen"].'" class="img-thumbnail" width="250px">';

						}else{

							echo '<img src="Vistas/img/hs3" class="img-thumbnail" width="250px">';

						}

						

						echo '<input type="hidden" name="imagenActual" value="'.$respuesta["imagen"].'">

					</div>

					<div class="form-group">
						
					<h3>Titulo:</h3>

					<input type="text" name="estrellasE" class="form-control input-lg" value="'.$respuesta["titulo"].'" require="">

					</div>


					<div class="form-group">
						
						<h3>Subtitulo:</h3>

						<input type="text" name="precioE" class="form-control input-lg" value="'.$respuesta["subtitulo"].'">

						<input type="hidden" name="HSid" class="form-control input-lg" value="'.$respuesta["id"].'">

					</div>

				</div>

			</div>';

	}




	//Actualizar HS
	public function ActualizarHSimplePC(){

		if(isset($_POST["precioE"])){

			$rutaImg = $_POST["imagenActual"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenActual"])){

					unlink($_POST["imagenActual"]);

				}


				if($_FILES["imagenE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/hs3".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

				if($_FILES["imagenE"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/hs3".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

			}


			$tablaBD ="hsimple3";

			$datosC = array("id"=>$_POST["HSid"], "imagen"=>$rutaImg, "titulo"=>$_POST["estrellasE"], "subtitulo"=>$_POST["precioE"]);

			$respuesta = HSimplePM::ActualizarHSimplePM($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

				window.location = "hsimpleP";

				</script>';

			}

		}

	}



}

