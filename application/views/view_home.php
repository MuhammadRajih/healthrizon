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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- ============================================================================================================ -->
  <title>Home</title>
  <!-- ========================================== NEW  ================================================================== -->

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/layout/styles/layout.css' ?>" type="text/css" />
  <script type="text/javascript" src="<?= base_url() . 'assets/layout/scripts/jquery.min.js' ?>"></script>
  <!-- Penggunaan jQuery -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- ========================================= JUMBOTRON =================================================================== -->

<body>

  <div class="jumbotron jumbotron-fluid mt-5 " style=" height : 280px; background-image: url('<?= base_url('assets/img/jb11.jpg'); ?>')">
    <div class="container text-center mt-4">
      <h1 class="display-4">HOME</h1>
      <p class="lead"><b>Welcome to Our Pages<b></p>
    </div>
  </div>
</body>
<!-- ========================================= JUMBOTRON =================================================================== -->

<!-- =================================== QUOTE OF THE DAY ============================================== -->
<div class="pembatas text-black">
  <div class="col">
    <p>"Quote Of The Day"</p>
  </div>
</div>
<!-- =================================== QUOTE OF THE DAY ============================================== -->

<!-- ================================ CAROUSEL ================================================= -->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- indikator -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url() . 'assets/img/car1.jpg' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="caption">
          <h5><b>Dr. Rizki Syafaat</b></h5>
          <p>Your Health is Our Priority.</p>
        </div>
      </div>

    </div>

    <div class="carousel-item">
      <img src="<?= base_url() . 'assets/img/car2.jpg' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="caption">
          <h5><b>Dr. Vijay Cheza</b></h5>
          <p>The greatest wealth is health.</p>
        </div>
      </div>
    </div>


    <div class="carousel-item">
      <img src="<?= base_url() . 'assets/img/bg/1.jpg' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="caption">
          <h5><b>Dr. Rajih A.M</b></h5>
          <p>Your body hears everything your mind says.</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="<?= base_url() . 'assets/img/bg/5.jpg' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="caption">
          <h5><b>Dr. Titan Kinan</b></h5>
          <p>Before healing others, heal yourself.</p>
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
<!-- ================================ CAROUSEL ================================================= -->

<!-- ================================== OUR PORTOFOLIO ============================================== -->
<div class="jumbotron jumbotron-fluid" style="height : 1012px; background-image: url('<?= base_url('assets/img/home.png'); ?>')">
  <section class="gallery-area mt-5">
    <div class="container text-align: center">
      <div class="section-title">
        <h1 style="text-align: center">We are here <span class="color-defult"> For your care</span></h1>
        <h3>Kami memiliki sejumlah dokter spesialis yang sangat ahli dalam bidangnya.</h3>
        <div class="row">
          <div class="line-border-center bg-defult"></div>
        </div>
      </div>
    </div>

    <div class="section-content  mt-5">
      <div class="row clearfix">

        <div class="thumbkiri">
          <img src="<?= base_url() . 'assets/img/portfolio/1.jpg' ?>" alt="">
          <div class="gallery-hover">
            <div class="gallery-info">
              <div class="anatomi text-align: center mt-2">
                <h4>Dr. Delevigne .Cn.Tk</a></h4>
                <p>Spesialis anatomi</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="thumb1">
          <img src="<?= base_url() . 'assets/img/portfolio/3.jpg' ?>" alt="">
          <div class="gallery-hover">
            <div class="gallery-info">
              <div class="anatomi text-align: center mt-2">
                <h4>Dr. Mark Ruffalo .r.MJ</a></h4>
                <p>Spesialis remaja</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="thumbkanan">
          <img src="<?= base_url() . 'assets/img/portfolio/4.jpg' ?>" alt="">
          <div class="gallery-hover">
            <div class="gallery-info">
              <div class="anatomi text-align: center mt-2">
                <h4>Dr. Madon .r.Om</a></h4>
                <p>Spesialis organ dalam</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="thumbkiri">
          <img src="<?= base_url() . 'assets/img/portfolio/5.jpg' ?>" alt="">
          <div class="gallery-hover">
            <div class="gallery-info">
              <div class="anatomi text-align: center mt-2">
                <h4>Dr. Steveny son A . J </a></h4>
                <p>Spesialis otak</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="thumb1">
          <img src="<?= base_url() . 'assets/img/portfolio/6.jpg' ?>" alt="">
          <div class="gallery-hover">
            <div class="gallery-info">
              <div class="anatomi text-align: center mt-2">
                <h4>Dr. Amy Charm .k.Id</a></h4>
                <p>Spesialis anak</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="thumbkanan">
          <img src="<?= base_url() . 'assets/img/portfolio/7.jpg' ?>" alt="">
          <div class="gallery-hover">
            <div class="gallery-info">
              <div class="anatomi text-align: center mt-2">
                <h4>Dr boykeu .k.nDg</a></h4>
                <p>Specialis Kandungan</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>
