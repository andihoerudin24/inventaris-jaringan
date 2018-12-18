<div class="row">
    <div class="col-md-6">
          <div class="au-card chart-percent-card">
            <?php echo anchor('Komputer/add','Tambah',array('class'=>'btn btn-success'));?>

          </div>
    </div>
</div>

<div class="col-lg-12">
     <div class="au-card chart-percent-card">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning" id="example">
            <thead>
            <a href="list.php"></a>
                <tr>
                    <th>no</th>
                    <th class="text-center">No PC</th>
                    <th class="text-center">Nama PC</th>
                    <th class="text-center">Ip Add</th>
                    <th class="text-center">Merek</th>
                    <th class="text-center">OS</th>
                    <th class="text-center">Cpu</th>
                    <th class="text-center">Ram</th>
                    <th class="text-center">Hdd</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                 <?php  $no=1; ?>
                  <?php  foreach($komputer as $kom): ?>
                
                <tr>
                    <td class="text-center"><?php echo $no ?></td>
                    <td class="text-center"><?php echo $kom->no_pc ?></td>
                    <td class="text-center"><?php  echo $kom->nama_pc ?></td>
                    <td class="text-center"><?php  echo $kom->ip_add ?></td>
                    <td class="text-center"><?php  echo $kom->merk ?></td>
                    <td class="text-center"><?php  echo $kom->os ?></td>
                    <td class="text-center"><?php  echo $kom->cpu ?></td>
                    <td class="text-center"><?php  echo $kom->ram ?></td>
                    <td class="text-center"><?php  echo $kom->hdd ?></td>
                    <td class="text-center"><?php echo anchor('Komputer/edit/'.$kom->no_urut,'Edit',array('class'=>'btn btn-outline-info'))?>
                        <?php echo anchor('Komputer/hapus/'.$kom->no_urut,'Hapus',array('class'=>'btn btn-outline-danger'))?>
                    </td>
               
                <?php $no++;  ?>
                <?php  endforeach;  ?>
                     </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
