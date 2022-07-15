<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <?php
    $kd_admin = $this->session->userdata('kd_admin');
    $kd_pelamar = $this->session->userdata('kd_pelamar');
    $kd_hrd = $this->session->userdata('kd_hrd');
    ?>
    <?php if ($this->session->userdata('posisi') == 'admin') { ?>

      <h4 class="fa fa-home" aria-hidden="true"> Selamat Datang, <?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->nama_admin ?> [ADMIN]</h4>
    <?php } elseif ($this->session->userdata('posisi') == 'pelamar') { ?>
      <h4 class="fa fa-home" aria-hidden="true"> Selamat Datang, <?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->nama_pelamar ?> [PELAMAR]</h4>
    <?php } else { ?>
      <h4 class="fa fa-home" aria-hidden="true"> Selamat Datang, <?php echo $this->db->query("select * from tbl_hrd where kd_hrd='$kd_hrd'")->row()->nama_hrd ?> [HRD]</h4>
    <?php } ?>


    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i>Home</li>
    </ol>
  </div>

  <!-- Main content -->
  <div class="content">
    <!-- Small boxes (Stat box) -->
    <?php if ($this->session->userdata('posisi') == 'admin') { ?>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <a href="<?php echo base_url('admin/master/admin') ?>">
            <div class="info-box"> <span class="info-box-icon bg-blue-active "><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number">Data Admin</span> <span class="info-box-text"><?php echo $this->db->query("select * from tbl_admin")->num_rows() ?> admin </span> </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <a href="<?php echo base_url('admin/pendaftaran/pendaftaran') ?>">
            <div class="info-box"> <span class="info-box-icon bg-green"><i class="fa fa-graduation-cap"></i></span>
              <div class="info-box-content"> <span class="info-box-number">Santri Daftar</span> <span class="info-box-text"><?php echo $this->db->query("select * from tbl_santri where status_daftar='lengkap'")->num_rows() ?> santri</span></div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <a href="<?php echo base_url('admin/pendaftaran/pendaftaran/diterima') ?>">
            <div class="info-box"> <span class="info-box-icon bg-yellow"><i class="fa fa-check-circle"></i></span>
              <div class="info-box-content"> <span class="info-box-number">Diterima</span> <span class="info-box-text"><?php echo $this->db->query("select * from tbl_santri where status_daftar='diterima'")->num_rows() ?> santri </span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <a href="<?php echo base_url('admin/berita/berita') ?>">
            <div class="info-box"> <span class="info-box-icon bg-red"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number "> Berita </span> <span class="info-box-text"><?php echo $this->db->query("select * from tbl_berita")->num_rows() ?> berita</span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->


    <?php } else { ?>

      <!-- apoteker -->
      <div class="row">
        <?php
        $kd_pelamar = $this->session->userdata('kd_pelamar');
        if ($this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->jk_pelamar == '' or $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->pendidikan_pelamar == '' or $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->agama_pelamar == '') { ?>

          <div class="alert alert-danger alert-dismissible fade show col-lg-11 col-xs-12 ml-2" role="alert">
            <strong class="mt-2">Peringatan!</strong> Anda harus melengkapi data diri
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php } ?>
      </div>
      <div class="row">

        <!-- /.col -->

        <!-- /.col -->


        <div class="col-lg-3 col-xs-6">


          <a href="<?php echo base_url('admin/pengaturan/datadiri') ?>">
            <div class="info-box"> <span class="info-box-icon bg-blue"><i class="fa fa-user text-white" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number "> Data Diri</span> <span class="info-box-text">Data Diri Saya</span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>

        <div class="col-lg-3 col-xs-6">
          <a href="<?php echo base_url('admin/seleksi/seleksipelamar/') ?>">
            <div class="info-box"> <span class="info-box-icon bg-info"><i class="fa fa-wpexplorer text-white" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number"> Lamaranku</span> <span class="info-box-text">Lihat</span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>
        <div class="col-lg-3 col-xs-6">
          <a href="<?php echo base_url('admin/seleksi/seleksipelamar/arsippelamar') ?>">
            <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="fa fa-file-archive-o text-white" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number"> Arsipku</span> <span class="info-box-text">Lihat</span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>
        <div class="col-lg-3 col-xs-6">
          <a href="<?php echo base_url('admin/pengaturan/gantipasspelamar') ?>">
            <div class="info-box"> <span class="info-box-icon bg-danger"><i class="fa fa-key text-white" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number"> Ganti</span> <span class="info-box-text">Password</span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>

        <!-- /.col -->

        <!-- /.col -->

        <!-- /.col -->
      </div>



      <!-- keuangan -->



      <!-- pajak -->


      <!-- penjualan -->




    <?php } ?>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->