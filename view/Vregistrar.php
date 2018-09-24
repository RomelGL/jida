<?php include("layouts/Vheader.php");?>

	<div class="container">
		
	<?php include("Vmenu.php");?>
	
		<div class="row justify-content-md-center">
			<div class="col col-md-4">
				<form id="form-registro">
				  <div class="form-group">
				    <label for="nombre">Nombre:</label>
				    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100">
				  </div>
				  <div class="form-group">
				    <label for="correo">Correo</label>
				    <input type="text" class="form-control" id="correo" name="correo" required="" maxlength="60">
				  </div>
				  <div class="form-group">
				    <label for="telefono">Telefono</label>
				    <input type="text" class="form-control" id="telefono" name="telefono" maxlength="11">
				  </div>
				  <button type="botton" class="btn btn-primary" id="btn-registrar">Registrar</button>
				</form>
			<div class="col-md-12" id="_AJAXP_" role="alert"></div>	
			</div><!--col col-md-8-->
		</div><!--row justify-content-md-center-->

	</div><!--container-->

<?php include("layouts/Vfooter.php");?>
