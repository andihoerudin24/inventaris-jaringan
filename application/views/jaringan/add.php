<?php ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong>
            <small> Jaringan</small>
        </div>
        <?php echo form_open('Jaringan/add') ?>
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nama Jaringan</label>
                 <input type="text" name="nama_jaringan" id="vat"  class="form-control">
              
            </div>
            <div class="form-group">
                <label for="vat" class=" form-control-label">Nomor PC</label>
                <select name="id_pc" class="form-control" required="">
                    <option>Pilih Nomor PC</option>
                    <?php  $cmb=$this->db->get('tb_pc')->result() ?>
                   <?php foreach ($cmb as $value):  ?>
                    <option value="<?php echo $value->no_urut ?>"><?php echo $value->no_pc; ?></option>
                    <?php endforeach; ?>
                </select>
                
                  </div>
            <div class="form-group">
                <label for="street" class=" form-control-label">Pilih Printer</label>
                <select name="id_printer" class="form-control" required="">
                    
                    <?php  $cmb=$this->db->get('tb_printer')->result() ?>
                   <?php foreach ($cmb as $value):  ?>
                    <option value="<?php echo $value->id_printer ?>"><?php echo $value->nama_printer; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
                    <div class="form-group">
                        <label for="city" class=" form-control-label">Pilih Switch</label>
                        <?php echo cmb_dinamis('id_switch', 'tb_switch', 'nama_switch', 'id_switch') ?>
                    </div>
          
                    <div class="form-group">
                        <label for="city" class=" form-control-label">pilih ruangan</label>
                        <?php echo cmb_dinamis('id_lokasi', 'tb_lokasi', 'nama_lokasi', 'id_lokasi') ?>
                    </div>
                      <button type="submit" name="submit" class="btn btn-success">TAMBAH</button>
                </div>
            </div>
        </div>
    <?php echo form_close() ?>
    </div>
    
</div>
</div>
</div>
<div>
</div>
