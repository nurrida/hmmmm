<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Event</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">

            <?php if($role == 'mahasiswa' || $jenis == 'staff_admin') { ?>
              <li><a href="#"><i class="fa fa-circle-o"></i>Lomba <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('event/lomba/') ?>"><i class="fa fa-circle-o"></i>List Lomba</a></li>
                  <li><a href="<?php echo base_url('event/lomba/pengajuan') ?>"><i class="fa fa-circle-o"></i>List Pengajuan Anda</i></a>
                  <li><a href="<?php echo base_url('event/lomba/tambah') ?>"><i class="fa fa-circle-o"></i>Tambah Lomba</a></li>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Kegiatan Himpunan <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('event/kegiatanhimpunan') ?>"><i class="fa fa-circle-o"></i>List Kegiatan</a></li>
                  </li>
                </ul>
              </li>
            <?php } ?>
            
            <?php if ($jenis == 'kaur' || $jenis == 'staff_kemahasiswaan') { ?>
              <li><a href="#"><i class="fa fa-circle-o"></i>Lomba <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('event/lomba/') ?>"><i class="fa fa-circle-o"></i>List Lomba</a></li>
                  <li><a href="<?php echo base_url('event/lomba/pengajuan') ?>"><i class="fa fa-circle-o"></i>List Pengajuan Lomba</i></a>
                  <li><a href="<?php echo base_url('event/lomba/tambah') ?>"><i class="fa fa-circle-o"></i>Tambah Lomba</a></li>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-circle-o"></i>Kegiatan Himpunan <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('event/kegiatanhimpunan') ?>"><i class="fa fa-circle-o"></i>List Kegiatan</a></li>
                  </li>
                </ul>
              </li>
            <?php } ?>
          
          </ul>
        </li>

        <?php if ($jenis == 'kaur' || $jenis == 'staff_kemahasiswaan') { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Proposal</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url('proposal_himpunan/update_himpunan') ?>"><i class="fa fa-circle-o"></i>Himpunan</a>
            </li>
          </ul>
        </li>
        <?php } ?>

        <?php if($role == 'mahasiswa') { ?>
          <li>
              <a href="#"><i class="fa fa-clipboard"></i> <span>Pengajuan Lomba</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('proposal/upload_pengajuan') ?>"><i class="fa fa-file-o"></i>Upload Proposal</a></li>
                </ul>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('proposal/logbook_pengajuan_proposal_lomba') ?>"><i class="fa fa-table"></i>Logbook Pengajuan</a></li>
                </ul>
          </li>
          <li><a href="<?php echo base_url('sertifikat') ?>"><i class="fa fa-files-o"></i> <span>Beasiswa</span></a></li>
          <li><a href="<?php echo base_url('laporan') ?>"><i class="fa fa-map-o"></i> <span>Lihat Laporan</span></a></li>
        <?php } ?>

        <?php if ($jenis == 'kaur' || $jenis == 'himpunan') { ?>
          <li class="header">Menu Khusus</li>
          <?php if ($jenis == 'kaur') { ?>
            <li>
              <a href="#"><i class="fa fa-users"></i> <span>Staff</span></a>
              <ul class="treeview-menu">
              <li><a href="<?php echo base_url('staff/add') ?>"><i class="fa fa-circle-o"></i>Tambah Staff</a></li>
                <li><a href="<?php echo base_url('staff/list') ?>"><i class="fa fa-circle-o"></i>Daftar Staff</a></li>
              </ul>
            </li>

            <li>
              <a href="#"><i class="fa fa-users"></i> <span>Mahasiswa</span></a>
              <ul class="treeview-menu">
              <li><a href="<?php echo base_url('mahasiswa/add') ?>"><i class="fa fa-circle-o"></i>Tambah Mahasiswa</a></li>
                <li><a href="<?php echo base_url('lists/mahasiswa') ?>"><i class="fa fa-circle-o"></i>Daftar Mahasiswa</a></li>
              </ul>
            </li>

          <?php } elseif ($jenis == 'himpunan') { ?>
            <li>
              <a href="#"><i class="fa fa-user"></i>Akun Himpunan<i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('himpunan/update_himpunan') ?>"><i class="fa fa-edit"></i>Edit Profil Himpunan</a></li>
                </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-book"></i> <span>Pengajuan</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('proposal_himpunan/upload_pengajuan') ?>"><i class="fa fa-file-o"></i>Upload Proposal</a></li>
                </ul>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('proposal_himpunan/logbook_pengajuan') ?>"><i class="fa fa-calendar-check-o"></i>Logbook Pengajuan</a></li>
                </ul>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('proposal_himpunan/logbook_lpj') ?>"><i class="fa  fa-list-ol"></i>Logbook LPJ</a></li>
                </ul>
            </li>
            <li>
              <a href="#"><i class="fa  fa-tasks"></i> <span>Acara Himpunan</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('kegiatan_himpunan/list_kegiatan') ?>"><i class="fa fa-calendar"></i>Lihat Acara</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url('laporan') ?>"><i class="fa fa-area-chart"></i> <span>Lihat Laporan</span></a>
            </li>
          <?php } ?>
        <?php } ?>

      </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<script>
  var a = $('a[href="<?php echo base_url(uri_string()) ?>"]');
  a.parent().addClass("active");
  var lewati = true;
  var parents = a.parents().map(function() {
    if (lewati == true) {
      if (this.tagName == "UL"){
        lewati = false;
      }
    } else {
      if (this.tagName == "LI"){
        $(this).addClass("active");
      }
    }
  });
</script>