<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <?php if ($this->session->userdata('posisi') == 'admin') { ?>
      <h4 class="fa fa-home" aria-hidden="true"> Selamat Datang, <?php echo $this->session->userdata('nama'); ?> [ADMIN]</h4>
    <?php } else {

    ?>

      <h4><i class="fa fa-home mr-2" aria-hidden="true"></i>Selamat Datang, <?php echo $this->session->userdata('nama'); ?> [ <?php echo $this->session->userdata('posisi') ?>]</h4>
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

          <div class="alert alert-danger alert-dismissible fade show col-lg- col-xs-6 ml-2" role="alert">
            <strong>Peringatan!</strong> Anda harus melengkapi data diri
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


          <a href="<?php echo base_url('admin/pendaftaran/jadwal') ?>">
            <div class="info-box"> <span class="info-box-icon bg-blue"><i class="fa fa-calendar-check-o text-white" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number "> Jadwal</span> <span class="info-box-text">Pendaftaran</span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>

        <div class="col-lg-3 col-xs-6">
          <a href="<?php echo base_url('admin/pendaftaran/datasantri') ?>">
            <div class="info-box"> <span class="info-box-icon bg-info"><i class="fa fa-graduation-cap text-white" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number"> Pendaftaran</span> <span class="info-box-text">Daftar</span></div>
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