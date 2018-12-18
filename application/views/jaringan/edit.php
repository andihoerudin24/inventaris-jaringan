<?php ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>edit</strong>
            <small> Jaringan</small>
        </div>
        <?php echo form_open('Jaringan/edit');
          echo form_hidden('id_jaringan',$jaringan['id_jaringan']);
         ?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nama Jaringan</label>
                <input type="text" name="nama_jaringan" value="<?php echo $jaringan['nama_jaringan'] ?>" id="vat"  class="form-control">

            </div>
            <div class="form-group">
                <label for="vat" class=" form-control-label">No PC</label>
                <?php echo cmb_dinamis('id_pc','tb_pc','no_pc','no_urut',$jaringan['no_urut']) ?>
            </div>
            <div class="form-group">
                <label for="street" class=" form-control-label">Pilih Printer</label>
                <?php echo cmb_dinamis('id_printer', 'tb_printer', 'nama_printer', 'id_printer',$jaringan['id_printer']) ?>
            </div>
            
                    <div class="form-group">
                        <label for="city" class=" form-control-label">Pilih Switch</label>
                        <?php echo cmb_dinamis('id_switch', 'tb_switch', 'nama_switch', 'id_switch',$jaringan['id_switch']) ?>
                    </div>
               

                    <div class="form-group">
                        <label for="city" class=" form-control-label">pilih ruangan</label>
                        <?php echo cmb_dinamis('id_lokasi', 'tb_lokasi', 'nama_lokasi', 'id_lokasi',$jaringan['id_lokasi']) ?>
                    </div>
               
            
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>
    <?php echo form_close() ?>
</div>
</div>
</div>
<div>
</div>
