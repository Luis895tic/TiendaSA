<?php

require_once "admin/Modelos/ConexionBD.php";

class GaleriaFM extends ConexionBD{

	static public function MostrarGaleriaFM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, titulo, descripcion, precio FROM $tablaBD ORDER BY orden ASC");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();

	}

}