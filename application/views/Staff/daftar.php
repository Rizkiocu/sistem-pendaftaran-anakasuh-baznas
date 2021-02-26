<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pendaftaran</h3>
              <div class="box-tools pull-right">
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" action="<?php echo base_url('daftar/tambah'); ?>" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="name">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="nama" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="tempat_lahir">Tempat lahir</label>
                  <div class="col-sm-8">
                    <input type="text" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required="" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="tgl_lahir">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <input type="date" id="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="alamat">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" id="alamat" class="form-control" placeholder="Alamat" name="alamat" required="" >
                  </div>
                </div>
                

                <div class="form-group">
                <label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
                <div class="col-sm-8">
                <select class="form-control select2" id="pendidikan" name="pendidikan" style="width: 100%;">
                            <?php 
                              $data = array('1' => 'SD','2' => 'SMP','3' => 'SMA');
                            foreach ($data as $pendidikan) { ?>
                              <option><?php echo $pendidikan;?></option>
                            <?php } ?>
                </select>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="kelas">Kelas</label>
                  <div class="col-sm-8">
                    <input type="text" id="kelas" class="form-control" placeholder="Kelas" name="kelas" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nama_sekolah">Nama Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" id="nama_sekolah" class="form-control" placeholder="Nama Sekolah" name="nama_sekolah" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="alamat_sekolah">Alamat Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" id="alamat_sekolah" class="form-control" placeholder="Alamat Sekolah" name="alamat_sekolah" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">No Hp</label>
                  <div class="col-sm-8">
                    <input type="number" id="telephone" class="form-control" name="no_hp" placeholder="No Hp" required="">
                  </div>
                </div>

                <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="status" style="width: 100%;" disabled="">
                              <option value="0" >Belum Aktif</option>
                </select>
                </div>
                </div>
                

              </div>
            


              <div class="modal-footer">
                
                <button type="submit" id="send" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>