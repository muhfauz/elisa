<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url() ?>" class="logo blue-bg">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="<?php echo base_url() ?>assets/img/<?php echo $this->db->query("select logok_perush from tbl_perusahaan where kd_perush='1'")->row()->logok_perush ?>" alt="" height="30" width="28"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="<?php echo base_url() ?>assets/img/<?php echo $this->db->query("select logob_perush from tbl_perusahaan where kd_perush='1'")->row()->logob_perush ?>" alt="" height="30" width="90"></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar bg-facebook navbar-fixed-top">
    <!-- Sidebar toggle button-->
    <ul class="nav navbar-nav pull-left">
      <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
    </ul>
    <div class="pull-left search-box">
      <!-- <form action="#" method="get" class="search-form">
        <div class="input-group">
          <input name="search" class="form-control" placeholder="Search..." type="text">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
          </span>
        </div>
      </form> -->
      <!-- search form -->
      <div class="input-group">
        <!-- <input name="search" class="form-control" placeholder="Search..." type="text"> -->
        <span class="input-group-btn mt-3">
          <!-- <button class="btn btn-facebook "> judul aplikasi</button> -->
          <h3 class="bg-facebook text-white"><?php echo $this->db->query("select * from tbl_judul where kd_judul='1'")->row()->judul; ?> </h3>
        </span>
      </div>

    </div>
    <div class=" navbar-custom-menu">
      <ul class="nav navbar-nav">
        <?php
        $kd_admin = $this->session->userdata('kd_admin');
        $kd_pelamar = $this->session->userdata('kd_pelamar');
        $kd_hrd = $this->session->userdata('kd_hrd');
        ?>
        <?php if ($this->session->userdata('posisi') == 'admin') { ?>
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->gambar_admin ?>" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->nama_admin ?></span> </a>
          <?php } elseif ($this->session->userdata('posisi') == 'pelamar') { ?>
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->gambar_pelamar ?>" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->nama_pelamar ?></span> </a>
          <?php } else { ?>
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_hrd where kd_hrd='$kd_hrd'")->row()->gambar_hrd ?>" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo $this->db->query("select * from tbl_hrd where kd_hrd='$kd_hrd'")->row()->nama_hrd ?></span> </a>
          <?php } ?>


          <ul class="dropdown-menu">
            <li class="user-header">
              <?php if ($this->session->userdata('posisi') == 'admin') { ?>

                <div class="pull-left user-img"><img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->gambar_admin ?>" class="img-responsive" alt="User"></div>
              <?php } elseif ($this->session->userdata('posisi') == 'pelamar') { ?>
                <div class="pull-left user-img"><img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->gambar_pelamar ?>" class="img-responsive" alt="User"></div>
              <?php } else { ?>
                <div class="pull-left user-img"><img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_hrd where kd_hrd='$kd_hrd'")->row()->gambar_hrd ?>" class="img-responsive" alt="User"></div>
              <?php } ?>

              <?php if ($this->session->userdata('posisi') == 'admin') { ?>
                <p class="text-left"><?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->nama_admin ?>
                  <small> ADMIN </small>
                </p>

              <?php } elseif ($this->session->userdata('posisi') == 'pelamar') { ?>
                <p class="text-left"><?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->nama_pelamar ?>
                  <small> PELAMAR </small>
                </p>
              <?php } else { ?>
                <p class="text-left"><?php echo $this->db->query("select * from tbl_hrd where kd_hrd='$kd_hrd'")->row()->nama_hrd ?>
                  <small> HRD </small>
                </p>

              <?php } ?>

              <p class="text-left">
                <small> </small>
              </p>

            </li>

            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          </li>
      </ul>
    </div>
  </nav>
</header>