<?php

require_once "ConexionBD.php";

class HSimple2M extends ConexionBD{


	//Ver HS
	static public function VerHSimpleFM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, imagen, titulo,subtitulo FROM $tablaBD");

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

		$pdo = null;

	}



	//Editar HS
	static public function EditarHSimpleFM($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, subtitulo, imagen, titulo FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

		$pdo = null;

	}



	//Actualizar HS
	static public function ActualizarHSimpleFM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET subtitulo = :subtitulo, titulo = :titulo, imagen = :imagen WHERE id = :id");

		$pdo -> bindParam(":subtitulo", $datosC["subtitulo"], PDO::PARAM_STR);
		$pdo -> bindParam(":titulo", $datosC["titulo"], PDO::PARAM_STR);
		$pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{
			return false;
		}

		$pdo -> close();
		$pdo = null;

	}



}