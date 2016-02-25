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


<?php
//if(isset($_POST['submit'])){
//    $to = "andrewhfitz@gmail.com"; // this is your Email address
//    $from = $_POST['email']; // this is the sender's Email address
//    $name = $_POST['name'];
//    $subject = $_POST['subject'];
//    $subject2 = "Copy of your form submission";
//    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
//    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
//
//    $headers = "From:" . $from;
//    $headers2 = "From:" . $to;
//    mail($to,$subject,$message,$headers);
//    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
//    // You can also use header('Location: thank_you.php'); to redirect to another page.
//}
?>


<div class="container">

    <div class="col-md-2 col-md-offset-1">
        <h4>Get in touch</h4>
    </div>

    <div class="col-md-5 col-md-offset-1">
        <form class="form" action="" method="post">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputSubject">Subject</label>
                <input type="text" class="form-control" id="inputSubject" name="subject" placeholder="Subject">
            </div>
            <div class="form-group">
                <label for="inputMessage">Name</label>
                <textarea class="form-control" id="inputMessage" name="message" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default">Send</button>
            </div>
        </form>
    </div>

    <?php include('./footer-view.php'); ?>
</div> <!--container-->


</body>

<script>

    $(document).ready(function () {
    });

</script>

</html>