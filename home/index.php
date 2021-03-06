<?php
#include_once 'http://localhost/DAW/session.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>ColectiaTA</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="http://localhost/DAW/assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="http://localhost/DAW/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="http://localhost/DAW/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="http://localhost/DAW/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="http://localhost/DAW/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="http://localhost/DAW/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="http://localhost/DAW/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="http://localhost/DAW/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="http://localhost/DAW/assets/css/responsive.css">
	<!--propstyle-->
	<link rel="stylesheet" href="http://localhost/DAW/styles.css">

</head>
<body>

	<!--PreLoader-->
	<div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="http://localhost/DAW/assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu" align="right">
							<ul>
								<li class="current-list-item"><a href="http://localhost/DAW/home/index.php">Acas??</a></li>
								<li><a href="http://localhost/DAW/about.php">Despre Noi</a></li>
								<li><a href="http://localhost/DAW/contact.php">Contacte</a></li>
								
							</ul>
						</nav>
					
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- product section -->
	
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Colec??ia</span> TA</h3>
						<p>Mul??i fac colec??ii de ??erve??ele, nimeni nu colec??ioneaz?? idei.</p>
						<a href="http://localhost/DAW/home/create-form-index.php" class="cart-btn">Creare colec??ie nou??</a>	
						<br>
						
						<?php
								//fisier de conecatar
								include_once 'db_connect.php';
								
								$conn = mysqli_connect($servername, $username, $password, $dbname);

								if(!$conn){
									die("Eroare de conexiune: " . mysqli_connect_error());
								}

								//afisare masinei
								$sql = "SELECT * FROM `colectii`";
								$result = mysqli_query($conn, $sql);
								
								
								//Veriificarea daca sunt inregistrari in tabel
								if(mysqli_num_rows($result) > 0)
								{
									//informa'ia din tabele	
								echo '<table>';
								echo '
								<tr> 
									<th>Imagine</th>
									<th>Colec??ia Proprii</th>
									<th>Modific??</th>
									<th>??terge</th>
								
									
								</tr>';
								
								//afisarea daatelor
								while($row = mysqli_fetch_assoc($result)) 
								{
									#afisarea datelor din baza de date
									echo '
									<tr>
									<td> <img src="http://localhost/DAW/assets/img/colections/colect.png"  width="100" height="100"></td>
									<td>'.$row ['nume_colectie'].'</td>
									<td><a class="button1" href="http://localhost/DAW/home/edit_index.php?id='.$row['id_colectie'].'" >Edit</a></td>
									<td><a class="button2" href="http://localhost/DAW/home/delete_index.php?id='.$row['id_colectie'].'" >Delete</a></td>
									
									</tr>
									';

									}	
									echo '
									
									</table>
									<br>
									<a href="http://localhost/DAW/cars/collection-cars.php"> <button  class="cart-btn type="button"> Ma??ini </button></a>
									<a href="http://localhost/DAW/disc_vinil/vinil.php"> <button  class="cart-btn type="button"> Discuri Vinil </button></a>
									<a href="http://localhost/DAW/arme/arme.php"> <button  class="cart-btn type="button"> Arme </button></a>
									';
									
									} else{
										echo "Nu sunt date";
									}
									
									?>
						</div>					
					</div>
				</div>
			</div>
</div>
			
	<!-- end product section -->

		<!-- product section -->
		<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Colec??ii</span> Existente</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="collection-cars.php"><img src="http://localhost/DAW/assets/img/colections/carti.jpg" alt=""></a>
						</div>
						<h3>C??r??i</h3>
						<a href="collection-books.php" class="cart-btn">Vezi elementele</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="collection-vinil.php"><img src="http://localhost/DAW/assets/img/colections/monede.jpg" alt=""></a>
						</div>
						<h3>Monede</h3>
						<a href="collection-monede.php" class="cart-btn">Vezi elementele</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="collection-vinuri.php"><img src="http://localhost/DAW/assets/img/colections/vinuri.jpg" alt=""></a>
						</div>
						<h3>Vinuri</h3>
						<a href="collection-vinuri.php" class="cart-btn">Vezi elementele</a> <br>
					</div>
				</div>

				
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="collection-machete.php"><img src="http://localhost/DAW/assets/img/colections/avioane.jpg" alt=""></a>
						</div>
						<h3>Machete Avioane-Elicoptere</h3>
						<a href="collection-machete.php" class="cart-btn">Vezi elementele</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="collection-minerale.php"><img src="http://localhost/DAW/assets/img/colections/minerale.jpg" alt=""></a>
						</div>
						<h3>Minerale</h3>
						<a href="collection-minerale.php" class="cart-btn">Vezi elementele</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="collection-figurine.php"><img src="http://localhost/DAW/assets/img/colections/figurine.jpg" alt=""></a>
						</div>
						<h3>Figurine Lord of the Rings</h3>
						<a href="collection-figurine.php" class="cart-btn">Vezi elementele</a>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- footer start -->							
	<?php
	require_once('C:\Apache24\htdocs\daw\footer.php');
	?>
	<!-- end footer -->

	<!-- jquery -->
	<script src="http://localhost/DAW/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="http://localhost/DAW/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="http://localhost/DAW/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="http://localhost/DAW/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="http://localhost/DAW/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="http://localhost/DAW/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="http://localhost/DAW/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="http://localhost/DAW/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="http://localhost/DAW/assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="http://localhost/DAW/assets/js/main.js"></script>

</body>
</html>
