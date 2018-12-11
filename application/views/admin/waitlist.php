<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #006666;
    border-radius: 10px;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: #006666;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
    color:#006666;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>


<div class="tab">
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
            <table class="waitTable" >
                <tr class="wrow"> 
                    <th>Kode Pesanan</th> <th>Kode Kurir</th> <th>Jumlah Hal</th> <th>Harga Total</th> <th>Link File</th>
                </tr>
            <?php foreach ($waitlist->result() as $item) : ?>
                <tr class="wrows">
                    <td><?php echo $item->kodePesanan ?></td>
                    <td><?php echo $item->kodeKurir ?></td>
                    <td><?php echo $item->jumlahHalaman ?></td>
                    <td><?php echo $item->hargaTotal ?></td>
                    <td><a href="http://<?php echo $item->link_file ?>"><?php echo $item->link_file ?></a></td>
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
            <br><br>
            <table class="waitTable">
                <tr class="wrow">
                    <th>Kode Pesanan</th> <th>Kode Kurir</th> <th>Jumlah Hal</th> <th>Harga Total</th> <th>Link File</th>
                </tr>
            <?php foreach ($declined->result() as $item) : ?>
                <tr class="wrows">
                    <td><?php echo $item->kodePesanan ?></td>
                    <td><?php echo $item->kodeKurir ?></td>
                    <td><?php echo $item->jumlahHalaman ?></td>
                    <td><?php echo $item->hargaTotal ?></td>
                    <td><a href="http://<?php echo $item->link_file ?>"><?php echo $item->link_file ?></a></td>
                    <td>
                        <?php echo form_open('admin/to_waitlist'); ?>
                            <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                            <button class="button1" type="submit">Undo Decline</button>
                        </form>
                    </td>
                    <td>
                        <?php echo form_open('admin/delete_order'); ?>
                            <input type="hidden" name="kodePesanan" value="<?php echo $item->kodePesanan ?>">
                            <button class="button1"type="submit">Delete Order</button>
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
        <br><br>
        <table class="waitTable">
            <tr class="wrow">
                <th>Kode Pesanan</th> <th>Kode Kurir</th> <th>Jumlah Hal</th> <th>Harga Total</th>
            </tr>
        <?php foreach ($onprocess->result() as $item) : ?>
            <tr class="wrows">
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
        <br><br>
        <table class="waitTable">
            <tr class="wrow">
                <th>Kode Pesanan</th> <th>Kode Kurir</th> <th>Jumlah Hal</th> <th>Harga Total</th>
            </tr>
        <?php foreach ($finished->result() as $item) : ?>
            <tr class="wrows">
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
