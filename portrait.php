<?php session_start();
$_SESSION['paginaCorrente'] = 'Portrait';
?>
<html lang="en">

<head>
  <title>Portrait</title>
  <?php include 'inc/head.inc.php'; ?>
</head>

<body>
  <?php include 'inc/menu.php'; ?>


<!-- Galleria -->

  <div class="container-fluid">
    <div class="row"> 
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <img src="assets/images/portrait4.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait5.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait6.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait7.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait8.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait9.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait10.jpeg"  class="img-fluid carta">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <img src="assets/images/portrait11.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait12.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait13.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait14.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait15.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait16.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait17.jpeg"  class="img-fluid carta">
        </div>  
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <img src="assets/images/portrait18.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait19.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait20.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait21.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait22.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait23.jpeg"  class="img-fluid carta">
            <img src="assets/images/portrait24.jpeg"  class="img-fluid carta">
        </div>
    </div>
</div>

<!-- Fine Galleria -->




<!-- Quote -->
<div class="container">
    <div class="row">
        <div class=" col-12 mt-5 my-5 quote">
            <h2 class="Text text-center display-5"> When you take a photograph of someone, <br> you take a portrait of their soul </h2>
        </div>
    </div>
</div>

<!-- END Quote -->








  <?php include 'inc/footer.inc.php'; ?>

</body>

</html>