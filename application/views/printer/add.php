
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong>
            <small> Printer</small>
        </div>
        <?php echo form_open('Printer/add') ?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nama Printer</label>
                <input type="text" name="nama_printer" placeholder="Masukkan nama printer" class="form-control">
                <br>
                <input type="radio" 
                       name="status" value="milik-sendiri" />
                <label for="dewey">Milik sendiri</label>
                <input type="radio" 
                       name="status" value="sewa" />
                <label for="dewey">Sewa</label>
            </div>
        </div>
    </div>

<div>
    <button type=submit name="submit" class="btn btn-success">Tambah</button>
</div>
</div>
<?php echo form_close(); ?>
