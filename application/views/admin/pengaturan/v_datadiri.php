<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1 class="text-black"><i class="fa fa-user mr-2" aria-hidden="true"></i><?php echo $x1 ?></h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> <?php echo $x2 ?></li>
            <li><i class="fa fa-angle-right"></i> <?php echo $x1 ?></li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="info-box">
            <p><?php echo $this->session->userdata('pesan') ?></p>
            <!-- <h4 class="text-black"><?php echo $x1 ?></h4> -->
            <?php foreach ($pelamar as $p) :  ?>
                <form action="<?php echo base_url('admin/pengaturan/datadiri/aksieditdatadiri') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label>Nama </label>
                                <input class="form-control" name="nama_pelamar" id="basicInput" type="text" value="<?php echo $p->nama_pelamar ?>">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" name="tempatlahir_pelamar" id="basicInput" type="text" value="<?php echo $p->tempatlahir_pelamar ?>">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" name="tgllahir_pelamar" id="basicInput" type="date" value="<?php echo $p->tgllahir_pelamar ?>">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jk_pelamar" id="" required>
                                    <?php if ($p->jk_pelamar == 'L') { ?>
                                        <option value="<?php echo $p->jk_pelamar ?>" selected>Laki-Laki</option>
                                    <?php } else { ?>
                                        <option value="<?php echo $p->jk_pelamar ?>" selected>Perempuan</option>
                                    <?php } ?>
                                    <option value="">- Pilih Jenis Kelamin -</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>

                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label>Agama</label>
                                <input class="form-control" name="agama_pelamar" id="basicInput" type="text" value="<?php echo $p->agama_pelamar ?>" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" name="alamat_pelamar" id="basicInput" type="text" value="<?php echo $p->alamat_pelamar ?>">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label>Nomor HP</label>
                                <input class="form-control" name="nohp_pelamar" id="basicInput" type="text" value="<?php echo $p->nohp_pelamar ?>">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label>Pendidikan</label>
                                <select class="form-control" name="pendidikan_pelamar" id="" required>
                                    <?php if ($p->pendidikan_pelamar == 'sma') { ?>
                                        <option value="<?php echo $p->pendidikan_pelamar ?>" selected>SMA /Sedejarat</option>
                                    <?php } elseif ($p->pendidikan_pelamar == 'd3') { ?>
                                        <option value="<?php echo $p->pendidikan_pelamar ?>" selected>Diploma 3</option>
                                    <?php } elseif ($p->pendidikan_pelamar == 's1') { ?>
                                        <option value="<?php echo $p->pendidikan_pelamar ?>" selected>Strata 1</option>
                                    <?php } elseif ($p->pendidikan_pelamar == 's2') { ?>
                                        <option value="<?php echo $p->pendidikan_pelamar ?>" selected>Strata 2</option>
                                    <?php   } ?>
                                    <option value="">- Pilih Pendidikan -</option>
                                    <option value="sma">SMA /Sedejarat</option>
                                    <option value="d3">Diploma 3</option>
                                    <option value="s1">Strata 1</option>
                                    <option value="s2">Strata 2</option>

                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">

                                <label for="">Foto</label>
                                <br>
                                <img width="100" height="100" src="<?php echo base_url('gambar/') . $p->gambar_pelamar ?>" alt="">
                                <br>
                                <input name="gambar_pelamar" type="file" class="form-control" value="">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </fieldset>
                        </div>
                    </div>



                </form>
            <?php endforeach; ?>

        </div>
        <!-- Main row -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->