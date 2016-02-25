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

    <![endif]-->
</head>
<body>
<?php
include('./navbar-view.php');
?>


<div class="container gallery">


<!--    --><?php
//    $galleryID = $_GET['gallery'];
//    $landscape = array();
//    $portrait = array();
//    $sql = "SELECT * FROM imagePaths WHERE galleryID = $galleryID";
//    $result = $mysqli->query($sql);
//
//    if ($result->num_rows > 0) {
//        while ($row = $result->fetch_assoc()) {
//            $path = $IMAGE_ROOT . $row['path'];
//            list($width, $height) = getimagesize($path);
//            if ($width > $height) {                             // landscape
//                array_push($landscape,$path);
//                } else {                                        // portrait
//                array_push($portrait,$path);
//                }
//        }
//    }
//    $countLandscape = count($landscape);
//    $countPortrait = count($portrait);
//    echo "landscape: " . $countLandscape . ", portrait: " . $countPortrait . "<br>";
//
//    ?>




    <?php
    $galleryID = $_GET['gallery'];
    $images = array();

    $sql = "SELECT * FROM imagePaths WHERE galleryID = $galleryID";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $path = $IMAGE_ROOT . $row['path'];
            array_push($images, $path);
        }
    }

    for ($i = 0; $i < count($images); $i++) {
        echo "<div class='gallery-thumb'><img data-target=\"#galleryModal\" data-toggle=\"modal\" src=\"$images[$i]\" data-whatever=$i /></div>";
    }
    ?>


    <?php include('./footer-view.php'); ?>
</div> <!--container-->


<!-- MODAL FOR BIG GALLERY-->
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div id="gallery-carousel" class="carousel slide" data-ride="carousel" data-interval="4000" data-keyboard="true">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                        for ($i = 0; $i < count($images); $i++) {
                            echo "<div class=\"item gallery-modal\" id=\"image$i\">
                                    <img src=\"$images[$i]\" class=\"img-responsive\" alt=\"Human Nature\">
                                    <div class=\"carousel-caption\"></div>
                                </div>";
                        }
                        ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#gallery-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#gallery-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</body>

<script>

    $(document).ready(function () {
        var previousPhoto;
        $('#galleryModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var photo = button.data('whatever') // Extract info from data-* attributes

            $('.carousel').carousel(photo);
            var modal = $(this);
            modal.find('#image' + photo).addClass("active");            // set active the one clicked
            modal.find('#image' + previousPhoto).removeClass("active"); // unset active so that it doesn't make a long modal
            previousPhoto = photo;
        })

        // make controls work
        $('.carousel-control.left').click(function() {
            $('#gallery-carousel').carousel('prev');
        });

        $('.carousel-control.right').click(function() {
            $('#gallery-carousel').carousel('next');
        });
    });

</script>

</html>