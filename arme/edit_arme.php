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
            $denumire = $_POST['nume_arm'];
			$tip = $_POST['tip'];
			$model = $_POST['model'];
			$calibru = $_POST['calibru'];
			$greutate = $_POST['greutate'];
			$capacitate = $_POST['capacitate'];
			$id_stare = $_POST['id_stare'];
            $id = $_GET['id'];
            $sql = "UPDATE `arme` SET `nume_arm`= '$denumire', `tip`= '$tip', `model`= '$model', `calibru`= '$calibru', `greutate`= '$greutate', `capacitate`= '$capacitate', `id_stare`= '$id_stare' WHERE `id_arm` = '$id'";
			mysqli_query($conn, $sql);
		}

		// Verificam daca a fost transmis un ID prin metoda GET
		if($_GET['id']){ 
            $id = $_GET['id'];
			$sql = "SELECT * FROM `arme` WHERE `id_arm` = '$id'";
			$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
		?>
		<div class="cont">
			<h2>Editeaza</h2>
			<form method="POST" action="">
				<input type="text" name="nume_arm" value="<?=$result['nume_arm']?>"><br>
				<input type="text" name="tip" value="<?=$result['tip']?>"><br>
				<input type="text" name="model" value="<?=$result['model']?>"><br>
				<input type="text" name="calibru" value="<?=$result['calibru']?>"><br>
				<input type="text" name="greutate" value="<?=$result['greutate']?>"><br>
				<input type="text" name="capacitate" value="<?=$result['capacitate']?>"><br>
				<input type="text" name="id_stare" value="<?=$result['id_stare']?>"><br>
				
				<input type="submit" name="edit" value="Edit" >
			</form>
			<a href="http://localhost/DAW/arme/arme.php"><h4>Termina editarea</h4></a>
		</div>
		<?php
			mysqli_close($conn);
		}
	?>
</body>
</html>
