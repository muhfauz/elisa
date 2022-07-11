<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasilseleksi extends CI_Controller
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
    $data['x1'] = 'Hasil Seleksi';
    $data['x2'] = 'Hasil';
    $data['x3'] = 'Hasil';
    $data['judul_bawah'] = 'Daftar Santri Mendaftar';
    // $data['x4']='Data kegiatan Sahabat Optik';
    $where = array('kd_santri' => $this->session->userdata('kd_santri'));
    $data['santri'] = $this->Mglobal->tampilkandatasingle('tbl_santri', $where);
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pendaftaran/v_hasilseleksi');
    $this->load->view('admin/temp/v_footer');
  }
  // function baru()
  // {
  //   $data['x1'] = 'Data Pendaftaran';
  //   $data['x2'] = 'Pendaftaran';
  //   $data['x3'] = 'Pendaftaran';
  //   $data['judul_bawah'] = 'Daftar Santri Baru Mendaftar';
  //   // $data['x4']='Data kegiatan Sahabat Optik';
  //   $where = array('status_daftar' => '');
  //   $data['santri'] = $this->Mglobal->tampilkandatasingle('tbl_santri', $where);
  //   $this->load->view('admin/temp/v_header', $data);
  //   $this->load->view('admin/temp/v_atas');
  //   $this->load->view('admin/temp/v_sidebar');
  //   $this->load->view('admin/pendaftaran/v_pendaftaran');
  //   $this->load->view('admin/temp/v_footer');
  // }

  function diterima()
  {
    $data['x1'] = 'Data Pendaftaran';
    $data['x2'] = 'Pendaftaran';
    $data['x3'] = 'Pendaftaran';
    $data['judul_bawah'] = 'Daftar Santri Diterima';
    // $data['x4']='Data kegiatan Sahabat Optik';
    $where = array('status_daftar' => 'diterima');
    $data['santri'] = $this->Mglobal->tampilkandatasingle('tbl_santri', $where);
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pendaftaran/v_pendaftaran');
    $this->load->view('admin/temp/v_footer');
  }
  function ditolak()
  {
    $data['x1'] = 'Data Pendaftaran';
    $data['x2'] = 'Pendaftaran';
    $data['x3'] = 'Pendaftaran';
    $data['judul_bawah'] = 'Daftar Santri Ditolak';
    // $data['x4']='Data kegiatan Sahabat Optik';
    $where = array('status_daftar' => 'ditolak');
    $data['santri'] = $this->Mglobal->tampilkandatasingle('tbl_santri', $where);
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pendaftaran/v_pendaftaran');
    $this->load->view('admin/temp/v_footer');
  }

  function tambahkegiatan()
  {
    $data['x1'] = 'Deskripsi';
    $data['x2'] = 'Kegiatan';
    $data['x3'] = 'Tambah kegiatan Inventaris';
    $data['x4'] = 'Menambahkan Data kegiatan Inventaris Sahabat Optik';
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/deskripsi/kegiatan/vtambahkegiatan', $data);
    $this->load->view('adm/footer');
  }
  function aksitambahkegiatan()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_kegiatan', 'Nama kegiatan', 'required');
    //  $this->form_validation->set_rules('username_kegiatan', 'Username kegiatan', 'required');
    // $this->form_validation->set_rules('password_kegiatan', 'Password kegiatan', 'required');
    // if($this->form_validation->run()!=false)
    // {
    // $config['upload_path'] = './assets/toko/images/kegiatan/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_kegiatan_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_kegiatan')) {
    //   $image = $this->upload->data();
    $data = array(
      'kd_kegiatan' => $this->input->post('kd_kegiatan'),
      'hari_kegiatan' => $this->input->post('hari_kegiatan'),
      'jam_kegiatan' => $this->input->post('jam_kegiatan'),
      'nama_kegiatan' => $this->input->post('nama_kegiatan'),
      'keterangan_kegiatan' => $this->input->post('keterangan_kegiatan'),
      // 'foto_kegiatan' => $image['file_name'],
    );
    $this->Mglobal->tambahdata($data, 'tbl_kegiatan');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
    redirect(base_url('admin/deskripsi/kegiatan/'));
  }

  // else {
  //
  //  $this->load->view('kegiatan/temp/v_header');
  // $this->load->view('kegiatan/temp/v_atas');
  // $this->load->view('kegiatan/temp/v_sidebar');
  // $this->load->view('kegiatan/deskripsi/kegiatan/v_kegiatan');
  // $this->load->view('kegiatan/temp/v_footer');
  // }
  // }
  function tolaksantri()
  {
    $where = array('kd_santri' => $this->input->post('kd_santri'));
    $data = array(
      'alasan_terima' => $this->input->post('alasan_terima'),
      'status_daftar' => 'ditolak',
      'status_santri' => 'selesai',
      'tgl_diterima' => date('Y-m-d'),
    );
    $this->Mglobal->editdata('tbl_santri', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Santri Ditolak!</strong> Data berhasil diupdate di database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/pendaftaran/pendaftaran/'));
  }
  function terimasantri()
  {
    $where = array('kd_santri' => $this->input->post('kd_santri'));
    $data = array(
      'alasan_terima' => $this->input->post('alasan_terima'),
      'status_daftar' => 'diterima',
      'status_santri' => 'selesai',
      'tgl_diterima' => date('Y-m-d'),
    );
    $this->Mglobal->editdata('tbl_santri', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Santri Diterima!</strong> Data berhasil diupdate di database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/pendaftaran/pendaftaran/'));
  }
  function editkegiatan($id)
  {
    $data['x1'] = 'deskripsi';
    $data['x2'] = 'kegiatan';
    $data['x3'] = 'Edit kegiatan Inventaris';
    $data['x4'] = 'Mengedit Data kegiatan Inventaris Sahabat Optik';
    $where = array('kd_kegiatan' => $id);
    $data['kegiatan'] = $this->Mglobal->tampilkandatasingle('tbl_kegiatan', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/deskripsi/kegiatan/veditkegiatan', $data);
    $this->load->view('adm/footer');
  }
  function aksieditkegiatan()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_kegiatan', 'Nama kegiatan', 'required');
    //  $this->form_validation->set_rules('username_kegiatan', 'Username kegiatan', 'required');
    //   $this->form_validation->set_rules('password_kegiatan', 'Password kegiatan', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    // $config['upload_path'] = './assets/toko/images/kegiatan/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_kegiatan_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_kegiatan')) {
    // $image = $this->upload->data();
    $where = array('kd_kegiatan' => $this->input->post('kd_kegiatan'));
    $data = array(
      'hari_kegiatan' => $this->input->post('hari_kegiatan'),
      'jam_kegiatan' => $this->input->post('jam_kegiatan'),
      'nama_kegiatan' => $this->input->post('nama_kegiatan'),
      'keterangan_kegiatan' => $this->input->post('keterangan_kegiatan'),
      // 'foto_kegiatan' => $image['file_name'],
      //  'password_kegiatan'=>md5($this->input->post('password_kegiatan'))
    );
    $this->Mglobal->editdata('tbl_kegiatan', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/deskripsi/kegiatan/'));
    //  }
    //  else {

    //    $this->load->view('adm/header');
    //    $this->load->view('adm/sidebar');
    //    $this->load->view('adm/deskripsi/kegiatan/vtambahkegiatan');
    //    $this->load->view('adm/footer');
    //  }
    // } else {
    //   $where = array('kd_kegiatan' => $this->input->post('kd_kegiatan'));
    //   $data = array(
    //     'nama_kegiatan' => $this->input->post('nama_kegiatan'),
    //     //'foto_kegiatan' => $image['file_name'],
    //     //  'password_kegiatan'=>md5($this->input->post('password_kegiatan'))
    //   );
    //   $this->Mglobal->editdata('tbl_kegiatan', $where, $data);
    //   $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //           <span aria-hidden="true">&times;</span>
    //         </button>
    //       </div>');
    //   redirect(base_url('admin/deskripsi/kegiatan/'));
    // }
  }
  function cetakbukti()
  {
    $this->load->library('pdf');
    $data['biaya'] = $this->db->query('select besar_biaya from tbl_pendaftaran')->row()->besar_biaya;
    $data['nama_surat'] = 'HASIL SELEKSI';
    $data['nama_perush'] = $this->db->query('select nama_perush from tbl_perusahaan')->row()->nama_perush;
    $data['alamat_perush'] = $this->db->query('select alamat_perush from tbl_perusahaan')->row()->alamat_perush;
    $data['telepon_perush'] = $this->db->query('select telepon_perush from tbl_perusahaan')->row()->telepon_perush;
    $data['email_perush'] = $this->db->query('select email_perush from tbl_perusahaan')->row()->email_perush;
    // $data['nama_kepaladesa'] = $this->db->query('select nama_kepaladesa from tbl_desa')->row()->nama_kepaladesa;
    // $data['nama_kecamatan'] = $this->db->query('select kecamatan_desa from tbl_desa')->row()->kecamatan_desa;
    // $data['nama_kabupaten'] = $this->db->query('select kabupaten_desa from tbl_desa')->row()->kabupaten_desa;
    // $data['alamat_desa'] = $this->db->query('select alamat_desa from tbl_desa')->row()->alamat_desa;
    // $data['nama_propinsi'] = $this->db->query('select propinsi_desa from tbl_desa')->row()->propinsi_desa;
    $kd_santri = $this->session->userdata('kd_santri');
    $data['santri'] = $this->db->query("select * from tbl_santri where kd_santri='$kd_santri'")->result();

    // $data['admin'] = $this->Mglobal->tampilkandata('tbl_admin');
    // $data['perush'] = $this->Mglobal->tampilkandata('tbl_perusahaan');

    $this->pdf->setPaper('A4', 'portrait');
    $this->pdf->filename = "laporansik.pdf";
    $this->pdf->load_view('admin/pendaftaran/v_pdfcetakhasil', $data);

    // nama file pdf yang di hasilkan
  }
}