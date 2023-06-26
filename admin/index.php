<?php

require_once "Controladores/plantillaC.php";

require_once "Controladores/usuariosC.php";
require_once "Modelos/usuariosM.php";

require_once "Controladores/slideC.php";
require_once "Modelos/slideM.php";

require_once "Controladores/nosotrosC.php";
require_once "Modelos/nosotrosM.php";

require_once "Controladores/hsimpleC.php";
require_once "Modelos/hsimpleM.php";

require_once "Controladores/hsimpleFC.php";
require_once "Modelos/hsimpleFM.php";

require_once "Controladores/hsimplePC.php";
require_once "Modelos/hsimplePM.php";

require_once "Controladores/hsimpleAC.php";
require_once "Modelos/hsimpleAM.php";

require_once "Controladores/mensajesC.php";
require_once "Modelos/mensajesM.php";

require_once "Controladores/inicioC.php";
require_once "Modelos/inicioM.php";

require_once "Controladores/galeriaCC.php";
require_once "Modelos/galeriaCM.php";

require_once "Controladores/galeriaLC.php";
require_once "Modelos/galeriaLM.php";

require_once "Controladores/galeriaFC.php";
require_once "Modelos/galeriaFM.php";

require_once "Controladores/galeriaAC.php";
require_once "Modelos/galeriaAM.php";
$plantilla = new PlantillaC();
$plantilla -> LlamarPlantilla();