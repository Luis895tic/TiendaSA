<?php

class GaleriaLC{

	public function CrearGaleriaLC(){

		if(isset($_POST["tituloN"])){

			$rutaImg = "";

			if(isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])){

				if($_FILES["imagenN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/galerial".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}


				if($_FILES["imagenN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/galerial".$nombre.".jpeg";

					$imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "galerial";

			$datosC = array("titulo"=>$_POST["tituloN"], "precio"=>$_POST["subtituloN"], "descripcion"=>$_POST["descripcionN"], "orden"=>$_POST["ordenN"], "imagen"=>$rutaImg);

			$respuesta = GaleriaLM::CrearGaleriaLM($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

					window.location = "galerial";

				</script>';

			}else{

				echo 'ERROR AL CREAR IMAGEN';

			}

		}

	}




	//Ver Galería
	static public function VerGaleriaLC($item, $valor){

		$respuesta = GaleriaLM::VerGaleriaLM("galerial", $item, $valor);

		return $respuesta;

	}



	//Borrar Galería
	public function BorrarGaleriaLC(){

		if(isset($_GET["Gid"])){

			$tablaBD = "galerial";
			$id = $_GET["Gid"];

			if($_GET["Gimagen"] != ""){

				unlink($_GET["Gimagen"]);

			}

			$respuesta = GaleriaLM::BorrarGaleriaLm($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

					window.location = "galerial";

				</script>';

			}else{

				echo 'ERROR AL BORRAR IMAGEN';

			}

		}

	}



	//Actualizar Galeria
	public function ActualizarGaleriaLC(){

		if(isset($_POST["Gid"])){

			$rutaImg = $_POST["imagenActual"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenActual"])){

					unlink($_POST["imagenActual"]);

				}


				if($_FILES["imagenE"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/galerial".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

				if($_FILES["imagenE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/galerial".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "galerial";

			$datosC = array("id"=>$_POST["Gid"], "titulo"=>$_POST["tituloE"], "precio"=>$_POST["subtituloE"], "descripcion"=>$_POST["descripcionE"], "orden"=>$_POST["ordenE"], "imagen"=>$rutaImg);

			$respuesta = GaleriaLM::ActualizarGaleriaLM($tablaBD, $datosC);

			if($respuesta == true){
			
				echo '<script>

					window.location = "galerial";

				</script>';

			}else{

				echo 'ERROR AL ACTUALIZAR IMAGEN';

			}

		}

	}



}