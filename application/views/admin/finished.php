<h1>Finished</h1>

<div style="width:80%;margin:auto">
    <table border="1">
        <tr>
            <th>Kode Pesanan</th> <th>Kode Kurir</th> <th>Jumlah Hal</th> <th>Harga Total</th>
        </tr>
    <?php foreach ($finished->result() as $item) : ?>
        <tr>
            <td><?php echo $item->kodePesanan ?></td>
            <td><?php echo $item->kodeKurir ?></td>
            <td><?php echo $item->jumlahHalaman ?></td>
            <td><?php echo $item->hargaTotal ?></td>
            <td>
                <?php echo form_open('admin/to_waitlist'); ?>
                    <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                    <button type="submit">Move to Waitlist</button>
                </form>
            </td>
            <td>
                <?php echo form_open('admin/to_onprocess'); ?>
                    <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                    <button type="submit">Move to OnProcess</button>
                </form>
            </td>
        </tr>
        <br><br>
        <!-- Tambahkan button untuk ubah -->
        <!-- Tambahkan button untuk ubah -->
    <?php endforeach; ?>
    </table>
</div>
