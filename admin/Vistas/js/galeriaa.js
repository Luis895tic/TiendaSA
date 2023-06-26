//Borrar imagen galería
$(".TB").on("click", ".BorrarGaleria", function(){

	var Gid = $(this).attr("Gid");
	var Gimagen = $(this).attr("Gimagen");

	window.location = "index.php?url=galeriaa&Gid="+Gid+"&Gimagen="+Gimagen;

})


// Traer Datos para Actualizar
$(".TB").on("click", ".EditarGaleria", function(){

	var Gid = $(this).attr("Gid");
	var datos = new FormData();

	datos.append("Gid", Gid);

	$.ajax({

		url: "Ajax/galeriaAA.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",

		success: function(resultado){

			$("#Gid").val(resultado["id"]);

			$("#tituloE").val(resultado["titulo"]);

			$("#subtituloE").val(resultado["precio"]);

			$("#descripcionE").val(resultado["descripcion"]);

			$("#ordenE").val(resultado["orden"]);

			$("#imagenActual").val(resultado["imagen"]);
			$(".visor").attr("src", resultado["imagen"]);

		}
 
	})

})