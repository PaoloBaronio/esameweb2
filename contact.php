<?php session_start();
  $_SESSION['paginaCorrente'] = 'Contact';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Contatti</title>
  <?php include 'inc/head.inc.php'; ?>
</head>

<body>
  <?php include 'inc/menu.php'; ?>

<!-- Header -->
<div class="backgroundHeader">
<div class="container mt-5 pt-3">
  <div class="row justify-content-center">
<div class="col bg-white mt-5 text-dark">
<div class="container">
<div class="row mt-5">
        <div class="col d-flex justify-content-center pb-5">
          <form action="submit.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="firstname">Name</label>
              <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstnameHelp">
              <small id="firstnameHelp" class="form-text text-muted">Type your name</small>
            </div>
            <div class="form-group">
              <label for="lastname">Surname</label>
              <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp">
              <small id="lastnameHelp" class="form-text text-muted">Type your name</small>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">Type your email</small>
            </div>
            <div class="form-group">
              <label for="msg">Message</label>
              <textarea type="text" class="form-control" id="msg" name="msg" required></textarea>
              <small id="msgHelp" class="form-text text-muted">Type your message</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Are you interested in a course? If yes, which one?</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Black & White Photography Course</option>
                <option>Portrait Photography Course</option>
                </select>
            </div>            
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="privacy" name="privacy" required>
              <label class="form-check-label" for="privacy">I consent to the processing of personal data according to the clauses specified in the privacy</label>
            </div>
            <button type="submit" class="btn btn-outline-tertiary">Submit Request</button>
          </form>
        </div>
      </div>
</div>
</div>
</div>
</div>
</div>

<div class="row" style="height:100px;">
  <div class="col-12"></div>
</div>

<?php include 'inc/footer.inc.php'; ?>


  <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
