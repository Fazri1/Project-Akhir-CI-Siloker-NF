<h1>Edit Data Sektor Usaha</h1>
<br>
<?php echo form_open('sektor_usaha/save'); ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Sektor Usaha</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" value="<?=$objsektor->nama?>">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
  <input type="hidden" name="idedit" value="<?=$objsektor->id?>"/>

<?php echo form_close(); ?>