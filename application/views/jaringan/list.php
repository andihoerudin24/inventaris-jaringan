  
 <div class="row">
    <div class="col-md-6">
          <div class="au-card chart-percent-card">
                <?php echo anchor('Jaringan/add', 'Tambah', array('class' => 'btn btn-success')); ?>
               <?php echo anchor('Jaringan/cetak', 'Print', array('class' => 'btn btn-warning')); ?>
          </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="au-card chart-percent-card">
        <div class="au-card-inner">
            <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="text-center">Nama jaringan</th>
                    <th class="text-center">No PC</th>
                    <th class="text-center">Ip Address</th>
                    <th class="text-center">Nama PC</th>
                    <th class="text-center">Printer</th>
                    <th class="text-center">Switch</th>
                    <th class="text-center">Lokasi</th>
                    <th class="text-center">Merek</th>
                    <th class="text-center">Os</th>
                    <th class="text-center">Cpu</th>
                    <th class="text-center">Ram</th>
                    <th class="text-center">Hdd</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1+$this->uri->segment(3); ?>
                <?php foreach ($jaringan as $jar): ?>
                    <tr>
                        <td class="text-center"><?php echo $no; ?></td>
                        <td class="text-center"><?php echo $jar->nama_jaringan; ?></td>
                        
                        <td class="text-center"><?php echo $jar->no_pc; ?></td>
                        <td class="text-center"><?php echo $jar->ip_add; ?></td>
                        <td class="text-center"><?php echo $jar->nama_pc; ?></td>
                        <td class="text-center"><?php echo $jar->nama_printer; ?></td>
                        <td class="text-center"><?php echo $jar->nama_switch; ?></td>
                        <td class="text-center"><?php echo $jar->nama_lokasi; ?></td>
                        <td class="text-center"><?php echo $jar->merk; ?></td>

                        <td class="text-center"><?php echo $jar->os; ?></td>

                        <td class="text-center"><?php echo $jar->cpu; ?></td>

                        <td class="text-center"><?php echo $jar->ram; ?></td>

                        <td class="text-center"><?php echo $jar->hdd; ?></td>
                       
                        <td>
                         <?php echo anchor('Jaringan/edit/' . $jar->id_jaringan, 'Edit', ['class' => 'btn btn-outline-info']) ?>
                       <?php echo anchor('Jaringan/hapus/' . $jar->id_jaringan, 'Hapus', ['class' => 'btn btn-outline-danger']) ?>
                       </td>


                    <?php $no++; ?>
                <?php endforeach; ?>
                    </tr>
            </tbody>
        </table>
    </div>
    
</div>
