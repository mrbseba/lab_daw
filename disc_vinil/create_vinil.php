<?php
	// Fisierul de configurare
	require_once 'db_connect.php';
	
	if(!$conn)
	{
		die("Eroare de conexiune: " . mysqli_connect_error());
	}

	// Crearea conexiunii
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if($_POST['adaug']){
	
		$marca = $_POST['marca'];
		$greutate = $_POST['greutate'];
		$dimensiune = $_POST['dimensiune'];
		$brand = $_POST['brand'];
		$id_stare = $_POST['id_stare'];
		$anul = $_POST['anul'];

		$sql = "INSERT INTO `masini`(`marca`, `greutate`, `dimensiune`, `brand`) VALUES ('$marca', '$greutate', '$dimensiune', '$brand')";
		mysqli_query($conn, $sql);

		// Redirect la pagina initiala
		header("Location: http://localhost/DAW/cars/collection-cars.php");
	}
?>

