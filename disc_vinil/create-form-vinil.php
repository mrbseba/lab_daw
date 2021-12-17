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
			
				$denumirea = $_POST['nume_disc'];
				$gen = $_POST['gen_muz'];
				$cantaret = $_POST['cantaret'];
				$editor = $_POST['editor'];
				$id_stare = $_POST['id_stare'];
				$anul = $_POST['anul'];

				$sql = "INSERT INTO `discuri`(`nume_disc`, `gen_muz`, `cantaret`, `editor`, `id_stare`, `anul`) VALUES ('$denumirea', '$gen', '$cantaret', '$editor', '$id_stare', '$anul')";
				mysqli_query($conn, $sql);

				// Redirect la pagina initiala
				#header("Location: collection-cars.php");
			}
		?>

		<div class="cont">
			<h2>Insereaza</h2>
			<form method="POST" action="">
				<input type="text" name="nume_disc" placeholder="Denumirea"><br>
				<input type="text" name="gen_muz" placeholder="Gen de muzică"><br>
				<input type="text" name="cantaret" placeholder="Cântărețul"><br>
				<input type="text" name="editor" placeholder="Editor"><br>
				
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
				<input type="text" name="anul" placeholder="Anul"><br>		
				
				<input type="submit" name="adaug" value="Creaza" >
			</form>
			<a href="http://localhost/DAW/disc_vinil/vinil.php"> <h4>ColectiaTa</h4> </a>
		</div>
</body>
</html>

