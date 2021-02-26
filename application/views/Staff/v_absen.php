


    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Absensi Pembinaan</h3>
              <div class="box-tools pull-right">

<?php $this->session->flashdata('hapus'); ?>
                
<?php
// Session 

if($this->session->flashdata('sukses')) { 
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
if($this->session->flashdata('hapus')) { 
  echo '<div class="alert alert-danger">';
  echo $this->session->flashdata('hapus');
  echo '</div>';
}  

// File upload error
if(isset($error)) {
  echo '<div class="alert alert-danger">';
  echo $error;
  echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>

                  
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
                  <th>Tanggal</th>
                  <th>Siswa Hadir</th>
                  <th>Siswa Sakit</th>
                  <th>Siswa Izin</th>
                  <th>Siswa Alfa</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
            <?php $i=1; foreach($pertanggal_sd as $absen) {
              $pertanggal = $absen['tanggal'];
              $siswa_izin = $this->m_absen->siswa_izin($pertanggal);
              $siswa_sakit = $this->m_absen->siswa_sakit($pertanggal);
              $siswa_alfa = $this->m_absen->siswa_alfa($pertanggal);
              $siswa_hadir = $this->m_absen->siswa_hadir($pertanggal);
             ?>
              <tr class="odd gradeX">
                  <td><?php echo $i++; ?></td>
                  <td><?php $format = date('d-m-Y', strtotime($absen['tanggal']));echo $format?></td>
                  
                  <td><?php echo count($siswa_hadir)?></td>
                  <td><?php echo count($siswa_sakit)?></td>
                  <td><?php echo count($siswa_izin)?></td>
                  <td><?php echo count($siswa_alfa)?></td>
                  <td class="center">
                   <a href="<?php echo base_url('staff/absen/lihat/'.$absen['tanggal']);?>" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="lihat"></span></a> |
                   <a href="<?php echo base_url('staff/absen/hapus/'.$absen['tanggal']);?>" onclick="return confirm('Anda yakin?')" style="color: #423e3eb5"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a> |
                   <a href="<?php echo base_url('staff/absen/absen_sd/'.$absen['tanggal']); ?>" target="_blank" ><span class="fa fa-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="cetak"></span></a> | 
                 
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

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 980px;">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Tambah Absen</h4>
          </div>
            <div class="modal-body">
              <div class="col-md-12">

      <form action="<?php echo base_url('staff/absen');?>" method="post" id="tab-absen">
      <label>Masukan Tanggal Absensi</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>            
                  <input type="date" name="tanggal" class="form-control" value="<?php echo set_value('tanggal') ?>" >
                </div>

                <table id="example2" class="table table-bordered table-striped">
                <thead>
                      <tr>
                          <th>NO</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Nama Sekolah</th>
                          <th>Kelas</th>
                          <th>No HP</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($siswa_sd as $siswa) { 

                      ?>
                      <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $siswa['nama']; ?></td>
                          <td><?php echo $siswa['alamat']; ?></td>
                          <td><?php echo $siswa['nama_sekolah']; ?></td>
                          <td><?php 
                              if($siswa['kelas'] == '1'){
                                echo "I";
                              }elseif ($siswa['kelas'] == '2'){
                                echo "II";
                              }
                              elseif ($siswa['kelas'] == '3'){
                                echo "III";
                              }
                              elseif ($siswa['kelas'] == '4'){
                                echo "IV";
                              }
                              elseif ($siswa['kelas'] == '5'){
                                echo "V";
                              }
                              else{
                                echo "VI";
                              }
                          ?>
                          </td>
                          <td><?php echo $siswa['no_hp']; ?></td>
                          <td class="center">

                        <select name="keterangan_<?php echo $siswa['nisn']; ?>" class="form-control select2" required>
                            <option>--Choose Option--</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Alfa">Alfa</option>
                            <option value="Izin">Izin</option>
                        </select>    
                          </td>
                      </tr>
                      <?php  } ?>

                </tbody>
               
              </table>


<p class="text-right">
<button class="btn btn-success btn-lg" type="submit">
  <i class="fa fa-save"></i> Simpan Absen
</button>
</p>
  </form>
        </div>
        <div class="clearfix"></div>
        </div>           
    </div>
  </div>
</div>

