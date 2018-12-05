<h1>Wait list</h1>

<div style="width:80%;margin:auto">
<label>Waiting to be accepted</label>
    <table border="1">
        <tr>
            <th>Kode Pesanan</th> <th>Kode Kurir</th> <th>Jumlah Hal</th> <th>Harga Total</th>
        </tr>
    <?php foreach ($waitlist->result() as $item) : ?>
        <tr>
            <td><?php echo $item->kodePesanan ?></td>
            <td><?php echo $item->kodeKurir ?></td>
            <td><?php echo $item->jumlahHalaman ?></td>
            <td><?php echo $item->hargaTotal ?></td>
            <td>
                <?php echo form_open('admin/accept_order'); ?>
                    <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                    <button type="submit">Accept</button>
                </form>
            </td>
            <td>
                <?php echo form_open('admin/decline_order'); ?>
                    <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                    <button type="submit">Decline</button>
                </form>
            </td>
        </tr>
        <br><br>
    <?php endforeach; ?>
    </table>
    <hr><br>
    
    <label>Declined</label>
    <table border="1">
        <tr>
            <th>Kode Pesanan</th> <th>Kode Kurir</th> <th>Jumlah Hal</th> <th>Harga Total</th>
        </tr>
    <?php foreach ($declined->result() as $item) : ?>
        <tr>
            <td><?php echo $item->kodePesanan ?></td>
            <td><?php echo $item->kodeKurir ?></td>
            <td><?php echo $item->jumlahHalaman ?></td>
            <td><?php echo $item->hargaTotal ?></td>
            <td>
                <?php echo form_open('admin/to_waitlist'); ?>
                    <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                    <button type="submit">Undo Decline</button>
                </form>
            </td>
        </tr>
        <br><br>
        <!-- Tambahkan button untuk ubah -->
        <!-- Tambahkan button untuk ubah -->
    <?php endforeach; ?>
    </table>
</div>
