
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA ANAK ASUH SMP</h3>
              <div class="box-tools pull-right">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                <?php echo $this->session->flashdata('error'); ?>
                <?php echo $this->session->flashdata('success'); ?>
                <?php echo $this->session->flashdata('hapus'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Nama Sekolah</th>
                  <th>Kelas</th>                
                  <th>Status</th>
                  <th>Aksi</th>
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($siswa as $s) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $s->nama; ?></td>
                      <td><?php $format = date('d-m-Y', strtotime($s->tgl_lahir ));echo $s->tempat_lahir ,' , ', $format?></td>
                      <td><?php echo $s->alamat; ?></td>
                      <td><?php echo $s->nama_sekolah; ?></td>
                      <td><?php 
                        if($s->kelas == '1'){
                          echo "I";
                        }elseif($s->kelas == '2'){
                          echo "II"; 
                        }elseif ($s->kelas == '3'){
                          echo "III";
                        }elseif ($s->kelas == '4'){
                          echo "IV";
                        }elseif ($s->kelas == '5'){
                          echo "V";
                        }
                        elseif ($s->kelas == '6'){
                          echo "VI";
                        }elseif ($s->kelas == '7'){
                          echo "VII";
                        }elseif ($s->kelas == '8'){
                          echo "VIII";
                        }elseif ($s->kelas == '9'){
                          echo "IX";
                        }elseif ($s->kelas == '10'){
                          echo "X";
                        }elseif ($s->kelas == '11'){
                          echo "XI";
                        }else{
                          echo "XII";
                        }

                         ?></td>
                      <td><label style="font-size: 10pt;" class="label label-block label-success">Aktif</label></td>
                      <td style="text-align: center;">
                        <a href="#lihat<?php echo $s->nisn;?>" data-toggle="modal" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="lihat"></span></a>  | 
                        <a href="#val<?php echo $s->nisn;?>" data-toggle="modal" ><span class="fa fa-fw fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="ubah status"></span></a>
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


    <?php foreach ($siswa as $s) { ?>
                <div class="modal fade" id="lihat<?php echo $s->nisn?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel2">
                  <div class="modal-dialog modal-ig" style="width:80%; margin: 20px 5px 20px 210px" >
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel2">Lihat Data</h4>
                      </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                          <h4><b>Foto Siswa :</b></h4>
                      </div>
                      <div class="form-group">
                        <a href="#absen" data-toggle="modal"><img  src="<?php echo base_url('upload/foto/'.$s->l_foto) ?>" width='150' height='180'></a>
                      </div>
                      <!-- /.form-group -->
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <h4><b>Data Siswa :</b></h4>
                      </div>
                      
                      
                      
                      <div class="form-group">
                            <label >NISN</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->nisn?>" disabled>
                      </div>

                      <div class="form-group">
                            <label >Nama Lengkap</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->nama?>" disabled>
                      </div>

                      <div class="form-group">
                            <label >Tempat & Tanggal Lahir</label>                              
                            <input type="text" class="form-control" value="<?php $format = date('d-m-Y', strtotime($s->tgl_lahir ));echo $s->tempat_lahir ,' , ', $format?>" disabled>
                      </div>

                      <div class="form-group">
                            <label >Jenis Kelamin</label> 
                            <input type="text" class="form-control" value="<?php echo $s->jenis_kelamin?>" disabled>
                      </div>

                      <div class="form-group">
                            <label >Alamat</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->alamat?>" disabled>
                      </div>

                      <div class="form-group">
                            <label >No HP</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->no_hp?>" disabled>
                      </div>
                      <div class="form-group">
                            <label >Status</label>                              
                            <input type="text" class="form-control" value="<?php 
                              if ($s->status==0) {
                                  echo 'Aktif';
                                }else{
                                  echo 'Belum Aktif';
                                }
                              ?>" disabled>
                      </div>
                      

                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                      <div class="form-group">
                          <h4><b>Data Sekolah :</b></h4>
                      </div>
                      <div class="form-group">
                            <label >Npsn Sekolah</label>                              
                            <input type="text"  class="form-control" value="<?php echo $s->npsn?>" disabled>
                      </div>
                      <div class="form-group">
                            <label >Nama Sekolah</label>                              
                            <input type="text"  class="form-control" value="<?php echo $s->nama_sekolah?>" disabled>
                      </div>
                      <!-- /.form-group -->
                       <div class="form-group">
                            <label >Alamat Sekolah</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->alamat_sekolah?>" disabled>
                      </div>

                      <div class="form-group">
                            <label >Kecamatan Sekolah</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->kecamatan?>" disabled>
                      </div>
                      <div class="form-group">
                            <label >Jenjang Pendidikan</label>                              
                            <input type="text" class="form-control" value="<?php 
                                    if ($s->jenjang == '1') {
                                      echo "SD";
                                    }elseif ($s->jenjang == '2') {
                                      echo "SMP";
                                    }
                                    else{
                                      echo "SMU";
                                    }?>" disabled>
                      </div>
                      <div class="form-group">
                            <label >Status Sekolah</label>                              
                            <input type="text" class="form-control" value="<?php 
                             if($s->status == 0){
                                echo "Negeri";
                             }else{
                                echo "Swasta";
                             }
                             ?>" disabled>
                      </div>
                      <div class="form-group">
                            <label >Kelas</label>                              
                            <input type="text" class="form-control" value="<?php 
                        if($s->kelas == '1'){
                          echo "I";
                        }elseif($s->kelas == '2'){
                          echo "II"; 
                        }elseif ($s->kelas == '3'){
                          echo "III";
                        }elseif ($s->kelas == '4'){
                          echo "IV";
                        }elseif ($s->kelas == '5'){
                          echo "V";
                        }
                        elseif ($s->kelas == '6'){
                          echo "VI";
                        }elseif ($s->kelas == '7'){
                          echo "VII";
                        }elseif ($s->kelas == '8'){
                          echo "VIII";
                        }elseif ($s->kelas == '9'){
                          echo "IX";
                        }elseif ($s->kelas == '10'){
                          echo "X";
                        }elseif ($s->kelas == '11'){
                          echo "XI";
                        }else{
                          echo "XII";
                        }

                         ?>" disabled>
                      </div>
                      <!-- /.form-group -->
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                          <h4><b>Data Keluarga :</b></h4>
                      </div>
                      <div class="form-group">
                            <label>NO KK</label>                              
                            <input type="text"  class="form-control" value="<?php echo $s->no_kk?>" disabled>
                      </div>
                      <div class="form-group">
                            <label>Nama Ayah</label>                              
                            <input type="text"  class="form-control" value="<?php echo $s->nama_ayah?>" disabled>
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                            <label>Nama Ibu</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->nama_ibu?>" disabled>
                      </div>
                      <div class="form-group">
                            <label>Pekerjaan Ayah</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->kerja_ayah?>" disabled>
                      </div>
                      <div class="form-group">
                            <label>Pekerjaan Ibu</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->kerja_ibu?>" disabled>
                      </div>
                       <div class="form-group">
                            <label>Anak Ke</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->anak?>" disabled>
                      </div>
                       <div class="form-group">
                            <label>Jumlah Saudara</label>                              
                            <input type="text" class="form-control" value="<?php echo $s->jumlah_saudara?>" disabled>
                      </div>


                      
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-remove" data-dismiss="modal">Keluar</button>
                </div>
                </form>

                
                    </div>
                  </div>
                </div>
        <?php } ?>

        <?php foreach ($siswa as $s) { ?>
        <div class="modal fade" id="val<?php echo $s->nisn?>">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('staff/siswa/ubah_smp'); ?>" method="post" >
                  <p>Apakah anda yakin ingin mengubah Status ini?</p>
                <input type="hidden" value="<?=$s->nisn;?>" name="nisn">
                <input type="hidden" value="1" name="status">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Ubah</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    <?php } ?>
     
    