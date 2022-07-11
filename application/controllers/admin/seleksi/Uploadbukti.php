<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uploadbukti extends CI_Controller
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
    $data['x1'] = 'Upload Bukti Pendaftaran';
    $data['x2'] = 'Uploud Bukti';
    $data['x3'] = 'Uploud Bukti';
    // $data['x4']='Data Admin Sahabat Optik';
    $data['nama_perush'] = $this->db->query("select nama_perush from tbl_perusahaan")->row()->nama_perush;
    $where = array('kd_santri' => $this->session->userdata('kd_santri'));
    $data['santri'] = $this->Mglobal->tampilkandatasingle('tbl_santri', $where);
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pendaftaran/v_uploadbukti');
    $this->load->view('admin/temp/v_footer');
  }

  function aksieditperush()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
    //  $this->form_validation->set_rules('username_admin', 'Username Admin', 'required');
    //   $this->form_validation->set_rules('password_admin', 'Password Admin', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    $where = array('kd_perush' => $this->input->post('kd_perush'));
    $data = array(
      'nama_perush' => $this->input->post('nama_perush'),
      'alamat_perush' => $this->input->post('alamat_perush'),
      'tentang_perush' => $this->input->post('tentang_perush'),
      'telepon_perush' => $this->input->post('telepon_perush'),
      'email_perush' => $this->input->post('email_perush'),
      //  'password_admin'=>md5($this->input->post('password_admin'))
    );
    $this->Mglobal->editdata('tbl_perusahaan', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/pengaturan/perush/'));
    //  }
    //  else {

    //    $this->load->view('adm/header');
    //    $this->load->view('adm/sidebar');
    //    $this->load->view('adm/master/admin/vtambahadmin');
    //    $this->load->view('adm/footer');
    //  }
  }
  function aksieditfoto()
  {

    //Form Validasi jika kosong
    // $this->form_validation->set_rules('logo', 'logo', 'required');
    // $this->form_validation->set_rules('oleh', 'Oleh', 'required');
    $config['upload_path'] = './assets/img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';
    $config['file_name'] = 'fotosantri' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('foto_santri')) {
      $image = $this->upload->data();
      $where = array('kd_santri' => $this->input->post('kd_santri'));
      $data = array(
        //'nama_logo'=>$image['file_name']
        'foto_santri' => $image['file_name']
      );


      $this->Mglobal->editdata('tbl_santri', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
      redirect(base_url('admin/pendaftaran/uploadbukti/'));
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Edit Data Gagal!</strong> Anda tidak pilih gambar atau format file bukan jpg/png/jpeg.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
      redirect(base_url('admin/pendaftaran/uploadbukti/'));
    }
  }
  function aksieditakte()
  {

    //Form Validasi jika kosong
    // $this->form_validation->set_rules('logo', 'logo', 'required');
    // $this->form_validation->set_rules('oleh', 'Oleh', 'required');
    $config['upload_path'] = './assets/img/';
    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
    $config['max_size'] = '2048';
    $config['file_name'] = 'aktesantri' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('akte_santri')) {
      $image = $this->upload->data();
      $where = array('kd_santri' => $this->input->post('kd_santri'));
      $data = array(
        //'nama_logo'=>$image['file_name']
        'akte_santri' => $image['file_name']
      );


      $this->Mglobal->editdata('tbl_santri', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Upload Data Sukses!</strong> Data berhasil disimpan ke database.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
      redirect(base_url('admin/pendaftaran/uploadbukti/'));
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Uplad Akte Gagal!</strong> Anda tidak pilih gambar atau format file bukan jpg/png/jpeg.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
      redirect(base_url('admin/pendaftaran/uploadbukti/'));
    }
  }
  function aksieditkk()
  {

    //Form Validasi jika kosong
    // $this->form_validation->set_rules('logo', 'logo', 'required');
    // $this->form_validation->set_rules('oleh', 'Oleh', 'required');
    $config['upload_path'] = './assets/img/';
    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
    $config['max_size'] = '2048';
    $config['file_name'] = 'kksantri' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('kk_santri')) {
      $image = $this->upload->data();
      $where = array('kd_santri' => $this->input->post('kd_santri'));
      $data = array(
        //'nama_logo'=>$image['file_name']
        'kk_santri' => $image['file_name']
      );


      $this->Mglobal->editdata('tbl_santri', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Upload Data Sukses!</strong> Data berhasil disimpan ke database.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
      redirect(base_url('admin/pendaftaran/uploadbukti/'));
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Upload Data Gagal!</strong> Anda tidak pilih gambar atau format file bukan jpg/png/jpeg.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
      redirect(base_url('admin/pendaftaran/uploadbukti/'));
    }
  }
}