<!-- ================================== OUR PORTOFOLIO ============================================== -->


<!-- ================================== COMENT ============================================== -->
<?php foreach ($coment as $c) { ?>
  <div class="container mt-5">
    <div class="media">
      <div class="media-left">
        <img src="<?= base_url() . 'assets/img/img_avatar.png' ?>" class="media-object" style="width:100px">
      </div>
      <div class="media-body ml-3">
        <h4 class="media-heading"><?= $c['name'] ?><small><i> Posted on February 19, 2020</i></small></h4>
        <p><?= $c['coment'] ?></p>
      </div>
    </div>
  </div>
  <div class="container mt-2">
    <a type="button" class="btn btn-danger btn-sm" href="<?php echo base_url() . 'web/deleteComent/' . $c['id'] ?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a></td>
    <a type="button" class="btn btn-primary btn-sm mr-5" style="color: white" data-toggle="modal" data-target="#UpdateComent<?= $c['id'] ?>"> Edit Komen</a>
  </div>
  <br>
<?php } ?>

<div class="tombolkomen  mb-5">
  <button type="button" class="btn btn-info btn-sm ml-5" data-toggle="modal" data-target="#AddComent"><a style="color: white"> Tambah Komentar</a></button>
</div>

<div class="modal fade" id="AddComent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h2>Tambah Komentar</h2>

      </div>
      <div class="modal-body">
        <?php echo form_open(base_url() . 'web/addComent/', array('enctype' => 'multipart/form-data')); ?>
        <table cellpadding="8">
          <div>
            <label>Nama</label>
            <input class="form-control" type="text" name="name" required>
          </div>
          <div>
            <label>Komentar</label>
            <textarea class="form-control" type="text" name="coment" required> </textarea>
          </div>

        </table>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<?php foreach ($coment as $i) { ?>
  <div class="modal fade" id="UpdateComent<?= $i['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h2>Edit Komentar</h2>

        </div>
        <div class="modal-body">

          <?php echo form_open(base_url() . 'web/Updatecoment/' . $i['id'], array('enctype' => 'multipart/form-data')); ?>
          <table cellpadding="8">
            <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="name" value="<?= $i['name'] ?>" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Komentar</label>
              <textarea class="form-control" id="formGroupExampleInput" placeholder="komentar" name="coment" required><?= $i['coment'] ?></textarea>
            </div>
          </table>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
<?php } ?>

<!-- ================================== COMENT ============================================== -->

