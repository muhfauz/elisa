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
        <!-- <a href="" class="btn btn-primary bg-aqua-gradient mb-2" data-toggle="modal" data-target="#tambahdata"> <i class="fa fa-plus-square mr-2"></i> Tambah Data</a> -->
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead class=" bg-aqua-gradient ">
            <tr>
              <th class="text-center text-white" width="10px">No</th>
              <th class="text-center text-white">Nama</th>
              <th class="text-center text-white">Status</th>

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
                <td><?php echo $a->status_santri ?></td>

                <td class="float-right">

                  <!-- <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_santri ?>"> <i class="fa fa-plus-square mr-2"></i> Detail</a> -->
                  <a href="" class="btn btn-facebook btn-sm mb-1" data-toggle="modal" data-target="#gantidata<?php echo $a->kd_santri ?>"> <i class="fa fa-key mr-2"></i> Ganti Password</a>
                  <!-- <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#hapusdata<?php echo $a->kd_admin ?>"> <i class="fa fa-trash mr-2"></i> Hapus</a> -->


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







<!-- Start Ganti Password -->
<?php foreach ($santri as $a) :  ?>
  <div class="modal fade" id="gantidata<?= $a->kd_santri; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-key mr-2"></i> Form Ganti Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/pengaturan/gantipassantri/aksigantipassword') ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="">Password Lama</label>
              <input name="kd_santri" type="hidden" class="form-control" readonly value="<?php echo $this->session->userdata('kd_santri') ?>">
              <input name="password_lama" type="password" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="">Password Baru</label>
              <input name="password_baru" type="password" class="form-control" required>
              <span class="text-red">password baru minimal 5 karakter</span>
            </div>
            <div class="form-group">
              <label for="">Konfirmasi Password Baru</label>
              <input name="konfirmasipassword_baru" type="password" class="form-control" required>
              <span class="text-red">konfirmasi password harus sama dengan password baru</span>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
        <script>
          CKEDITOR.replace('biodata_umkm');
        </script>
      </div>
    </div>
  </div>

<?php endforeach; ?>

<!-- End Ganti Password -->