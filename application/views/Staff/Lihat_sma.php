
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Absen</h3>
              <div class="box-tools pull-right">
                  <a class="btn btn-remove pull-right mb hp" href="<?=site_url('staff/absen/sma')?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a>
                  
              </div>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
  
<p>Tanggal : <?php foreach ($tanggal as $cd) { ?><?php 
  $tanggall = date('d', strtotime($cd->tanggal ));
  $bulan = date('m', strtotime($cd->tanggal ));
  $tahun = date('Y', strtotime($cd->tanggal ));
  $bulann='';
  switch ($bulan) {
    case '01':
      $bulann='JANUARI';
      break;
    case '02':
      $bulann='FEBRUARI';
      break;
    case '03':
      $bulann='MARET';
      break;
    case '04':
      $bulann='APRIL';
      break;
    case '05':
      $bulann='MEI';
      break;
    case '06':
      $bulann='JUNI';
      break;
    case '07':
      $bulann='JULI';
      break;
    case '08':
      $bulann='AGUSTUS';
      break;
    case '09':
      $bulann='SEPTEMBER';
      break;
    case '10':
      $bulann='OKTOBER';
      break;
    case '11':
      $bulann='NOVEMBER';
      break;
    case '12':
      $bulann='DESEMBER';
      break;
  }
$format=$tanggall.' '.$bulann.' '.$tahun;
echo $format;
break; ?>
  <?php } ?></p>              
<img src="<?php echo base_url();?>assets/images/lambang.png" style="position: absolute; width: 90px; height: auto;">
 <table style="width: 100%;">
  <tr>
   <td align="center">
    <span style="line-height: 1.6; font-weight: bold;">
     DAFTAR HADIR PENERIMAAN BEASISWA & PEMBINAAN ANAK ASUH PROGRAM PEKANBARU CERDAS
     <br>BAZNAS KOTA PEKANBARU 
     <br>TINGKAT SMA BULAN <?php echo $bulann; ?> TAHUN <?php echo $tahun; ?>
    </span>
   </td>
  </tr>
 </table><hr class="line-title">
  <table  id="example1" class="table table-bordered table-striped">
     <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Sekolah</th>
                  <th>Nama Ortu</th>
                  <th>No Hp</th>
                  <th>No Rek</th>
                  <th>Nominal</th>
                  <th>Absen</th>
                  <th>Kelas</th>
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($tanggal as $c) { 
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $c->nama; ?></td>
                        <td><?php echo $c->alamat; ?></td>
                        <td><?php echo $c->nama_sekolah; ?></td>
                        <td><?php echo $c->nama_ayah; ?></td>
                        <td><?php echo $c->no_hp; ?></td>
                        <td><?php echo $c->no_rek; ?></td>
                        <td><?php 
                            if($c->nominal == 1){
                              echo "Rp. 200.000";
                            }elseif ($c->nominal == 2) {
                              echo "Rp. 250.000";
                            }else{
                              echo "Rp. 300.000";
                            }

                           ?></td>
                        <td><?php echo $c->keterangan; ?></td>
                        <td><?php 
                        if($c->kelas == '1'){
                          echo "I";
                        }elseif($c->kelas == '2'){
                          echo "II"; 
                        }elseif ($c->kelas == '3'){
                          echo "III";
                        }elseif ($c->kelas == '4'){
                          echo "IV";
                        }elseif ($c->kelas == '5'){
                          echo "V";
                        }
                        elseif ($c->kelas == '6'){
                          echo "VI";
                        }elseif ($c->kelas == '7'){
                          echo "VII";
                        }elseif ($c->kelas == '8'){
                          echo "VIII";
                        }elseif ($c->kelas == '9'){
                          echo "IX";
                        }elseif ($c->kelas == '10'){
                          echo "X";
                        }elseif ($c->kelas == '11'){
                          echo "XI";
                        }else{
                          echo "XII";
                        }

                         ?></td>
                      
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