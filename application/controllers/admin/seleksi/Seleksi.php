<?php
defined('BASEPATH') or exit('No direct script access allowed');

class seleksi extends CI_Controller
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

    $data['x1'] = 'Lowongan Aktif';
    $data['x2'] = 'Lowongan';
    $data['x3'] = 'Lowongan';
    $tgl_sekarang = date('Y-m-d');
    // $data['x4']='Data lowongan Sahabat Optik';
    $data['nama_perush'] = $this->db->query("select nama_perush from tbl_perusahaan")->row()->nama_perush;
    $data['lowongan'] = $this->db->query("select * from tbl_lowongan where tgl_tutup > '$tgl_sekarang'")->result();
    // $data['kategori'] = $this->Mglobal->tampilkandata('tbl_kategori');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/seleksi/v_seleksilowongan');
    $this->load->view('admin/temp/v_footer');
  }
  function arsip()
  {

    $data['x1'] = 'Lowongan';
    $data['x2'] = 'Lowongan';
    $data['x3'] = 'Lowongan';
    $tgl_sekarang = date('Y-m-d');
    // $data['x4']='Data lowongan Sahabat Optik';
    $data['nama_perush'] = $this->db->query("select nama_perush from tbl_perusahaan")->row()->nama_perush;
    $data['lowongan'] = $this->db->query("select * from tbl_lowongan where tgl_tutup <='$tgl_sekarang'")->result();
    // $data['kategori'] = $this->Mglobal->tampilkandata('tbl_kategori');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/seleksi/v_seleksilowongan');
    $this->load->view('admin/temp/v_footer');
  }
  function lihat()
  {

    $kd_lowongan = $this->input->post('kd_lowongan');
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
    $data['seleksi'] = $this->db->query("select * from tbl_seleksi where kd_lowongan='$kd_lowongan'")->result();
    // $data['kategori'] = $this->Mglobal->tampilkandata('tbl_kategori');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/seleksi/v_seleksi');
    $this->load->view('admin/temp/v_footer');
  }


  function diterima()
  {
    $data['x1'] = 'Data seleksi';
    $data['x2'] = 'seleksi';
    $data['x3'] = 'seleksi';
    $data['judul_bawah'] = 'Daftar Santri Diterima';
    // $data['x4']='Data kegiatan Sahabat Optik';
    $where = array('status_daftar' => 'diterima');
    $data['santri'] = $this->Mglobal->tampilkandatasingle('tbl_santri', $where);
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/seleksi/v_seleksi');
    $this->load->view('admin/temp/v_footer');
  }
  function ditolak()
  {
    $data['x1'] = 'Data seleksi';
    $data['x2'] = 'seleksi';
    $data['x3'] = 'seleksi';
    $data['judul_bawah'] = 'Daftar Santri Ditolak';
    // $data['x4']='Data kegiatan Sahabat Optik';
    $where = array('status_daftar' => 'ditolak');
    $data['santri'] = $this->Mglobal->tampilkandatasingle('tbl_santri', $where);
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/seleksi/v_seleksi');
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
    redirect(base_url('admin/seleksi/seleksi/'));
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
    redirect(base_url('admin/seleksi/seleksi/'));
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
}
