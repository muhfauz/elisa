<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hrd extends CI_Controller
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
    $data['x1'] = 'Data hrd';
    $data['x2'] = 'Master';
    $data['x3'] = 'hrd';
    // $data['x4']='Data hrd Sahabat Optik';
    $data['nama_perush'] = $this->db->query("select nama_perush from tbl_perusahaan")->row()->nama_perush;
    $data['hrd'] = $this->Mglobal->tampilkandata('tbl_hrd');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/master/v_hrd');
    $this->load->view('admin/temp/v_footer');
  }
  function tambahhrd()
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'hrd';
    $data['x3'] = 'Tambah hrd Inventaris';
    $data['x4'] = 'Menambahkan Data hrd Inventaris Sahabat Optik';
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/hrd/vtambahhrd', $data);
    $this->load->view('adm/footer');
  }
  function aksitambahhrd()
  {
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '20480000';
    $config['file_name'] = 'adm_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar_hrd')) {
      $image = $this->upload->data();
      $data = array(
        'kd_hrd' => $this->input->post('kd_hrd'),
        'nama_hrd' => $this->input->post('nama_hrd'),
        'username_hrd' => $this->input->post('username_hrd'),
        'alamat_hrd' => $this->input->post('alamat_hrd'),
        'nohp_hrd' => $this->input->post('nohp_hrd'),
        // 'status_hrd' => $this->input->post('status_hrd'),
        'gambar_hrd' => $image['file_name'],
        'password_hrd' => md5($this->input->post('password_hrd'))
      );
      $this->Mglobal->tambahdata($data, 'tbl_hrd');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/hrd/'));
    } else {
      $data = array(
        'kd_hrd' => $this->input->post('kd_hrd'),
        'nama_hrd' => $this->input->post('nama_hrd'),
        'username_hrd' => $this->input->post('username_hrd'),
        'alamat_hrd' => $this->input->post('alamat_hrd'),
        'nohp_hrd' => $this->input->post('nohp_hrd'),
        'status_hrd' => $this->input->post('status_hrd'),
        // 'gambar_hrd' => $image['file_name'],
        'password_hrd' => md5($this->input->post('password_hrd'))
      );
      $this->Mglobal->tambahdata($data, 'tbl_hrd');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/hrd/'));
    }
  }

  function hapushrd()
  {
    $where = array('kd_hrd' => $this->input->post('kd_hrd'));
    $this->Mglobal->hapusdata($where, 'tbl_hrd');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('hrd/master/hrd/'));
  }
  function edithrd($id)
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'hrd';
    $data['x3'] = 'Edit hrd Inventaris';
    $data['x4'] = 'Mengedit Data hrd Inventaris Sahabat Optik';
    $where = array('kd_hrd' => $id);
    $data['hrd'] = $this->Mglobal->tampilkandatasingle('tbl_hrd', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/hrd/vedithrd', $data);
    $this->load->view('adm/footer');
  }
  function aksiedithrd()
  {
    $where = array('kd_hrd' => $this->input->post('kd_hrd'));
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '20480000';
    $config['file_name'] = 'adm_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar_hrd')) {
      $image = $this->upload->data();
      $data = array(
        'nama_hrd' => $this->input->post('nama_hrd'),
        'username_hrd' => $this->input->post('username_hrd'),
        'alamat_hrd' => $this->input->post('alamat_hrd'),
        'nohp_hrd' => $this->input->post('nohp_hrd'),
        'status_hrd' => $this->input->post('status_hrd'),
        'gambar_hrd' => $image['file_name'],
        //  'password_hrd'=>md5($this->input->post('password_hrd'))
      );
      $this->Mglobal->editdata('tbl_hrd', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/hrd/'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/hrd/vtambahhrd');
      //    $this->load->view('adm/footer');
      //  }
    } else {
      $data = array(
        'nama_hrd' => $this->input->post('nama_hrd'),
        'username_hrd' => $this->input->post('username_hrd'),
        'alamat_hrd' => $this->input->post('alamat_hrd'),
        'nohp_hrd' => $this->input->post('nohp_hrd'),
        'status_hrd' => $this->input->post('status_hrd'),
        // 'gambar_hrd' => $image['file_name'],
        //  'password_hrd'=>md5($this->input->post('password_hrd'))
      );
      $this->Mglobal->editdata('tbl_hrd', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/hrd/'));
    }
  }
}
