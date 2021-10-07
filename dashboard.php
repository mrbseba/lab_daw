<?php

include_once 'session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Colections</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/index.css" rel="stylesheet">
</head>
<body>

        <!-- Begin Nav
        ================================================== -->
        <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="index.html">
            <img src="poze/logo.png" alt="logo">
            </a>
            <!-- End Logo -->
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <!-- Begin Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.html">Colecțiile mele <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Creare colecție</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Despre noi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Ieșire</a>
                    </li>
                </ul>
                <!-- End Menu -->
            </div>
        </div>
        </nav>
        <!-- End Nav ================================================== -->

        <!-- Begin Site Title   ================================================== -->
        <div class="container">
            <div class="mainheading">
                <h1 class="sitetitle">ICollections</h1>
                <p class="lead">
                    ”Mulţi fac colecţii de şerveţele, nimeni nu colecţionează idei.” - <bold>Harry Ross</bold>
                </p>
            </div>
        <!-- End Site Title ================================================== -->

            <!-- Begin Featured
            ================================================== -->
            <section class="featured-posts">
            <div class="section-title">
                <h2><span>Colecțiile mele</span></h2>
            </div>
            <div class="card-columns listfeaturedtag">

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="#">
                                <div class="thumbnail" style="background-image:url(poze/timbre.jpg);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="#">TIMBRE</a></h2>
                                <h4 class="card-text">Aici se pastrează colecția de timbre. Se vor include timbrele din orice tara si orice an de creare. </h4>
                                <div class="metafooter">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="#">
                                <div class="thumbnail" style="background-image:url(poze/moneda.jpg);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="#">MONEDE</a></h2>
                                <h4 class="card-text">Aici se pastrează colecția de monede. Se vor include monedele din orice tara si orice an de creare, dar si monedele vor fi ata din argint, aur bronz cit si platina </h4>
                                <div class="metafooter">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="#">
                                <div class="thumbnail" style="background-image:url(poze/masini.jpg);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="#">MAȘINI-JUCĂRII</a></h2>
                                <h4 class="card-text">Aici se pastrează colecția de mașini. Se vor include mașinile din orice tara si orice an de creare, si orice material(plastic, metal). </h4>
                                <div class="metafooter">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->
            </div>
            </section>
            <!-- End Featured   ================================================== -->

        </div>
        <!-- /.container -->

        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
