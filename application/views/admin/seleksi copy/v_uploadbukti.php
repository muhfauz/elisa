<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1 class="text-black"> <i class="fa fa-building"></i> <?php echo $x1; ?></h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="sub-bread"><i class="fa fa-angle-right"></i> <?php echo $x2; ?></li>
      <li><i class="fa fa-angle-right"></i> <?php echo $x3; ?></li>
    </ol>
  </div>

  <!-- Main content -->
  <div class="content">


    <div class="info-box">
      <h4 class="text-primary"><i class="fa fa-building"></i> <?php echo $x1; ?></h4>
      <p><?php echo $nama_perush; ?></p>
      <div class="table-responsive">
        <?php echo $this->session->userdata('pesan'); ?>
        <!-- <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata" > <i class="fa fa-plus-square mr-2" ></i> Tambah Data</a> -->
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead class="bg-aqua">
            <tr>
              <th class="text-center text-white" width="10px">No</th>
              <th class="text-center text-white" width="400px">Foto</th>
              <th class="text-center text-white" width="10px"><i class="fa fa-cog font-weight-bold "></i></th>
              <th class="text-center text-white">Akte Kelahiran</th>
              <th class="text-center text-white" width="10px"><i class="fa fa-cog font-weight-bold "></i></th>
              <th class="text-center text-white">Kartu Keluarga</th>
              <th class="text-center text-white" width="10px"></i></th>


            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($santri as $a) :  ?>
              <tr>
                <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
                <td>
                  <img width="100" height="100" src="<?php echo base_url() ?>assets/img/<?php echo $a->foto_santri ?>" alt="">
                </td>
                <td>
                  <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#uploadfoto<?php echo $a->kd_santri ?>"> <i class="fa fa-edit mr-2"></i> Upload Foto</a>
                </td>
                <td>
                  <?php if ($a->akte_santri <> "") { ?>
                    <a href="<?php echo base_url() ?>assets/img/<?php echo $a->akte_santri ?>">
                      <button class="btn btn-sm btn-primary"> <i class="fa fa-download mr-2" aria-hidden="true"></i>Download </button>
                    </a>
                  <?php } ?>


                </td>
                <td>
                  <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#uploadakte<?php echo $a->kd_santri ?>"> <i class="fa fa-edit mr-2"></i> Upload Akte</a>
                </td>

                <td>
                  <?php if ($a->kk_santri <> "") { ?>
                    <a href="<?php echo base_url() ?>assets/img/<?php echo $a->kk_santri ?>">
                      <button class="btn btn-sm btn-primary"> <i class="fa fa-download mr-2" aria-hidden="true"></i>Download </button>
                    </a>
                  <?php } ?>

                </td>
                <td>
                  <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#uploadkk<?php echo $a->kd_santri ?>"> <i class="fa fa-edit mr-2"></i> Upload KK</a>
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
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('santri/master/santri/aksitambahsantri') ?>" method="post">
          <div class="form-group">
            <label for="">Nama</label>
            <input name="nama_santri" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input name="username_santri" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input name="password_santri" type="password" class="form-control" required>
          </div>

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
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-building mr-2"></i> Detail Data Perusahan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-borderless">
            <tr>
              <th>Nama Perusahaan</th>
              <td><?php echo $a->nama_santri ?></td>
            </tr>
            <tr>
              <th>Alamat Perusahaan </th>
              <td><?php echo $a->alamat_santri ?></td>
            </tr>
            <tr>
              <th>Tentang </th>
              <td><?php echo $a->tentang_santri ?></td>
            </tr>
            <tr>
              <th>No Telepon </th>
              <td><?php echo $a->telepon_santri ?></td>
            </tr>
            <tr>
              <th>Email </th>
              <td><?php echo $a->email_santri ?></td>
            </tr>
            <tr>
              <th>Logo Besar </th>
              <td class="bg-aqua">
                <img src="<?php echo base_url() ?>assets/img/<?php echo $a->logob_santri ?>" alt="">
                <!-- <?php echo $a->logob_santri ?> -->
              </td>
            </tr>
            <tr>
              <th>Logo Kecil </th>
              <td class="bg-aqua">
                <img src="<?php echo base_url() ?>assets/img/<?php echo $a->logok_santri ?>" alt="">
                <!-- <?php echo $a->logob_santri ?> -->
              </td>
            </tr>

          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">
            <i class="fa fa-close mr-2"></i>Close</button>
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


  <div class="modal fade" id="hapusdata<?php echo $a->kd_santri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Hapus Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('santri/master/santri/hapussantri') ?>" method="post">
            <div class="form-group">
              Apakah Anda Yakin akan menghapus data ini ?
              <!-- <label for="">Nama</label>
                  <input name="nama_santri" type="text" class="form-control" value="<?php echo $a->nama_santri ?>" required> -->
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

