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
            <h4 class="text-primary"><i class="fa fa-user"></i> <?php echo $x1; ?></h4>
            <p><?php echo $nama_perush; ?></p>
            <div class="row ml-1 mr-1 mt-3 bg-aqua">
                <div class="col sm-1 mt-2 ml-2 mr-2">
                    <!-- <form class="form" action="<?php echo base_url('admin/transaksi/penjualan/simpanpenjualan') ?>" method="POST"> -->
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Nama Lowongan</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input class="form-control text-left" name="kd_penjualan" id="kd_penjualan" placeholder="No Tranaksi" type="text" readonly value="<?php echo $nama_lowongan ?>" required>
                                <div class="input-group-addon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Deadline Lowongan </label>
                        <div class="col-sm-9">
                            <div class="input-group">

                                <input class="form-control text-left" id="namaoutlet" placeholder="Nama outlet" type="text" value="<?php echo $tgl_tutup ?>" readonly>
                                <div class="input-group-addon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="table-responsive">
                <?php echo $this->session->userdata('pesan'); ?>
                <!-- <a href="" class="btn btn-primary bg-aqua-gradient mb-2" data-toggle="modal" data-target="#tambahdata"> <i class="fa fa-plus-square mr-2"></i> Tambah Data</a> -->
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-aqua">
                        <tr>
                            <th class="text-center text-white align-middle" width="10px">No</th>
                            <th class="text-center text-white align-middle">Nama Pelamar</th>
                            <th class="text-center text-white align-middle">Tempat, Tanggal Lahir</th>
                            <th class="text-center text-white align-middle">Surat Lamaran</th>
                            <th class="text-center text-white align-middle">CV</th>
                            <th class="text-center text-white align-middle">Ijazah</th>
                            <th class="text-center text-white align-middle">SKCK</th>
                            <th class="text-center text-white align-middle">Surat Dokter</th>
                            <th class="text-center text-white align-middle">Vaksin 2</th>
                            <th class="text-center text-white align-middle">Swab</th>
                            <th class="text-center text-white align-middle">KTP</th>
                            <th class="text-center text-white align-middle">KK</th>
                            <th class="text-center text-white align-middle">Sertifikat</th>
                            <th class="text-center text-white align-middle">Keterangan</th>
                            <!-- <th class="text-center text-white">Foto</th> -->
                            <th class="text-center text-white" width="300px"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($seleksi as $a) :  ?>
                            <tr>
                                <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
                                <td><?php echo $a->nama_pelamar ?></td>

                                <td><?php
                                    if ($a->tgllahir_pelamar == '0000-00-00') {
                                        echo "-";
                                    } else {
                                        echo $a->tempatlahir_pelamar . ', ' . $this->Mglobal->tanggalindo($a->tgllahir_pelamar);
                                    } ?>
                                </td>

                                <!-- <td><img src="<?php echo base_url('assets/toko/images/seleksi/') . $a->foto_seleksi ?>" alt=""> -->
                                </td>
                                <td><?php if ($a->surat_lamaran <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->surat_lamaran ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->form_cv <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->form_cv ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->fc_ijazah <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->fc_ijazah ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->fc_skck <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->fc_skck ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->fc_suratketdokter <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->fc_suratketdokter ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->fc_vaksin2 <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->$a->fc_vaksin2 ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->fc_swab <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->$a->fc_swab ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->fc_ktp <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->$a->fc_ktp ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->fc_kk <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->$a->fc_kk ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td><?php if ($a->fc_sertifikat <> "") { ?>
                                        <a href="<?php echo base_url() ?>berkas/<?php echo $a->$a->fc_sertifikat ?>" target="_blank">
                                            <button class="btn btn-sm btn-primary"> <i class="fa fa-eye mr-2" aria-hidden="true"></i>Lihat </button>
                                        </a>
                                    <?php } ?>
                                </td>
                                <td> <span class="badge badge-primary"><?php echo 'berkas ' . $a->ket_admin  ?></span></td>
                                <td class="float-right">
                                    <?php if ($a->ket_admin == "belum") { ?>
                                        <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_seleksi ?>"> <i class="fa fa-plus-square mr-2"></i> Detail</a>
                                        <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#terimadata<?php echo $a->kd_seleksi ?>"> <i class="fa fa-edit mr-2"></i> Terima seleksi</a>
                                        <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#tolakdata<?php echo $a->kd_seleksi ?>"> <i class="fa fa-trash mr-2"></i> Tolak seleksi</a>
                                    <?php } elseif ($a->ket_admin == "tolak") { ?>
                                        <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_seleksi ?>"> <i class="fa fa-plus-square mr-2"></i> Detail</a>
                                    <?php } elseif ($a->ket_admin == "terima") { ?>
                                        <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_seleksi ?>"> <i class="fa fa-plus-square mr-2"></i> Detail</a>
                                    <? } else { ?>

                                    <?php } ?>


                                </td>
                            </tr>
                        <?php endforeach ?>

                </table>
            </div>
            <div class="row ml-1 mr-1 mt-3 bg-aqua">
                <div class="col sm-1 mt-2 ml-2 mr-2">
                    <!-- <form class="form" action="<?php echo base_url('admin/transaksi/penjualan/simpanpenjualan') ?>" method="POST"> -->
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Total Pelamar</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input class="form-control text-right" name="kd_penjualan" id="kd_penjualan" placeholder="No Tranaksi" type="text" readonly value="<?php echo $jumlah_pelamar ?> orang" required>
                                <div class="input-group-addon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-aqua">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Form Tambah seleksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/deskripsi/seleksi/aksitambahseleksi') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Kode seleksi</label>
                        <!-- <input name="kd_seleksi" type="text" class="form-control" readonly value="<?php echo $this->Mglobal->kode_otomatis("kd_seleksi", "tbl_seleksi", "KEG") ?>"> -->
                    </div>
                    <div class="form-group">
                        <label for="">Hari</label>
                        <select name="hari_seleksi" id="" class="form-control" required>
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jum'at</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="ahad">Ahad</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jam</label>
                        <input name="jam_seleksi" type="text" class="form-control" value="" placeholder="10:10" required>
                    </div>
                    <div class="form-group">
                        <label for="">seleksi</label>
                        <input name="nama_seleksi" type="text" class="form-control" value="" required>
                    </div>
                    <div class=" form-group">
                        <label for="">Keterangan</label>
                        <input name="keterangan_seleksi" type="text" class="form-control" value="" required>
                    </div>

                    <!-- <div class=" form-group">
                        <label for="">Foto seleksi</label>
                        <input name="foto_seleksi" type="file" class="form-control" required>
                        <span class="text-red font-italic text-sm-left">Gambar harus berukuran 370 x 240px untuk tampilan terbaik</span>
                    </div> -->


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail -->
<?php foreach ($seleksi as $a) : ?>
    <div class="modal fade" id="datadetail<?php echo $a->kd_seleksi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Detail Data seleksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Pelamar </th>
                            <td><?php echo $a->nama_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Tempat Tanggal Lahir </th>
                            <td><?php echo $a->tempatlahir_pelamar . ', ' . $this->Mglobal->tanggalindo($a->tgllahir_pelamar) ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin </th>
                            <td><?php echo $a->jk_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Alamat </th>
                            <td><?php echo $a->alamat_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>No HP Pelamar </th>
                            <td><?php echo $a->nohp_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Pendidikan Terakhir </th>
                            <td><?php echo $a->pendidikan_pelamar ?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Register </th>
                            <td><?php echo $this->Mglobal->tanggalindo($a->tglregister_pelamar) ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Melamar </th>
                            <td><?php echo $this->Mglobal->tanggalindo($a->tgl_seleksi) ?></td>
                        </tr>
                        <tr>
                            <th>Status Admin</th>
                            <td><?php echo $a->ket_admin ?></td>
                        </tr>
                        <tr>
                            <th>Status HRD </th>
                            <td><?php echo $a->ket_hrd ?></td>
                        </tr>


                        <tr>
                            <th>Foto Pelamar</th>
                            <td>
                                <img height="100" width="100" src="<?php echo base_url('gambar/') . $a->gambar_pelamar ?>" alt="">
                            </td>
                        </tr>

                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- akhir detail -->
<!-- modal detail -->
<?php foreach ($seleksi as $a) : ?>


    <div class="modal fade" id="tolakdata<?php echo $a->kd_seleksi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Tolak seleksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/seleksi/seleksi/tolakpelamar') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin akan Menolak Seleksi Pelamar ini? <br>
                            <label for="">Alasan :</label>
                            <input name="alasan_admin" type="text" class="form-control" required>
                            <input name="kd_seleksi" type="hidden" class="form-control" value="<?php echo $a->kd_seleksi ?>" required>
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-danger">Ya</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Terima seleksi -->
<?php foreach ($seleksi as $a) : ?>
    <div class="modal fade" id="terimadata<?php echo $a->kd_seleksi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Terima seleksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/seleksi/seleksi/terimapelamar') ?>" method="post">
                        <div class="form-group">
                            Apakah Pelamar ini ikut ke Tahap Seleksi Selanjutnya? <br>
                            <label for="">Alasan :</label>
                            <input name="alasan_admin" type="text" class="form-control" required>
                            <input name="kd_seleksi" type="hidden" class="form-control" value="<?php echo $a->kd_seleksi ?>" required>
                            <input name="kd_lowongan" type="hidden" class="form-control" value="<?php echo $a->kd_lowongan ?>" required>
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-danger">Ya</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- akhir detail -->

<!-- Modal -->