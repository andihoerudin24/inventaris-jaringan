
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong>
            <small> CPU</small>
        </div>
        <?php echo form_open('Komputer/add') ?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nomor PC</label>
                <input type="text" id="company" name="no_pc" placeholder="Contoh : PC13" class="form-control">
            </div>
            <div class="form-group">
                <label for="vat" class=" form-control-label">Nama PC</label>
                <input type="text" name="nama_pc" id="vat" placeholder="Masukkan nama pc" class="form-control">
            </div>
            <div class="form-group">
                <label for="street" class=" form-control-label">Merk PC</label>
                <input type="text" name="merk" id="street" placeholder="Masukkan merk pc" class="form-control">
            </div>
            <div class="form-group">
                <label for="street" class=" form-control-label">Sistem Operasi</label>
                        <input type="text" name="os" id="city" placeholder="Masukkan sistem operasi pc" class="form-control">
                    </div>
                
                <div class="form-group">
                <label for="street" class=" form-control-label">Prosessor</label>
                        <input type="text" name="cpu" id="postal-code" placeholder="Masukkan jenis prosessor pc" class="form-control">
                    </div>
                
           
            <div class="form-group">
                <label for="street" class=" form-control-label">Kapasitas RAM (MB)</label>
                <input type="text" name="ram" id="country" placeholder="Contoh : 2048" class="form-control">
            </div>
            <div class="form-group">
                <label for="street" class=" form-control-label">Kapasitas Harddisk (GB)</label>
                    <input type="text" name="hdd" id="postal-code" placeholder="Contoh : 500" class="form-control">
                </div>
                <div class="form-group">
                <label for="street" class=" form-control-label">IP Address </label>
                        <input type="text" name="ip_add" id="postal-code" placeholder="Masukkan ip address pc" class="form-control">

    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                    </div>

                </div>

            </div>
<div>
</div>      
</div>
<?php  echo form_close();  ?>