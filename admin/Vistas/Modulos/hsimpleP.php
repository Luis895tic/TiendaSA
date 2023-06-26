<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Licoreria</h1>

	</section>

	<section class="content">
			
		<div class="row">
			
			<div class="col-md-6 col-xs-12">
				
				<div class="box box-danger">
					
					<div class="box-header with-border">
						
						<h2>Datos de Inicio</h2>

					</div>

					<div class="box-body">
						
						<?php

						$verHS = new HSimplePC();
						$verHS -> VerHSimplePC();

						?>
						

					</div>

					<div class="box-footer">
						
						<button class="btn btn-success EditarHS btn-lg" data-toggle="modal" data-target="#EditarHS"><i class="fa fa-pencil"></i> Editar</button>

					</div>

				</div>

			</div>

		</div>

	</section>

</div>




<div id="EditarHS" class="modal fade" role="dialog">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form role="form" method="post" enctype="multipart/form-data">
				
				<?php

				$editarhsP = new HSimplePC();
				$editarhsP -> EditarHSimplePC();

				?>

				<div class="modal-footer">
					
					<button type="submit" class="btn btn-success">GUARDAR</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>

				</div>

			</form>

		</div>

	</div>

</div>


<?php
	
$actualizarHSP = new HSimplePC();
$actualizarHSP -> ActualizarHSimplePC();

?>