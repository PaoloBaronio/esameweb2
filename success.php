<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHPMailer</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <meta charset="utf-8">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col col-12">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Thank you for contacting us!</h4>
            <p><?php echo $_SESSION['SendStatus']; ?></p>
            <hr>
            <p class="mb-0"><?php echo $_SESSION['SendError'];?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col col-12">
          <div class="alert alert-info" role="alert">
            Back to <a href="index.php" class="alert-link">home</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
