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

            <div class="row m-t-3">
                <div class="col-lg-12">
                    <div class="card ">
                        <p><?php echo $this->session->userdata('pesan'); ?></p>
                        <div class="card-header bg-blue">
                            <h5 class="text-white m-b-0"><?= $judul; ?></h5>
                        </div>
                        <div class="card-body">

                            <?php foreach ($santri as $s) : ?>
                                <form action="<?php echo base_url('admin/pendaftaran/datasantri/aksieditsantri') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Nama Lengkap</label>
                                                <input class="form-control" name="kd_santri" placeholder="Nama Lengkap" type="hidden" value="<?= $this->session->userdata('kd_santri'); ?>">
                                                <input class="form-control" name="nama_santri" placeholder="Nama Lengkap" type="text" value="<?= $s->nama_santri; ?>" required>
                                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Jenis Kelamin</label>
                                                <select name="jk_santri" class="form-control" id="" required>
                                                    <?php if ($s->jk_santri == 'Pria') { ?>
                                                        <option value="<?php echo $s->jk_santri ?>" enabled><?php echo $s->jk_santri ?></option>

                                                        <option value="Wanita">Wanita</option>

                                                    <?php } elseif ($s->jk_santri == 'Wanita') { ?>
                                                        <option value="<?php echo $s->jk_santri ?>" enabled><?php echo $s->jk_santri ?></option>
                                                        <option value="Pria">Pria</option>


                                                    <?php } else { ?>
                                                        <option value="Pria">Pria</option>
                                                        <option value="Wanita">Wanita</option>
                                                    <?php } ?>


                                                </select>
                                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Tempat Lahir</label>
                                                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" type="text" value="<?php echo $s->tempat_lahir ?>" required>
                                                <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Tanggal Lahir</label>
                                                <input class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" type="date" value="<?php echo $s->tgl_lahir ?>" required>
                                                <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Anak Ke :</label>
                                                <select name="anak_ke" class="form-control" id="" required>
                                                    <option value="<?= $s->anak_ke; ?>"><?= $s->anak_ke; ?></option>
                                                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <span class="fa fa-briefcase form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Jumlah Saudara</label>
                                                <select name="jumlah_saudara" class="form-control" id="" required>
                                                    <option value="<?= $s->jumlah_saudara; ?>"><?= $s->jumlah_saudara; ?></option>
                                                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Alamat </label>
                                                <textarea name="alamat_santri" class="form-control" id="placeTextarea" rows="3" placeholder="Alamat" required> <?= $s->alamat_santri; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Nama Orang Tua</label>
                                                <input class="form-control" name="nama_orangtua" placeholder="Nama Orang Tua" type="text" value="<?= $s->nama_orangtua; ?>" required>

                                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Pekerjaan Orang Tua</label>
                                                <input class="form-control" name="pekerjaan_orangtua" placeholder="Pekerjaan Orang Tua" type="text" value="<?= $s->pekerjaan_orangtua; ?>" required>
                                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Nama Wali</label>
                                                <input class="form-control" name="nama_wali" placeholder="Nama Wali" type="text" value="<?= $s->nama_wali; ?>" required>
                                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Pekerjaan Wali</label>
                                                <input class="form-control" name="pekerjaan_wali" placeholder="Pekerjaan Wali" type="text" value="<?= $s->pekerjaan_wali; ?>" required>>
                                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Alamat Wali </label>
                                                <textarea name="alamat_wali" class="form-control" id="placeTextarea" rows="3" placeholder="Alamat Wali" required><?= $s->alamat_wali; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->