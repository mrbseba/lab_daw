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
			$denumire = $_POST['marca'];
            $greutate = $_POST['greutate'];
			$dimensiune = $_POST['dimensiune'];
			$brand = $_POST['brand'];
			$id_stare = $_POST['id_stare'];
			$anul = $_POST['anul'];
            $id = $_GET['id'];
            $sql = "UPDATE `masini` SET `marca` = '$denumire', `greutate`= '$greutate',`dimensiune`= '$dimensiune',`brand`= '$brand',`id_stare`= '$id_stare', `anul`= '$anul' WHERE `id_ma` = '$id'";
			mysqli_query($conn, $sql);
		}

		// Verificam daca a fost transmis un ID prin metoda GET
		if($_GET['id']){ 
            $id = $_GET['id'];
			$sql = "SELECT * FROM `masini` WHERE `id_ma` = '$id'";
			$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
		?>
		<div class="cont">
			<h2>Editeaza</h2>
			<form method="POST" action="">
				<input type="text" name="marca" value="<?=$result['marca']?>"><br>
				<input type="text" name="greutate" value="<?=$result['greutate']?>"><br>
				<input type="text" name="dimensiune" value="<?=$result['dimensiune']?>"><br>
				<input type="text" name="brand" value="<?=$result['brand']?>"><br>
				<?php
				$mysqli = NEW MySQLi('localhost', 'root', 'seukbfvgzxpoqa4m9s', 'daw_pro');
				$resultSet = $mysqli-> query("SELECT * FROM stare");
  			?>
 
 			<select  class="cont" name="id_stare" style="text-decoration:none;">
    		<option ></option>
   		
		   <?php
			while($row = $resultSet->fetch_assoc())
			{
			$nume_stare = $row['nume_stare'];
			$id_stare = $row['id_stare'];
			echo "<option value='$id_stare'> $nume_stare </option>";
			}
			?>
  			 </select>	

			   <br>
				<input type="text" name="anul" value="<?=$result['anul']?>"><br>

				<input type="submit" name="edit" value="Edit" >
			</form>
			<a href="http://localhost/DAW/cars/collection-cars.php"><h4>Termina editarea</h4></a>
		</div>
		<?php
			mysqli_close($conn);
		}
	?>
</body>
</html>
