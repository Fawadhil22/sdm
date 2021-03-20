<!-- Bootstrap -->
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">
   

  
   <div class="row" style="margin-top: 15rem">
   
   <div class="col-md-3 mt-20">
   
   </div>
    <div class="col-md-6">
    <?= $this->session->flashdata('message'); ?>
<form action="<?= base_url('index.php/welcome/') ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<p>tidak punya akun? <a href="<?= base_url('welcome/registration'); ?>">registrasi disini</a></p>
</div>
</div>