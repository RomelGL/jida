<?php
require_once($_SERVER['DOCUMENT_ROOT']."/jida/"."model/dto/usuarioDto.php");
require_once($_SERVER['DOCUMENT_ROOT']."/jida/"."db/conexion.php");
class UsuarioDao{

	function listaUsuario(){
            $pdo = new Conexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET utf8"); 

            $stm  = $pdo->query("SELECT * FROM tbl_usuarios");
            $stm->execute();
            //$r = $stm->fetch(PDO::FETCH_OBJ);
            //var_dump($r);exit();

            $arrayUsuario = array();
            

            while($r = $stm->fetch(PDO::FETCH_OBJ)){
                $objUsr = new Usuario();
                $objUsr->__SET('id', $r->id);
                $objUsr->__SET('nombre', $r->nombre);
                $objUsr->__SET('email', $r->email);
                $objUsr->__SET('telefono', $r->telefono);
                $objUsr->__SET('fecha_registro', $r->fecha_registro);

                //return $objUsr;
                $arrayUsuario[] = $objUsr;
            }
		        return $arrayUsuario;	
	}
	function registroUsuario($datos){

			//$nombre = $datos['nombre'];
			//$correo = $datos['correo'];
			//$telefono = $datos['telefono'];

            $pdo = new Conexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET utf8"); 

            $query = "INSERT INTO tbl_usuarios(nombre, email, telefono) VALUES (?,?,?)";

			$stm = $pdo->prepare($query);
            $stm->execute(array($datos['nombre'],$datos['correo'],$datos['telefono']));
            	
            	if ($stm) {
            		return true;
            	}else{
            		return false;
            	}

	}

	function eliminarUsuario($datos){

        $pdo = new Conexion();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET CHARACTER SET utf8"); 

        $query = "DELETE FROM tbl_usuarios WHERE id = ?";

		$stm = $pdo->prepare($query);
        $stm->execute(array($datos['id_usuario']));
        	
        	if ($stm) {
        		return true;
        	}else{
        		return false;
        	}

	}
	function actualizarUsuario($datos){

		$id = $datos['id'];

	    $pdo = new Conexion();
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $pdo->exec("SET CHARACTER SET utf8"); 

	    $query = "UPDATE tbl_usuarios SET nombre = ?, email = ?, telefono = ? WHERE id = $id";

		$stm = $pdo->prepare($query);
	    $stm->execute(array($datos['nombre'],$datos['correo'],$datos['telefono']));
	    	
	    	if ($stm) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	}	
}
?>