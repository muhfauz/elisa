<!DOCTYPE html>
<html>

<head>
    <title><?php echo $nama_surat; ?></title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">

</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }


        .table-data tr td {
            border-bottom: 1px solid #ffffff;
            font-size: 10pt;
            padding: 8px;
            text-align: left;
            height: 8px;
        }

        li {
            font-size: 10pt;
            text-align: left;
        }

        p {
            font-size: 10pt;
            text-align: left;
        }

        .kalimat {
            font-size: 10pt;
            text-align: left;
        }

        .kalimattolak {
            font-size: 14pt;
            text-align: left;
        }
    </style>

    <img src="assets/img/<?php echo $this->db->query("select logob_perush from tbl_perusahaan where kd_perush='1'")->row()->logob_perush; ?>" style="position: absolute; width: 70px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    <?php echo strtoupper($nama_perush); ?><br>
                    <?php echo $alamat_perush ?> <br>
                    <?php echo $email_perush . ' ' . $telepon_perush ?> <br>
                </span>
                <span style="line-height: 1.6">

                </span>

            </td>
        </tr>
    </table>

    <hr>


    <?php foreach ($santri as $s) : ?>
        <div class="text-center font-weight-bold"><u><?php echo $nama_surat ?> </u></div>

    <?php endforeach; ?>



    <br />
    <table class="table-data" id="example3">

        <tbody>
            <?php foreach ($santri as $s) : ?>

                <tr>
                    <td>1. Nomor Pendaftaran</td>
                    <td>: <?php echo $s->kd_santri ?></td>
                </tr>

                <tr>
                    <td>2. Nama Lengkap</td>
                    <td>: <?php echo $s->nama_santri ?></td>
                </tr>
                <tr>
                    <td>3. Jenis Kelamin</td>
                    <td>: <?php echo $s->jk_santri ?></td>
                </tr>
                <tr>
                    <td>4. Tempat / Tanggal Lahir</td>
                    <td>: <?php echo $s->tempat_lahir ?>, <?php echo  date('d F Y', strtotime($s->tgl_lahir)) ?></td>
                </tr>
                <tr>
                    <td>5. Alamat </td>
                    <td>: <?php echo $s->alamat_santri ?></td>
                </tr>


        </tbody>
    </table>
    <div class="mb-1 kalimat">Berdasarkan seleksi yang telah dilakukan, santri dengan data di atas dinyatakan:</div>
    <h1 class="text-center mt-5 mb-5">
        <?php if ($s->status_daftar == 'lengkap') {
                    echo "BELUM ADA HASIL";
                } elseif ($s->status_daftar == 'diterima') {
                    echo "DITERIMA";
                } else {
                    echo "TIDAK DITERIMA";
                }
        ?>
    </h1>
    <?php if ($s->status_daftar == 'lengkap') { ?>
        <div class="mb-1 kalimat">.</div>
    <?php  } elseif ($s->status_daftar == 'diterima') { ?>
        <div class="mb-1 kalimat"> Santri yang telah diterima dikenakan tarif Rp. <?php echo number_format($biaya) ?> per bulan. Untuk biaya santri selama di pondok pesantren selama 1 bulan. Pembayaran dapat dilakukan pada awal masuk, paling lambat akhir bulan.</div>
    <?php } else { ?>
        <div class="mb-1 kalimattolak text-center">Jangan patah semangat. Silakan daftar lagi di kesempatan berikutnya.</div>
    <?php    }     ?>


    <table class="table-data" id="example3">
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <!-- <td class="text-center"><?php echo $nama_desa; ?>, <?php echo  date('d F Y', strtotime($s->tanggal_dibuat)) ?></td> -->
            </tr>
            <tr>
                <td></td>
                <td></td>
                <!-- <td class="text-center">Kepala Desa <?php echo $nama_desa; ?></td> -->
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <!-- <td class="text-center"><?php echo $nama_kepaladesa; ?></td> -->
            </tr>
        </tbody>
    </table>
<?php endforeach; ?>
<br />


</body>

</html>