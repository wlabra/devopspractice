<?php
	$host = 'db';
	$user = 'root';
	$pass = getenv('MYSQL_ROOT_PASSWORD');
	$db = 'mi_blog';

	$conn = new mysqli($host, $user, $pass, $db);
	if ($conn -> connect_error) {
		die("Error de conexion: ". $conn->connect_error);
	}
	echo "Conexion exitosa a MariaDB! La base de datos está respondiendo."
?>
