<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_divisi');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_divisi');
    }

    public function index()
    {
        $data['data'] = $this->M_divisi->Get()->result();
        $data['pages'] = 'web/divisi/divisi';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/divisi/add_divisi';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_divisi' => $post['id_divisi'],
            'divisi' => $post['divisi']
            
        ];
        $this->M_divisi->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_divisi/divisi'));
    }

    public function edit($id_divisi)
    {
        $data['data'] = $this->M_divisi->Get($id_divisi)->row();
        $data['pages'] = 'web/divisi/edit_divisi';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_divisi' => $post['id_divisi'],
            'divisi' => $post['divisi']
            
        ];
        $this->M_divisi->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_divisi/divisi'));

    }

    function delete($id_divisi)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_divisi->Deleted($id_divisi);
        redirect(base_url('web/data_divisi/divisi'));
    }


}