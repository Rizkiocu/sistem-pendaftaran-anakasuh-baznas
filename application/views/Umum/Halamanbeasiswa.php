
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA BEASISWA</h3>
              <div class="box-tools pull-right">
                <?php echo $this->session->flashdata('gagal'); ?>
      <?php echo $this->session->flashdata('message'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> Tambah</button>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>Alamat Siswa</th>
                  <th>Nama Bank</th>
                  <th>No Rekening</th>
                  <th>Nominal</th>                
                  <th>AKSI</th>
                  
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($beasiswa as $s) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $s->nama; ?></td>
                      <td><?php echo $s->alamat; ?></td>
                      <td><?php echo $s->nama_bank; ?></td>
                      <td><?php echo $s->no_rek; ?></td>
                      <td><?php 
                            if($s->nominal == 1){
                              echo "Rp. 200.000";
                            }elseif ($s->nominal == 2) {
                              echo "Rp. 250.000";
                            }else{
                              echo "Rp. 300.000";
                            }

                           ?></td>
                      <td style="text-align: center;">
                        <a href="#lihat<?php echo $s->id_bs;?>" data-toggle="modal" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="lihat"></span></a> |
                        <a href="#edit<?php echo $s->id_bs;?>" data-toggle="modal" style="color: #423e3eb5"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> | 
                        <a href="<?php echo base_url('umum/beasiswa/hapus/'.$s->id_bs);?>" onclick="return confirm('Anda yakin?')" style="color: #423e3eb5"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
                      </td>
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

          <div class="modal fade" id="tambah">
          <div class="modal-dialog" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Beasiswa</h4>
              </div>

            
              <form class="form-horizontal" action="<?php echo base_url('umum/beasiswa/tambah'); ?>" method="post">
              
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Siswa</label>
                  <div class="col-sm-8">
                    <?php $edo = "var prdName = new Array();";?>
                     <select class="form-control select2" required="" name="nisn" id="nama_sekolah" style="width: 100%;" onchange="
                     document.getElementById('jenjang').value=prdName[this.value];">
                            <option value="">--Choose Option--</option>
                            <?php 
                            foreach ($siswa as $a) { ?>
                              <option value="<?=$a->nisn;?>"><?php echo $a->nama;?></option>
                              <?php 
                                $stri;
                                if($a->jenjang==1){
                                  $stri='SD';
                                
                                }elseif ($a->jenjang==2) {
                                  $stri='SMP';
                                }else{
                                  $stri='SMU';
                                }
                                $edo .= "prdName['".$a->nisn."'] = '".addslashes($stri)."';";
                                
                              ?>
                            <?php } ?>
                </select>
                    
                  </div>
                </div>

                

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Bank</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Bank" name="nama_bank" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >No Rekening</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" placeholder="No Rekening" name="no_rek" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Jenjang Pendidikan</label>
                  <div class="col-sm-8">
                    <input type="text" id="jenjang" class="form-control" placeholder="Jenjang Pendidikan"  disabled="">
                    <script type="text/javascript">
                      <?php echo $edo;?>
                    </script>
                  </div>
                </div>

               
                <div class="form-group">
                <label class="col-sm-2 control-label">Nominal</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="nominal" style="width: 100%;" required="" >
                            <option value="">-- Chosse Option --</option>
                            <option  value="1">Rp. 200.000</option>
                            <option  value="2">Rp. 250.000</option>
                            <option  value="3">Rp. 300.000</option>

                            
                </select>
                </div>
                </div>

              
                

              </div>
            


              <div class="modal-footer">
                
                <button type="submit" id="send" class="btn btn-primary">Simpan</button>
              </div>
              </form>
              
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
              
<?php foreach ($beasiswa as $s) { ?>
        <div class="modal fade" id="edit<?php echo $s->id_bs?>">
          <div class="modal-dialog" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Edit Beasiswa</h4>
              </div>
              
              <form class="form-horizontal form-label-left" action="<?php echo base_url('umum/beasiswa/update');?>" method="post" >
              <div class="box-body" >
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" >No Rekening</label>
                  <div class="col-sm-8">
                     <input type="hidden" id="id" class="form-control" placeholder="id" name="id_bs" required="" value="<?php echo $s->id_bs?>">
                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="no_rek" required="" value="<?php echo $s->no_rek?>">
                  </div>
                </div>
               
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Siswa</label>
                  <div class="col-sm-8">
                   
                      <select class="form-control select2" name="nisn" style="width: 100%;" >
                            <option value="<?=$s->nisn;?>"><?php echo $s->nama;?></option>
                            <option disabled=""><b>-- Chosse Option --</b></option>
                            <?php 
                            foreach ($siswa as $a) { ?>
                              <option value="<?=$a->nisn;?>"><?php echo $a->nama;?></option>
                              
                            <?php } ?>
                      </select>
                      
                    </div>
                  </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Bank</label>
                  <div class="col-sm-8">
                    <input type="text"   class="form-control" placeholder="Nama Bank" name="nama_bank" value="<?php echo $s->nama_bank?>" required>
                  </div>
                </div>

               

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nominal" >Nominal</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="nominal" style="width: 100%;">
                                      <option disabled="">--Choose Option--</option>
                                      <option <?php if ($s->nominal == '1') { echo 'selected'; } ?> value="1">Rp. 200.000</option>
                                      <option <?php if ($s->nominal == '2') { echo 'selected'; } ?> value="2">Rp. 250.000</option>
                                      <option <?php if ($s->nominal == '3') { echo 'selected'; } ?> value="3">Rp. 300.000</option>
                    </select>
                  </div>
                </div>


                

              </div>
            


              <div class="modal-footer">
                <button type="button" class="btn btn-remove" data-dismiss="modal">Batal</button>
                <button type="submit" id="send" class="btn btn-primary">Update</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <?php } ?>

<?php foreach ($beasiswa as $s) { ?>
        <div class="modal fade" id="lihat<?php echo $s->id_bs?>">
          <div class="modal-dialog" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Lihat Data Beasiswa</h4>
              </div>
              
              <form class="form-horizontal form-label-left" action="<?php echo base_url('umum/beasiswa');?>" method="post" >
              <div class="box-body" >
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" >No Rekening</label>
                  <div class="col-sm-8">
                     <input type="hidden" class="form-control" value="<?php echo $s->id_bs?>">
                    <input type="text" class="form-control" value="<?php echo $s->no_rek?>" disabled>
                  </div>
                </div>
               
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Siswa</label>
                  <div class="col-sm-8">
                   
                      <select class="form-control select2" name="nisn" style="width: 100%;" disabled>
                            <option value="<?=$s->nisn;?>"><?php echo $s->nama;?></option>
                      </select>
                      
                    </div>
                  </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Bank</label>
                  <div class="col-sm-8">
                    <input type="text"   class="form-control"value="<?php echo $s->nama_bank?>" disabled>
                  </div>
                </div>

               

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nominal" >Nominal</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="nominal" style="width: 100%;" disabled>
                                      <option ><?php 
                                            if($s->nominal=='1'){
                                              echo "Rp. 200.000";
                                            }elseif ($s->nominal=='2') {
                                              echo "Rp. 250.000";
                                            }else{
                                              echo "Rp. 300.000";
                                            }

                                      ?></option>
                                      
                    </select>
                  </div>
                </div>


                

              </div>
            


              <div class="modal-footer">
                <button type="button" class="btn btn-remove" data-dismiss="modal">Batal</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <?php } ?>