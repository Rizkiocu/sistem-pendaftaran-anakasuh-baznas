




    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header  with-border">
              <h3 class="box-title">DAFTAR SISWA</h3>
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
            
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> DAFTAR</button>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>                  
                  <th>Nama Ayah</th>
                  <th>Alamat</th>
                  <th>Nama Sekolah</th>
                  <th>Pendidikan</th>
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
                      <td><?php echo $s->nama_ayah; ?></td>
                      <td><?php echo $s->alamat; ?></td>
                      <td><?php echo $s->nama_sekolah; ?></td>
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
                      <td><label style="font-size: 10pt;" class="label label-block label-danger">Belum Aktif</label></td>
                      
                      <td style="text-align: center;">
                        <a href="#lihat<?php echo $s->nisn;?>" data-toggle="modal" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="lihat"></span></a> |
                        <a href="#edit<?php echo $s->nisn;?>" data-toggle="modal" style="color: #423e3eb5"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> | 
                        <a href="<?php echo base_url('umum/siswa/hapus/'.$s->nisn);?>" onclick="return confirm('Anda yakin?')" style="color: #423e3eb5"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
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
          <div class="modal-dialog" style="width:70%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center;">PENDAFTARAN</h4>
              </div>

            
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
              <form class="form-horizontal" action="<?php echo base_url('umum/siswa/tambah'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="box-body">

              
              <h4 class="modal-title"><b>Data Siswa :</b></h4><br>
                <div class="form-group">
                  <label class="col-sm-2 control-label" >NISN Siswa</label>
                  <div class="col-sm-8">
                    
                    <input  type="text" class="form-control" placeholder="NISN Siswa" name="nisn" required="">
                  </div>
                </div>
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
                    <label class="col-sm-2 control-label" for="jk">Jenis Kelamin</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jk" value="Laki-Laki" checked> Laki-Laki
                    </label>
                    </div>
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jk" value="Perempuan" > Perempuan
                    </label>
                    </div>
                    </div>
                    
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="alamat">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" id="alamat" class="form-control" placeholder="Alamat" name="alamat" required="" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">No Hp</label>
                  <div class="col-sm-8">
                    <input type="number" id="telephone" class="form-control" maxlength="14" name="no_hp" placeholder="No Hp" required="">
                  </div>
                </div>

                
                                
                <h4 class="modal-title"><b>Data Sekolah :</b></h4><br>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="npsn">Nama Sekolah</label>
                  <div class="col-sm-8">
                    <?php $bayu = "var prdName = new Array();";$riski = "var prdNim = new Array();";$cek = "var prdNom = new Array();";$dayat = "var prdNum = new Array();";?>
                     <select class="form-control select2" required="" name="npsn" id="namaSekolah" style="width: 100%;" onchange="
                     document.getElementById('alamatsekolah').value=prdName[this.value];
                     document.getElementById('kecamatan').value=prdNim[this.value];
                     document.getElementById('jenjang').value=prdNom[this.value];                     
                     document.getElementById('status').value=prdNum[this.value];">
                            <option value="">--Choose Option--</option>
                            <?php 
                            foreach ($sekolah as $a) { ?>
                              <option value="<?=$a->npsn;?>"><?php echo $a->nama_sekolah;?></option>
                              <?php 
                                $bayu .= "prdName['".$a->npsn."'] = '".addslashes($a->alamat_sekolah)."';";
                                $riski .= "prdNim['".$a->npsn."'] = '".addslashes($a->kecamatan)."';";
                                
                                                              
                                $stri;
                                if($a->jenjang==1){
                                  $stri='SD';
                                
                                }elseif ($a->jenjang==2) {
                                  $stri='SMP';
                                }else{
                                  $stri='SMU';
                                }
                                $cek .= "prdNom['".$a->npsn."'] = '".addslashes($stri)."';";
                               
                                $stro;
                                if ($a->status==0) {
                                  $stro ='Negeri';
                                }else{
                                  $stro='Swasta';
                                }
                                $dayat .= "prdNum['".$a->npsn."'] = '".addslashes($stro)."';";
                                
                              ?>
                            <?php } ?>
                </select>
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Alamat Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" id="alamatsekolah" class="form-control" placeholder="Alamat Sekolah"  disabled="">
                    <script type="text/javascript">
                      <?php echo $bayu;?>
                    </script>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Kecamatan</label>
                  <div class="col-sm-8">
                    <input type="text" id="kecamatan" class="form-control" placeholder="Kecamatan" disabled="">
                    <script type="text/javascript">
                      <?php echo $riski;?>
                    </script>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Pendidikan</label>
                  <div class="col-sm-8">
                    <input type="text" id="jenjang" class="form-control" placeholder="Pendidikan" disabled="">
                    <script type="text/javascript">
                    <?php echo $cek;  ?>
                    </script>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Status</label>
                  <div class="col-sm-8">
                    <input type="text" id="status" class="form-control" placeholder="Status" disabled="">
                    <script type="text/javascript">
                    <?php echo $dayat;  ?>
                    </script>
                  </div>
                </div>

                

                <div class="form-group">
                <label for="level" class="col-sm-2 control-label">Kelas</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="kelas" style="width: 100%;" required="" >
                            <option value="">-- Choose Option --</option>
                            <option id="opt1" value="1">I</option>
                            <option id="opt2" value="2">II</option>
                            <option id="opt3" value="3">III</option>
                            <option id="opt4" value="4">IV</option>
                            <option id="opt5" value="5">V</option>
                            <option id="opt6" value="6">VI</option>
                            <option id="opt6" value="7">VII</option>
                            <option id="opt6" value="8">VIII</option> 
                            <option id="opt6" value="9">IX</option>
                            <option id="opt6" value="10">X</option>
                            <option id="opt6" value="11">XI</option>
                            <option id="opt6" value="12">XII</option>

                            <!--<script src="<?php// echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script> 
                            <script type="text/javascript">
                              $(document).ready(function(){
                                $("#namaSekolah").on("change",function(){
                                  var jenjang=$('jenjang').val();
                                  if(jenjang=='SD'){
                                   $('opt1').show();
                                   $('opt2').show();
                                   $('opt3').show();
                                   $('opt4').show();
                                   $('opt5').show();
                                   $('opt6').show(); 
                                  }
                                  else{
                                    $('opt1').show();
                                    $('opt2').show();
                                    $('opt3').show();
                                    $('opt4').hide();
                                    $('opt5').hide();
                                    $('opt6').hide();
                                  }
                                });
                              });
                            </script>-->
                </select>
                </div>
                </div>
                
                <h4 class="modal-title"><b>Data Keluarga :</b></h4><br>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="NO KK">NO KK</label>
                  <div class="col-sm-8">
                    <input type="number" id="no_kk" class="form-control" placeholder="NO KK" name="no_kk" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nama_ayah">Nama Ayah</label>
                  <div class="col-sm-8">
                    <input type="text" id="nama_ayah" class="form-control" placeholder="Nama Ayah" name="nama_ayah" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="nama_ibu">Nama Ibu</label>
                  <div class="col-sm-8">
                    <input type="text" id="nama_ibu" class="form-control" placeholder="Nama Ibu" name="nama_ibu" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Pekerjaan Ayah</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="kerja Ayah" name="kerja_ayah" required="">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Pekerjaan Ibu</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="kerja Ibu" name="kerja_ibu" required="">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Anak Ke</label>
                  <div class="col-sm-8">
                    <input type="number"  class="form-control" placeholder="Anak keberapa" name="anak" >
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Jumlah Saudara</label>
                  <div class="col-sm-8">
                    <input type="number"  class="form-control" placeholder="Jumlah Saudara" name="jumlah_saudara" >
                  </div>
                </div>  

                <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="status" style="width: 100%;" disabled="">
                              <option value="1" >Belum Aktif</option>
                </select>
                </div>
                </div>

                <h4 class="modal-title"><b>Persyaratan :</b></h4><br>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >foto</label>
                  <div class="col-sm-8">
                    <input type="file"  name="userfile" class="form-control-file" id="FormControlFile" required> 
                    <small class="help-block">Format gambar yang diperbolehkan *.png, *.jpg dan ukuran maksimal 2 MB.</small>
                  </div>
                </div>
                

              </div>
            


              <div class="modal-footer">
                
                <button type="submit"  value="upload" class="btn btn-primary">Simpan</button>
              </div>
              </form>
              
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<?php foreach ($siswa as $s) { ?>
        <div class="modal fade" id="edit<?php echo $s->nisn?>">
          <div class="modal-dialog" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Edit Anak Asuh</h4>
              </div>
              
              <form class="form-horizontal form-label-left" action="<?php echo base_url('umum/siswa/update'); ?>" method="post" enctype="multipart/form-data" >
              <div class="box-body" >
                <h4 class="modal-title">Data Siswa :</h4><br>
                <div class="form-group">
                  <label class="col-sm-2 control-label" >NISN Siswa</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" placeholder="nisn" name="nisn" value="<?php echo $s->nisn?>" readonly>
                     <input type="hidden"  class="form-control" placeholder="nisn" name="no_kk" value="<?php echo $s->no_kk?>" readonly>
                     <input type="hidden"  class="form-control"  name="id_lamp" value="<?php echo $s->id_lamp?>" readonly>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Lengkap</label>
                  <div class="col-sm-8">
                    
                    <input type="text"  class="form-control" placeholder="Nama Lengkap" name="nama" required="" value="<?php echo $s->nama?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Tempat Lahir</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required="" value="<?php echo $s->tempat_lahir?>">
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" placeholder="Tgl Lahir" name="tgl_lahir" required="" value="<?php echo $s->tgl_lahir?>">
                  </div>
                </div> 

                <div class="form-group">
                    <label class="col-sm-2 control-label" >Jenis Kelamin</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jk" value="Laki-Laki" <?php if ($s->jenis_kelamin == 'Laki-Laki') 
                      {
                          echo "checked";
                      } ?> > Laki-Laki
                    </label>
                    </div>
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jk" value="Perempuan" <?php if ($s->jenis_kelamin == 'Perempuan') 
                      {
                          echo "checked";
                      } ?> > Perempuan
                    </label>
                    </div>
                    </div>
                    
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required="" value="<?php echo $s->alamat?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="no_hp">No Hp</label>
                  <div class="col-sm-8">
                    <input type="number" id="no_hp" class="form-control" placeholder="No Hp" name="no_hp" required="" value="<?php echo $s->no_hp?>">
                  </div>
                </div>
                <h4 class="modal-title"><b>Data Sekolah :</b></h4><br>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="npsn">Nama Sekolah</label>
                  <div class="col-sm-8">
                    <?php $ba = "var prdName = new Array();";$ri = "var prdNim = new Array();";$ce = "var prdNom = new Array();";$da = "var prdNum = new Array();";?>
                     <select class="form-control select2" required="" name="npsn" style="width: 100%;" onchange="
                     document.getElementById('al').value=prdName[this.value];
                     document.getElementById('ke').value=prdNim[this.value];
                     document.getElementById('je').value=prdNom[this.value];                     
                     document.getElementById('st').value=prdNum[this.value];">
                            <option value="<?=$s->npsn;?>"><?php echo $s->nama_sekolah;?></option>
                            <?php 
                            foreach ($sekolah as $a) { ?>
                              <option value="<?=$a->npsn;?>"><?php echo $a->nama_sekolah;?></option>
                              <?php 
                                $ba .= "prdName['".$a->npsn."'] = '".addslashes($a->alamat_sekolah)."';";
                                $ri .= "prdNim['".$a->npsn."'] = '".addslashes($a->kecamatan)."';";
                                
                                                              
                                $stri;
                                if($a->jenjang==1){
                                  $stri='SD';
                                
                                }elseif ($a->jenjang==2) {
                                  $stri='SMP';
                                }else{
                                  $stri='SMU';
                                }
                                $ce .= "prdNom['".$a->npsn."'] = '".addslashes($stri)."';";
                               
                                $stro;
                                if ($a->status==0) {
                                  $stro ='Negeri';
                                }else{
                                  $a->stro='Swasta';
                                }
                                $da .= "prdNum['".$a->npsn."'] = '".addslashes($stro)."';";
                                
                              ?>
                            <?php } ?>
                </select>
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Alamat Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" id="al" class="form-control" placeholder="Alamat Sekolah"  disabled="" value="<?php echo $s->alamat_sekolah ?>">
                    <script type="text/javascript">
                      <?php echo $ba;?>
                    </script>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Kecamatan</label>
                  <div class="col-sm-8">
                    <input type="text" id="ke" class="form-control" placeholder="Kecamatan" disabled="" value="<?php echo $s->kecamatan ?>">
                    <script type="text/javascript">
                      <?php echo $ri;?>
                    </script>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Pendidikan</label>
                  <div class="col-sm-8">
                    <input type="text" id="je" class="form-control" placeholder="Pendidikan" disabled="" value="<?php 
                                    if ($s->jenjang == '1') {
                                      echo "SD";
                                    }elseif ($s->jenjang == '2') {
                                      echo "SMP";
                                    }
                                    else{
                                      echo "SMU";
                                    }?>">
                    <script type="text/javascript">
                    <?php echo $ce;  ?>
                    </script>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Status</label>
                  <div class="col-sm-8">
                    <input type="text" id="st" class="form-control" placeholder="Status" disabled="" value="<?php 
                             if($s->status == 0){
                                echo "Negeri";
                             }else{
                                echo "Swasta";
                             }
                             ?>">
                    <script type="text/javascript">
                    <?php echo $da;  ?>
                    </script>
                  </div>
                </div>

                

                <div class="form-group">
                  <label class="col-sm-2 control-label"  >Kelas</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" name="kelas" style="width: 100%;">
                                      <option disabled="">--Choose Option--</option>
                                      <option <?php if ($s->kelas == '1') { echo 'selected'; } ?> value="1">I</option>
                                      <option <?php if ($s->kelas == '2') { echo 'selected'; } ?> value="2">II</option>
                                      <option <?php if ($s->kelas == '3') { echo 'selected'; } ?> value="3">III</option>
                                      <option <?php if ($s->kelas == '4') { echo 'selected'; } ?> value="4">IV</option>
                                      <option <?php if ($s->kelas == '5') { echo 'selected'; } ?> value="5">V</option>
                                      <option <?php if ($s->kelas == '6') { echo 'selected'; } ?> value="6">VI</option>
                                      <option <?php if ($s->kelas == '7') { echo 'selected'; } ?> value="7">VII</option>
                                      <option <?php if ($s->kelas == '8') { echo 'selected'; } ?> value="8">VIII</option>
                                      <option <?php if ($s->kelas == '9') { echo 'selected'; } ?> value="9">IX</option>
                                      <option <?php if ($s->kelas == '10') { echo 'selected'; } ?> value="10">X</option>
                                      <option <?php if ($s->kelas == '11') { echo 'selected'; } ?> value="11">XI</option>
                                      <option <?php if ($s->kelas == '12') { echo 'selected'; } ?> value="12">XII</option>
                    </select>
                  </div>
                </div>
                <h4 class="modal-title">Data Keluarga :</h4><br>  
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" >NO KK</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="NO KK" name="no_kk" value="<?php echo $s->no_kk?>" disabled>
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Ayah</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="Nama Ayah" name="nama_ayah" required="" value="<?php echo $s->nama_ayah?>">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Nama Ibu</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="Nama Ibu" name="nama_ibu" required="" value="<?php echo $s->nama_ibu?>">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Pekerjaan Ayah</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="Pekerjaan Ayah" name="kerja_ayah" required="" value="<?php echo $s->kerja_ayah?>">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Pekerjaan Ibu</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="Pekerjaan Ibu" name="kerja_ibu" required="" value="<?php echo $s->kerja_ibu?>">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Anak ke</label>
                  <div class="col-sm-8">
                    <input type="number"  class="form-control" placeholder="Anak Keberapa" name="anak" required="" value="<?php echo $s->anak?>">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" >Jumlah Saudara</label>
                  <div class="col-sm-8">
                    <input type="number"  class="form-control" placeholder="Jumlah Saudara" name="jumlah_saudara" required="" value="<?php echo $s->jumlah_saudara?>">
                  </div>
                </div>        
                         
                <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="status" style="width: 100%;" disabled="">
                              <option value="1" ><?php 
                              if ($s->status==0) {
                                  echo 'Aktif';
                                }else{
                                  echo 'Belum Aktif';
                                }
                              ?></option>
                </select>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >foto</label>
                  <div class="col-sm-8">
                    
                    <input type="file"  name="userfile" class="form-control-file" id="FormControlFile" value="<?php echo $s->l_foto?>" required>
                    <small class="help-block">Format gambar yang diperbolehkan *.png, *.jpg dan ukuran maksimal 2 MB.</small>
                  </div>
                </div>

              </div>
            


              <div class="modal-footer">
                <button type="button" class="btn btn-remove" data-dismiss="modal">Batal</button>
                <button type="submit" value="upload" class="btn btn-primary">Update</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <?php } ?>

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
                <form action="<?php echo base_url('umum/siswa'); ?>" method="post" >
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
     
              