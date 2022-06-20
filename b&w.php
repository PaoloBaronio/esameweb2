<?php session_start();
$_SESSION['paginaCorrente'] = 'b&w';
?>
<html lang="en">

<head>
  <title>B&W</title>
  <?php include 'inc/head.inc.php'; ?>
</head>

<body>
  <?php include 'inc/menu.php'; ?>

<!-- Quote B&W -->
<div class="container">
    <div class="row">
        <div class=" col-12 mt-5 my-5 quote">
            <h2 class="Text text-center display-5"> Color is descriptive. <br> Black and white is interpretive. </h2>
        </div>
    </div>
</div>

<!-- END Quote B&W -->

<!-- Galleria B&W -->

<div class="container-fluid">
    <div class="row"> 
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <img src="assets/images/bw1.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw2.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw3.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw4.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw5.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw6.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw7.jpeg"  class="img-fluid carta">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <img src="assets/images/bw9.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw10.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw11.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw12.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw13.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw14.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw15.jpeg"  class="img-fluid carta">
        </div>  
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <img src="assets/images/bw16.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw17.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw18.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw19.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw20.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw21.jpeg"  class="img-fluid carta">
            <img src="assets/images/bw22.jpeg"  class="img-fluid carta">
        </div>
    </div>
</div>

<!-- Fine Galleria B&W -->




  <?php include 'inc/footer.inc.php'; ?>

</body>

</html>