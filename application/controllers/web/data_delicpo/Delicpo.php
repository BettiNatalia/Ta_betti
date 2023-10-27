<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delicpo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_delicpo');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_delicpo');
    }

    public function index()
    {
        $data['data'] = $this->M_delicpo->Get()->result();
        $data['pages'] = 'web/delivery_cpo/delivery_cpo';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/delivery_cpo/add_delicpo';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_delicpo' => $post['id_delicpo'],
            'delivery' => $post['delivery'],
            'via' => $post['via'],
            'do_no' => $post['do_no'],
            'quantity' => $post['quantity']
            
        ];
        $this->M_delicpo->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_delicpo/delicpo'));
    }

    public function edit($id_delicpo)
    {
        $data['data'] = $this->M_delicpo->Get($id_delicpo)->row();
        $data['pages'] = 'web/delivery_cpo/edit_delicpo';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_delicpo' => $post['id_delicpo'],
            'delivery' => $post['delivery'],
            'via' => $post['via'],
            'do_no' => $post['do_no'],
            'quantity' => $post['quantity']
            
        ];
        $this->M_delicpo->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_delicpo/delicpo'));

    }

    function delete($id_delicpo)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_delicpo->Deleted($id_delicpo);
        redirect(base_url('web/data_delicpo/delicpo'));
    }


}