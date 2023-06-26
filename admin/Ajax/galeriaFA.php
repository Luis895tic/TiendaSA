<?php

require_once "../Controladores/galeriaFC.php";
require_once "../Modelos/galeriaFM.php";

class AjaxGaleria{

	public $Gid;

	public function EditarGaleriaFA(){

		$item = "id";
		$valor = $this->Gid;

		$respuesta = GaleriaFC::VerGaleriaFC($item, $valor);

		echo json_encode($respuesta);

	}

}


if(isset($_POST["Gid"])){

	$editarG = new AjaxGaleria();
	$editarG -> Gid = $_POST["Gid"];
	$editarG -> EditarGaleriaFA();

}