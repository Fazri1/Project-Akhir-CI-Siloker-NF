<script>
function hapusSektor(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>
<h1>Daftar Sektor Usaha</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th><th>Sektor Usaha</th><th style="text-align:right">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($list_sektor->result() as $sektor){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$sektor->nama?></td>
            <td style="text-align:right">
            <a href="<?=base_url()?>sektor_usaha/edit/<?=$sektor->id?>" class="btn btn-warning">Edit</a> | 
            <a href="<?=base_url()?>sektor_usaha/delete/<?=$sektor->id?>" class="btn btn-danger"
            <?php echo 'onclick="return hapusSektor(\'Data Sektor '.$sektor->nama.' Yakin mau dihapus ?? \')"'?>
            >Delete</a></td>
        </tr>
        <?php
        $nomor++;    
        }
        ?>
    </tbody>
</table>
<a href="<?=base_url()?>sektor_usaha/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Sektor Usaha</a>
