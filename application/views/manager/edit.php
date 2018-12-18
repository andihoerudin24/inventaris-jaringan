<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Biodata</strong> Manager
        </div>
        <div class="card-body card-block">
            <form action="<?php echo site_url('Manager/edit') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                   <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Nik</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="email-input" name="nik" value="<?php echo $edit['nik'] ?>" placeholder="Masukkan NIK manager" class="form-control">
                        <small class="help-block form-text">Mohon masukkan NIK manager dengan benar</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="email-input" name="nama_manager" value="<?php echo $edit['nama_manager'] ?>" placeholder="Masukkan nama manager" class="form-control">
                        <small class="help-block form-text">Mohon masukkan nama lengkap manager dan gelar dengan benar</small>
                    </div>
                </div>
              <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">E-mail</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="email-input" name="email" value="<?php echo $edit['email'] ?>" placeholder="Masukkan e-mail manager" class="form-control">
                        <small class="help-block form-text">Mohon masukkan e-mail manager dengan benar</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">No. Telpon</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="email-input" name="no_telpon" value="<?php echo $edit['no_telpon'] ?>" placeholder="Masukkan Nomor Telpon manager" class="form-control">
                        <small class="help-block form-text">Mohon masukkan Nomor Telpon manager dengan benar</small>
                    </div>
                </div>
                              <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Jenis Kelamin</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="jenis_kelamin" id="select" class="form-control">
                            <option value="0">Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                    <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Foto</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" name="userfile" class="form-control">
                    </div>
                </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-outline-success btn-sm">
                <i class="fa fa-dot-circle-o"></i> Ok
            </button>
        </div>
    </div>
    </form>