<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shift extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        // ambil model sesuai yang digunakan
        $this->load->model('M_shift');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

       
    }

    public function index()
    {
        $data['data'] = $this->M_shift->Get()->result();
        $data['pages'] = 'web/shift/shift';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/shift/add_shift';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
        
            'shift' => $post['shift']
            
        ];
        $this->M_shift->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_shift/shift'));
    }

    public function edit($id_shift)
    {
        $data['data'] = $this->M_shift->Get($id_shift)->row();
        $data['pages'] = 'web/shift/edit_shift';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
           
            'shift' => $post['shift']
            
        ];
        // where diganti menjadi id_role sebagai keyword
        $this->M_shift->Updated($data, $post['id_shift']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_shift/shift'));

    }

    function delete($id_shift)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_shift->Deleted($id_shift);
        redirect(base_url('web/data_shift/shift'));
    }


}