<?php
require_once "conexion.php";
Class ModeloFuentePoder {
static public function listarFuentePoderMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$sql -> execute();
		return $sql -> fetchAll();
	}
	static public function mdlCrearFuentePoder($tabla, $datos,$rutaImagen) {
		$sql = Conexion::conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :marca,:amperaje,:corriente,:precio,:imagen)");
		$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$sql->bindParam(":amperaje", $datos["amperaje"], PDO::PARAM_STR);
		$sql->bindParam(":corriente", $datos["corriente"], PDO::PARAM_STR);
	    $sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$sql->bindParam(":imagen", $rutaImagen, PDO::PARAM_STR);
		if( $sql -> execute() ) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEliminarFuentePoder($tabla, $id_fuentepoder) {
		$sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_fuentepoder = :id");
		$sql->bindParam(":id", $id_fuentepoder, PDO::PARAM_INT);
		if( $sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
	static public function mdlEditarFuentePoder($tabla, $id_fuentepoder) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_fuentepoder = :id");
		$sql->bindParam(":id", $id_fuentepoder, PDO::PARAM_INT);
		$sql -> execute();
		return $sql -> fetch();
	}
	static public function mdlActualizarFuentePoder($tabla, $datos,$rutaImagen) {
		if( is_null($rutaImagen)) {
			$sql = Conexion::conectar()->prepare("UPDATE $tabla SET marca = :marca,amperaje =:amperaje,corriente =:corriente,precio = :precio WHERE id_fuentepoder = :id");
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":amperaje", $datos["amperaje"], PDO::PARAM_STR);
			$sql->bindParam(":corriente", $datos["corriente"], PDO::PARAM_STR);
		    $sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_fuentepoder"], PDO::PARAM_INT);
}else{
		$sql = Conexion::conectar()->prepare("UPDATE $tabla SET marca = :marca,amperaje =:amperaje,corriente =:corriente,precio = :precio,rutaImg =:rutaNueva WHERE id_fuentepoder = :id");
			$sql->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
			$sql->bindParam(":amperaje", $datos["amperaje"], PDO::PARAM_STR);
			$sql->bindParam(":corriente", $datos["corriente"], PDO::PARAM_STR);
		    $sql->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
			$sql->bindParam(":rutaNueva", $rutaImagen, PDO::PARAM_STR);
			$sql->bindParam(":id", $datos["id_fuentepoder"], PDO::PARAM_INT);
}

		if($sql->execute()) {
			return "ok";
		} else {
			return "error";
		}
	}
}


?>