<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Depan extends CI_Controller
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
		// $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush")->result();
		// $data['bidang'] = $this->Mglobal->tampilkandata('tbl_bidang');
		// $data['lowongan'] = $this->Mglobal->tampilkandata('tbl_lowongan');
		$this->load->view('depan/temp/v_head');
		$this->load->view('depan/temp/v_header');
		// $this->load->view('depan/temp/v_navbar');
		$this->load->view('depan/v_isi');
		$this->load->view('depan/temp/v_footer');
	}
	public function daftar()
	{
		// $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush")->result();
		// $data['bidang'] = $this->Mglobal->tampilkandata('tbl_bidang');
		// $data['lowongan'] = $this->Mglobal->tampilkandata('tbl_lowongan');
		$data['judul'] = 'Daftar Akun';
		$data['kalimat'] = 'Isika Identitas Pendaftar';
		$this->load->view('depan/temp/v_head', $data);
		$this->load->view('depan/temp/v_header');
		// $this->load->view('depan/temp/v_navbar');
		$this->load->view('depan/v_daftar');
		$this->load->view('depan/temp/v_footer');
	}
	public function post($id)
	{
		$data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->result();
		$data['lowonganall'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush")->result();
		$data['bidang'] = $this->Mglobal->tampilkandata('tbl_bidang');
		// $data['lowongan'] = $this->Mglobal->tampilkandata('tbl_lowongan');
		$data['nama_lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->nama_lowongan;
		$data['nama_perush'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->nama_perush;
		$data['kd_pos'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->kd_pos;
		$data['kab_perush'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->kab_perush;
		$data['prop_perush'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->prop_perush;
		$data['alamat_perush'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->alamat_perush;
		$data['detail_lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->detail_lowongan;
		$data['kd_lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->kd_lowongan;
		$data['tgl_post'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->tgl_post;
		$data['tgl_tutup'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->tgl_tutup;
		$data['jenis_lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->jenis_lowongan;
		$data['gambar_lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->row()->gambar_lowongan;
		$data['kdurl_lowongan'] = base_url('depan/post/') . $id;
		$this->load->view('depan/temp/v_headpost', $data);
		$this->load->view('depan/temp/v_header');
		// $this->load->view('depan/temp/v_navbar');
		// $this->load->view('depan/v_lowonganatas');
		$this->load->view('depan/v_lowongandetail');
		$this->load->view('depan/temp/v_footer');
	}
}
