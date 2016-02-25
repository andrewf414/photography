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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="../bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom -->
    <link rel="stylesheet" href="assets/css/my-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
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
            <div class="item active index-modal">
                <img src="assets/img/human_nature/_MG_6098.jpg" class="img-responsive" alt="Human Nature">
                <div class="carousel-caption"></div>
            </div>
            <div class="item index-modal">
                <img src="assets/img/human_nature/_MG_6189.jpg" class="img-responsive" alt="Human Nature">
                <div class="carousel-caption"></div>
            </div>
            <div class="item index-modal">
                <img src="assets/img/wolfe_brothers/_MG_9104.jpg" class="img-responsive" alt="The Wolfe Brothers">
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
                <img src="assets/img/passenger/.jpg" alt="Passenger">
                <div class="caption">
                    <h3>Passenger</h3>
                    <p>Passenger played at the Odeon Theatre in Hobart on 21 Feb 2016.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                       role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="assets/img/wolfe_brothers/_MG_9104.jpg" alt="The Wolfe Brothers">
                <div class="caption">
                    <h3>The Wolfe Brothers</h3>
                    <p>The Wolfe Brothers supported Lee Kernaghan on his Spirits of the Anzacs tour...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                       role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="assets/img/human_nature/_MG_6098.jpg" alt="Human Nature">
                <div class="caption">
                    <h3>Human Nature</h3>
                    <p>Human Nature played at the Wrest Point Casino as part of their Jukebox tour...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                       role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php include('views/footer-view.php'); ?>
</div> <!--container-->
</body>
</html>