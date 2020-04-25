<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css'; ?>" />

  <!-- ======================================================================================================= -->

  <!-- navbar -->
</head>

<body>
  <a style="text-align: left" color="white" href="<?php echo base_url() . 'Auth' ?>"><span class="sr-only">(current)</span></a>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

    <div class="navigation__column">
      &nbsp;&nbsp;
      <a href="<?= base_url('web/viewhome') ?>">
        <!-- Master branch comment -->
        <img src="<?= base_url() ?>assets/img/logofix3.png" />
      </a>
    </div>
    <div class="container">

      <!-- <b class="navbar-brand" href="#"><?php echo $nama_aplikasi ?></b> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="<?php echo base_url() . 'web/viewhome' ?>">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="<?php echo base_url() . 'checker' ?>">Check</a>
          <a class="nav-item nav-link active" href="<?php echo base_url() . 'healthAZ' ?>">Health A.Z</a>
          <a class="nav-item nav-link active" href="<?php echo base_url() . 'web/viewabout' ?>">About Us</a>
          <a class="nav-item nav-link active" href="<?php echo base_url() . 'Auth' ?>">Login</a>
        </div>
      </div>
    </div>
    <a style="text-align: right" class="nav-item nav-link active" href="<?php echo base_url() . 'Auth/logout' ?>">Logout</a>
  </nav>
</body>


<!-- ======================================================================================================= -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>