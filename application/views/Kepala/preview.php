<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA ANAK ASUH</h3>
              <div class="box-tools pull-right">
                <?php echo $this->session->flashdata('gagal'); ?>

                <?php echo $this->session->flashdata('mes'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            <!--<form class="form-horizontal" target="_blank" action="<?php echo base_url('kepala/laporan/cetak'); ?>" method="post">
            <button type="submit" class="btn btn-success" style="margin: 15px"> <i class="fa fa-print"></i> Cetak  </button>
            </form> -->
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>NAMA ORTU</th>
                  <th>ALAMAT</th>                  
                  <th>NAMA SEKOLAH</th>
                  <th>ALAMAT SEKOLAH</th>
                  <th>NO_HP</th>
                  
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($preview as $s) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $s->nama; ?></td>
                      <td><?php echo $s->nama_ayah; ?></td>
                      <td><?php echo $s->alamat; ?></td>
                      <td><?php echo $s->nama_sekolah; ?></td>
                      <td><?php echo $s->alamat_sekolah; ?></td>
                      <td><?php echo $s->no_hp; ?></td>
                      
                    </tr>
                    <?php } ?>

                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>