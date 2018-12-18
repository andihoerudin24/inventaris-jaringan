
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong>
            <small> Switch</small>
        </div>
        <?php
        echo form_open('Hub/edit');
        echo form_hidden('id_switch', $edit['id_switch']);
        ?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nama Switch/Hub</label>
                <input type="text" id="company" value="<?php echo $edit['nama_switch'] ?>" name="nama_switch" placeholder="Masukkan nama switch" class="form-control">
            </div>
            <div class="form-group">
                <label for="vat" class=" form-control-label">Jumlah Port</label>
                <input type="number" value="<?php echo $edit['jumlah_port'] ?>" name="jumlah_port" placeholder="Masukkan jumlah port" class="form-control">
            </div>
        </div>
    </div>
<div>
    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
</div>
</div>

<?php echo form_close(); ?>