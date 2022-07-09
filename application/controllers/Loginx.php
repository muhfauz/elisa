<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MProject');
    }

    public function index()
    {
        $this->load->view('vlogin');
    }
    function LogOut()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != false) {
            $where = array('username_pegawai' => $username, 'password_pegawai' => md5($password));

            $data = $this->MProject->tampilkandatasingle1('pegawai', $where);
            $d = $this->MProject->tampilkandatasingle1('pegawai', $where)->row();
            $cek = $data->num_rows();

            if ($cek > 0) {
                if ($d->hak_akses == 'admin') {
                    $session = array('id' => $d->id_pegawai, 'nama' => $d->nama_pegawai, 'status' => 'login', 'posisi' => 'admin');
                    $this->session->set_userdata($session);
                    redirect(base_url('administrator/home'));
                } else {
                    $session = array('id' => $d->id_pegawai, 'nama' => $d->nama_pegawai, 'password_pegawai' => $d->password_pegawai, 'status' => 'login', 'posisi' => 'pegawai');
                    $this->session->set_userdata($session);
                    redirect(base_url('administrator/home'));
                }
            } else {
                $where = array('username_RT' => $username, 'password_RT' => md5($password));
                $x = md5($password);
                $data = $this->MProject->tampilkandatasingle1('rt', $where);
                $d = $this->MProject->tampilkandatasingle1('rt', $where)->row();
                $cek = $data->num_rows();




                if ($cek > 0) {
                    $session = array('id' => $d->id_RT, 'nama' => $d->ketua_RT, 'password_rt' => $d->password_RT, 'status' => 'login', 'posisi' => 'rt');
                    $this->session->set_userdata($session);
                    redirect(base_url('administrator/home'));
                } else {
                    $where = array('username_RW' => $username, 'password_RW' => md5($password));
                    $dt = $this->MProject->tampilkandatasingle1('rw', $where);
                    $hasil = $this->MProject->tampilkandatasingle1('rw', $where)->row();
                    $proses = $dt->num_rows();

                    if ($proses > 0) {
                        $session = array('id' => $hasil->id_RW, 'nama' => $hasil->ketua_RW, 'password_rw' => $hasil->password_RW, 'status' => 'login', 'posisi' => 'rw');
                        $this->session->set_userdata($session);
                        redirect(base_url('administrator/home'));
                    } else {
                        $where = array('username_penduduk' => $username, 'password_penduduk' => md5($password));
                        $dt = $this->MProject->tampilkandatasingle1('penduduk', $where);
                        $hasil = $this->MProject->tampilkandatasingle1('penduduk', $where)->row();
                        $proses = $dt->num_rows();

                        if ($proses > 0) {
                            $session = array('id' => $hasil->NIK, 'nama' => $hasil->nama_penduduk, 'password_penduduk' => $hasil->password_penduduk, 'status' => 'login');
                            $this->session->set_userdata($session);
                            redirect(base_url('administrator/home'));
                        } else {
                            // $this->session->set_flashdata('pesan', 'Anda Belum mengisi username atau password');
                            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Login gagal!</strong> Username atau password yang Anda masukkan salah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
                            $this->load->view('vlogin');
                        }
                    }
                }
            }
        } else {
            $this->session->set_flashdata('pesan', 'Anda Belum mengisi username atau password');
            $this->load->view('vlogin');
        }
    }
}
