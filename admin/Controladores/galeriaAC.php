<?php

class GaleriaAC{

	public function CrearGaleriaAC(){

		if(isset($_POST["tituloN"])){

			$rutaImg = "";

			if(isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])){

				if($_FILES["imagenN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/galeriaa".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}


				if($_FILES["imagenN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/galeriaa".$nombre.".jpeg";

					$imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "galeriaa";

			$datosC = array("titulo"=>$_POST["tituloN"], "precio"=>$_POST["subtituloN"], "descripcion"=>$_POST["descripcionN"], "orden"=>$_POST["ordenN"], "imagen"=>$rutaImg);

			$respuesta = GaleriaAM::CrearGaleriaAM($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

					window.location = "galeriaa";

				</script>';

			}else{

				echo 'ERROR AL CREAR IMAGEN';

			}

		}

	}




	//Ver Galería
	static public function VerGaleriaAC($item, $valor){

		$respuesta = GaleriaAM::VerGaleriaAM("galeriaa", $item, $valor);

		return $respuesta;

	}



	//Borrar Galería
	public function BorrarGaleriaAC(){

		if(isset($_GET["Gid"])){

			$tablaBD = "galeriaa";
			$id = $_GET["Gid"];

			if($_GET["Gimagen"] != ""){

				unlink($_GET["Gimagen"]);

			}

			$respuesta = GaleriaAM::BorrarGaleriaAm($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

					window.location = "galeriaa";

				</script>';

			}else{

				echo 'ERROR AL BORRAR IMAGEN';

			}

		}

	}



	//Actualizar Galeria
	public function ActualizarGaleriaAC(){

		if(isset($_POST["Gid"])){

			$rutaImg = $_POST["imagenActual"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenActuala"])){

					unlink($_POST["imagenActuala"]);

				}


				if($_FILES["imagenE"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/galeriaa".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

				if($_FILES["imagenE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/galeriaa".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "galeriaa";

			$datosC = array("id"=>$_POST["Gid"], "titulo"=>$_POST["tituloE"], "precio"=>$_POST["subtituloE"], "descripcion"=>$_POST["descripcionE"], "orden"=>$_POST["ordenE"], "imagen"=>$rutaImg);

			$respuesta = GaleriaAM::ActualizarGaleriaAM($tablaBD, $datosC);

			if($respuesta == true){
			
				echo '<script>

					window.location = "galeriaa";

				</script>';

			}else{

				echo 'ERROR AL ACTUALIZAR IMAGEN';

			}

		}

	}



}