
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong>
            <small> Printer</small>
        </div>
        <?php   echo form_open('Printer/edit');
        echo form_hidden('id_printer',$printer['id_printer'])?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nama Printer</label>
                <input type="text" name="nama_printer" value="<?php echo $printer['nama_printer'] ?>" placeholder="Masukkan nama printer" class="form-control">
            <input type="radio" 
                       name="status" value="milik-sendiri" />
            <label for="dewey">Milik sendiri</label><br>
                <input type="radio" 
                       name="status" value="sewa"/>
                <label for="dewey">Sewa</label>

            </div>
            
    <button type=submit name="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>
<div>

</div>
</div>

<?php  echo form_close() ;  ?>

