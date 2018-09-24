<?php
require_once($_SERVER['DOCUMENT_ROOT']."/jida/"."model/dao/usuarioDao.php");

	if (isset($_GET['nombre']) and isset($_GET['nombre'])!=null
		and isset($_GET['correo']) and isset($_GET['correo'])!=null
			and isset($_GET['telefono']) and isset($_GET['telefono'])!=null) {

			$id =  $_GET['id'];
			$nombre =  $_GET['nombre'];
			$correo =  $_GET['correo'];
			$telefono =  $_GET['telefono'];

			//echo "hola";exit();
			header("Location: ../view/Vmodificar.php?nombre=$nombre&correo=$correo&telefono=$telefono&id=$id");

	}

?>