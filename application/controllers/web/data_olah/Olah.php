<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Olah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_olah');
    }

    public function index()
    {
        $data['data'] = $this->M_olah->Get()->result();
        $data['pages'] = 'web/olah_tbs/olah';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['pages'] = 'web/olah_tbs/add_olah';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_asisten' => $post['id_asisten'],
            'nama_asisten' => $post['nama_asisten'],
            'shift' => $post['shift'],
            'lori_olah' => $post['lori_olah'],
            'tanggal' => date('Y-m-d H:i:s') // Tanggal dan waktu otomatis saat data disimpan
        ];
        $this->M_olah->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_olah/olah'));
    }

    public function edit($id_asisten)
    {
        $data['data'] = $this->M_olah->Get($id_asisten)->row();
        $data['pages'] = 'web/olah_tbs/edit_olah';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'id_asisten' => $post['id_asisten'],
            'nama_asisten' => $post['nama_asisten'],
            'shift' => $post['shift'],
            'lori_olah' => $post['lori_olah'],
            'tanggal' => $post['tanggal']
        ];
        $this->M_olah->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_olah/olah'));
    }

    public function delete($id_asisten)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_olah->Deleted($id_asisten);
        redirect(base_url('web/data_olah/olah'));
    }
}
?>
