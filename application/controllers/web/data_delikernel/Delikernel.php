<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delikernel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_delikernel');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_delikernel');
    }

    public function index()
    {
        $data['data'] = $this->M_delikernel->Get()->result();
        $data['pages'] = 'web/delivery_kernel/delivery_kernel';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/delivery_kernel/add_delikernel';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_delikernel' => $post['id_delikernel'],
            'delivery' => $post['delivery'],
            'via' => $post['via'],
            'do_no' => $post['do_no'],
            'quantity' => $post['quantity']
            
        ];
        $this->M_delikernel->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_delikernel/delikernel'));
    }

    public function edit($id_delikernel)
    {
        $data['data'] = $this->M_delikernel->Get($id_delikernel)->row();
        $data['pages'] = 'web/delivery_kernel/edit_delikernel';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_delikernel' => $post['id_delikernel'],
            'delivery' => $post['delivery'],
            'via' => $post['via'],
            'do_no' => $post['do_no'],
            'quantity' => $post['quantity']
            
        ];
        $this->M_delikernel->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_delikernel/delikernel'));

    }

    function delete($id_delikernel)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_delikernel->Deleted($id_delikernel);
        redirect(base_url('web/data_delikernel/delikernel'));
    }


}