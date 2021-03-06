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
	<link rel="shortcut icon" type="image/png" href="daw/assets/img/favicon.png">
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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
						<h3><span class="orange-text">Ma??ini</span> Mini</h3>
						<a href="http://localhost/DAW/cars/create-form-lamborgini.php" class="cart-btn">Creaz?? o ??nregistrare</a>
						<br>
						<br>
						

						<div class="input-group">
								<input type="text" name="search_text" id="search_text" placeholder="C??utare" class="form-control" autocomplete="off"/>
						</div>
					
						<br>
						
						<div id="result"></div>
						
						</div>

					</div>
					</div>
				</div>
			</div>
</div>

	<!-- footer -->
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


			<script>
							$(document).ready(function(){

							load_data();

							function load_data(query)
							{
							$.ajax({
							url:"fetch.php",
							method:"POST",
							data:{query:query},
							success:function(data)
							{
								$('#result').html(data);
							}
							});
							}
							$('#search_text').keyup(function(){
							var search = $(this).val();
							if(search != '')
							{
							load_data(search);
							}
							else
							{
							load_data();
							}
							});
							});
			</script>

