<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->helper('url');
        // if ($this->session->userdata('status') <> 'login') {
        // 	redirect(base_url('login'));
        // }
        //Codeigniter : Write Less Do More
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        $tglsekarang = date('Y-m-d');
        $data['lowongan'] = $this->db->query("select * from tbl_lowongan where tgl_tutup >='$tglsekarang'")->result();
        // $data['bidang'] = $this->Mglobal->tampilkandata('tbl_bidang');
        // $data['lowongan'] = $this->Mglobal->tampilkandata('tbl_lowongan');
        $data['judul'] = 'Daftar Akun';
        $data['kalimat'] = 'Isika Identitas Pendaftar';
        $this->load->view('depan/temp/v_head', $data);
        $this->load->view('depan/temp/v_header');
        // $this->load->view('depan/temp/v_navbar');
        $this->load->view('depan/v_lowongan');
        $this->load->view('depan/temp/v_footer');
    }
    public function detail($id)
    {
        $tglsekarang = date('Y-m-d');
        $data['lowongan'] = $this->db->query("select * from tbl_lowongan where kd_lowonganen='$id'")->result();
        // $data['bidang'] = $this->Mglobal->tampilkandata('tbl_bidang');
        // $data['lowongan'] = $this->Mglobal->tampilkandata('tbl_lowongan');
        $data['judul'] = 'Daftar Akun';
        $data['kalimat'] = 'Isika Identitas Pendaftar';
        $this->load->view('depan/temp/v_head', $data);
        $this->load->view('depan/temp/v_header');
        // $this->load->view('depan/temp/v_navbar');
        $this->load->view('depan/v_lowongandetail');
        $this->load->view('depan/temp/v_footer');
    }
    public function lamar()
    {
        $data = array(
            'kd_seleksi' => $this->Mglobal->kode_otomatis('kd_seleksi', 'tbl_seleksi', 'SEL'),
            'kd_lowongan' => $this->input->post('kd_lowongan'),
            'tgl_seleksi' => date('Y-m-d'),

        );
        $this->Mglobal->tambahdata($data, 'tbl_seleksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect(base_url('depan/daftar'));
    }
}
