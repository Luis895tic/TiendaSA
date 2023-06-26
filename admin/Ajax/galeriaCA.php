<?php

require_once "../Controladores/galeriaCC.php";
require_once "../Modelos/galeriaCM.php";

class AjaxGaleria{

	public $Gid;

	public function EditarGaleriaCA(){

		$item = "id";
		$valor = $this->Gid;

		$respuesta = GaleriaCC::VerGaleriaCC($item, $valor);

		echo json_encode($respuesta);

	}

}


if(isset($_POST["Gid"])){

	$editarG = new AjaxGaleria();
	$editarG -> Gid = $_POST["Gid"];
	$editarG -> EditarGaleriaCA();

}