<!-- ####################################### INFORMATION ################################################################ -->
<div class="jumbotron jumbotron-fluid" style="height : 1653px; background-image: url('<?= base_url('assets/img/home2.png'); ?>')">
  <div class="wrapper">
    <div class="container">
      <div class="content">
        <div id="featured_slide">
          <ul id="featurednews">
            <li><img src="<?= base_url() . 'assets/images/demo/GIF-2.gif' ?>" alt="" />
              <div class="panel-overlay mt-3 mb-4 text-align: center">
                <h2>Kurva perjalanan dan penyelesaian virus Corona</h2>
                <p>Berikut merupakan gambaran perjalanan before dan after pandemi Corona<br />
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="column">
        <ul class="latestnews">
          <div class="bebas" style="height: 10%">
            <li><img style="height: 130%" src=" <?= base_url() . 'assets/images/demo/GIFF-3.gif' ?>" alt="" />
              <p><strong><a href="#">Ayo Cegah COVID - 19!</a></strong> Jual masker anti covid-19, hubungi manto: 08334455.</p>
              <!-- <p><strong><a href="#">Penanganan COVID-19</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas.</p> -->
            </li>
          </div>
          <div class="bebas" style="height: 10%">
            <li><img style="height: 130%" src="<?= base_url() . 'assets/images/demo/GIFF-5.gif' ?>" alt="" />
              <p><strong><a href="#">Bentuk Virus Covid - 19 </a></strong> Nah, jadi ini adalah bentuk virus covid-19, mengerikan bukan?</p>
            </li>
          </div>
          <div class="bebas" style="height: 10%">
            <li class="last"><img style="height: 130%" src="<?= base_url() . 'assets/images/demo/GIFF-6.gif' ?>" alt="" />
              <p><strong><a href="#">Nikah pas corona?</a></strong> Gamasalah, udin wedding anti corona siap sedia: 0812312453.</p>
            </li>
          </div>
        </ul>
      </div>
      <br class="clear" />
    </div>
  </div>
  <!-- ############################################ INFORMATION ########################################################### -->

  <!-- ############################################ BAR BAWAH INFORMATION ########################################################### -->
  <div class="wrapper mt-5">
    <div id="hpage_cats">
      <div class="fl_left">
        <h2><a href="#"> Covid-19 &raquo;</a></h2>
        <img src="<?= base_url() . 'assets/images/demo/FOTO-1.jpg' ?>" alt="" />
        <p><strong><a href="#">Juru bicara penanganan COVID-19</a></strong></p>
        <p>"Keberhasilan bendung COVID-19 akan pengaruhi beban di rumah sakit. Karena semakin banyak pasien dirawat, semakin berat beban kita untuk kurangi meninggal. Akan semakin berat," kata Yuri di Graha BNPB, Jakarta Timur, Selasa (21/4).</p>
      </div>
      <div class="fl_right">
        <h2><a href="#">Corona Indonesia &raquo;</a></h2>
        <img src="<?= base_url() . 'assets/images/demo/FOTO-2.jpg' ?>" alt="" />
        <p><strong><a href="#">Pemerintah dalam Achmad Yurianto</a></strong></p>
        <p>Pemerintah mengumumkan penambahan kasus virus corona di Indonesia per hari ini, Selasa (21/4), menjadi 7.135 orang. Angka kematian tercatat sebanyak 616 jiwa, menjadikan yang tertinggi di Asia Tenggara.</p>
      </div>
      <br class="clear" />
      <div class="fl_left">
        <h2><a href="#">Presiden RI &raquo;</a></h2>
        <img src="<?= base_url() . 'assets/images/demo/FOTO-3.jpg' ?>" alt="" />
        <p><strong><a href="#">Jokowi Sebut Mudik dan Pulang Kampung Beda.</a></strong></p>
        <p>Jakarta, CNN Indonesia -- Presiden Joko Widodo mendefinisikan arus masyarakat yang menuju keluar Jakarta, Bogor, Depok, Tangerang, Bekasi (Jabodetabek) sebelum ada pelarangan mudik sebagai kegiatan pulang kampung.</p>
      </div>
      <div class="fl_right">
        <h2><a href="#">Virus &raquo;</a></h2>
        <img src="<?= base_url() . 'assets/images/demo/FOTO-4.jpg' ?>" alt="" />
        <p><strong><a href="#">Peneliti China Beberkan 30 Mutasi Baru Virus Corona</a></strong></p>
        <p>Jakarta, CNN Indonesia -- Peneliti asal China, Li Lanjuan bersama rekan peneliti lain dari Universitas Zhejiang menemukan virus corona SARS-Cov-2 penyebab penyakit Covid-19 bisa bermutasi hingga 30 varian.</p>
      </div>
      <br class="clear" />
    </div>
  </div>
  <!-- ############################################ BAR BAWAH INFORMATION ########################################################### -->

  <!-- ############################################# SIDE BAR INFORMATION ########################################################## -->
  <div class="wrapper mt-5">
    <div class="container mt-5">
      <div class="content">
        <div id="hpage_latest">
          <h2>Tips dan trik saat Corona</h2>
          <ul>
            <li><img src="<?= base_url() . 'assets/images/demo/GIFF-4.gif' ?>" alt="" />
              <p>Cucilah tangan sebelum dan sesudah melakukan aktivitas.</p>
              <p>Sabun / hand sanitizer merupakan hal terbaik dalam mencuci tangan.</p>
            </li>
            <li><img src="<?= base_url() . 'assets/images/demo/GIFF-66.gif' ?>" alt="" />
              <p>Pada saat dirumah, konsumsilah makanan dan nutrisi yang cukup.</p>
              <p>Jagalah kehigienisan makanan sehingga terhindar dari virus bakteri.</p>
            </li>
            <li class="last"><img src="<?= base_url() . 'assets/images/demo/GIFF-7.gif' ?>" alt="" />
              <p>Selagi dirumah, jangan lupa untuk bergerak dan berolahraga.</p>
              <p>Manfaatkanlah waktu luang dengan berolahraga seperti : push up, sit up dll.</p>
            </li>
          </ul>
          <br class="clear" />
        </div>
      </div>
      <div class="column">
        <div class="holder height: 10%"><a href="#"><img src="<?= base_url() . 'assets/images/demo/IKLAN-1.jpg' ?>" alt="" /></a></div>
      </div>
      <br class="clear" />
    </div>
  </div>
</div>
<!-- ############################################ SIDE BAR INFORMATION ########################################################### -->

