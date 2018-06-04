<<<<<<< HEAD
<form action="<?= site_url('auth/cek_login') ?>" method="post" accept-charset="utf-8">
	<input type="username" name="username" value="" placeholder="masukkan username">
	<input type="password" name="password" value="" placeholder="password">
	<input type="submit" name="submit" value="login">
	
=======
<!DOCTYPE html>
<html>
<head>
 <link rel="icon" href="<?php echo base_url("img/samsung.png"); ?>">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <title>Panel Admin &mdash; Login</title>
</head>
<body style="background-color: #EEEEEE">

 <div class="container mt-5">
  <form action="<?= site_url('auth/cek_login') ?>" method="POST">
   <div class="row justify-content-center">
    <div class="col-4 p-5" style="background-color: #FEFFFF">
     <h3 class="text-center">Login</h3>
     <?php if (isset($error)): ?>
      <p style="color: red">
       <?php echo $error ?>
      </p>
     <?php endif ?>
     <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control" required autofocus>
     </div>
     <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
     </div>
     <div class="form-group">
      <input type="submit" name="submit" class="form-control btn btn-success" value="login">
     </div>
     <center>
      <small>kelompok 2 RPL-MPPL &copy; All Right Reserved.</small>
     </center> 
    </div>
   </div>
  </form>
 </div>


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>

>>>>>>> b402acd8e07123b448d7d591d41ddc3c7f1ea640

