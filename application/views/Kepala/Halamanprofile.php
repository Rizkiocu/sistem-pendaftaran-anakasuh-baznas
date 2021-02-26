<?php foreach ($t_profile as $u) { ?>
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header  with-border">
              <h3 class="box-title">Data Pribadi</h3>
              <div class="box-tools pull-right">
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"><i class="fa fa-times"></i></button>
              </div>

            </div>
            
            <!-- /.box-header -->
  <div class="box-body">

    <a class="btn btn-danger" href="#edit<?=$u->id;?>" data-toggle="modal">Edit Password </a><br><br>
    <div class="row" style="font-size: 13pt;">
      <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-5">Username</label><label>: <span class="label label-danger label-form"><?=$u->username;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Nama</label><label>: <span class="label label-primary label-form"><?=$u->nama;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Jenis Kelamin</label><label>: <span class="label label-primary label-form"><?php if ($u->jenis_kelamin == "Laki-Laki"){echo"Laki-Laki";}else{echo"Perempuan";}?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Jabatan</label><label>: <span class="label label-primary label-form"><?=$u->jabatan;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">Email</label><label>: <span class="label label-primary label-form"><?=$u->email;?> </span></label>
        </div>
        <div class="form-group">
            <label class="col-md-5">No Hp</label><label>: <span class="label label-primary label-form"><?=$u->no_hp;?> </span></label>
        </div>

        

        <!-- /.form-group -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

        <?php } ?>
    <!-- /.content -->


        <?php foreach ($t_profile as $u) { ?>
        <div class="modal fade" id="edit<?php echo $u->id?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel2">
          <div class="modal-dialog modal-nd"  >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Edit User : <?=$u->nama;?></h4>
              </div>
              
              <form class="form-horizontal form-label-left" action="<?php echo base_url('kepala/datapribadi/updatepassword'); ?>" method="post" >
              <div class="box-body" >

             

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="username">Username</label>
                  <div class="col-sm-8">
                    <input type="hidden" id="id" class="form-control" placeholder="id" name="id" required="" value="<?php echo $u->id?>">
                    <input type="text" minlength="5" id="username" class="form-control" placeholder="Username" name="username" required="" value="<?php echo $u->username?>" disabled>
                  </div>
                </div>

                
                
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" minlength="5" class="form-control" id="password2" placeholder="Password" name="password" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="level" class="col-sm-2 control-label">Level</label>
                    <div class="col-sm-8" disabled>
                          <select class="form-control select2" name="level" style="width: 100%;" disabled="">
                                      
                                      <option <?php if ($u->level == '1') { echo 'selected'; } ?> value="1">Kepala Baznas</option>
                                      <option <?php if ($u->level == '2') { echo 'selected'; } ?> value="2">Staff Baznas</option>
                                      <option <?php if ($u->level == '3') { echo 'selected'; } ?> value="3">Bagian Umum</option>
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
        <?php } ?>