<!-- ============================== BREAKING NEWS ================================================== -->
<div class="container mt-4">
  <h2>Apa yang membuat BRING ME TO HEALTH'RIZON menjadi nomor satu?</h2>

  <div class="media mt-4">
    <img src="<?= base_url() . 'assets/img/RS.jpg' ?>" class="mr-3">
    <div class="media-body">
      <h5>Rumah Sakit BRING ME TO HEALTH'RIZON</h5>
      <p>Jl. Ir. H. Juanda No.100, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132
        BMTH Hospital, address.</p>
      <a href="https://www.youtube.com/watch?v=_tfqAaLkPvI" class="btn btn-dark btn-md">Read More</a>
    </div>
  </div>

  <div class="media mt-4 mb-4">
    <img src="<?= base_url() . 'assets/img/DR.jpg' ?>" class="mr-3">
    <div class="media-body">
      <h5>Dokter terbaik dalam bidangnya</h5>
      <p>Kami adalah pelopor dalam studi dan perawatan kondisi terkait penyakit apapun. kami mengasah operasi penyakit yang sulit di obati seperti,
        termasuk Gangguan Serviks, Thoracic dan Lumbar, Herniasi Diskus, Stenosis Tulang Belakang, Spondylolisthesis, Myelopathy Spondylotic,
        Cidera Spinal Cord, dan Trauma Tulang Belakang. Juga, kami (BMTH) telah menemukan banyak teknik baru untuk perawatan dalam penyembuhan kesehatan.</p>
      <a href="#" class="btn btn-dark btn-md">Read More</a>
    </div>
  </div>

</div>
<!-- ================================== BREAKING NEWS ========================================================================== -->

<!-- ================================== SEMI FOOTER ========================================================================== -->

<div class="jumbotron jumbotron-fluid" style="height : 450px; background-image: url('<?= base_url('assets/img/home3.png'); ?>')">
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <img src="images/logo-light.png" alt="">
            </div>
            <p> Website yang bernama Bring Me To Health'rizon ini kami buat untuk membantu dalam bidang kesehatan untuk dapat digunakan bagi semua individu lapisan masyarakat. Website ini bertema kesehatan yang dapat membantu anda mengetahui info info kesehatan yang ada.</p>
            <p><i class="fa fa-american-sign-language-interpreting" style="font-size:24px"></i> Kami menjalin kerja sama dengan 100+ Dokter <br></br></p>
            <i class="fa fa-cc-visa" style="font-size:40px;color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-youtube" style="font-size:40px;color:black"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-stethoscope" style="font-size:40px;color:black"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-github" style="font-size:40px;color:black"></i><br></br>
          </div><!-- end clearfix -->
        </div><!-- end col -->

        <div class="col-lg-2 col-md-6 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <h3>Information</h3>
            </div>
            <ul class="footer-links">
              <li><a href="http://localhost/healthrizon/web/viewhome">Home</a></li>
              <li><a href="http://localhost/healthrizon/web/viewhome">Blog</a></li>
              <li><a href="http://localhost/healthrizon/web/viewhome">Pricing</a></li>
              <li><a href="http://localhost/healthrizon/web/viewhome">About</a></li>
              <li><a href="http://localhost/healthrizon/web/viewhome">Faq</a></li>
              <li><a href="http://localhost/healthrizon/web/viewhome">Contact</a></li>
            </ul><!-- end links -->
          </div><!-- end clearfix -->
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title ml-5">
              <h3>Social</h3>
            </div>
            <ul class="footer-links social-md ml-5">
              <li><a class="fb btn-a" title="Facebook" data-tippy-animation="scale" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="gi btn-a" title="Github" data-tippy-animation="scale" href="https://github.com/MuhammadRajih/healthrizon"><i class="fa fa-github"></i> </a></li>
              <li><a class="tw btn-a" title="Twitter" data-tippy-animation="scale" href="#"><i class="fa fa-twitter"></i> </a></li>
              <li><a class="dr btn-a" title="Dribbble" data-tippy-animation="scale" href="#"><i class="fa fa-dribbble"></i> </a></li>
              <li><a class="pi btn-a" title="Pinterest" data-tippy-animation="scale" href="#"><i class="fa fa-pinterest"></i> </a></li>
            </ul><!-- end links -->
          </div><!-- end clearfix -->
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6 col-xs-12">
          <div class="widget clearfix">
            <div class="widget-title">
              <h3>Contact Details</h3>
            </div>

            <ul class="footer-links">
              <li><a href="mailto:#">bmth@gmail.com</a></li>
              <li><a href="#">http://localhost/healthrizon/web/viewhome.com</a></li>
              <li>Jl. Ir. H. Juanda No.100, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132 BMTH Hospital, address.</li>
              <li>+62811111111</li>
            </ul><!-- end links -->
          </div><!-- end clearfix -->
        </div><!-- end col -->

      </div><!-- end row -->
    </div><!-- end container -->
  </footer><!-- end footer -->
</div>
<!-- ================================== SEMI FOOTER ========================================================================== -->










<!-- ============================================================================================================ -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>