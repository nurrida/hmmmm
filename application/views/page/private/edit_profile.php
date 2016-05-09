<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Profile
      <small><?php echo $nama ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><?php echo $username ?></a></li>
      <li class="active">edit</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      <div class="col-md-4">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url() ?>assets/img/foto-profil/<?php echo $foto_profil ?>" alt="User profile picture">
          </div>
          <?php if (null !== $this->session->flashdata('error')) { ?>
            <div class="box-footer">
              <div class="form-group">
                <?php echo $this->session->flashdata('error'); ?> 
              </div>
            </div><!-- /.box-body -->
          <?php } ?>
          <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>user/do_foto_profil_edit">
            <div class="box-footer">
              <div class="form-group col-md-8">
                <input type="file" name="foto-profil" id="exampleInputFile" style="margin-top: 7px">
              </div>
              <div class="form-group col-md-4">
                <button type="submit" class="btn btn-primary">Ganti Foto</button>
              </div>
            </div><!-- /.box-body -->
          </form>
        </div><!-- /.box -->

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Akun</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" autocomplete="off" method="post" action="<?php echo base_url() ?>user/do_username_edit" id="form-username">
            <div class="box-body">
              <div id="form-group-username" class="form-group">
                <label>Username</label>
                <div>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="input-username" name="username" value="<?php echo $username ?>">
                  </div>
                  <div class="col-md-5">
                    <h5 id="status-username" class="text-center"></h5>
                  </div>
                </div>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button id="button-username-submit" type="submit" class="btn btn-primary btn-block" disabled>Submit & Logout</button>
            </div><!-- /.box-footer -->
          </form>
          
          <form role="form" autocomplete="off" method="post" action="<?php echo base_url() ?>user/do_password_edit" id="form-password">
            <div class="box-footer">
              <div id="form-group-password" class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" id="input-password" name="password">
              </div>
              <div id="form-group-password-confirm" class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Password" id="input-password-confirm">
              </div>
              <button type="submit" id="button-password-submit" class="btn btn-primary btn-block" disabled>Submit & Logout</button>
            </div><!-- /.box-footer -->
          </form>
        </div><!-- /.box -->

      </div>

      <!-- left column -->
      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data diri</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="<?php echo base_url() ?>user/do_datadiri_edit">
            <div class="box-body">
              <div class="form-group">
                <?php if ($role == 'staff') { ?>
                  <label>NIP</label>
                  <input type="text" class="form-control" value="<?php echo $nip ?>" disabled>
                <?php } else if ($role == 'mahasiswa'){ ?> 
                  <label>NIM</label>
                  <input type="text" class="form-control" value="<?php echo $nim ?>" disabled>
                <?php } ?>
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" value="<?php echo $nama ?>" disabled>
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" value="<?php echo $email ?>" placeholder="E-mail" name="email">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat"><?php echo $alamat ?></textarea>
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" class="form-control" value="<?php echo $telp ?>" placeholder="No. Telepon" name="telp">
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
      </div>

      <div class="col-md-4">
        <!-- general form elements -->
        
      </div>
    </div>
  </section>
</div>

<!-- cek username -->
<script src="<?php echo base_url() ?>assets/js/cek_username.js"></script>
<!-- cek password -->
<script src="<?php echo base_url() ?>assets/js/cek_password.js"></script>