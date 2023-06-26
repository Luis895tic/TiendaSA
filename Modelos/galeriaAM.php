<?php

require_once "admin/Modelos/ConexionBD.php";

class GaleriaAM extends ConexionBD{

	static public function MostrarGaleriaAM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, titulo, descripcion, precio FROM $tablaBD ORDER BY orden ASC");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();

	}

}