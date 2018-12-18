<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong>
            <small> Komputer</small>
        </div>
        <?php
        echo form_open('Komputer/edit');
        echo form_hidden('no_urut', $pc['no_urut']);
        ?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nomor PC</label>
                <input type="text" value="<?php echo $pc['no_pc'] ?>" id="company" name="no_pc" placeholder="Contoh : PC13" class="form-control">
            </div>
            <div class="form-group">
                <label for="vat" class=" form-control-label">Nama PC</label>
                <input type="text" value="<?php echo $pc['nama_pc'] ?>" name="nama_pc" id="vat" placeholder="Masukkan nama pc" class="form-control">
            </div>
            <div class="form-group">
                <label for="street" class=" form-control-label">Merk PC</label>
                <input type="text" value="<?php echo $pc['merk'] ?>" name="merk" id="street" placeholder="Masukkan merk pc" class="form-control">
            </div>
                
                    <div class="form-group">
                        <label for="city" class=" form-control-label">Sistem Operasi</label>
                        <input type="text" name="os" value="<?php echo $pc['os'] ?>" id="city" placeholder="Masukkan sistem operasi pc" class="form-control">
                    </div>
                <div class="form-group">
                        <label for="postal-code" class=" form-control-label">Prosessor</label>
                        <input type="text" value="<?php echo $pc['cpu'] ?>" name="cpu" id="postal-code" placeholder="Masukkan jenis prosessor pc" class="form-control">
                </div>
            <div class="form-group">
                <label for="country" class=" form-control-label">Kapasitas RAM (MB)</label>
                <input type="text" name="ram" value="<?php echo $pc['ram'] ?>" id="country" placeholder="Contoh : 2048" class="form-control">
            </div>
                <div class="form-group">
                    <label for="postal-code" class=" form-control-label">Kapasitas Harddisk (GB)</label>
                    <input type="text" name="hdd" value="<?php echo $pc['hdd'] ?>" id="postal-code" placeholder="Contoh : 500" class="form-control">
                </div>
                
                    <div class="form-group">
                        <label for="postal-code" class=" form-control-label">IP Address</label>
                        <input type="text" value="<?php echo $pc['ip_add'] ?>" name="ip_add" id="postal-code" placeholder="Masukkan ip address pc" class="form-control">
                    </div>
                    
    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                
            </div>
        </div>
<div>
</div>    
</div>
</div>

<?php echo form_close(); ?>