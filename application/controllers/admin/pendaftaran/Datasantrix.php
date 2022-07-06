<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datasantrix extends CI_Controller
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
    $data['x1'] = 'Form Pendaftaran';
    $data['x2'] = 'Pendaftaran';
    $data['x3'] = 'Form Pendaftaran';
    // $data['x4'] = 'Data bagian Sahabat Optik';
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Pendaftaran Sudah ditutup!</strong> <br> Anda tidak bisa merubah data diri lagi.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
    $data['judul'] = 'Data Diri Santri';
    $where = array('kd_santri' => $this->session->userdata('kd_santri'));
    $data['santri'] = $this->Mglobal->tampilkandatasingle('tbl_santri', $where);
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pendaftaran/v_datasantrix');
    $this->load->view('admin/temp/v_footer');
  }
  function tambahbagian()
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'bagian';
    $data['x3'] = 'Tambah bagian Inventaris';
    $data['x4'] = 'Menambahkan Data bagian Inventaris Sahabat Optik';
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/bagian/vtambahbagian', $data);
    $this->load->view('adm/footer');
  }
  function aksitambahbagian()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_bagian', 'Nama bagian', 'required');
    //  $this->form_validation->set_rules('username_bagian', 'Username bagian', 'required');
    // $this->form_validation->set_rules('password_bagian', 'Password bagian', 'required');
    // if($this->form_validation->run()!=false)
    // {
    // $config['upload_path'] = './assets/toko/images/bagian/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_bagian_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_bagian')) {
    //   $image = $this->upload->data();
    $data = array(
      'nama_bagian' => $this->input->post('nama_bagian'),
      'kd_bagian' => $this->input->post('kd_bagian'),
      // 'foto_bagian' => $image['file_name'],
    );
    $this->Mglobal->tambahdata($data, 'tbl_bagian');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
    redirect(base_url('admin/master/bagian/'));
  }

  // else {
  //
  //  $this->load->view('bagian/temp/v_header');
  // $this->load->view('bagian/temp/v_atas');
  // $this->load->view('bagian/temp/v_sidebar');
  // $this->load->view('bagian/master/bagian/v_bagian');
  // $this->load->view('bagian/temp/v_footer');
  // }
  // }
  function hapusbagian()
  {
    $where = array('kd_bagian' => $this->input->post('kd_bagian'));
    $this->Mglobal->hapusdata($where, 'tbl_bagian');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/bagian/'));
  }
  function editbagian($id)
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'bagian';
    $data['x3'] = 'Edit bagian Inventaris';
    $data['x4'] = 'Mengedit Data bagian Inventaris Sahabat Optik';
    $where = array('kd_bagian' => $id);
    $data['bagian'] = $this->Mglobal->tampilkandatasingle('tbl_bagian', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/bagian/veditbagian', $data);
    $this->load->view('adm/footer');
  }
  function aksieditsantri()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_bagian', 'Nama bagian', 'required');
    //  $this->form_validation->set_rules('username_bagian', 'Username bagian', 'required');
    //   $this->form_validation->set_rules('password_bagian', 'Password bagian', 'required');

    $config['upload_path'] = './assets/toko/images/bagian/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    $config['max_size'] = '2048';
    $config['file_name'] = 'foto_santri_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('foto_santri')) {
      $image = $this->upload->data();
      $where = array('kd_santri' => $this->input->post('kd_santri'));
      $data = array(
        'nama_santri' => $this->input->post('nama_santri'),
        'jk_santri' => $this->input->post('jk_santri'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'anak_ke' => $this->input->post('anak_ke'),
        'jumlah_saudara' => $this->input->post('jumlah_saudara'),
        'alamat_santri' => $this->input->post('alamat_santri'),
        'nama_orangtua' => $this->input->post('nama_orangtua'),
        'pekerjaan_orangtua' => $this->input->post('pekerjaan_orangtua'),
        'nama_wali' => $this->input->post('nama_wali'),
        'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
        'alamat_wali' => $this->input->post('alamat_wali'),
        'foto_santri' => $image['file_name'],
        //  'password_bagian'=>md5($this->input->post('password_bagian'))
      );
      $this->Mglobal->editdata('tbl_santri', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pendaftaran  Sukses!</strong> Data berhasil disimpan ke database. Silakan cetak bukti pendaftaran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/pendaftaran/datasantri'));
    } else {
      $where = array('kd_santri' => $this->input->post('kd_santri'));
      $data = array(
        'nama_santri' => $this->input->post('nama_santri'),
        'jk_santri' => $this->input->post('jk_santri'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'anak_ke' => $this->input->post('anak_ke'),
        'jumlah_saudara' => $this->input->post('jumlah_saudara'),
        'alamat_santri' => $this->input->post('alamat_santri'),
        'nama_orangtua' => $this->input->post('nama_orangtua'),
        'pekerjaan_orangtua' => $this->input->post('pekerjaan_orangtua'),
        'nama_wali' => $this->input->post('nama_wali'),
        'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
        'alamat_wali' => $this->input->post('alamat_wali'),

        //'foto_bagian' => $image['file_name'],
        //  'password_bagian'=>md5($this->input->post('password_bagian'))
      );
      $this->Mglobal->editdata('tbl_santri', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pendaftaran  Sukses!</strong> Data berhasil disimpan ke database. Silakan cetak bukti pendaftaran
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/pendaftaran/datasantri'));
    }
  }
}