<!-- Modal logo besar-->
<?php foreach ($santri as $a) : ?>


  <div class="modal fade" id="uploadfoto<?php echo $a->kd_santri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!-- <div class="modal-dialog modal-lg" role="document"> -->
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-building mr-2"></i> Form Upload Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4 bg-primary ml-2">
              <img height="100" width="100" src="<?php echo base_url() ?>assets/img/<?php echo $a->foto_santri ?>" alt="">
            </div>
            <div class="col-md-4">
              <form action="<?php echo base_url('admin/pendaftaran/uploadbukti/aksieditfoto') ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="">Logo Besar File png/jpg/jpeg</label>
                  <input name="kd_santri" type="hidden" class="form-control" value="<?php echo $a->kd_santri ?>" required>
                  <input name="foto_santri" type="file" class="form-control" value="<?php echo $a->foto_santri ?>">
                  <small style="color:red">Ukuran gambar harus 90px x 30px</small>
                </div>
            </div>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-2"></i>Close</button>
          <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<!-- Modal logo besar-->
<?php foreach ($santri as $a) : ?>


  <div class="modal fade" id="uploadakte<?php echo $a->kd_santri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-building mr-2"></i> Form Edit Logo Kecil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4 bg-aqua">
              <?php if ($a->akte_santri <> "") { ?>
                <a href="<?php echo base_url() ?>assets/img/<?php echo $a->akte_santri ?>">
                  <button class="btn btn-sm btn-primary"> <i class="fa fa-download mr-2" aria-hidden="true"></i>Download </button>
                </a>
              <?php } ?>
            </div>
            <div class="col-md-4">
              <form action="<?php echo base_url('admin/pendaftaran/uploadbukti/aksieditakte') ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="">File harus pdf/jpg</label>
                  <input name="kd_santri" type="hidden" class="form-control" value="<?php echo $a->kd_santri ?>" required>
                  <input name="akte_santri" type="file" class="form-control" value="">
                  <small style="color:red">Ukuran file harus dibawah 10 mb</small>
                </div>
            </div>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-2"></i>Close</button>
          <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<?php foreach ($santri as $a) : ?>


  <div class="modal fade" id="uploadkk<?php echo $a->kd_santri ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-building mr-2"></i> Form Upload KK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 bg-primary ml-2">
              <?php if ($a->kk_santri <> "") { ?>
                <a href="<?php echo base_url() ?>assets/img/<?php echo $a->kk_santri ?>">
                  <button class="btn btn-sm btn-primary"> <i class="fa fa-download mr-2" aria-hidden="true"></i>Download </button>
                </a>
              <?php } ?>
            </div>
            <div class="col-md-4">
              <form action="<?php echo base_url('admin/pendaftaran/uploadbukti/aksieditkk') ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="">Logo Depan File png/jpg/jpeg/ pdf </label>
                  <input name="kd_santri" type="hidden" class="form-control" value="<?php echo $a->kd_santri ?>" required>
                  <input name="kk_santri" type="file" class="form-control" value="">
                  <small style="color:red">Ukuran gambar harus kurang dari 10 mb</small>
                </div>
            </div>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-2"></i>Close</button>
          <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>