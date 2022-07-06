<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenistanah extends CI_Controller
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
    $data['x1'] = 'Data Jenis Tanah';
    $data['x2'] = 'Master';
    $data['x3'] = 'Jenis Janah';
    $data['x4'] = 'Data Tenis Tanah ' . '| ' . $this->db->query('select nama_perush from tbl_perusahaan')->row()->nama_perush;
    $data['jenistanah'] = $this->Mglobal->tampilkandata('tbl_jenistanah');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/master/v_jenistanah');
    $this->load->view('admin/temp/v_footer');
  }
  function tambahjenistanah()
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'jenistanah';
    $data['x3'] = 'Tambah jenistanah Inventaris';
    $data['x4'] = 'Menambahkan Data jenistanah Inventaris Sahabat Optik';
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/jenistanah/vtambahjenistanah', $data);
    $this->load->view('adm/footer');
  }
  function aksitambahjenistanah()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_jenistanah', 'Nama jenistanah', 'required');
    //  $this->form_validation->set_rules('username_jenistanah', 'Username jenistanah', 'required');
    // $this->form_validation->set_rules('password_jenistanah', 'Password jenistanah', 'required');
    // if($this->form_validation->run()!=false)
    // {
    // $config['upload_path'] = './assets/toko/images/jenistanah/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_jenistanah_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_jenistanah')) {
    //   $image = $this->upload->data();
    $data = array(
      'nama_jenistanah' => $this->input->post('nama_jenistanah'),
      'kd_jenistanah' => $this->input->post('kd_jenistanah'),
      // 'ket_jenistanah' => $this->input->post('ket_jenistanah'),
      // 'foto_jenistanah' => $image['file_name'],
    );
    $this->Mglobal->tambahdata($data, 'tbl_jenistanah');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
    redirect(base_url('admin/master/jenistanah/'));
  }

  // else {
  //
  //  $this->load->view('jenistanah/temp/v_header');
  // $this->load->view('jenistanah/temp/v_atas');
  // $this->load->view('jenistanah/temp/v_sidebar');
  // $this->load->view('jenistanah/master/jenistanah/v_jenistanah');
  // $this->load->view('jenistanah/temp/v_footer');
  // }
  // }
  function hapusjenistanah()
  {
    $where = array('kd_jenistanah' => $this->input->post('kd_jenistanah'));
    $this->Mglobal->hapusdata($where, 'tbl_jenistanah');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/jenistanah/'));
  }
  function editjenistanah($id)
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'jenistanah';
    $data['x3'] = 'Edit jenistanah Inventaris';
    $data['x4'] = 'Mengedit Data jenistanah Inventaris Sahabat Optik';
    $where = array('kd_jenistanah' => $id);
    $data['jenistanah'] = $this->Mglobal->tampilkandatasingle('tbl_jenistanah', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/jenistanah/veditjenistanah', $data);
    $this->load->view('adm/footer');
  }
  function aksieditjenistanah()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_jenistanah', 'Nama jenistanah', 'required');
    //  $this->form_validation->set_rules('username_jenistanah', 'Username jenistanah', 'required');
    //   $this->form_validation->set_rules('password_jenistanah', 'Password jenistanah', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    // $config['upload_path'] = './assets/toko/images/jenistanah/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_jenistanah_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_jenistanah')) {
    // $image = $this->upload->data();
    $where = array('kd_jenistanah' => $this->input->post('kd_jenistanah'));
    $data = array(
      'nama_jenistanah' => $this->input->post('nama_jenistanah'),
      // 'ket_jenistanah' => $this->input->post('ket_jenistanah'),
      // 'foto_jenistanah' => $image['file_name'],
      //  'password_jenistanah'=>md5($this->input->post('password_jenistanah'))
    );
    $this->Mglobal->editdata('tbl_jenistanah', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/jenistanah/'));
    //  }
    //  else {

    //    $this->load->view('adm/header');
    //    $this->load->view('adm/sidebar');
    //    $this->load->view('adm/master/jenistanah/vtambahjenistanah');
    //    $this->load->view('adm/footer');
    //  }
    // } else {
    //   $where = array('kd_jenistanah' => $this->input->post('kd_jenistanah'));
    //   $data = array(
    //     'nama_jenistanah' => $this->input->post('nama_jenistanah'),
    //     //'foto_jenistanah' => $image['file_name'],
    //     //  'password_jenistanah'=>md5($this->input->post('password_jenistanah'))
    //   );
    //   $this->Mglobal->editdata('tbl_jenistanah', $where, $data);
    //   $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //           <span aria-hidden="true">&times;</span>
    //         </button>
    //       </div>');
    //   redirect(base_url('admin/master/jenistanah/'));
    // }
  }
}
