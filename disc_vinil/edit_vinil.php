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
            $denumire = $_POST['nume_disc'];
			$gen = $_POST['gen_muz'];
			$cantaret = $_POST['cantaret'];
			$editor = $_POST['editor'];
			$id_stare = $_POST['id_stare'];
			$anul = $_POST['anul'];
            $id = $_GET['id'];
            $sql = "UPDATE `discuri` SET `nume_disc`= '$denumire', `gen_muz`= '$gen', `cantaret`= '$cantaret', `editor` = '$editor', `id_stare`= '$id_stare', `anul`= '$anul' WHERE `id_disc` = '$id'";
			mysqli_query($conn, $sql);
		}

		// Verificam daca a fost transmis un ID prin metoda GET
		if($_GET['id']){ 
            $id = $_GET['id'];
			$sql = "SELECT * FROM `discuri` WHERE `id_disc` = '$id'";
			$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
		?>
		<div class="cont">
			<h2>Editeaza</h2>
			<form method="POST" action="">
				<input type="text" name="nume_disc" value="<?=$result['nume_disc']?>"><br>
				<input type="text" name="gen_muz" value="<?=$result['gen_muz']?>"><br>
				<input type="text" name="cantaret" value="<?=$result['cantaret']?>"><br>
				<input type="text" name="editor" value="<?=$result['editor']?>"><br>
				<input type="text" name="id_stare" value="<?=$result['id_stare']?>"><br>
				<input type="text" name="anul" value="<?=$result['anul']?>"><br>

				<input type="submit" name="edit" value="Edit" >
			</form>
			<a href="http://localhost/DAW/disc_vinil/vinil.php"><h4>Termina editarea</h4></a>
		</div>
		<?php
			mysqli_close($conn);
		}
	?>
</body>
</html>
