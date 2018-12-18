
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong>
            <small> Lokasi</small>
        </div>
        <?php   echo form_open('Lokasi/add')  ?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nama Lokasi</label>
                <input type="text" name="nama_lokasi" placeholder="Masukkan nama lokasi" class="form-control">
            </div>
            
    <button type=submit name="submit" class="btn btn-success">Tambah</button>
        </div>

    </div>
<div>
</div>
</div>
<?php  echo form_close() ;  ?>
