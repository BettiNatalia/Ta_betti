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
// tampilan data tabel yang sudah join
        $data['data'] = $this->db->query("SELECT * FROM tb_user a INNER JOIN tb_role b ON a.role_id = b.id_role")->result();
        $data['pages'] = 'pages/user';
        $this->load->view('template', $data);
    }

// function edit
    public function edit($id_user)
    {
        $data['data'] = $this->M_user->Get($id_user)->row();
// hanya data role saja yang di tambahkan sendiri karena data role data dari menu role
        $data['role'] = $this->db->get('tb_role')->result();
        $data['pages'] = 'pages/user_edit';
        $this->load->view('template', $data);
    }

// function add
    public function add()
    {
        $data['pages'] = 'pages/user_add';
// baris ini menambahkan data role karena data role dari menu role
        $data['role'] = $this->db->get('tb_role')->result();
        $this->load->view('template', $data);
    }

// function update
    public function update()
    {
        $post = $this->input->post();

        $email = $this->input->post('email');
        $nama = $this->input->post('nama');
        $telepon = $this->input->post('telepon');
        $aktif = $this->input->post('aktif');
        $role_id = $this->input->post('role');

// id ini role_id pada tabel di database
        $id = $this->input->post('where');

// Jika ada berkas foto yang diunggah
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');
                $data = [
                    'foto' => $foto,
                    'email' => $email,
                    'nama' => $nama,
                    'telepon' => $telepon,
                    'aktif' => $aktif,
                    'role_id' => $role_id
                ]; 
                $this->db->update('tb_user',$data, array("id_user" => $id));
                $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
                redirect(base_url('admin/user'));
            } else {
                // Jika gagal mengunggah berkas, tampilkan pesan kesalahan
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect(base_url('admin/user'));
            }
        }else{
            $data = [
                'email' => $email,
                'nama' => $nama,
                'telepon' => $telepon,
                'aktif' => $aktif,
                'role_id' => $role_id
            ]; 
            $this->db->update('tb_user',$data, array("id_user" => $id));
            $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
            redirect(base_url('admin/user'));
        }
    }

// function create dari function hingga save redirect
    public function create()
    {
        $post = $this->input->post();
        $data = [
            'email' => $post['email'],
            'nama' => $post['nama'],
            'telepon' => $post['telepon'],
            'aktif' => $post['aktif'],
            'role_id' => $post['role']
        ];

        // Hash password
        // Hash password dengan bcrypt
if (!empty($post['password'])) {
    $data['password'] = password_hash($post['password'], PASSWORD_BCRYPT);
}


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

// function delete
    public function delete($email)
    {
        $this->M_user->Deleted($email);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        redirect(base_url('admin/user'));
    }

// function detail
    public function detail($id_user)
    {
        $this->load->model('M_user');
        $detail = $this->M_user->detail_data($id_user);
        $data['detail'] = $detail;

        $data['data'] = $this->M_user->Get($id_user)->row();
        $data['pages'] = 'pages/detail';
        $this->load->view('template', $data);
    }

// membuat function baru yaitu print
    public function print()
    {
        // selanjutnya buat variabel data [data], ambil function di model M_user yang untuk menampilkan semua data yaitu Get, selanjutnya ada result yang akan membuat perulangan
        // karena result di M_user tidak ada
        $data['data'] = $this->M_user->Get()->result();
        // selanjutnya ngeload ke view
        $this->load->view('pages/print_user', $data);
    } 
}