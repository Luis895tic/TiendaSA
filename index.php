<?php

require_once "Controladores/plantillaC.php";

require_once "Controladores/slideC.php";
require_once "Modelos/slideM.php";

require_once "Controladores/nosotrosC.php";
require_once "Modelos/nosotrosM.php";

require_once "Controladores/mensajesC.php";
require_once "Modelos/mensajesM.php";

require_once "Controladores/inicioC.php";
require_once "Modelos/inicioM.php";

require_once "Controladores/HSimpleC.php";
require_once "Modelos/HSimpleM.php";

require_once "Controladores/HSimpleFC.php";
require_once "Modelos/HSimpleFM.php";

require_once "Controladores/HSimplePC.php";
require_once "Modelos/HSimplePM.php";

require_once "Controladores/HSimpleAC.php";
require_once "Modelos/HSimpleAM.php";

require_once "Controladores/galeriaCC.php";
require_once "Modelos/galeriaCM.php";

require_once "Controladores/galeriaLC.php";
require_once "Modelos/galeriaLM.php";

require_once "Controladores/galeriaAC.php";
require_once "Modelos/galeriaAM.php";

require_once "Controladores/galeriaFC.php";
require_once "Modelos/galeriaFM.php";

require_once "Controladores/slidedC.php";
require_once "Modelos/slidedM.php";


$plantilla = new PlantillaC();
$plantilla -> LlamarPlantilla();