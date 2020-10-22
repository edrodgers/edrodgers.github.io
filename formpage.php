<?php


if($_POST["message"]) {


mail("edrodgersdev@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDR Development</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Asul&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />

    <!-- <script src="/js/form.js"></script> -->
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>ED RODGERS</h1>
            <h2>Front-End Web Developer</h2>
            <h2>Cleveland, OH</h2>
        </header>
        <!-- Form Started -->
        <div class="container form-top">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <form id="reused_form" method="post" action="formpage.php">
                                <div class="form-group">
                                    <label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
                                    <textarea rows="3" name="message" class="form-control"
                                        placeholder="Type Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-raised btn-block btn-danger" type="submit">Post &rarr;</button>
                                </div>
                            </form>
                            <div id="error_message" style="width:100%; height:100%; display:none; ">
                                <h4>
                                    Error
                                </h4>
                                Sorry there was an error sending your form.
                            </div>
                            <div id="success_message" style="width:100%; height:100%; display:none; ">
                                <h2>Success! Your Message was Sent Successfully.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form Ended -->
    </div>
</body>

</html>