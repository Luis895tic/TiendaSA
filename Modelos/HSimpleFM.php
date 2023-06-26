<?php

require_once "admin/Modelos/ConexionBD.php";

class HSimpleFM extends ConexionBD{

	static public function VerHSimpleFM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, subtitulo, titulo FROM $tablaBD");

		$pdo->execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}

}