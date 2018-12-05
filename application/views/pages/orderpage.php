<style>

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<!-- Content -->
<h1>Pesan Print E-Book</h1>

<div style="margin:auto">

<?php echo form_open('pages/order'); ?>
    
    <label for="jumlah_halaman">Jumlah Halaman</label>
    <br>
    <input type="text" name="jumlah_halaman">
    <br><br>

    <label for="link_file">Link File</label>
    <br>
    <input type="text" name="link_file">
    <br><br>

    <label for="kurir">Kurir</label><br>
    <select name="kurir">
        <option value="k01">JNE</option>
        <option value="k02">Go-Jek</option>
        <option value="k03">J&T</option>
        <option value="k04">Tiki</option>
    </select>
    <br><br>

    <label for="ukuran_kertas">Ukuran Kertas</label>
    <br>
    <select name="ukuran_kertas">
        <option value="uk_a4">A4</option>
        <option value="uk_a5">A5</option>
        <option value="uk_b4">B4</option>
        <option value="uk_b5">B5</option>
    </select>
    <br><br>

    <label for="jenis_kertas">Jenis Kertas</label>
    <br>
    <select name="jenis_kertas">
        <option value="jk_hssd">HSSD</option>
        <option value="jk_hvs">HVS</option>
    </select>
    <br><br>

    <label for="jenis_cover">Jenis Cover</label>
    <br>
    <select name="jenis_cover">
        <option value="cov_01">Soft Cover</option>
        <option value="cov_02">A5</option>
    </select>
    <br><br>    

    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        
        <label for="nama">Nama</label>
        <br>
        <input type="text" name="nama">
        <br><br>
        
        <label for="alamat">Alamat</label>
        <br>
        <input type="text" name="alamat">
        <br><br>

        <label for="link_bukti">Link Bukti Pembayaran</label>
        <br>
        <input type="text" name="link_bukti">
        <br><br>

        <button type="submit">Konfirmasi Pembelian</button>
    </div>

</div>

</form>
<!-- Button to Show Modal -->
<button id="myBtn"">Konfirmasi Pesanan</button>
<br><br><br>
<br><br><br>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
