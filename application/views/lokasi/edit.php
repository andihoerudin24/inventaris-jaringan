
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong>
            <small> Lokasi</small>
        </div>
        <?php   echo form_open('Lokasi/edit');
        echo form_hidden('id_lokasi',$lokasi['id_lokasi'])?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nama Lokasi</label>
                <input type="text" name="nama_lokasi" value="<?php echo $lokasi['nama_lokasi'] ?>" placeholder="Masukkan nama lokasi" class="form-control">
            </div>
            
    <button type=submit name="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>
<div>
</div>
</div>

