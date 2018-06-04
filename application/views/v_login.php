
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


