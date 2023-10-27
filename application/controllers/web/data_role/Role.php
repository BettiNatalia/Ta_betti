<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_role');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_role');
    }

    public function index()
    {
        $data['data'] = $this->M_role->Get()->result();
        $data['pages'] = 'web/role/role';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/role/add_role';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_role' => $post['id_role'],
            'jabatan' => $post['jabatan']
            
        ];
        $this->M_role->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_role/role'));
    }

    public function edit($id_role)
    {
        $data['data'] = $this->M_role->Get($id_role)->row();
        $data['pages'] = 'web/role/edit_role';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_role' => $post['id_role'],
            'jabatan' => $post['jabatan']
            
        ];
        $this->M_role->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_role/role'));

    }

    function delete($id_role)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_role->Deleted($id_role);
        redirect(base_url('web/data_role/role'));
    }


}