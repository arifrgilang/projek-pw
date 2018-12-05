    <div class="containerCP">    
        <h1 class="titleCP">
            Cek Pesanan
        </h1>

        <?php echo form_open('pages/checkpage'); ?>
            <input type="text" id="kodPes" name="kodPes"> <br>
            <button type="submit" class="button">Cek Pesanan</button>
        </form>
        <br><br><br><br>
        
        <!-- buat status -->
        <?php 
        foreach ($status->result() as $item) : 
            switch ($item->statusPesanan) {
                case "onprocess" :
                    echo "<h3>Pesanan sedang di proses</h3>";
                break;
                case "declined" :
                    echo "<h3>Pesanan ditolak</h3>";
                break;
                case "waitlist" :
                    echo "<h3>Pesanan masih ada di waiting list</h3>";
                break;
                case "finished" :
                    echo "<h3>Pesanan telah diantar</h3>";
                default :
                    echo "";
            }
        endforeach; 
        ?>
        
    </div>
