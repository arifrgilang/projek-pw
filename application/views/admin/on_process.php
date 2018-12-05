<h1>On process</h1>

<div style="width:80%;margin:auto">
    <table border="1">
        <tr>
            <th>Kode Pesanan</th> <th>Kode Kurir</th> <th>Jumlah Hal</th> <th>Harga Total</th>
        </tr>
    <?php foreach ($onprocess->result() as $item) : ?>
        <tr>
            <td><?php echo $item->kodePesanan ?></td>
            <td><?php echo $item->kodeKurir ?></td>
            <td><?php echo $item->jumlahHalaman ?></td>
            <td><?php echo $item->hargaTotal ?></td>
            <td>
                <?php echo form_open('admin/finish_order'); ?>
                    <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                    <button type="submit">Complete Order</button>
                </form>
            </td>
        </tr>
        <br><br>
        <!-- Tambahkan button untuk ubah -->
        <!-- Tambahkan button untuk ubah -->
    <?php endforeach; ?>
    </table>
</div>
