<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') !== TRUE) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['data'] = $this->M_user->Get()->result();
        $data['pages'] = 'pages/user';
        $this->load->view('template', $data);
    }

    public function edit($email)
    {
        $data['data'] = $this->M_user->Get($email)->row();
        $data['pages'] = 'pages/user_edit';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['pages'] = 'pages/user_add';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();

        // Data lainnya
        $data = [
            'email' => $post['email'],
            'nama' => $post['nama'],
            'telepon' => $post['telepon'],
            'aktif' => $post['aktif'],
        ];

        // Jika password diisi, hash password baru
        if (!empty($post['password'])) {
            $data['password'] = md5($post['password']);
        }

        // Jika ada berkas foto yang diunggah
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');
                $data['foto'] = $foto;
            } else {
                // Jika gagal mengunggah berkas, tampilkan pesan kesalahan
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect(base_url('admin/user'));
            }
        }

        $this->M_user->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('admin/user'));
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_user' => $post['id_user'],
            'email' => $post['email'],
            'nama' => $post['nama'],
            'telepon' => $post['telepon'],
            'aktif' => $post['aktif'],
        ];

        // Hash password
        $data['password'] = md5($post['password']);

        // Periksa apakah ada berkas yang diunggah
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');
                $data['foto'] = $foto;
            } else {
                // Jika gagal mengunggah berkas, tampilkan pesan kesalahan
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect(base_url('admin/user'));
            }
        }

        $this->M_user->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('admin/user'));
    }

    public function delete($email)
    {
        $this->M_user->Deleted($email);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        redirect(base_url('admin/user'));
    }

    public function detail($id_user)
    {
        $this->load->model('M_user');
        $detail = $this->M_user->detail_data($id_user);
        $data['detail'] = $detail;

        $data['data'] = $this->M_user->Get($id_user)->row();
        $data['pages'] = 'pages/detail';
        $this->load->view('template', $data);
    }
}
