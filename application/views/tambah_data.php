<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Crud Codeigniter</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container">
      <h1>Tambah Artis</h1>
      <hr>
    </div>

<!-- KONTEN UTAMA -->
    <div class="container">
      <h2>Tambah User</h2>
      <div class="row">
        <form action="<?=base_url()?>index.php/home/insertdata" method="post" enctype="multipart/form-data">
          <label>Nama</label><br>
          <input type="text" name="nama" value=""><br><br>
          <label>tempat lahir</label><br>
          <input type="text" name="tempat_lahir" value=""><br><br>
          <label>tgl lahir</label><br>
          <input type="date" name="tanggal_lahir" value=""><br><br>
          <label>Alamat</label><br>
          <textarea name="alamat_tinggal" rows="8" cols="80"></textarea><br><br>
          <select id="category_name" name="id_kecamatan">
           <option selected="0">pilih provinsi..</option>
           <?php foreach($cats as $cat) : ?>
            <option value="<?php echo $cat->id;?>"> <?php echo $cat->nama; ?></option>
           <?php endforeach; ?>
         </select>
 <!--           <p>Kabupaten :</p>
            <select name="kab" class="form-control" id="kabupaten">
              <option value=''>Select Kabupaten</option>
            </select>
            
            <p>Kecamatan :</p>
            <select name="kec" class="form-control" id="kecamatan">
              <option>Select Kecamatan</option>
            </select> -->

         <br><br><br>
          <label>foto</label><br>
          <input type="file" name="fotopost"><br><br>

          <input type="submit" name="submit" value="Submit" class="btn btn-default">
        </form>

      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
