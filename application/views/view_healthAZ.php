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
    <title>Health A.Z</title>

  </head>

  <body>
      <div class="jumbotron jumbotron-fluid mt-5" style=" height : 280px; background-image: url('<?= base_url('assets/img/jumbotron1.jpg'); ?>')">
          <div class="container text-center mt-4">
              <h1 class="display-4">HEALTH A.Z</h1>
              <p class="lead"><b>Ensiklopedia About Disease<b></p> 
          </div>
      </div>

   <!-- ============================================================================================================ -->
    <!-- untuk kotak search -->
    <div class="container">
     <div class="row">
          <div class="col-md">
                <form action="<?= base_url('web'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search keyword" name="keyword" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-dark" type="submit" name="submit">
                            </div>
                        </div>
                </form>
          </div>
      </div>

    </div>
    

</body>













   <!-- ============================================================================================================ -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>