<div class="row">
                <div class="col-md-12">
                   
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="text">
                                    <?php $count = $this->db->count_all_results('tb_pc'); ?>
                                    <h2><?php echo $count; ?></h2>
                                    <span>Centrall Process Unit</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fa fa-print"></i>
                                </div>
                                <div class="text">
                                    <?php $count_print = $this->db->count_all_results('tb_printer'); ?>
                                    <h2><?php echo $count_print ?></h2>
                                    <span>Printer</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fa fa-circle"></i>
                                </div>
                                <div class="text">
                                    <?php $count_switch = $this->db->count_all_results('tb_switch'); ?>
                                    <h2><?php echo $count_switch ?></h2>
                                    <span>Switch</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="statistic__item">
                                    <h2 class="number">Catatan</h2>
                                    <?php foreach ($note as $row): ?>
                                    <span class="desc"><strong><?php  echo $row->note  ?></span></strong>
                                   <?php endforeach; ?>
                                    <div class="icon">
                                        <i class="fa fa-file-alt"></i>
                                    </div>
                                    <br>
                                    <br>
                                    <?php echo anchor('Welcome/edit','Edit',array('class'=>'btn btn-outline-info')) ?>
                                </div>
                            </div>
</script>