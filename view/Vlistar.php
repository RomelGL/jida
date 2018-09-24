<?php include("layouts/Vheader.php");?>

	<div class="container">
		
		<?php include("Vmenu.php");?>
				
		<div class="row justify-content-md-center">
			<div class="col col-md-12">

			<?php
				$usuarioDao = new UsuarioDao();
				$objUser = $usuarioDao->listaUsuario();
				
				if (isset($_GET['valor']) and $_GET['valor']==1) {
					echo '<div class="alert alert-success" role="alert">
					  Usuario eliminado correctamente
					</div>';
				}elseif (isset($_GET['valor']) and $_GET['valor']==2) {
					echo '<div class="alert alert-danger" role="alert">
					  Ocurrrio un error intende de nuevo
					</div>';
				}elseif (isset($_GET['valor']) and $_GET['valor']==3) {
					echo '<div class="alert alert-success" role="alert">
					 	Usuario actualizado Correctamente
					</div>';
				}elseif (isset($_GET['valor']) and $_GET['valor']==4) {
					echo '<div class="alert alert-danger" role="alert">
					  Ocurrrio un error actualizando el usuario intente de nuevo
					</div>';
				}	
			?>
			<table class="table table-hover">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Email</th>
			      <th scope="col">Telefono</th>
			      <th scope="col">Fecha Registro</th>
			      <th scope="col" colspan="3">Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
			<?php
			if ($objUser) {

				foreach ($objUser as $user) {
					echo '<tr>';
						echo '<th scope="row">'.$user->id.'</th>';
						echo '<td>'.$user->nombre.'</td>';
						echo '<td>'.$user->email.'</td>';
						echo '<td>'.$user->telefono.'</td>';
						echo '<td>'.$user->fecha_registro.'</td>';
						echo '<td>
						<form action="../controller/modificar.php" method="GET">
							<input type="hidden" name="nombre" value="'.$user->nombre.'">
							<input type="hidden" name="correo" value="'.$user->email.'"> 
							<input type="hidden" name="telefono" value="'.$user->telefono.'">
							<input type="hidden" name="id" value="'.$user->id.'"> 
							<button type="submit" id="btn-modificar" class="btn btn-warning">Modificar</button>
						</form>
						</td>';
						echo '<td><span class="btn btn-danger" onclick="capturar(this);" id="'.$user->id.'">Eliminar</span><td>';

					echo "</tr>";
				}
			}else{
				echo '<tr>';
					echo '<th colspan="6">Sin datos</th>';
				echo "</tr>";
			}
			?>

			    </tr>

			  </tbody>
			</table>

			</div><!--col col-md-8-->
		</div><!--row justify-content-md-center-->
	</div><!--container-->


</script>
<?php include("layouts/Vfooter.php");?>