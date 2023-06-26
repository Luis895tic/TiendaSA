<?php

require_once "../Controladores/galeriaAC.php";
require_once "../Modelos/galeriaAM.php";

class AjaxGaleria{

	public $Gid;

	public function EditarGaleriaAA(){

		$item = "id";
		$valor = $this->Gid;

		$respuesta = GaleriaAC::VerGaleriaAC($item, $valor);

		echo json_encode($respuesta);

	}

}


if(isset($_POST["Gid"])){

	$editarG = new AjaxGaleria();
	$editarG -> Gid = $_POST["Gid"];
	$editarG -> EditarGaleriaAA();

}