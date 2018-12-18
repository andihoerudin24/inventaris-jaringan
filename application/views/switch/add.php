<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong>
            <small> Switch</small>
        </div>
        <?php echo form_open('Hub/add') ?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nama Switch/Hub</label>
                <input type="text" id="company" name="nama_switch" placeholder="Masukkan nama switch" class="form-control">
            </div>
            <div class="form-group">
                <label for="vat" class=" form-control-label">Jumlah Port</label>
                <input type="number" name="jumlah_port" placeholder="Masukkan jumlah port" class="form-control">
            </div>
        </div>
    </div>
<div>
    <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</div>
</div>
<?php echo form_close(); ?>