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
        $this->load->view('login');
        if ($this->session->userdata('login')) {
            redirect(base_url('dashboard'));
        }

        
    }

    public function checklogin()
    {
        $postData = $this->input->post();
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        if($user) {
            if($user['aktif'] == 'Y') {
                if(password_verify($password, $user['password'])){
                    $data = [
                        'username' => $user['nama'],
                        'email' => $user['email'],
                        'foto' => $user['foto'],
                        'login' => TRUE
                    ];
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1) {
                        redirect('dashboard');
                    }else{
                        redirect('');
                    }
                }else{
                    $this->session->set_flashdata('error', 'Password Salah');
                    redirect(base_url());
                }
            }else{
                $this->session->set_flashdata('error', 'Akun Anda Tidak Aktif');
                redirect(base_url());
            }
        }else{
            $this->session->set_flashdata('error', 'Akun Anda Tidak Terdaftar');
            redirect(base_url());
        }
        // $postData = $this->input->post();

        // $data = [
        //     'email' => $postData['email'],
        //     'password' => md5($postData['password'])
        // ];

        // $checkUser = $this->user->getuserlogin($data);

        // if ($checkUser) {
        //     $sessionData = [
        //         'username' => $checkUser->nama,
        //         'email' => $checkUser->email,
        //         'login' => TRUE
        //     ];
        //     $this->session->set_userdata($sessionData);

        //     redirect(base_url('dashboard'));
        // } else {
        //     $this->session->set_flashdata('error', 'Username dan Password Salah');
        //     redirect(base_url());
        // }
    }

    public function logout()
    {
        // Hapus data sesi dan alihkan ke halaman login
        $this->session->unset_userdata(['username', 'email', 'login']);
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
