<?php

require_once "admin/Modelos/ConexionBD.php";

class HSimplePM extends ConexionBD{

	static public function VerHSimplePM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, subtitulo, titulo FROM $tablaBD");

		$pdo->execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}

}