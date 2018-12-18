<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <strong class="card-title mb-3">Biodata Manager</strong>
                </div>
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>uploads/<?php echo $ma['foto'] ?>" width="150px" height="150px" alt="Card image cap">
                        <h2 class="text-sm-center mt-2 mb-1"><?php echo $ma['nama_manager'] ?></h2>
                        <div class="location text-sm-center">
                            <i class="fas fa-file-text"> NIK :</i>&nbsp;</i><?php echo $ma['nik'] ?><br>
                        <i class="fa fa-users"> Jenis Kelamin :</i>&nbsp;<?php echo $ma['jenis_kelamin'] ?><br>
                        <i class="fa fa-envelope"> E-mail :</i>&nbsp;<?php echo $ma['email'] ?><br>
                        <i class="fa fa-phone"> No Telpon :</i>&nbsp;<?php echo $ma['no_telpon'] ?>

                        </div>


                    </div>
                </div>
<?php  echo anchor('Manager/edit','Edit',array('class'=>'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>
</div>
