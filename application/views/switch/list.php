<div class="row">
    <div class="col-md-6">
          <div class="au-card chart-percent-card">
           <?php echo anchor('Hub/add','Tambah',array('class'=>'btn btn-success'));?>
          </div>
    </div>
</div>
<div class="col-lg-12">
              <div class="au-card chart-percent-card">
    <div class="table-responsive table--no-card m-b-30">
       <table class="table table-borderless table-striped table-earning" id="example">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Switch</th>
                    <th class="text-center">Jumlah Port</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach($hub as $p): ?>
                <tr>
                    <td class="text-center"><?php echo $no ?></td>
                    <td class="text-center"><?php echo $p->nama_switch; ?></td>
                    <td class="text-center"><?php echo $p->jumlah_port; ?></td>
                    <td class="text-center"><?php  echo anchor('Hub/edit/'.$p->id_switch,'Edit',array('class'=>'btn btn-outline-info')) ?>
                        <?php  echo anchor('Hub/hapus/'.$p->id_switch,'Hapus',array('class'=>'btn btn-outline-danger')) ?></td>
                </tr>
                <?php  $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>