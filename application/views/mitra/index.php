<script>
function hapusMitra(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>

<h1>Daftar Mitra</h1>
<table class="table">
<thead>
    <tr>
        <th>No</th><th>Nama</th><th>Alamat</th><th>Kontak</th><th>Telpon</th>
        <th>Email</th><th>Web</th><th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach($list_mitra->result() as $mitra){
    ?>
    <tr>
        <td><?=$nomor?></td>
        <td><?=$mitra->nama?></td>
        <td><?=$mitra->alamat?></td>
        <td><?=$mitra->kontak?></td>
        <td><?=$mitra->telpon?></td>
        <td><?=$mitra->email?></td>
        <td><?=$mitra->web?></td>
        <td>
        <a href="<?=base_url()?>mitra/view/<?=$mitra->id?>" class="btn btn-success">View</a> |
        <a href="<?=base_url()?>mitra/edit/<?=$mitra->id?>" class="btn btn-warning">Edit</a> | 
        <a href="<?=base_url()?>mitra/delete/<?=$mitra->id?>" class="btn btn-danger"
        <?php echo 'onclick="return hapusMitra(\'Data Mitra '.$mitra->nama.' Yakin mau dihapus ?? \')"'?>
        >Delete</a></td>

    </tr>

    <?php
        $nomor++;
    }
    ?>
</tbody>
</table>
<br/>
<a href="<?=base_url()?>mitra/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Mitra</a>
