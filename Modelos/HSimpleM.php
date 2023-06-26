<?php

require_once "admin/Modelos/ConexionBD.php";

class HSimpleM extends ConexionBD{

	static public function VerHSimpleM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, subtitulo, titulo FROM $tablaBD");

		$pdo->execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}

}