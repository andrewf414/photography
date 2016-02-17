<?php
include('../inc/db_conn.php');

$IMAGE_ROOT = "..";
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
    <link href="../../bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom -->
    <link rel="stylesheet" href="../assets/css/my-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
    <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include('./navbar-view.php');
?>

<!-- MODAL FOR BIG GALLERY-->
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>-->
<!--            </div>-->
            <div class="modal-body">
                <div id="carousel-featured-images" class="carousel slide" data-ride="carousel" data-interval="4000">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <img src="../assets/img/human_nature/_MG_6110.jpg" class="img-responsive" alt="Human Nature">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="../assets/img/human_nature/_MG_6155.jpg" class="img-responsive" alt="Human Nature">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="../assets/img/human_nature/_MG_6221.jpg" class="img-responsive" alt="The Wolfe Brothers">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="../assets/img/human_nature/_MG_6224.jpg" class="img-responsive" alt="The Wolfe Brothers">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="../assets/img/human_nature/_MG_6267.jpg" class="img-responsive" alt="The Wolfe Brothers">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="../assets/img/human_nature/_MG_6189.jpg" class="img-responsive" alt="The Wolfe Brothers">
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
            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="container">

    <?php
    $landscape = array();
    $portrait = array();

    $sql = "SELECT * FROM imagePaths WHERE galleryID = 1";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $path = $IMAGE_ROOT . $row['path'];
            list($width, $height) = getimagesize($path);
            if ($width > $height) {                         // landscape
                array_push($landscape,$path);
            } else {                                        // portrait
                array_push($portrait,$path);
            }
        }
    }
    $countLandscape = count($landscape);
    $countPortrait = count($portrait);

    echo "landscape: " . $countLandscape . ", portrait: " . $countPortrait . "<br>";


    ?>
    <div class="landscape-thumb col-md-4">
        <img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6203.jpg" />
    </div>

    <div class="portrait-thumb col-md-3">
        <img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6110.jpg" data-whatever="1" />
    </div>





    <div class="row">
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6110.jpg" data-whatever="1" />
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6155.jpg" data-whatever=2 />
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6221.jpg" data-whatever="3" />
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6224.jpg" />
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6267.jpg" />
            </a>
        </div>
        <div class="col-xs-6 col-md-6">
            <div class="col-xs-12 no-pad-thumb">
                <a href="#" class="thumbnail"><img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6189.jpg" /></a>
            </div>
            <div class="col-xs-12 no-pad-thumb">
                <a href="#" class="thumbnail"><img data-target="#galleryModal" data-toggle="modal" src="../assets/img/human_nature/_MG_6203.jpg" /></a>
            </div>
        </div>
    </div>

    <?php include('./footer-view.php'); ?>
</div> <!--container-->
</body>

<script>
    $(document).ready(function () {
        $('#galleryModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var photo = button.data('whatever') // Extract info from data-* attributes
            alert(photo);
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            $('.carousel').carousel(photo);
            //var modal = $(this)
            //modal.find('#' & photo).addClass("active")
        })
    });
</script>

</html>