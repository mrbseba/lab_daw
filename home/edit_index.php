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
		
        // Verificam daca a fost transmisa forma cu datele de modificare
		if(isset($_POST['edit']) && $_GET['id'])
        { 
            $colectie = $_POST['nume_colectie'];
			$id = $_GET['id'];
            $sql = "UPDATE `colectii` SET `nume_colectie`= '$colectie' WHERE `id_colectie` = '$id'";
			mysqli_query($conn, $sql);
		}

		// Verificam daca a fost transmis un ID prin metoda GET
		if($_GET['id']){ 
            $id = $_GET['id'];
			$sql = "SELECT * FROM `colectii` WHERE `id_colectie` = '$id'";
			$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
		?>
		<div class="cont">
			<h2>Editeaza Colectia</h2>
			<form method="POST" action="">
				<input type="text" name="nume_colectie" value="<?=$result['nume_colectie']?>"><br>

				<input type="submit" name="edit" value="Edit" >
			</form>
			<a href="http://localhost/DAW/home/index.php"><h4>Termina editarea</h4></a>
		</div>
		<?php
			mysqli_close($conn);
		}
	?>
</body>
</html>
