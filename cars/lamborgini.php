<?php
include_once 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single Product</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
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

</head>
<body>
	
	<!--PreLoader
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>-->
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
						<nav class="main-menu" align = "right">
							<ul>
								<li class="current-list-item"><a href="http://localhost/DAW/home/index.php">Acasă</a></li>
								<li><a href="http://localhost/DAW/about.php">Despre Noi</a></li>
								<li><a href="http://localhost/DAW/contact.php">Contacte</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="login.php"><i class="fas fa-exit-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>LAMBORGHINI URUS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container" id="lamborgini">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="assets/img/products/lamborgini.jpg" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
					<?php	
						//fisier de conecatar
						include_once 'db_connect.php';
						
						$conn = mysqli_connect($servername, $username, $password, $dbname);

						if(!$conn){
							die("Eroare de conexiune: " . mysqli_connect_error());
						}

						#$sql = "SELECT * FROM `masini`";
						$sql = "SELECT * FROM `masini` WHERE `id_ma` = '2'";

						$result = mysqli_query($conn, $sql);

						//Veriificarea daca sunt inregistrari in tabel
						if(mysqli_num_rows($result) > 0)
						{
							//informa'ia din tabele	
					echo' <table>';

					//afisarea daatelor
					while($row = mysqli_fetch_assoc($result))
					{
						#afisarea datelor din baza de date
						echo '<tr>
								<td> <p> Greutatea &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </p></td>
								<td>'.$row ['greutate'].'</td>
							</tr>';
						echo '
						<tr>
							<td> Marimea </td>
							<td>'.$row ['dimensiune'].'</td>
						</tr>';
						
						echo'
						<tr>
						<td> Brand </td>
						<td>'.$row ['brand'].'</td>
						</tr>';
						
						echo'
						<tr>
						<td> Starea </td>
						<td>'.$row ['id_stare'].'</td>
						</tr>';
						
						echo'
						<tr>
						<td> Anul </td>
						<td>'.$row ['anul'].'</td>
						</tr>';

						}	
						echo '</table>';
						  
						} else{
							echo "Nu sunt date";
						}
						
						?>

						
						  <p>Lamborghini Urus este primul vehicul utilitar Super Sport din lume care îmbină sufletul unei mașini super sport cu funcționalitatea unui SUV. Propulsat de un motor V8 twin-turbo 
							  de 4,0 litri care produce 650 CV și 850 Nm cuplu, Urus accelerează de la 0 la 62 mph în 3,6 secunde și atinge o viteză maximă de 190 mph. Designul, performanța, dinamica de conducere 
							  și emoția de conducere curg fără efort în această abordare vizionară a ADN-ului Lamborghini.</p>
						
							  <div class="single-product-form">
							<a href="http://localhost/DAW/cars/edit_lamborgini.php?id=2" class="cart-btn" type = "submit" name = "edit" value = "Edit">Modificare</a> <br>
							<a href="http://localhost/DAW/cars/delete_lamborgini.php?id=2" class="cart-btn" type = "submit" name = "edit" value = "">Ștergere</a>
	
						</div>
				
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Despre Noi </h2>
						<p>Aceasta aplicație este creată cu drag de echipa noastră pentru a ușora viașa colecționerilor.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Contactați-ne</h2>
						<ul>
							<li>albot.elena@iis.utm.md</li>
							<li>bejan.elena@iis.utm.md</li>
							<li>barimb.eusebiu@iis.utm.md</li>
						</ul>
						<div class="social-icons">
							<ul>
								<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pagini</h2>
						<ul>
							<li><a href="http://localhost/DAW/home/.php">Acasă</a></li>
							<li><a href="http://localhost/DAW/about.php">Despre Noi</a></li>
							<li><a href="http://localhost/DAW/contact.php">Contacte</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Înscriete la notificări</h2>
						<p>Abonează-te la lista noastră de corespondență pentru a obține cele mai recente actualizări.</p>
						<form action="http://localhost/DAW/home/index.php">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
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