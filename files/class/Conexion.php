<?php

	Class Conexion {

		public static function conectar() {
			$servidor = "localhost";
			$database = "CBTIS255";
			$user = "root";
			$password = "Eva-00";
			$con = mysqli_connect($servidor, $user, $password, $database)or die('Error al conectar a la Base de Datos :(');
				//mysqli_select_db($database) or die("La base de datos no existe X(");
				return $con;	
		}
	}

?>