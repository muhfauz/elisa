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
      <p><?php echo $judul_bawah; ?></p>
      <div class="table-responsive">
        <?php echo $this->session->userdata('pesan'); ?>
        <!-- <a href="" class="btn btn-primary bg-aqua-gradient mb-2" data-toggle="modal" data-target="#tambahdata"> <i class="fa fa-plus-square mr-2"></i> Tambah Data</a> -->
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead class="bg-aqua-gradient">
            <tr>
              <th class="text-center text-white" width="10px">No</th>
              <th class="text-center text-white">Nama Santri</th>
              <th class="text-center text-white">Tempat, Tanggal Lahir</th>

              <!-- <th class="text-center text-white">Foto</th> -->
              <th class="text-center text-white" width="300px"></th>

            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($santri as $a) :  ?>
              <tr>
                <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
                <td><?php echo $a->nama_santri ?></td>

                <td><?php
                    echo $a->tempat_lahir . ', ' . $this->Mglobal->tanggalindo($a->tgl_lahir);

                    ?></td>

                <!-- <td><img src="<?php echo base_url('assets/toko/images/santri/') . $a->foto_santri ?>" alt=""> -->
                </td>

                <td class="float-right">
                  <a href="<?php echo base_url('admin/pendaftaran/hasilseleksi/cetakbukti/') ?>" class="btn btn-warning btn-sm mb-1"> <i class="fa fa-print mr-2"></i> Cetak Hasil</a>
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
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Form Tambah santri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/deskripsi/santri/aksitambahsantri') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Kode santri</label>
            <!-- <input name="kd_santri" type="text" class="form-control" readonly value="<?php echo $this->Mglobal->kode_otomatis("kd_santri", "tbl_santri", "KEG") ?>"> -->
          </div>
          <div class="form-group">
            <label for="">Hari</label>
            <select name="hari_santri" id="" class="form-control" required>
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
            <input name="jam_santri" type="text" class="form-control" value="" placeholder="10:10" required>
          </div>
          <div class="form-group">
            <label for="">santri</label>
            <input name="nama_santri" type="text" class="form-control" value="" required>
          </div>
          <div class=" form-group">
            <label for="">Keterangan</label>
            <input name="keterangan_santri" type="text" class="form-control" value="" required>
          </div>

          <!-- <div class=" form-group">
                        <label for="">Foto santri</label>
                        <input name="foto_santri" type="file" class="form-control" required>
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
<?php foreach ($santri as $a) : ?>
  <div class="modal fade" id="datadetail<?php echo $a->kd_santri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Detail Data santri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-borderless">
            <tr>
              <th>Hari </th>
              <td><?php echo $a->nama_santri ?></td>
            </tr>
            <tr>
              <th>Tempat Tanggal Lahir </th>
              <td><?php echo $a->tempat_lahir . ', ' . $this->Mglobal->tanggalindo($a->tgl_lahir) ?></td>
            </tr>
            <tr>
              <th>Jenis Kelamin </th>
              <td><?php echo $a->jk_santri ?></td>
            </tr>
            <tr>
              <th>Alamat </th>
              <td><?php echo $a->alamat_santri ?></td>
            </tr>
            <tr>
              <th>Anak ke </th>
              <td><?php echo $a->anak_ke ?></td>
            </tr>
            <tr>
              <th>Jumlah Saudara </th>
              <td><?php echo $a->jumlah_saudara ?></td>
            </tr>

            <tr>
              <th>Nama orang tua </th>
              <td><?php echo $a->nama_orangtua ?></td>
            </tr>
            <tr>
              <th>Pekerjaan orang tua </th>
              <td><?php echo $a->pekerjaan_orangtua ?></td>
            </tr>
            <tr>
              <th>Agama Orang Tua </th>
              <td><?php echo $a->agama_orangtua ?></td>
            </tr>
            <tr>
              <th>Nama Wali </th>
              <td><?php echo $a->nama_wali ?></td>
            </tr>
            <tr>
              <th>Pekerjaan Wali </th>
              <td><?php echo $a->pekerjaan_wali ?></td>
            </tr>

            <!-- <tr>
                            <th>KK Santri </th>
                            <td><?php if ($a->kk_santri <> "") { ?>
                                    <a href="<?php echo base_url() ?>assets/img/<?php echo $a->kk_santri ?>">
                                        <button class="btn btn-sm btn-primary"> <i class="fa fa-download mr-2" aria-hidden="true"></i>Download </button>
                                    </a>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Akte Santri </th>
                            <td><?php if ($a->akte_santri <> "") { ?>
                                    <a href="<?php echo base_url() ?>assets/img/<?php echo $a->akte_santri ?>">
                                        <button class="btn btn-sm btn-primary"> <i class="fa fa-download mr-2" aria-hidden="true"></i>Download </button>
                                    </a>
                                <?php } ?>
                            </td>
                        </tr> -->
            <tr>
              <th>Foto santri</th>
              <td>
                <img height="100" width="100" src="<?php echo base_url('assets/img/') . $a->foto_santri ?>" alt="">
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
<?php foreach ($santri as $a) : ?>


  <div class="modal fade" id="cetakdata<?php echo $a->kd_santri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-print mr-2"></i> Cetak Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/pendaftaran/cetakbukti/cetakbukti') ?>" method="post">
            <div class="form-group">
              Apakah Anda Yakin Mencetak Data? <br>
              <!-- <label for="">Alasan :</label>
              <input name="alasan_alasan" type="text" class="form-control" required> -->
              <input name="kd_santri" type="hidden" class="form-control" value="<?php echo $a->kd_santri ?>" required>
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
<!-- Terima Santri -->
<?php foreach ($santri as $a) : ?>
  <div class="modal fade" id="terimadata<?php echo $a->kd_santri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Terima Santri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/pendaftaran/pendaftaran/terimasantri') ?>" method="post">
            <div class="form-group">
              Apakah Anda Yakin akan Menerima Santri ini? <br>
              <label for="">Alasan :</label>
              <input name="alasan_alasan" type="text" class="form-control" required>
              <input name="kd_santri" type="hidden" class="form-control" value="<?php echo $a->kd_santri ?>" required>
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