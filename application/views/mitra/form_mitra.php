<h1>Tambah Mitra</h1>
<?php echo form_open('mitra/save');?>
<div class="form-group row">
    <label for="nama_mitra" class="col-4 col-form-label">Nama Mitra</label> 
    <div class="col-8">
      <input id="nama_mitra" name="nama_mitra" placeholder="PT/CV" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="kontak_person" class="col-4 col-form-label">Kontak Person</label> 
    <div class="col-8">
      <input id="kontak_person" name="kontak_person" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="telpon" class="col-4 col-form-label">Telpon</label> 
    <div class="col-8">
      <input id="telpon" name="telpon" placeholder="08xxx" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="example@example.com" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_web" class="col-4 col-form-label">Alamat Web</label> 
    <div class="col-8">
      <input id="alamat_web" name="alamat_web" placeholder="www.example.com" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="bidang_usaha" class="col-4 col-form-label">Bidang Usaha</label> 
    <div class="col-8">
      <select id="bidang_usaha" name="bidang_usaha" class="custom-select">
        <option value="">Pilih...</option>
        <?php
          foreach($list_bidang->result() as $bidang){
        ?>
        <option value="<?=$bidang->id?>"><?=$bidang->nama?></option>
        <?php

          }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="sektor_usaha" class="col-4 col-form-label">Sektor Usaha</label> 
    <div class="col-8">
      <select id="sektor_usaha" name="sektor_usaha" class="custom-select">
        <option value="">Pilih...</option>
        <?php
          foreach($list_sektor->result() as $sektor){
        ?>
        <option value="<?=$sektor->id?>"><?=$sektor->nama?></option>
        <?php

          }
        ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close();?>