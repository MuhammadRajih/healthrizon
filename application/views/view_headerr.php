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

<!-- ======================================================================================================= -->

    <!-- navbar -->
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
            <b class="navbar-brand" href="#"><?php echo $nama_aplikasi ?></b>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="<?php echo base_url().'index.php/web/viewhome' ?>">Home<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="<?php echo base_url().'index.php/web/viewcheck' ?>">Check</a>
                <a class="nav-item nav-link active" href="<?php echo base_url().'index.php/web/viewhealthAZ' ?>">Health A.Z</a>
                <a class="nav-item nav-link active" href="<?php echo base_url().'index.php/web/viewabout' ?>">About Us</a>
                <a class="nav-item nav-link active" href="<?php echo base_url().'index.php/web/viewlogout' ?>">Logout</a>
              </div>
            </div>
      </div>
    </nav>
    </body>


<!-- ======================================================================================================= -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</html>