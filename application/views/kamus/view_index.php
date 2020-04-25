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

    <head>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/info.css" />
    </head>
    <title>Health A.Z</title>

<body>
    <div class="jumbotron jumbotron-fluid mt-5" style=" height : 280px; background-image: url('<?= base_url('assets/img/jb11.jpg'); ?>')">
        <div class="container text-center">
            <br></br>
            <h2 class="display-4">Kumpulan penyakit</h2>
            <p class="lead"><b>Ensiklopedia About Disease<b></p>
        </div>
    </div>
    <br><br>

    <div class="container col-8">
        <div class="row">
            <div class="col text-left">
                <h3>Kamus data informasi seputar penyakit</h3>
            </div>
        </div>
        <br>
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav float-right">
                <img height="500px" width="500px" src="<?php echo base_url(); ?>assets/images/1.png">
            </ul>
        </div> <!-- /#sidebar-wrapper -->

        <?php foreach ($kamus as $i) { ?>
            <div class="media position-relative">
                <img src="<?= base_url() ?>assets/images/kamus/<?= $i['photo'] ?>" class="mr-3" alt="..." style="width:30%;">
                <div class="media-body">
                    <form action="<?php echo base_url() . 'healthAZ/view' ?>" method="GET">
                        <h5 class="mt-0"><?= $i['judul'] ?></h5>
                        <p><?= get_words($i['isi'], 20) ?></p>
                        <button name="id" type="submit" class="btn btn-success btn-sm" value="<?= $i['id'] ?>">baca lebih lanjut...</button>
                        <a type="button" class="btn btn-danger btn-sm" href="<?php echo base_url() . 'healthAZ/DeleteKamus/' . $i['id'] ?>" onClick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
                        <a type="button" class="btn btn-primary btn-sm" style="color: white" data-toggle="modal" data-target="#UpdateKamus<?= $i['id'] ?>"> Update</a>
                    </form>
                </div>
            </div>
            <br>
        <?php } ?>

        <a type="button" class="btn btn-primary" style="color: white" data-toggle="modal" data-target="#AddKamus"> Add Penyakit</a>
    </div>
</body>

<div class="modal fade" id="AddKamus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h2>TAMBAH KAMUS</h2>

            </div>
            <div class="modal-body">
                <?php echo form_open(base_url() . 'healthAZ/Save', array('enctype' => 'multipart/form-data')); ?>
                <table cellpadding="8">
                    <div>
                        <label>Judul</label>
                        <input class="form-control" type="text" name="judul" required>
                    </div>
                    <div>
                        <label>Isi</label>
                        <textarea class="form-control" type="text" name="isi" required> </textarea>
                    </div>
                    <div>
                        <label>Gambar</label><br>
                        <input type="file" name="gambar">
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

<?php foreach ($kamus as $i) { ?>
    <div class="modal fade" id="UpdateKamus<?= $i['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h2>EDIT KAMUS</h2>

                </div>
                <div class="modal-body">

                    <?php echo form_open(base_url() . 'healthAZ/UpdateKamus/' . $i['id'], array('enctype' => 'multipart/form-data')); ?>
                    <table cellpadding="8">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Judul</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul" value="<?= $i['judul'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Isi</label>
                            <textarea class="form-control" id="formGroupExampleInput" placeholder="Isi" name="isi" required><?= $i['isi'] ?></textarea>
                        </div>
                        <div class="form-group">

                            <label for="file">Gambar</label><br>
                            <input type="file" name="gambar" required>
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

<br><br><br><br>
<footer>,</footer>

<!-- ======================================================================================================= -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>