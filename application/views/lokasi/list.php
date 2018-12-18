<div class="row">
    <div class="col-md-6">
          <div class="au-card chart-percent-card">
           <?php echo anchor('Lokasi/add', 'Tambah', array('class' => 'btn btn-success')); ?>
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
                    <th class="text-center">Nama Lokasi</th>
                    <th class="text-center">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($lokasi as $l): ?>
                    <tr>
                        <td class="text-center"><?php echo $no ?></td>
                        <td class="text-center"><?php echo $l->nama_lokasi ?></td>
                        <td class="text-center"><?php echo anchor('Lokasi/edit/' . $l->id_lokasi, 'Edit', array('class' => 'btn btn-outline-info')) ?>
                        <?php echo anchor('Lokasi/hapus/' . $l->id_lokasi, 'Hapus', array('class' => 'btn btn-outline-danger')) ?></td>

                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>
</div>