<?php

require_once "../Controladores/galeriaLC.php";
require_once "../Modelos/galeriaLM.php";

class AjaxGaleria{

	public $Gid;

	public function EditarGaleriaLA(){

		$item = "id";
		$valor = $this->Gid;

		$respuesta = GaleriaLC::VerGaleriaLC($item, $valor);

		echo json_encode($respuesta);

	}

}


if(isset($_POST["Gid"])){

	$editarG = new AjaxGaleria();
	$editarG -> Gid = $_POST["Gid"];
	$editarG -> EditarGaleriaLA();

}