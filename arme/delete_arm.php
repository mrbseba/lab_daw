<?php
	// Fisierul de configurare
	require_once 'db_connect.php';

	// Crearea conexiunii
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Verificam daca a fost transmis un ID prin metoda GET
	if($_GET['id']){
		$id = $_GET['id'];
		$sql = "DELETE FROM `arme` WHERE `id_arm` = $id";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
	}

	// Redirect la pagina initiala
	header('Location: http://localhost/DAW/arme/arme.php');

?>