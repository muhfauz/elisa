<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1 class="text-black"> <i class="fa fa-user"></i> <?php echo $x1; ?></h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> <?php echo $x2; ?></li>
            <li><i class="fa fa-angle-right"></i> <?php echo $x3; ?></li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="info-box">
            <div class="row">
                <?php $statusdaftar = $this->db->query("select status_pendaftaran from tbl_pendaftaran")->row()->status_pendaftaran;
                if ($statusdaftar == 'buka') { ?>
                    <div class="col-lg-12">
                        <h4 class="text-black m-b-1"><?= $nama_pendaftaran; ?></h4>
                        <p><?= $x4; ?></p>
                        <div class="row m-t-4">
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-darkblue"> <span class="info-box-icon bg-transparent"><i class="fa fa-calendar-o text-white" aria-hidden="true"></i></span>
                                    <div class="info-box-content">
                                        <h6 class="info-box-text text-white">Tanggal Pendaftaran</h6>
                                        <h3 class="text-white"><?php echo $this->Mglobal->tanggalindo($tgl_pendaftaran); ?></h3>
                                        <span class="progress-description text-white"> Tanggal dibukanya pendaftaran </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-danger text-white"> <span class="info-box-icon bg-transparent"><i class="fa fa-calendar-o text-white" aria-hidden="true"></i></span>
                                    <div class="info-box-content">
                                        <h6 class="info-box-text text-white">Tanggal Penutupan</h6>
                                        <h3 class="text-white"><?php echo $this->Mglobal->tanggalindo($tgl_penutupan); ?></h3>
                                        <span class="progress-description text-white"> Lakukan pendaftaran sebelum penutupan </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-aqua"> <span class="info-box-icon bg-transparent"><i class="fa fa-book text-white" aria-hidden="true"></i></span>
                                    <div class="info-box-content">
                                        <h6 class="info-box-text text-white">Tanggal Seleksi</h6>
                                        <h3 class="text-white"><?php echo $this->Mglobal->tanggalindo($tgl_seleksi); ?></h3>
                                        <span class="progress-description text-white"> Datang ke Pesantren untuk seleksi </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-orange"> <span class="info-box-icon bg-transparent"><i class="fa fa-file-pdf-o text-white" aria-hidden="true"></i></span>
                                    <div class="info-box-content">
                                        <h6 class="info-box-text text-white">Tanggal Pengumuman</h6>
                                        <h3 class="text-white"><?php echo $this->Mglobal->tanggalindo($tgl_pengumuman); ?></h3>
                                        <span class="progress-description text-white"> Selamat kepada calon santri yang diterima</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                    </div>
                <?php } else { ?>

                    <div class="col-lg-12">
                        <h4 class="text-black m-b-1">Pendaftaran TUTUP</h4>

                    </div>
                <?php   }   ?>



            </div>
        </div>

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->