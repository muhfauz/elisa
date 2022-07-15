<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
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
    $data['x1'] = 'lowongan';
    $data['x2'] = 'lowongan';
    $data['x3'] = 'lowongan';
    // $data['x4']='Data lowongan Sahabat Optik';
    $data['nama_perush'] = $this->db->query("select nama_perush from tbl_perusahaan")->row()->nama_perush;
    $data['lowongan'] = $this->db->query("select * from tbl_lowongan")->result();
    // $data['kategori'] = $this->Mglobal->tampilkandata('tbl_kategori');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/lowongan/v_lowongan');
    $this->load->view('admin/temp/v_footer');
  }
  function tambahlowongan()
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'lowongan';
    $data['x3'] = 'Tambah lowongan Inventaris';
    $data['x4'] = 'Menambahkan Data lowongan Inventaris Sahabat Optik';
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/lowongan/vtambahlowongan', $data);
    $this->load->view('adm/footer');
  }
  function aksitambahlowongan()
  {
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '20480000';
    $config['file_name'] = 'adm_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar_lowongan')) {
      $image = $this->upload->data();
      $data = array(
        'kd_lowongan' => $this->input->post('kd_lowongan'),
        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'detail_lowongan' => $this->input->post('detail_lowongan'),
        'gambar_lowongan' => $image['file_name'],
        'kd_admin' => $this->session->userdata('kd_admin'),
        'tgl_post' => date('Y-m-d'),
        'tgl_tutup' => $this->input->post('tgl_tutup'),
        'kd_lowonganen' => md5($this->input->post('tgl_tutup')),
      );
      $this->Mglobal->tambahdata($data, 'tbl_lowongan');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/lowongan/lowongan/'));
    } else {
      $data = array(
        'kd_lowongan' => $this->input->post('kd_lowongan'),
        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'detail_lowongan' => $this->input->post('detail_lowongan'),
        'gambar_lowongan' => 'gambar_lowongan.png',
        'kd_admin' => $this->session->userdata('kd_admin'),
        'tgl_post' => date('Y-m-d'),
        'tgl_tutup' => $this->input->post('tgl_tutup'),
        'kd_lowonganen' => md5($this->input->post('tgl_tutup')),
      );
      $this->Mglobal->tambahdata($data, 'tbl_lowongan');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/lowongan/lowongan/'));
    }
  }

  function hapuslowongan()
  {
    $where = array('kd_lowongan' => $this->input->post('kd_lowongan'));
    $this->Mglobal->hapusdata($where, 'tbl_lowongan');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/lowongan/lowongan/'));
  }
  function editlowongan($id)
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'lowongan';
    $data['x3'] = 'Edit lowongan Inventaris';
    $data['x4'] = 'Mengedit Data lowongan Inventaris Sahabat Optik';
    $where = array('kd_lowongan' => $id);
    $data['lowongan'] = $this->Mglobal->tampilkandatasingle('tbl_lowongan', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/lowongan/veditlowongan', $data);
    $this->load->view('adm/footer');
  }
  function aksieditlowongan()
  {
    $where = array('kd_lowongan' => $this->input->post('kd_lowongan'));
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'adm_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar_lowongan')) {
      $image = $this->upload->data();
      $data = array(

        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'detail_lowongan' => $this->input->post('detail_lowongan'),
        'gambar_lowongan' => $image['file_name'],
        'kd_admin' => $this->session->userdata('kd_admin'),
        'tgl_post' => date('Y-m-d'),
        'tgl_tutup' => $this->input->post('tgl_tutup'),

        //  'password_lowongan'=>md5($this->input->post('password_lowongan'))
      );
      $this->Mglobal->editdata('tbl_lowongan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/lowongan/lowongan/'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/lowongan/vtambahlowongan');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'detail_lowongan' => $this->input->post('detail_lowongan'),

        'kd_admin' => $this->session->userdata('kd_admin'),
        'tgl_post' => date('Y-m-d'),
        'tgl_tutup' => $this->input->post('tgl_tutup'),
        // 'gambar_lowongan' => $image['file_name'],
        //  'password_lowongan'=>md5($this->input->post('password_lowongan'))
      );
      $this->Mglobal->editdata('tbl_lowongan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/lowongan/lowongan/'));
    }
  }
  function uploaddata()
  {
    $kd_lowongan = $this->session->set_flashdata('kd_lowongan', $this->input->post('kd_lowongan'));
    // $kd_seleksi = $this->session->set_flashdata('kd_seleksi', $this->input->post('kd_seleksi'));

    $where = array('kd_lowongan' => $this->input->post('kd_lowongan'));
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'jpg|pdf|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '2048000000';
    $config['file_name'] = 'data_psikotes' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('data_psikotes')) {
      $image = $this->upload->data();
      $data = array(

        'data_psikotes' => $image['file_name'],
        //  'password_berita'=>md5($this->input->post('password_berita'))
      );
      // $this->Mglobal->editdata('tbl_seleksi', $where, $data);
      $this->Mglobal->editdata('tbl_lowongan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Upload Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/lowongan/lowongan/'));
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
      $this->Mglobal->editdata('tbl_lowongan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/lowongan/lowongan/'));
    }
  }
}
