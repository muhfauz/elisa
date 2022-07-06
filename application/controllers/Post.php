<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
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
	public function index($id)
	{
		$data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_bidang B, tbl_perusahaan P where L.kd_bidang=B.kd_bidang and L.kd_perush=P.kd_perush and L.kdurl_lowongan='$id'")->result();
		$data['bidang'] = $this->Mglobal->tampilkandata('tbl_bidang');
		// $data['lowongan'] = $this->Mglobal->tampilkandata('tbl_lowongan');
		$this->load->view('depan/temp/v_head', $data);
		$this->load->view('depan/temp/v_loader');
		$this->load->view('depan/temp/v_navbar');
		// $this->load->view('depan/v_banner');
		// $this->load->view('depan/v_bidang');
		$this->load->view('depan/v_lowongandetail');
		// $this->load->view('admin/temp/v_sidebar');
		// $this->load->view('depan/v_depan');
		$this->load->view('depan/temp/v_footer');
	}
}
