<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suplier extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_suplier');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_suplier');
    }

    public function index()
    {
        $data['data'] = $this->M_suplier->Get()->result();
        $data['pages'] = 'web/suplier/suplier';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/suplier/add_suplier';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_suplier' => $post['id_suplier'],
            'suplier' => $post['suplier']
            
        ];
        $this->M_suplier->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_suplier/suplier'));
    }

    public function edit($id_suplier)
    {
        $data['data'] = $this->M_suplier->Get($id_suplier)->row();
        $data['pages'] = 'web/suplier/edit_suplier';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_suplier' => $post['id_suplier'],
            'suplier' => $post['suplier']
            
        ];
        $this->M_suplier->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_suplier/suplier'));

    }

    function delete($id_suplier)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_suplier->Deleted($id_suplier);
        redirect(base_url('web/data_suplier/suplier'));
    }


}