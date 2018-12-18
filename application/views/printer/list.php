<div class="row">
    <div class="col-md-6">
          <div class="au-card chart-percent-card">
           <?php echo anchor('Printer/add', 'Tambah', array('class' => 'btn btn-success')); ?>

          </div>
    </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="table-responsive table--no-card m-b-30">
       <table class="table table-borderless table-striped table-earning" id="example">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Printer</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Edit</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($printer as $l): ?>
                    <tr>
                        <td class="text-center"><?php echo $no ?></td>
                        <td class="text-center"><?php echo $l->nama_printer ?></td>
                        <td class="text-center"><?php echo $l->status ?></td>
                        <td class="text-center"><?php echo anchor('Printer/edit/' . $l->id_printer, 'Edit', array('class' => 'btn btn-outline-info')) ?>
                            <?php echo anchor('Printer/hapus/' . $l->id_printer, 'Hapus', array('class' => 'btn btn-outline-danger')) ?></td>

                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>