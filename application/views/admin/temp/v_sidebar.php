<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <?php
      $kd_admin = $this->session->userdata('kd_admin');
      $kd_pelamar = $this->session->userdata('kd_pelamar');
      $kd_hrd = $this->session->userdata('kd_hrd');
      ?>
      <?php if ($this->session->userdata('posisi') == 'admin') { ?>
        <div class="image text-center"><img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->gambar_admin ?>" class="img-circle" alt="User Image"> </div>
      <?php } elseif ($this->session->userdata('posisi') == 'pelamar') { ?>
        <div class="image text-center"><img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->gambar_pelamar ?>" class="img-circle" alt="User Image"> </div>
      <?php } else { ?>
        <div class="image text-center"><img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_hrd where kd_hrd='$kd_hrd'")->row()->gambar_hrd ?>" class="img-circle" alt="User Image"> </div>
      <?php } ?>

      <div class="info">
        <?php if ($this->session->userdata('posisi') == 'admin') { ?>
          <p>
            <?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->nama_admin ?>
          </p>
        <?php } elseif ($this->session->userdata('posisi') == 'pelamar') { ?>
          <p>
            <?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->nama_pelamar ?>
          </p>
        <?php } else { ?>
          <p>
            <?php echo $this->db->query("select * from tbl_hrd where kd_hrd='$kd_hrd'")->row()->nama_hrd ?>
          </p>
        <?php } ?>

        <a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off"></i></a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">PERSONAL</li>
      <li> <a href="<?php echo base_url('welcome') ?>"> <i class="fa fa-home mr-2"></i> <span>Home</span> <span class="pull-right-container"> </span> </a> </li>
      <?php if ($this->session->userdata('posisi') == 'admin') { ?>
        <li class="treeview"> <a href="#"> <i class="fa fa-database mr-2"></i> <span>Master</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/master/admin') ?>"> <i class="fa fa-user-o mr-1"></i>Data Admin</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/hrd') ?>"> <i class="fa fa-eercast mr-1"></i>Data HRD</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/pelamar') ?>"> <i class="fa fa fa-clone mr-1"></i>Data Pelamar</a></li>
            <!-- <li class="ml-4"><a href="<?php echo base_url('admin/master/siswa') ?>"> <i class="fa fa-safari mr-1"></i>Siswa</a></li> -->


          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-life-ring mr-2" aria-hidden="true"></i><span>Update Lowongan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/lowongan/lowongan') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>Lowongan</a></li>

          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-wpexplorer mr-1" aria-hidden="true"></i> <span>Rekruitment</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/seleksi/seleksi') ?>"> <i class="fa fa-wpexplorer mr-1"></i>Lowongan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/seleksi/seleksi/arsip') ?>"> <i class="fa fa-file-archive-o mr-1"></i>Arsip Recruitmen</a></li>

          </ul>
        </li>

        <li class="treeview"> <a href="#"><i class="fa fa-cc-diners-club mr-2" aria-hidden="true"></i><span>Deskripsi</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">

            <li class="ml-4"><a href="<?php echo base_url('admin/deskripsi/tentang') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>Tetang Kami</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/deskripsi/sejarah') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>Sejarah</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/deskripsi/visimisi') ?>"> <i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i></i></i>Visi Misi</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/deskripsi/struktur') ?>"> <i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i></i></i>Stuktor Organisasi</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/deskripsi/kegiatan') ?>"> <i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i></i></i>Kegiatan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/deskripsi/profile') ?>"> <i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i></i></i>Profile Pengajar</a></li>



          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-newspaper-o mr-2" aria-hidden="true"></i><span>Berita</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/berita/kategori') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>Kategori</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/berita/berita') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>Berita</a></li>

            <!-- <li class="ml-4"><a href="<?php echo base_url('admin/transaksi/bayarspp/') ?>"> <i class="fa fa-ravelry" aria-hidden="true"></i>SPP Tahun </a></li> -->



          </ul>
        </li>

        <!-- <li class="treeview"> <a href="#"><i class="fa fa-buysellads mr-2" aria-hidden="true"></i><span>Penjualan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/transaksi/penjualan/tambahpenjualan') ?>"> <i class="fa fa-plus" aria-hidden="true"></i></i>Transaksi Baru</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/transaksi/penjualan/') ?>"> <i class="fa fa-ravelry" aria-hidden="true"></i>Data Penjualan </a></li>

          </ul>
        </li> -->
        <!-- <li class="header">Pengaturan</li> -->
        <li class="treeview"> <a href="#"> <i class="fa fa-cogs mr-2"></i><span>Pengaturan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/judul') ?>"> <i class="fa fa-user-o mr-1"></i>Judul</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/perush') ?>"> <i class="fa fa-building mr-1"></i>Data Perusahaan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/logo') ?>"> <i class="fa fa-image mr-1"></i>Logo Perusahaan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/slider') ?>"> <i class="fa fa-image mr-1"></i>Data Slider</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/gantipas') ?>"> <i class="fa fa-image mr-1"></i>Ganti Passwordr</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/jadwal') ?>"> <i class="fa fa-image mr-1"></i>Jadwal</a></li>
            <!-- <li class="ml-4"><a href="<?php echo base_url('admin/master/tahunmasuk') ?>"> <i class="fa fa-calendar mr-1" aria-hidden="true"></i>Tahun Masuk</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/tahunajaran') ?>"> <i class="fa fa-graduation-cap mr-1"></i>Tahun Ajaran</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/tingkat') ?>"> <i class="fa fa-gg mr-1"></i>Tingkat</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/kelas') ?>"> <i class="fa fa-xing mr-1"></i>Kelas</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/spp') ?>"> <i class="fa fa-ils mr-1" aria-hidden="true"></i>SPP</a></li> -->
            <!-- <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/pesanfaq') ?>"> <i class="fa fa-bookmark mr-1"></i>Master FAQ</a></li>
          <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/faq') ?>"> <i class="fa fa-info mr-1"></i>FAQ</a></li>
          <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/slider') ?>"> <i class="fa fa-meetup mr-1"></i>Slider</a></li> -->
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-file-o" aria-hidden="true"></i> <span>Laporan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/laporan/ladmin') ?>"> <i class="fa fa-user-o mr-1"></i>Laporan Data Admin</a></li>


          </ul>
        </li>
      <?php } elseif ($this->session->userdata('posisi') == 'hrd') { ?>
        <li class="treeview"> <a href="#"> <i class="fa fa-wpexplorer mr-1" aria-hidden="true"></i> <span>Rekruitment</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/seleksi/seleksihrd') ?>"> <i class="fa fa-wpexplorer mr-1"></i>Lowongan Buka</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/seleksi/seleksihrd/arsiphrd') ?>"> <i class="fa fa-file-archive-o mr-1"></i>Arsip Lowongan</a></li>

          </ul>
        </li>

        <li class="treeview"> <a href="#"><i class="fa fa-cogs mr-2" aria-hidden="true"></i><span>Pengaturan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/datadirihrd') ?>"><i class="fa fa-user mr-2" aria-hidden="true"></i>Data Diri</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/gantipasshrd') ?>"><i class="fa fa-key mr-2" aria-hidden="true"></i>Ganti Password</a></li>

          </ul>
        </li>

      <?php } else { ?>

        <li class="treeview"> <a href="#"> <i class="fa fa-wpexplorer mr-1" aria-hidden="true"></i> <span>Rekruitment</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/seleksi/seleksipelamar') ?>"> <i class="fa fa-wpexplorer mr-1"></i>Lamaran saya</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/seleksi/seleksipelamar/arsippelamar') ?>"> <i class="fa fa-file-archive-o mr-1"></i>Arsip Lamaran saya</a></li>

          </ul>
        </li>

        <li class="treeview"> <a href="#"><i class="fa fa-cogs mr-2" aria-hidden="true"></i><span>Pengaturan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/datadiri') ?>"><i class="fa fa-user mr-2" aria-hidden="true"></i>Data Diri</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/gantipasspelamar') ?>"><i class="fa fa-key mr-2" aria-hidden="true"></i>Ganti Password</a></li>

          </ul>
        </li>
      <?php } ?>

      <li>
        <a href="<?php echo base_url('login/logout') ?>"> <i class="fa fa-power-off "></i> <span>Keluar</span> <span class="pull-right-container"> </span> </a>
      </li>
    </ul>
  </div>
  <!-- /.sidebar -->
</aside>