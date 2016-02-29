<?php
include('inc/db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Andrew Fitzgerald</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'  type='text/css'>
    <!-- Custom -->
    <link rel="stylesheet" href="assets/css/my-style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.12.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include('views/navbar-alt-view.php');
?>

<div class="container">

    <!--Jumbotron to contain featured photos-->
    <div id="carousel-featured-images" class="carousel slide" data-ride="carousel" data-interval="4000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-featured-images" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-featured-images" data-slide-to="1"></li>
            <li data-target="#carousel-featured-images" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active index-carousel">
                <img src="assets/img/passenger/_MG_3257.jpg" class="img-responsive" alt="Passenger">
                <div class="carousel-caption"></div>
            </div>
            <div class="item index-carousel">
                <img src="assets/img/mark_seymour_undertow/_MG_1640.jpg" class="img-responsive" alt="Mark Seymour and the Undertow">
                <div class="carousel-caption"></div>
            </div>
            <div class="item index-carousel">
                <img src="assets/img/lee_kernaghan/_MG_9634.jpg" class="img-responsive" alt="Lee Kernaghan">
                <div class="carousel-caption"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-featured-images" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-featured-images" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!--Recent Posts-->
    <h2>Recent Posts</h2>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="assets/img/passenger/_MG_3182.jpg" alt="Passenger">
                <div class="caption">
                    <h3>Passenger</h3>
                    <p>Passenger played at the Odeon Theatre in Hobart on 21 Feb 2016, supported by All Our Exes Live in Texas and Luke Thompson.</p>
                    <p><a href="views/gallery-view.php?gallery=11" class="btn btn-default" role="button">Full Gallery</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="assets/img/jimmy_barnes/_MG_2922.jpg" alt="Jimmy Barnes">
                <div class="caption">
                    <h3>Red Hot Summer Tour</h3>
                    <p>The Red Hot Summer Tour was a collection of Australia Rock, with Jimmy Barnes, Noiseworks, The Angels, and Mark Seymour featuring in the show.
                    Individual galleries are available for them all.</p>
                    <p><a href="views/gallery-view.php?gallery=8" class="btn btn-default" role="button">Jimmy Barnes</a>&nbsp
                        <a href="views/gallery-view.php?gallery=10" class="btn btn-default" role="button">Noiseworks</a>&nbsp
                        <a href="views/gallery-view.php?gallery=7" class="btn btn-default" role="button">The Angels</a></p>
                    <p><a href="views/gallery-view.php?gallery=9" class="btn btn-default" role="button">Mark Seymour</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="assets/img/lee_kernaghan/_MG_9634.jpg" alt="Lee Kernaghan">
                <div class="caption">
                    <h3>Lee Kernaghan</h3>
                    <p>Lee Kernaghan brought his Story of the Anzacs tour to Hobart, accompanied by the Wolfe Brothers and Christie Lamb.</p>
                    <p><a href="views/gallery-view.php?gallery=6" class="btn btn-default" role="button">Full Gallery</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php include('views/footer-view.php'); ?>
</div> <!--container-->
</body>
</html>