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
    
    <label for="no_telp">No. Telepon</label> <br>
    <input type="text" name="no_telp" placeholder="Masukkan No. Telepon">
    <br>

    <table style="padding-top:20px">
        <tr>
            <td><label id="totharga" for="harga">Total Harga</label></td>
            <td style="width:60%; text-align:right; padding-right:5px"><span id="harga">harga di sini</span></td>
            <td><button id="konfirpesan" type="submit">Konfirmasi Pembelian</button></td>
        </tr>
    </table>
    
</div>
<div class="kanan" id="form_buku" onChange="myFunction()">
    <div class="grid-container">
    <label for="ukuran_kertas">Ukuran Kertas</label>
    <label for=""></label>
    </div>
    <div class="grid4">
        <button value="uk_a4">A4</button>
        <button value="uk_a5">A5</button>
        <button value="uk_b4">B4</button>
        <button value="uk_b5">B5</button>
    </div>

    <!-- <select name="ukuran_kertas" id="uk_kertas">
        <option value="uk_a4">A4</option>
        <option value="uk_a5">A5</option>
        <option value="uk_b4">B4</option>
        <option value="uk_b5">B5</option>
    </select>
    <br> -->
    
    <div class="grid-container">
        <label for="jenis_kertas">Jenis Kertas</label>
        <label for="jenis_cover">Jenis Cover</label>
    </div>
    <div class="grid2">
        <div class="grid2">
            <button value="jk_hssd">HSSD9</button>
            <button value="jk_hvs">HVS</button>
        </div>
        <div class="grid2">
            <button value="5000">Soft Cover</button>
            <button value="10000">Hard Cover</button>
        </div>
    </div>

    <!-- <select name="jenis_kertas" id="je_kertas">
        <option value="jk_hssd">HSSD</option>
        <option value="jk_hvs">HVS</option>
    </select>
    <br>
 
    <select name="jenis_cover" id="je_cover">
        <option value="5000">Soft Cover</option>
        <option value="10000">A5</option>
    </select>
    <br> -->
    <div class="grid-container">
        <label for="kurir">Kurir</label>
    </div>
    <div class="grid4">
        <button value="8000">JNE</button>
        <button value="5000">Go-Jek</button>
        <button value="6000">J&T</button>
        <button value="9000">Tiki</button>
    </div>

    <!-- <select name="kurir" id="kurir">
        <option value="8000">JNE</option>
        <option value="5000">Go-Jek</option>
        <option value="6000">J&T</option>
        <option value="9000">Tiki</option>
    </select> -->

    <label for="jumlah_halaman">Jumlah Halaman</label>
    <input id="hal" type="text" name="jumlah_halaman">
    <br>
</div>
    

    
    
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
    function myFunction() {
        var je_cov = document.getElementById("je_cover").value;
        var je_kertas = document.getElementById("je_kertas").value;
        var uk_kertas = document.getElementById("uk_kertas").value;
        var kurir = document.getElementById("kurir").value;
        var hal = document.getElementById("hal").value;

        var hargaKertas = 0;
        var hargaCover = parseInt(je_cov);
        var hargaKurir = parseInt(kurir);

        if(je_kertas == "jk_hssd"){
            if(uk_kertas == "uk_a4"){
                hargaKertas = 150;
            } else if (uk_kertas == "uk_a5"){
                hargaKertas = 80;
            } else if (uk_kertas == "uk_b4"){
                hargaKertas = 150;
            } else if (uk_kertas == "uk_b5"){
                hargaKertas = 80;
            }
        } else if (je_kertas == "jk_hvs"){
            if(uk_kertas == "uk_a4"){
                hargaKertas = 110;
            } else if (uk_kertas == "uk_a5"){
                hargaKertas = 60;
            } else if (uk_kertas == "uk_b4"){
                hargaKertas = 110;
            } else if (uk_kertas == "uk_b5"){
                hargaKertas = 60;
            }
        }
        var totalHarga = (parseInt(hal) * hargaKertas) + hargaCover + hargaKurir;
        // document.getElementById("harga").innerHTML = je_cov + je_kertas + uk_kertas + kurir + hal;
        document.getElementById("harga").innerHTML = parseInt(hal) * hargaKertas + hargaCover + hargaKurir  ;
    }
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
