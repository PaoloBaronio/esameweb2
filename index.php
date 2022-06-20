<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Head inc php -->
    <?php include 'inc/head.inc.php'; ?>
  </head>

  <body>




    <?php include 'inc/menu.php'; ?>



        <!-- Sezione Hero -->
          <section id="finalarrow">
              <div class="backgroundHeader">
                <div class="opacity">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class=" above col-md-12 col-sm-12 text-center" data-aos="fade-up">
                        <h1 class="display-2">Photo to connect </h1>
                        <h4>We are making photographs to understand what our lives mean to us. </h4>
                        <br><a href="#firstarrow" role="button"><i class="fas fa-arrow-circle-down"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </section>


        <!-- END Sezione hero -->


        <!-- Seconda sezione cit hero -->
        <div class="container">
            <div class="row">
                <div class=" col-12 mt-5 my-5 quote">
                  <h2 class="Text text-center display-5"> Alessio Albi is an italian photographer who has a passion for expressing himself through incredibly atmospheric portraits. </h2>
                </div>
            </div>
        </div>

        <!-- END Seconda sezione cit hero -->

              
        <!-- foto sezione 1-->

        <div class="container-fluid">
          <section id="firstarrow">
            <div class="row mt-4">
              <div class="col-md-6 col-sm-12 mt-4">
                <img src="assets/images/foto2.jpeg" class="images img-fit img-fluid">
              </div>
              <div class="col-md-6 col-sm-12 mt-4">
                <img src="assets/images/foto5.jpeg" class="images img-fit img-fluid">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-12 mt-4">
                <img src="assets/images/foto4.jpeg" class="images img-fit img-fluid">
              </div>
              <div class="col-md-6 col-sm-12 mt-4">
                <img src="assets/images/fotox.jpeg" class="images img-fit img-fluid">
              </div>
            </div>
          </section>
        </div>

        <!-- Fine foto sezione 1-->

        <!-- Sezione academy --> 
        <div class="container my-5">
          <div class="row mt-5">
            <div class="col-md-6 col-sm-12 ">
              <img src="assets/images/portrait.jpeg" class="imgCustom img-fluid">
            </div>
            <div class="col-md-6 col-sm-12 p-5 corsiParagrafo">
              <h2 class="display-3">Portrait Course</h2>
              <p>Learn portrait photography using reflectors, diffusers, and flash. Create powerful portraits using either natural or artificial light. Learn the core principals of composition and how to evoke emotion from your subject. Use depth of field to dramatically improve your portraits and make your photos look more professional.</p><br>
                <a href="courses.php" target="" rel="noopener noreferrer">
                  <button type="button" class="btn ">
                    Discover More
                  </button>
                </a>
            </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-6 col-sm-12 p-5 corsiParagrafo2">
              <h2 class="display-3">Black & White Course</h2>
              <p>If you enjoy connecting with new photographers who have an appreciation for black & white photography, and if you want to take your own black & white photography skills to the next level, you'll enjoy taking this course.</p><br>
              <a href="courses.php" target="" rel="noopener noreferrer">
              <button type="button" class="btn">
                Discover More
              </button>
            </a>
          </div>
          <div class="col-md-6 col-sm-12">
            <img src="assets/images/b&w.jpeg" class="imgCustom img-fluid">
          </div>
        </div>
        </div>

    <?php include 'inc/footer.inc.php'; ?>
    
  </body>
</html>
