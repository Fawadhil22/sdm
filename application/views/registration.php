<!-- Bootstrap -->
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">
   

  
   <div class="row" style="margin-top: 15rem">
   
   <div class="col-md-3 mt-20">
   
   </div>
    <div class="col-md-6">
    <?= $this->session->flashdata('alert'); ?>
<form action="<?= base_url('welcome/registration') ?>" method="post">
<div class="form-group">
    <label for="namaaja">Nama</label>
    <input type="text" name="nama" class="form-control" id="namaaja" placeholder="Nama">
     </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">ulangi Password</label>
    <input type="password" name="password1" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<p>sudah punya akun? <a href="<?= base_url('welcome'); ?>">Login disini</a></p>
</div>
</div>