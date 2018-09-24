<?php
require_once($_SERVER['DOCUMENT_ROOT']."/jida/"."model/dao/usuarioDao.php");

	if (isset($_POST['id_usuario']) and isset($_POST['id_usuario'])!=null) {


			$datos['id_usuario'] =  $_POST['id_usuario'];

			$usuarioDao = new UsuarioDao();
			$resp = $usuarioDao->eliminarUsuario($datos);

			if ($resp) {
				$conca = 'Usuario Eliminado correctamente';
				$respuesta = array("htmloption3"=>$conca);
				echo json_encode($respuesta);
			}else{
				$conca = 'Ocurrio un error intende de nuevo';
				$respuesta = array("htmloption2"=>$conca);
				echo json_encode($respuesta);				
			}

	}

?>