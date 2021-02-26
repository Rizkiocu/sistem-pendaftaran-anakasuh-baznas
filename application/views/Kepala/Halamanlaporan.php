    <section class="content">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
  
            
        
          <!-- Custom Tabs -->

          <div class="box box-primary">
            <div class="box-header with-border">
              <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Laporan</a></li>
             
                             
            </ul>
              <div class="box-tools pull-right">
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
              
              

            </div>

            <form class="form-horizontal" method="post" action="<?php echo base_url('kepala/laporan/laporan_jenjang')?>">
            <div class="box-body" style="height: 130px">
            <div class="tab-content">
              <label for="jenjang" class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Jenjang Pendidikan :</label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <select class="form-control" name="jenjang">
                          
                          <option value="">-- Choose Option --</option>
                              <option value="1" >SD</option>
                              <option value="2" >SMP</option>
                              <option value="3" >SMU</option>
                   
                        </select>
                        </div>
                      </div>
                      <div class="item form-group">
                    <div class="col-md-3 ">
                        <button id="btnCari" type="submit" class="btn btn-primary"> Lihat</button>
                        <!--<a href="<?php echo base_url("laporanobat/cetak")?>" class="btn btn-info "> Cetak </a>-->
                    </div>
                    
 
              <!-- /.tab-pane -->
             
              <!-- /.tab-pane -->
            </div>
          </div>
        </form>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

            <!-- /.box-header -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
      <!-- /.row -->
    </section>

