<?php session_start();
$_SESSION['paginaCorrente'] = 'Courses';
?>
<html lang="en">

<head>
  <title>Courses</title>
  <?php include 'inc/head.inc.php'; ?>
</head>

<body>
  <?php include 'inc/menu.php'; ?>


    <div class="container">
        <div class="row justify-content-center align-items-center mb-5 my-5">
            <div class="col-md-6 col-sm-12">
                <div class="course-card">
                    <img src="assets/images/course1.jpeg" class="img-fluid course-img">
                    <h2 class="display-3">Black & White Course</h2>
                    <p>Learn portrait photography using reflectors, diffusers, and flash. Create powerful portraits using either natural or artificial light. Learn the core principals of composition and how to evoke emotion from your subject. </p><br>
                    <a href="contact.php" target="" rel="noopener noreferrer">
                    <button type="button" class="btn">
                        Request course
                    </button>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="course-card">
                    <img src="assets/images/course2.jpeg" class="img-fluid course-img">
                    <h2 class="display-3">Ultimate Portrait Course</h2>
                    <p>If you enjoy connecting with new photographers who have an appreciation for black & white photography, and if you want to take your own black & white photography skills to the next level, you'll enjoy taking this course.</p><br>
                    <a href="contact.php" target="" rel="noopener noreferrer">
                    <button type="button" class="btn">
                        Request course
                    </button>
                    </a>
                </div>
            </div>
         </div>   
        </div>

    </div>


    <!-- Banner course -->

    <section id="sezione1">
    <div class="container-fluid containerMostra">
      <div class="container">
      <div class="row text-center justify-content-center align-items-center py-5 mt-5">
        <div class="eventoPrimo col col-md-7 col-sm-12">
          <h1 class="Display-4">Learn from the best</h1>
          <p class="lean"> 
          Learn to take unforgettable photos that show people's souls.
          </p>
          <br>
          <a href="contact.php" target="" rel="noopener noreferrer">
            <button type="button" class="btn btn-dark">
               Request course
           </button>
          </a>
        </div>
      </div>
      </div>
    </div>
    </section>

  <!-- End Banner Course -->


                
  <!-- foto sezione-->

        <div class="container">
          <section id="firstarrow">
            <div class="row mt-4">
              <div class="col-md-12 col-sm-12 mt-4 text-center">
                <img src="assets/images/course3.jpeg" class="images img-fit img-fluid">
              </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 mt-4 text-center">
                <img src="assets/images/foto4.jpeg" class="images img-fit img-fluid">
              </div>
              <div class="col-md-12 col-sm-12 mt-4 text-center">
                <img src="assets/images/course4.jpeg" class="images img-fit img-fluid">
              </div>
            </div>
          </section>
        </div>

<!-- Fine foto sezione 1-->



    <!-- Banner course -->

    <section id="sezione1">
    <div class="container-fluid">
      <div class="container">
      <div class="row text-center justify-content-center align-items-center py-5 mt-5">
        <div class="eventoPrimo col col-md-7 col-sm-12">
          <h1 class="Display-4">Request your course</h1>
          <p class="lean"> 
          Learn to take unforgettable photos that show people's souls.
          </p>
          <br>
          <a href="contact.php" target="" rel="noopener noreferrer">
            <button type="button" class="btn btn-dark">
               Request course
           </button>
          </a>
        </div>
      </div>
      </div>
    </div>
    </section>

  <!-- End Banner Course -->


  <?php include 'inc/footer.inc.php'; ?>

</body>

</html>