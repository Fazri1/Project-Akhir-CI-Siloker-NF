<h1>Form Login</h1>
<?php
    if(isset($info)){
        echo '<h5 style="color:red">'.$info.'</h5>';
    }
?>

<?php echo form_open('user/login'); ?>
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="username" name="username" type="text" class="form-control">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="pass" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="pass" name="pass" type="password" class="form-control">
    </div>
  </div> 
  <br>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
<?php echo form_close(); ?>