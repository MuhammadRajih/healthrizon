<?php
function get_words($sentence, $count)
{
  preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
  return $matches[0];
}
?>
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


  <!-- ============================================================================================================ -->
  <title>Check</title>
</head>

<body>
  <div class="jumbotron jumbotron-fluid mt-5" style=" height : 280px; background-image: url('<?= base_url('assets/img/jb1.jpg'); ?>')">
    <div class="container text-center mt-4">
      <h1 class="display-4">CHECK</h1>
      <p class="lead"><b>health is the main thing<b></p>
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid mt-5" style="height : 620px; background-image: url('<?= base_url('assets/img/check-1.png'); ?>')">
    <div class="container text-center">
      <div class="container mt-5 mb-5">
        <h1 style="font-size:72px"><b>Gejala apa yang anda rasakan :</b></h1><br></br>
        <form action="<?php echo base_url() . 'checker/check' ?>" method="POST">
          <!-- <button name="gejala" type="submit" class="btn btn-dark btn-md" value="anak">Anak-Anak</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-md" value="dewasa">Dewasa</button><br></br> -->
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="batuk">Batuk</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="pusing">Pusing</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="pilek">Pilek</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="demam">Demam</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="mual">Mual</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="kaku otot">Nyeri Otot</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="tulang">Tulang</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="organ dalam">Organ Dalam</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="anus">Sakit Pantat</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="gatal">Gatal</button><br></br>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="infeksi">Infeksi</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="sesak">Sesak Nafas</button>
          <button name="gejala" type="submit" class="btn btn-dark btn-lg" value="luka">Luka</button>
        </form>
        </form>
      </div>
    </div>
  </div>




  <?php
  if (!empty($gejala)) {
    echo "<h1  style='text-align: center '>Mungkin anda sakit..</h1>";
    foreach ($gejala as $i) { ?>
      <div class="media position-relative mt-5">
        <img src="<?= base_url() ?>assets/images/kamus/<?= $i['photo'] ?>" class="mr-3" alt="..." style="width:30%;">
        <div class="media-body">
          <form action="<?php echo base_url() . 'healthAZ/view' ?>" method="GET">
            <h5 class="mt-0"><?= $i['judul'] ?></h5>
            <p><?= get_words($i['isi'], 20) ?></p>
            <button class="btn btn-success btn-sm" name="id" type="submit" value="<?= $i['id'] ?>">baca lebih lanjut...</button>
          </form>
        </div>
      </div>
      <br>
  <?php }
  } ?>
  <!-- <p style="text-align: center">COOMING SOONNNNNNNNNNNN</p> -->
  <!-- ============================================================================================================ -->

</body>


<!-- ============================================================================================================ -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>