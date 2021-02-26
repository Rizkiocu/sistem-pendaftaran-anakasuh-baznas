
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA SEKOLAH</h3>
              <div class="box-tools pull-right">
                <?php echo $this->session->flashdata('gagal'); ?>

                <?php echo $this->session->flashdata('mes'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> Tambah </button>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NPSN</th>
                  <th>NAMA SEKOLAH</th>
                  <th>ALAMAT SEKOLAH</th>
                  <th>Kecamatan</th>
                  <th>jenjang</th>
                  <th>STATUS</th>                  
                  <th>AKSI</th>
                  
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($siswa as $s) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $s->npsn; ?></td>
                      <td><?php echo $s->nama_sekolah; ?></td>
                      <td><?php echo $s->alamat_sekolah; ?></td>
                      <td><?php echo $s->kecamatan; ?></td>
                      <td><?php 
                          if ($s->jenjang == '1') {
                            echo "SD";
                          }elseif ($s->jenjang == '2') {
                            echo "SMP";
                          }
                          else{
                            echo "SMU";
                          }
                       ?></td>
                      <td><?php 
                          if ($s->posisi == '0') {
                            echo "Negeri";
                          }else{
                            echo "Swasta";
                          }
                       ?></td>
 
                      <td style="text-align: center;">
                        <a href="#lihat<?php echo $s->npsn;?>" data-toggle="modal" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="lihat"></span></a> |
                        <a href="#edit<?php echo $s->npsn;?>" data-toggle="modal" style="color: #423e3eb5"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> | 
                        <a href="<?php echo base_url('staff/sekolah/hapus/'.$s->npsn);?>" onclick="return confirm('Anda yakin?')" style="color: #423e3eb5"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
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
                <h4 class="modal-title">TAMBAH</h4>
              </div>

            
              <form class="form-horizontal" action="<?php echo base_url('staff/sekolah/tambah'); ?>" method="post">
              
              <div class="box-body">



                <div class="form-group">
                  <label class="col-sm-2 control-label" for="npsn">NPSN</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" placeholder="NPSN" name="npsn" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nama_sekolah">Nama Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" id="nama_sekolah" class="form-control" placeholder="Nama Sekolah" name="nama_sekolah" required="">
                  </div>
                </div>

               
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="alamat_sekolah">Alamat Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" id="alamat_sekolah" class="form-control" placeholder="Alamat Sekolah" name="alamat_sekolah" required="" >
                  </div>
                </div>

               <div class="form-group">
                <label for="kecamatan" class="col-sm-2 control-label">Kecamatan</label>
                <div class="col-sm-8">
                <select class="form-control select2" id="kecamatan" name="kecamatan" style="width: 100%;">
                            <?php 
                              $data = array('1' => '-- Choose Option --','2' => 'Bukit Raya','3' => 'Limah Puluh','4' => 'Sail','5' => 'Pekanbaru Kota','6' => 'Sukajadi','7' => 'Senapelan','8' => 'Rumbai','9' => 'Tenayan Raya','10' => 'Marpoyan Damai','11' => 'Rumbai Pesisir','12' => 'Payung Sekaki','13' => 'Tampan');
                            foreach ($data as $kecamatan) { ?>
                              <option><?php echo $kecamatan;?></option>
                            <?php } ?>
                </select>
                </div>
                </div>
                
                <div class="form-group">
                <label for="jenjang" class="col-sm-2 control-label">Jenjang Pendidikan</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="jenjang" style="width: 100%;" required="">
                              <option value="">-- Choose Option --</option>
                              <option value="1" >SD</option>
                              <option value="2" >SMP</option>
                              <option value="3" >SMU</option>
                </select>
                </div>
                </div>

                <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="posisi" style="width: 100%;" required="">
                              <option value="">-- Choose Option --</option>
                              <option value="0" >NEGERI</option>
                              <option value="1" >SWASTA</option>
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

<?php foreach ($siswa as $s) { ?>
        <div class="modal fade" id="edit<?php echo $s->npsn?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel2">
          <div class="modal-dialog modal-ig" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Edit Sekolah</h4>
              </div>
              
              <form class="form-horizontal form-label-left" action="<?php echo base_url('staff/sekolah/update'); ?>" method="post" >
              <div class="box-body" >

                <div class="form-group">
                  <label class="col-sm-2 control-label" >NPSN</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" name="npsn"  value="<?php echo $s->npsn?>" readonly >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $s->nama_sekolah?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Alamat Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat_sekolah" value="<?php echo $s->alamat_sekolah?>">
                  </div>
                </div>

                <div class="form-group">
                <label for="kecamatan" class="col-sm-2 control-label">Kecamatan</label>
                <div class="col-sm-8">
                <select class="form-control select2" id="kecamatan" name="kecamatan" style="width: 100%;" >

                            <option value="<?php echo $s->kecamatan?>" selected> <?php echo $s->kecamatan?></option>
                            <?php 
                              $data = array('2' => 'Bukit Raya','3' => 'Limah Puluh','4' => 'Sail','5' => 'Pekanbaru Kota','6' => 'Sukajadi','7' => 'Senapelan','8' => 'Rumbai','9' => 'Tenayan Raya','10' => 'Marpoyan Damai','11' => 'Rumbai Pesisir','12' => 'Payung Sekaki','13' => 'Tampan');
                            foreach ($data as $kecamatan) { ?>
                              <option><?php echo $kecamatan;?></option>
                            <?php } ?>

                </select>
                </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label">Jenjang Pendidikan</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="jenjang" style="width: 100%;" required="">
                              <option <?php if ($s->jenjang == '1') { echo 'selected'; } ?> value="1">SD</option>
                              <option <?php if ($s->jenjang == '2') { echo 'selected'; } ?> value="2">SMP</option>
                              <option <?php if ($s->jenjang == '3') { echo 'selected'; } ?> value="3">SMU</option>
                </select>
                </div>
                </div>
                
                <div class="form-group">
                <label  class="col-sm-2 control-label">Status</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="posisi" style="width: 100%;" required="">
                              <option <?php if ($s->posisi == '0') { echo 'selected'; } ?> value="0">NEGERI</option>
                              <option <?php if ($s->posisi == '1') { echo 'selected'; } ?> value="1">SWASTA</option>
                              
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
              
<?php foreach ($siswa as $s) { ?>
        <div class="modal fade" id="lihat<?php echo $s->npsn?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel2">
          <div class="modal-dialog modal-ig" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Lihat Sekolah</h4>
              </div>
              
              <form class="form-horizontal form-label-left" action="<?php echo base_url('staff/sekolah'); ?>" method="post" >
              <div class="box-body" >

                <div class="form-group">
                  <label class="col-sm-2 control-label" >NPSN</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" value="<?php echo $s->npsn?>" readonly >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?php echo $s->nama_sekolah?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Alamat Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"value="<?php echo $s->alamat_sekolah?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                <label for="kecamatan" class="col-sm-2 control-label">Kecamatan</label>
                <div class="col-sm-8">
                <select class="form-control select2"  style="width: 100%;" disabled="">

                            <option value="<?php echo $s->kecamatan?>" selected> <?php echo $s->kecamatan?></option>

                </select>
                </div>
                </div>

                <div class="form-group">
                <label  class="col-sm-2 control-label">Jenjang Pendidikan</label>
                <div class="col-sm-8">
                <select class="form-control select2"style="width: 100%;" disabled>
                              <option <?php if ($s->jenjang == '1') { echo 'selected'; } ?> value="1">SD</option>
                              <option <?php if ($s->jenjang == '2') { echo 'selected'; } ?> value="2">SMP</option>
                              <option <?php if ($s->jenjang == '3') { echo 'selected'; } ?> value="3">SMU</option>
                </select>
                </div>
                </div>
                
                <div class="form-group">
                <label  class="col-sm-2 control-label">Status</label>
                <div class="col-sm-8">
                <select class="form-control select2" style="width: 100%;" disabled>
                              <option <?php if ($s->posisi == '0') { echo 'selected'; } ?> value="0">NEGERI</option>
                              <option <?php if ($s->posisi == '1') { echo 'selected'; } ?> value="1">SWASTA</option>
                              
                </select>
                </div>
                </div>
                

              </div>
            


              <div class="modal-footer">
                <button type="button" class="btn btn-remove" data-dismiss="modal">Keluar</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <?php } ?>
              