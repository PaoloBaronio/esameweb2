<?php session_start();
$_SESSION['paginaCorrente'] = 'About';
?>
<html lang="en">

<head>
  <title>About</title>
  <?php include 'inc/head.inc.php'; ?>
</head>

<body>
  <?php include 'inc/menu.php'; ?>

  <!-- Header -->
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="imgAbout col-12 col-md-6 pt-5 mb-3">
        <img src="assets/images/alessio_albi.jpeg" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center align-items-center mb-5">

        <div class="col-12 col-md-12 pt-2  mb-5">
                <div class="aboutParagrafo pt-5">
                <h2>Alessio Albi is an Italian full-time photographer specialising in portrait, fine art and commercial/fashion photography. <br>"I started taking photos at the age of 24", he says, "coming from drawing and painting, my first approach to photography was pretty natural and easy". Rather than taking an ordinary portrait, the photographer utilizes the quirks and distinguishing features of each unique setting to add an interesting aesthetic within the frame. </h2>
                </div>
        </div>

    <div class="col-md-6 col-sm-12">
        <img src="assets/images/about1.jpeg" class="img-fluid">
    </div>
    <div class="col-md-6 col-sm-12">
        <img src="assets/images/about2.jpeg" class="img-fluid">
    </div>
  </div>

  <div class="col-12 col-md-12 pt-2  mb-5">
    <div class="aboutParagrafo pt-5">
        <h2>To incorporate additional drama in his photographs, the artist uses various elements of nature — grass, plants, trees, and wildflowers — to create an improvised shadow, silhouette, or frame. While his model's faces are partly obscured by any given element in each respective shot, Albi makes it so each shot offers a unique way of hiding and revealing his beautiful subject.  </h2>
    </div>
  </div>

  <div class="col-md-12 col-sm-12">
        <img src="assets/images/about3.jpeg" class="img-fluid">
    </div>
  
    <div class="col-12 col-md-12 pt-2  mb-5">
    <div class="aboutParagrafo pt-5">
        <h2>Albi also believes that a woman's long, colorful hair can work as an extra prop on a shoot. He utilizes the ability of each strand to swerve, curl, and wrap around their faces, like an organic frame. Despite his penchant for visual drama, the gifted artist never overdoes it. His portraits appear simple and refined, yet intriguing at the same time.  </h2>
    </div>
  </div>


</div>

  


  <?php include 'inc/footer.inc.php'; ?>

</body>

</html>