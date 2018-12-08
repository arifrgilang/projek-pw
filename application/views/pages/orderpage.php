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
            <td style="width:60%; text-align:right; padding-right:5px">
                <span>Rp.</span>
                <span style="text-color:#FFFFFF" id="harga"></span>
                <input type="hidden" id="hargahidden" name="hargahidden" value="">
            </td>
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
        <label class="conrad">
            <input type="radio" name="uk_ke" id="uk_ke" value="uk_a4">
            <span class="radio">A4</span>
        </label>
        <label class="conrad">
            <input type="radio" name="uk_ke" id="uk_ke" value="uk_a5"> 
            <span class="radio">A5</span>
        </label>
        <label class="conrad">
            <input type="radio" name="uk_ke" id="uk_ke" value="uk_b4">
            <span class="radio">B4</span>
        </label>
        <label class="conrad">
            <input type="radio" name="uk_ke" id="uk_ke" value="uk_b5">
            <span class="radio">B5</span>
        </label>
    </div>
    
    <div class="grid-container">
        <label for="jenis_kertas">Jenis Kertas</label>
        <label for="jenis_cover">Jenis Cover</label>
    </div>

    <div class="grid2">
        <div class="grid2">
            <label class="conrad">
                <input type="radio" name="je_ke" id="je_ke" value="jk_hssd">
                <span class="radio">HSSD</span>
            </label>
            <label class="conrad"n >
                <input type="radio" name="je_ke" id="je_ke" value="jk_hvs">
                <span class="radio">HVS</span>
            </label>
        </div>

        <div class="grid2">
        <label class="conrad">
            <input type="radio" name="je_co" id="je_co" value="cov_01">
            <span class="radio">Soft Cover</span>
        </label>
        <label class="conrad">
            <input type="radio" name="je_co" id="je_co" value="cov_02">
            <span class="radio">Hard Cover</span>
        </label>
        </div>
    </div>

    <div class="grid-container">
        <label for="kurir">Kurir</label>
    </div>
    <div class="grid4">
        <label class="conrad">
            <input type="radio" name="kurir" id="kurir" value="k01">
            <span class="radio">JNE</span>
        </label>
        <label class="conrad">
            <input type="radio" name="kurir" id="kurir" value="k02">
            <span class="radio">Go-Jek</span>
        </label>
        <label class="conrad">
            <input type="radio" name="kurir" id="kurir" value="k03">
            <span class="radio">J&T</span>
        </label>
        <label class="conrad">
            <input type="radio" name="kurir" id="kurir" value="k04">
            <span class="radio">Tiki</span>
        </label>
    </div>

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
        var je_cov = document.getElementsByName("je_co");
        var je_kertas = document.getElementsByName("je_ke");
        var uk_kertas = document.getElementsByName("uk_ke");
        var kurir = document.getElementsByName("kurir");
        var hal = document.getElementById("hal").value;

        var hargaKertas = 0;
        var hargaCover = 0;
        var hargaKurir = 0;
        var jenisKertas = 0;
        var ukuranKertas = 0;
        // get value, but not converted into integers
        for(var i = 0; i < je_kertas.length; i++){
            if(je_kertas[i].checked){
                hargaKertas = je_kertas[i].value;
                break;
            }
        }

        for(var i = 0; i < je_cov.length; i++){
            if(je_cov[i].checked){
                hargaCover = je_cov[i].value;
                break;
            }
        }

        for(var i = 0; i < kurir.length; i++){
            if(kurir[i].checked){
                hargaKurir = kurir[i].value;
                break;
            }
        }

        for(var i = 0; i < je_kertas.length; i++){
            if(je_kertas[i].checked){
                jenisKertas = je_kertas[i].value;
                break;
            }
        }

        for(var i = 0; i < uk_kertas.length; i++){
            if(uk_kertas[i].checked){
                ukuranKertas = uk_kertas[i].value;
                break;
            }
        }

        if(jenisKertas == "jk_hssd"){
            if(ukuranKertas == "uk_a4"){
                hargaKertas = 150;
            } else if (ukuranKertas == "uk_a5"){
                hargaKertas = 80;
            } else if (ukuranKertas == "uk_b4"){
                hargaKertas = 150;
            } else if (ukuranKertas == "uk_b5"){
                hargaKertas = 80;
            }
        } else if (jenisKertas == "jk_hvs"){
            if(ukuranKertas == "uk_a4"){
                hargaKertas = 110;
            } else if (ukuranKertas == "uk_a5"){
                hargaKertas = 60;
            } else if (ukuranKertas == "uk_b4"){
                hargaKertas = 110;
            } else if (ukuranKertas == "uk_b5"){
                hargaKertas = 60;
            }
        }
        
        switch(hargaKurir){
            case "k01":
                hargaKurir = 8000;
                break;
            case "k02":
                hargaKurir = 5000;
                break;
            case "k03":
                hargaKurir = 6000;
                break;
            case "k04":
                hargaKurir = 9000;
                break;
            default:
                break;
        }
        
        if(hargaCover == "cov_01"){
            hargaCover = 5000;
        } else {
            hargaCover = 10000;
        }

        var tot = parseInt(hal) * hargaKertas + hargaCover + hargaKurir;
        document.getElementById('hargahidden').value = String(tot);
        document.getElementById("harga").innerHTML = tot;
    }
// // Get the modal
// var modal = document.getElementById('myModal');

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//     modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
</script>
