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
            <div class="table-responsive">
                <?php echo $this->session->userdata('pesan'); ?>
                <!-- <a href="" class="btn btn-primary bg-aqua-gradient mb-2" data-toggle="modal" data-target="#tambahdata"> <i class="fa fa-plus-square mr-2"></i> Tambah lowongan</a> -->
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-aqua">
                        <tr>
                            <th class="text-center text-white align-middle" width="10px">No</th>
                            <th class="text-center text-white align-middle">Nama Lowongan</th>
                            <th class="text-center text-white align-middle">Tanggal Tutup</th>
                            <th class="text-center text-white align-middle">Seleksi Administrasi</th>
                            <!-- <th class="text-center text-white">Gambar</th> -->
                            <!-- <th class="text-center text-white"></th> -->
                            <th class="text-center text-white" width="100 px">Hasil Psikotes</th>
                            <th class="text-center text-white" width="50 px"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($lowongan as $a) :  ?>
                            <tr>
                                <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
                                <td>
                                    <?php echo $a->nama_lowongan ?></td>
                                <td><?php echo $this->Mglobal->tanggalindo($a->tgl_tutup) ?></td>

                                <td class="text-center">
                                    <?php if ($a->ket_admin = 'belum') { ?>
                                        <button class="btn btn-info btn-sm">Berkas belum dicek</button>
                                    <?php } elseif ($a->ket_admin = 'tolak') { ?>
                                        <button class="btn btn-danger btn-sm">Tidak Lolos Administrasi</button>
                                    <?php } else { ?>
                                        <button class="btn btn-primary btn-sm">Diterima</button>
                                    <?php                               }  ?>
                                </td>
                                <td class="text-center">

                                    <!-- <button class="btn btn-danger btn-sm"> Tidak Lolos Administrasi</button> -->
                                    <?php if ($a->ket_admin = 'tolak') { ?>
                                        <button class="btn btn-danger btn-sm"> Tidak Lolos Administrasi</button>
                                    <?php } ?>
                                    <?php if ($a->ket_admin = 'terima') { ?>
                                        <?php if ($a->ket_hrd = 'belum') { ?>
                                            <button class="btn btn-info btn-sm">Menunggu</button>
                                        <?php } elseif ($a->ket_admin = 'tolak') { ?>
                                            <button class="btn btn-danger btn-sm">Tidak Lolos</button>
                                        <?php } else { ?>
                                            <button class="btn btn-primary btn-sm">Diterima</button>
                                        <?php    }  ?>
                                    <?php  }  ?>
                                </td>

                                <!-- <td> <img class="img-thumbnail" src=" <?php echo base_url('gambar/') . $a->gambar_lowongan ?>" alt="" width="100" height="100"> </td> -->
                                <td class="float-right">

                                    <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_lowongan ?>"> <i class="fa fa-info mr-2"></i> Detail Lowongan</a>
                                    <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#lihatdata<?php echo $a->kd_lowongan ?>"> <i class="fa fa-upload mr-2"></i> Upload Dokumen</a>

                                </td>
                            </tr>
                        <?php endforeach ?>

                </table>
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
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Tambah lowongan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/lowongan/lowongan/aksitambahlowongan') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Lowongan </label>
                        <input name="kd_lowongan" type="hidden" class="form-control" value="<?php echo $this->Mglobal->kode_otomatis('kd_lowongan', 'tbl_lowongan', 'BER') ?>" required>
                        <input name="nama_lowongan" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Detail Lowongan </label>
                        <textarea name="detail_lowongan" id="isi_lowongan" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Tutup </label>
                        <input name="tgl_tutup" type="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Foto </label>
                        <input name="gambar_lowongan" type="file" class="form-control">
                    </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            <script>
                CKEDITOR.replace('isi_lowongan');
            </script>
        </div>
    </div>
</div>

<!-- modal detail -->
<?php foreach ($lowongan as $a) : ?>
    <div class="modal fade" id="datadetail<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Detail lowongan Kami</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Lowongan</th>
                            <td><?php echo $a->nama_lowongan ?></td>
                        </tr>
                        <tr>
                            <th>Detail Lowongan</th>
                            <td><?php echo $a->detail_lowongan ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Post</th>
                            <td><?php echo $a->tgl_post ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Tutup</th>
                            <td><?php echo $a->tgl_tutup ?></td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td class="image text-center">
                                <img width="100" height="100" src="<?php echo base_url('gambar/') . $a->gambar_lowongan ?>" alt="">
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
<?php foreach ($lowongan as $a) : ?>


    <div class="modal fade" id="lihatdata<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> <?php echo $a->nama_lowongan ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/seleksi/seleksipelamar/lihat') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Akan Melengkapi dokumen ?
                            <!-- <label for="">Nama</label>
                  <input name="nama_admin" type="text" class="form-control" value="<?php echo $a->nama_admin ?>" required> -->
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
<?php foreach ($lowongan as $a) : ?>


    <div class="modal fade" id="editdata<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/lowongan/lowongan/aksieditlowongan') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Lowongan</label>
                            <input name="nama_lowongan" type="text" class="form-control" value="<?php echo $a->nama_lowongan ?>" required>
                            <input name="kd_lowongan" type="hidden" class="form-control" value="<?php echo $a->kd_lowongan ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Detail lowongan</label>
                            <textarea class="form-control" name="detail_lowongan" id="isi_lowongan2" cols="30" rows="10"><?php echo $a->detail_lowongan ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Tutup</label>
                            <input name="tgl_tutup" type="date" class="form-control" value="<?php echo $a->tgl_tutup ?>" required>

                        </div>

                        <div class="form-group">

                            <label for="">Foto</label>
                            <br>
                            <img width="100" height="100" src="<?php echo base_url('gambar/') . $a->gambar_lowongan ?>" alt="">
                            <br>
                            <input name="gambar_lowongan" type="file" class="form-control" value="">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-2"></i>Close</button>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Simpan</button>
                </div>
                </form>
                <script>
                    CKEDITOR.replace('isi_lowongan2');
                </script>

            </div>
        </div>
    </div>
<?php endforeach; ?>