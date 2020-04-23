<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>"/>

<!-- ============================================================================================================ -->
<title>Home</title>
  <body>  
      <div class="jumbotron jumbotron-fluid mt-5 " style=" height : 280px; background-image: url('<?= base_url('assets/img/jb11.jpg'); ?>')">
          <div class="container text-center mt-4">
              <h1 class="display-4">HOME</h1>
              <p class="lead"><b>Welcome to Our Pages<b></p>
          </div>
      </div>
  </body>

  <!-- ================================================================================= -->
      <div class="pembatas text-white">
          <div class="col">
            <p>"Quote Of The Day"</p>
          </div>
      </div>
      
<!-- ================================================================================= -->


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- indikator -->
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
            <div class="carousel-item active">
                  <img src="<?= base_url() . 'assets/img/car1.jpg' ?>" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <div class="caption">
                              <h5><b>Rizki Syafaat</b></h5>
                              <p>Jangan lupa makan Ya, karena bahagia butuh energi.</p>
                        </div>
                      </div>

            </div>

              <div class="carousel-item">
                    <img src="<?= base_url() . 'assets/img/car2.jpg' ?>" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                            <div class="caption">
                               <h5><b>Vijay Cheza</b></h5>
                               <p>Hayu atuh udah lama ga hayu.</p>
                            </div>
                      </div>
                </div>

              <div class="carousel-item">
                    <img src="<?= base_url() . 'assets/img/car3.jpg' ?>" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <div class="caption">
                            <h5><b>Titan Kinan</b></h5>
                            <p>Lakatmatataaaaaa.</p>
                        </div>
                      </div>
              </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

<!-- ================================================================================= -->

  <div class="container mt-4">
    <h2>BREAKING NEWS</h2>

        <div class="media mt-4">
              <img src="<?= base_url() . 'assets/img/sakitkepala.jpg'?>" class="mr-3">
                  <div class="media-body">
                      <h5>Sakit Kepala Bukan Sakit Biasa Cuyy</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="https://www.youtube.com/watch?v=o1n6Zo5A8AA" class="btn btn-dark btn-md">Read More</a>
                  </div>
        </div>

        <div class="media mt-4">
              <img src="<?= base_url() . 'assets/img/sakitkaki.jpg'?>" class="mr-3">
                  <div class="media-body">
                      <h5>Sakit Kaki Ga Sesakit Hati</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="https://www.youtube.com/watch?v=o1n6Zo5A8AA" class="btn btn-dark btn-md">Read More</a>
                  </div>
        </div>
    
  </div>










    
<!-- ============================================================================================================ -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
