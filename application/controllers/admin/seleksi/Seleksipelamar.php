<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksipelamar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') <> 'login') {
      redirect(base_url('login'));
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $kd_pelamar = $this->session->userdata('kd_pelamar');

    $data['x1'] = 'Lowongan Aktif';
    $data['x2'] = 'Lowongan';
    $data['x3'] = 'Lowongan';
    $tgl_sekarang = date('Y-m-d');
    // $data['x4']='Data lowongan Sahabat Optik';
    $data['nama_perush'] = $this->db->query("select nama_perush from tbl_perusahaan")->row()->nama_perush;
    $data['lowongan'] = $this->db->query("select * from tbl_seleksi S, tbl_lowongan L, tbl_pelamar P where S.kd_lowongan=L.kd_lowongan and S.kd_pelamar=P.kd_pelamar and  L.tgl_tutup > '$tgl_sekarang' and S.kd_pelamar='$kd_pelamar'")->result();
    // $data['kategori'] = $this->Mglobal->tampilkandata('tbl_kategori');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/seleksi/v_seleksilowonganpelamar');
    $this->load->view('admin/temp/v_footer');
  }
  function arsippelamar()
  {
    $kd_pelamar = $this->session->userdata('kd_pelamar');

    $data['x1'] = 'Lowongan Aktif';
    $data['x2'] = 'Lowongan';
    $data['x3'] = 'Lowongan';
    $tgl_sekarang = date('Y-m-d');
    // $data['x4']='Data lowongan Sahabat Optik';
    $data['nama_perush'] = $this->db->query("select nama_perush from tbl_perusahaan")->row()->nama_perush;
    $data['lowongan'] = $this->db->query("select * from tbl_seleksi S, tbl_lowongan L, tbl_pelamar P where S.kd_lowongan=L.kd_lowongan and S.kd_pelamar=P.kd_pelamar and  L.tgl_tutup <= '$tgl_sekarang' and S.kd_pelamar='$kd_pelamar' and S.ket_admin<>'belum'")->result();
    // $data['kategori'] = $this->Mglobal->tampilkandata('tbl_kategori');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/seleksi/v_seleksilowonganpelamar');
    $this->load->view('admin/temp/v_footer');
  }
  function lihat()
  {
    if ($this->session->userdata('kd_seleksi') == '') {
      $kd_seleksi = $this->input->post('kd_seleksi');
    } else {
      $kd_seleksi = $this->session->userdata('kd_seleksi');
    }
    if ($this->session->userdata('kd_lowongan') == '') {
      $kd_lowongan = $this->input->post('kd_lowongan');
    } else {
      $kd_lowongan = $this->session->userdata('kd_lowongan');
    }

    // $kd_lowongan = $this->input->post('kd_lowongan');
    $data['x1'] = 'Data Pelamar ' . $this->db->query("select * from tbl_lowongan where kd_lowongan='$kd_lowongan'")->row()->nama_lowongan;;
    $data['x2'] = 'Lowongan';
    $data['x3'] = 'Lowongan';
    $data['judul_bawah'] = 'Lowongan';
    $tgl_sekarang = date('Y-m-d');
    // $data['x4']='Data lowongan Sahabat Optik';

    $data['nama_lowongan']  = $this->db->query("select * from tbl_lowongan where kd_lowongan='$kd_lowongan'")->row()->nama_lowongan;
    $data['tgl_tutup']  = $this->Mglobal->tanggalindo($this->db->query("select * from tbl_lowongan where kd_lowongan='$kd_lowongan'")->row()->tgl_tutup);
    $data['jumlah_pelamar']  = $this->db->query("select * from tbl_seleksi where kd_lowongan='$kd_lowongan'")->num_rows();
    $data['nama_perush'] = $this->db->query("select nama_perush from tbl_perusahaan")->row()->nama_perush;
    $data['seleksi'] = $this->db->query("select * from tbl_seleksi S, tbl_lowongan L, tbl_pelamar P where S.kd_lowongan=L.kd_lowongan and S.kd_pelamar=P.kd_pelamar and S.kd_lowongan='$kd_lowongan' order by S.kd_seleksi desc")->result();
    // $data['kategori'] = $this->Mglobal->tampilkandata('tbl_kategori');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/seleksi/v_seleksipelamar');
    $this->load->view('admin/temp/v_footer');
  }
  function uploadsuratlamaran()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'suratlamaran_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('surat_lamaran')) {
      $image = $this->upload->data();
      $data = array(

        'surat_lamaran' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadcv()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'cv_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('form_cv')) {
      $image = $this->upload->data();
      $data = array(

        'form_cv' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadijazah()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'ijazah_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_ijazah')) {
      $image = $this->upload->data();
      $data = array(

        'fc_ijazah' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadskck()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'skck_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_skck')) {
      $image = $this->upload->data();
      $data = array(

        'fc_skck' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadsuratketdokter()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'uploadsuratketdokter_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_suratketdokter')) {
      $image = $this->upload->data();
      $data = array(

        'fc_suratketdokter' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadvaksin2()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'vaksin2_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_vaksin2')) {
      $image = $this->upload->data();
      $data = array(

        'fc_vaksin2' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadswab()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'swab_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_swab')) {
      $image = $this->upload->data();
      $data = array(

        'fc_swab' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadktp()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'ktp_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_ktp')) {
      $image = $this->upload->data();
      $data = array(

        'fc_ktp' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadkk()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'kk_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_kk')) {
      $image = $this->upload->data();
      $data = array(

        'fc_kk' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadsertifikat()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'sertifikat_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_sertifikat')) {
      $image = $this->upload->data();
      $data = array(

        'fc_sertifikat' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadsim()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'sim_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('fc_sim')) {
      $image = $this->upload->data();
      $data = array(

        'fc_sim' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/lihat'));
    }
  }
  function uploadjawaban()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_seleksi' => $this->input->post('kd_seleksi'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'jawaban_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('jawaban_psikotes')) {
      $image = $this->upload->data();
      $data = array(

        'jawaban_psikotes' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Upload Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/berita/vtambahberita');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        // 'surat_lamaran' => $image['file_name'],
        // 'gambar_berita' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/seleksi/seleksipelamar/'));
    }
  }
}
