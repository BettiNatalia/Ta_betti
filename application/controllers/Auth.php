<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user', 'user');
    }

    public function index()
    {
        // Jika pengguna sudah login, alihkan ke halaman dashboard
        if ($this->session->userdata('login')) {
            redirect(base_url('dashboard'));
        }

        $this->load->view('login');
    }

    public function checklogin()
    {
        $postData = $this->input->post();

        $data = [
            'email' => $postData['email'],
            'password' => md5($postData['password'])
        ];

        $checkUser = $this->user->getuserlogin($data);

        if ($checkUser) {
            // Jika login berhasil, simpan informasi pengguna dalam sesi
            $sessionData = [
                'username' => $checkUser->nama,
                'email' => $checkUser->email,
                'login' => TRUE
            ];
            $this->session->set_userdata($sessionData);

            redirect(base_url('dashboard'));
        } else {
            // Jika login gagal, tampilkan pesan kesalahan dan alihkan ke halaman login
            $this->session->set_flashdata('error', 'Username dan Password Salah');
            redirect(base_url());
        }
    }

    public function logout()
    {
        // Hapus data sesi dan alihkan ke halaman login
        $this->session->unset_userdata(['username', 'email', 'login']);
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
