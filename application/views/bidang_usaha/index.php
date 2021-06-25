<script>
function hapusBidang(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>
<h1>Daftar Bidang Usaha</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th><th>Bidang Usaha</th><th style="text-align:right">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($list_bidang->result() as $bidang){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$bidang->nama?></td>
            <td style="text-align:right">
            <a href="<?=base_url()?>bidang_usaha/edit/<?=$bidang->id?>" class="btn btn-warning">Edit</a> | 
            <a href="<?=base_url()?>bidang_usaha/delete/<?=$bidang->id?>" class="btn btn-danger"
            <?php echo 'onclick="return hapusBidang(\'Data Bidang '.$bidang->nama.' Yakin mau dihapus ?? \')"'?>
            >Delete</a></td>
        </tr>
        <?php
        $nomor++;    
        }
        ?>
    </tbody>
</table>
<a href="<?=base_url()?>bidang_usaha/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Bidang Usaha</a>
