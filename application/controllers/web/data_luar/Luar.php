<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Luar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_luar','', TRUE);
    }

    public function index()
    {
        $data['data'] = $this->M_luar->Get();
        $data['pages'] = 'web/tbs_luar/luar';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['suplier_list'] = $this->M_luar->GetIdSuplier();
        $data['pages'] = 'web/tbs_luar/add_luar';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        if (isset($post['suplier']) && !empty($post['suplier'])) {
        $data = [
            'id_tbs' => $post['id_tbs'],
            'asal_tbs' => $post['asal_tbs'],
            'janjang' => $post['janjang'],
            'bruto' => $post['bruto'],
            'potong' => $post['potong'],
            'netto' => $post['netto']
        ];
        $this->M_luar->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_luar/luar'));
    } else {
        $this->session->set_flashdata('danger', 'Kolom "suplier" harus diisi.');
        redirect(base_url('web/data_luar/luar'));
    }
}

    public function edit($id_luar)
    {
        $data['data'] = $this->M_luar->GetIdLuar($id_luar);
        $data['suplier_list'] = $this->M_luar->GetIdSuplier(); 
        $data['pages'] = 'web/tbs_luar/edit_luar';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_tbs' => $post['id_tbs'],
            'asal_tbs' => $post['asal_tbs'],
            'janjang' => $post['janjang'],
            'bruto' => $post['bruto'],
            'potong' => $post['potong'],
            'netto' => $post['netto']
        ];
        $this->M_luar->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_luar/luar'));

    }

    function delete($id_luar)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_luar->Deleted($id_luar);
        redirect(base_url('web/data_luar/luar'));
    }


}