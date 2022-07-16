<?php foreach ($lowongan as $l) : ?>

    <section class="page-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        <?php echo $l->nama_lowongan ?>
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="<?php echo base_url('depan') ?>">Home</a> / <?php echo $l->nama_lowongan ?>
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!-- SINGLE SERVICE PAGE -->

    <section class="section-content-block">

        <div class="container">

            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="widget site-sidebar">

                        <h2 class="widget-title">Cara Mendaftar</h2>

                        <div class="text-widget text-left">
                            <div class="faq-layout margin-top-16" id="accordion">
                                <?php foreach ($faq as $f) : ?>

                                    <div class="panel panel-default faq-box">
                                        <div class="panel-heading">
                                            <p class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo $f->tanya_faq ?></a>
                                            </p>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php echo $f->jawab_faq ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>


                        </div>

                    </div> <!--  end .widget -->








                </div> <!-- end .col-sm-4  -->

                <div class="col-sm-8">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="single-service margin-bottom-24">
                                <a href="#" title="Service">
                                    <img src="<?php echo base_url('gambar/') . $l->gambar_lowongan ?>" alt="lowongan" />
                                </a>
                            </div> <!--  end articles -->



                            <div class="single-service-content">


                                <h2 class="block-heading-title text-capitalize"><?php echo $l->nama_lowongan ?></h2>
                                <hr />
                                <?php echo $l->detail_lowongan ?>



                                <button class="btn btn-danger btn-sm text-highlighter-white"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i> Paling lambat <?php echo $this->Mglobal->tanggalindo($l->tgl_tutup) ?></button>
                                <?php if ($this->session->userdata('status') == 'login') {
                                    if ($this->session->userdata('posisi') == 'pelamar') {
                                        $kd_pelamar = $this->session->userdata('kd_pelamar');
                                        $kd_lowongan = $l->kd_lowongan;
                                        $tglsekarang = date('Y-m-d');
                                        $sudah = $this->db->query("select * from tbl_seleksi where kd_pelamar='$kd_pelamar' and kd_lowongan='$kd_lowongan'")->num_rows();
                                        $sudahsatu = $this->db->query("select * from tbl_seleksi S, tbl_lowongan L where S.kd_lowongan=L.kd_lowongan and  S.kd_pelamar='$kd_pelamar' and L.tgl_tutup>='$tglsekarang'")->num_rows();
                                        if ($sudah > 0) { ?>
                                            <button class="btn btn-sm btn-danger">Anda sudah daftar lowongan ini</button>
                                        <?php   } else { ?>
                                            <?php if ($sudahsatu > 0) { ?>
                                                <button class="btn btn-sm btn-danger">Anda Daftar di Lowongan Lain</button>
                                            <?php } else { ?>

                                                <a href="" class="btn btn-primary btn-lg mb-1" data-toggle="modal" data-target="#hapusdata<?php echo $l->kd_lowongan ?>"> <i class="fa check mr-2"></i> Apply </a>
                                            <?php } ?>
                                        <?php    }   ?>
                                    <?php   }   ?>
                                <?php } else { ?>
                                    <a href="" class="btn btn-primary btn-lg mb-1" data-toggle="modal" data-target="#pesandata<?php echo $l->kd_lowongan ?>"> <i class="fa check mr-2"></i> Apply </a>
                                <?php } ?>


                                <hr />



                            </div>

                            <div class="single-service-content">
                                <h3 class="block-heading-title text-capitalize">Popular Questions:</h3>
                                <hr />

                                <div class="faq-layout margin-top-16" id="accordion">
                                    <?php foreach ($faq as $f) : ?>


                                        <div class="panel panel-default faq-box">
                                            <div class="panel-heading">
                                                <p class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo $f->tanya_faq ?></a>
                                                </p>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <?php echo $f->jawab_faq ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>











                                </div> <!-- end .col-md-6  -->

                            </div>

                        </div>

                    </div> <!-- end .container  -->

                </div>

            </div>

        </div>

    </section> <!--  end .section-our-team -->
<?php endforeach; ?>
<?php foreach ($lowongan as $l) : ?>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="hapusdata<?php echo $l->kd_lowongan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-white ">
                    <h5 class="modal-title" id="exampleModalLabel"> Lamar <?php echo $l->nama_lowongan ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('lowongan/lamar') ?>" method="post">
                        <label for=""></label>
                        <input type="hidden" name="kd_lowongan" value="<?php echo $l->kd_lowongan ?>">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary fa fa-check"> Lamar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php foreach ($lowongan as $l) : ?>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="pesandata<?php echo $l->kd_lowongan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-info text-white ">
                    <h5 class="modal-title" id="exampleModalLabel"> Lamar <?php echo $l->nama_lowongan ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">ANDA HARUS LOGIN /DAFTAR DULU</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?php echo base_url('depan/daftar') ?>">
                        <button type="button" class="btn btn-primary fa fa-check"> Daftar</button>
                    </a>
                    <a href="<?php echo base_url('login') ?>">
                        <button type="button" class="btn btn-primary fa fa-check"> Login</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
<?php endforeach; ?>