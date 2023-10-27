<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemcpo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_pemcpo');
    }

    public function index()
    // data view
    {
        $data['data'] = $this->M_pemvcpo->Get()->result();
        $data['pages'] = 'web/pemasaran_cpo/pemasaran_cpo';
        $this->load->view('template', $data);
    }

// data view
    function add()
    {
        $data['pages'] = 'web/pemasaran_cpo/add_pemasaran_cpo';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_pemasaran' => $post['id_pemasaran'],
            'konsumen' => $post['konsumen'],
            'via' => $post['via'],
            'do_no' => $post['do_no'],
            'quantity' => $post['quantity'],
            'pem_hi' => $post['pem_hi'],
            'sd_hi' => $post['sd_hi'],
            'sisa_do' => $post['sisa_do']
            
        ];
        $this->M_pemcpo->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_pemcpo/pemcpo'));
    }

    public function edit($id_pemasaran)
    // data view
    {
        $data['data'] = $this->M_pemcpo->Get($id_pemasaran)->row();
        $data['pages'] = 'web/pemasaran_cpo/edit_pemasaran_cpo';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_pemasaran' => $post['id_pemasaran'],
            'konsumen' => $post['konsumen'],
            'via' => $post['via'],
            'do_no' => $post['do_no'],
            'quantity' => $post['quantity'],
            'pem_hi' => $post['pem_hi'],
            'sd_hi' => $post['sd_hi'],
            'sisa_do' => $post['sisa_do']
            
        ];
        $this->M_pemcpo->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_pemcpo/pemcpo'));

    }

    function delete($id_pemasaran)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_pemcpo->Deleted($id_pemasaran);
        redirect(base_url('web/data_pemcpo/pemcpo'));
    }


}