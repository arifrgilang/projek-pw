<div class="gridtab">
<div class="waittab">
    <button class="tablinks" onclick="openTab(event, 'Waitlist')" id="defaultOpen">Wait List</button><br>
    <button class="tablinks" onclick="openTab(event, 'OnProcess')" id="defaultOpen2">On Process</button><br>
    <button class="tablinks" onclick="openTab(event, 'Finished')" id="defaultOpen3">Finished</button>
</div>

<div class="waitkanan">
<!-- KONTEN WAITLIST -->
<div id="Waitlist" class="tabcontent">
    <div>
        <br>
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
                            <button class="button1" type="submit">Accept</button>
                        </form>
                    </td>
                    <td>
                        <?php echo form_open('admin/decline_order'); ?>
                            <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                            <button class="button1" type="submit">Decline</button>
                        </form>
                    </td>
                </tr>
                <br><br>
            <?php endforeach; ?>
            </table>
            <br>
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
                            <button class="button1" type="submit">Undo Decline</button>
                        </form>
                    </td>
                </tr>
                <br><br>
                <!-- Tambahkan button untuk ubah -->
                <!-- Tambahkan button untuk ubah -->
            <?php endforeach; ?>
            </table>
            <br>
            <hr>
    </div>
</div>

<!-- KONTEN ONPROCESS -->
<div id="OnProcess" class="tabcontent">
    <div >
        <br>
        <label>OnProcess</label>
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
                        <button class="button1" type="submit">Complete Order</button>
                    </form>
                </td>
            </tr>
            <br><br>
            <!-- Tambahkan button untuk ubah -->
            <!-- Tambahkan button untuk ubah -->
        <?php endforeach; ?>
        </table>
        <br><hr>
    </div>

</div>

<!-- KONTEN FINISHED -->
<div id="Finished" class="tabcontent">
    <div >
        <br>
        <label>Finished</label>
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
                        <button class="button1" type="submit">Move to Waitlist</button>
                    </form>
                </td>
                <td>
                    <?php echo form_open('admin/to_waitlist'); ?>
                        <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                        <button class="button1" type="submit">Move to OnProcess</button>
                    </form>
                </td>
            </tr>
            <br>
            <!-- Tambahkan button untuk ubah -->
            <!-- Tambahkan button untuk ubah -->
        <?php endforeach; ?>
        </table>
        <hr>
        <br>
</div>

</div>
</div>


<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
