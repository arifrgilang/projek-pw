<div style="width:80% ; margin:auto; text-align:center">
    <h1>Detail Pesanan</h1>

    <h3>Dear customer atas nama: </h3>
    <?php foreach ($datauser as $v): ?>
        <h2><?php echo $v?></h2>
        <?php break?>
    <?php endforeach; ?>

    <hr>
    <?php foreach ($dataorder as $v): ?>
        <h3>Status pesanan anda bisa di cek di pada halaman Order Check dengan kode:</h3>
        <h1><strong><?php echo $v?></strong> </h1>
        <?php break?>
    <?php endforeach; ?>

</div>