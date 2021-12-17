<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ColectiaTa</title>
	<link rel="stylesheet" href="http://localhost/DAW/styles.css">
</head>
<body>
		
		<?php
			// Fisierul de configurare
			require_once 'db_connect.php';
			// Crearea conexiunii
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if(!$conn)
			{
				die("Eroare de conexiune: " . mysqli_connect_error());
			}

			
			if(isset($_POST['adaug'])){
			
				$denumire = $_POST['numele'];
				

				$sql = "INSERT INTO `colectii`(`nume_colectie`) VALUES ('$denumire')";
				mysqli_query($conn, $sql);

				// Redirect la pagina initiala
				#header("Location: collection-cars.php");
			}
		?>

		<div class="cont">
			<h2>Insereaza</h2>
			<form method="POST" action="">
				<input type="text" name="numele" placeholder="Denumirea"><br>
				
				<input type="submit" name="adaug" value="Crează" >
			</form>
			<a href="http://localhost/DAW/home/index.php"> <h4>ColectiaTa</h4> </a>
		</div>
</body>
</html>

