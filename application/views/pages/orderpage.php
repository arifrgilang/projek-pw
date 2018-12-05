<!-- Content -->
<h1>Pesan Print E-Book</h1>

<div class="containerPesan">

<?php echo form_open('pages/order'); ?>

<div class="kiri">    
    <label for="nama">Nama</label> <br>
    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap"> <br>

    <label for="alamat">Alamat</label> <br>
    <textarea name="alamat" placeholder="Masukkan Alamat" rows="3"></textarea>
    <br>

    <label for="link_file">Link File</label> <br>
    <input type="text" name="link_file" placeholder="Masukkan Link File Buku">
    <br>
</div>
<div class="kanan">
    <div class="grid-container">
    <label for="ukuran_kertas">Ukuran Kertas</label>
    <label for="jenis_kertas">Jenis Kertas</label>
    </div>
    <br>

    <select name="ukuran_kertas">
        <option value="uk_a4">A4</option>
        <option value="uk_a5">A5</option>
        <option value="uk_b4">B4</option>
        <option value="uk_b5">B5</option>
    </select>
    <br>

    
    <label for="jenis_cover">Jenis Cover</label> 
    <select name="jenis_kertas">
        <option value="jk_hssd">HSSD</option>
        <option value="jk_hvs">HVS</option>
    </select>
    <br>

    <select name="jenis_cover">
        <option value="cov_01">Soft Cover</option>
        <option value="cov_02">A5</option>
    </select>
    <br>

    <label for="kurir">Kurir</label>
    <select name="kurir">
        <option value="k01">JNE</option>
        <option value="k02">Go-Jek</option>
        <option value="k03">J&T</option>
        <option value="k04">Tiki</option>
    </select>

    <label for="jumlah_halaman">Jumlah Halaman</label>
    <input id="hal" type="text" name="jumlah_halaman">
    <br>
</div>

    <button type="submit">Konfirmasi Pembelian</button>
    <br>

    
    
    <!-- The Modal -->
    <!-- <div id="myModal" class="modal"> -->

    <!-- Modal content -->
    <!-- <div class="modal-content">
        <span class="close">&times;</span>
        
        
    </div>

</div> -->

</form>
<!-- Button to Show Modal -->
<!-- <button id="myBtn"">Konfirmasi Pesanan</button>
<br><br><br>
<br><br><br> -->
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
