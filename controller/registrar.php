<?php
require_once($_SERVER['DOCUMENT_ROOT']."/jida/"."model/dao/usuarioDao.php");

	if (isset($_POST['nombre']) and isset($_POST['nombre'])!=null
		and isset($_POST['correo']) and isset($_POST['correo'])!=""
		 and isset($_POST['telefono']) and isset($_POST['telefono'])!="") {


			$datos['nombre'] =  $_POST['nombre'];
			$datos['correo'] =  $_POST['correo'];
			$datos['telefono'] =  $_POST['telefono'];

			$usuarioDao = new UsuarioDao();
			$resp = $usuarioDao->registroUsuario($datos);

			if ($resp) {
				$conca = 'Usuario registrado correctamente';
				$respuesta = array("htmloption3"=>$conca);//Codigo Invalido
				echo json_encode($respuesta);
			}else{
				$conca = 'Ocurrio un error intende de nuevo';
				$respuesta = array("htmloption2"=>$conca);//Codigo Invalido
				echo json_encode($respuesta);				
			}

	}

?>