<?php

require_once "admin/Modelos/ConexionBD.php";

class HSimpleAM extends ConexionBD{

	static public function VerHSimpleAM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, subtitulo, titulo FROM $tablaBD");

		$pdo->execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}

}