<h1>Wait list</h1>

<div style="width:80%;margin:auto">
    <?php foreach ($waitlist->result() as $item) : ?>
	    <h4><?php echo $item->kodePesanan ?></h4>
        <h4><?php echo $item->kodeKurir ?></h4>
        <h4><?php echo $item->jumlahHalaman ?></h4>
        <h4><?php echo $item->hargaTotal ?></h4>
        <br><br>
        <!-- Tambahkan button untuk ubah -->
        <!-- Tambahkan button untuk ubah -->
    <?php endforeach; ?>
</div>