<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inti extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_user');
        if ($this->session->userdata('login') !== TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_inti', '', TRUE);
    }

    public function index()
    {
        $data['data'] = $this->M_inti->Get();
        $data['pages'] = 'web/tbs_inti/inti';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['divisi_list'] = $this->M_inti->GetIdDivisi();
        $data['pages'] = 'web/tbs_inti/add_inti';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();

        if (isset($post['divisi']) && !empty($post['divisi'])) {
            $data = [
                'id_inti' => $post['id_inti'],
                'divisi' => $post['divisi'],
                'janjang' => $post['janjang'],
                'tonase' => $post['tonase'],
                'BJR' => $post['BJR']
            ];

            $this->M_inti->Save($data);
            $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
            redirect(base_url('web/data_inti/inti'));
        } else {
            $this->session->set_flashdata('danger', 'Kolom "divisi" harus diisi.');
            redirect(base_url('web/data_inti/inti'));
        }
    }

    public function edit($id_inti)
    {
        $data['data'] = $this->M_inti->GetIdInti($id_inti);
        $data['divisi_list'] = $this->M_inti->GetIdDivisi();
        $data['pages'] = 'web/tbs_inti/edit_inti';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'id_inti' => $post['id_inti'],
            'divisi' => $post['divisi'],
            'janjang' => $post['janjang'],
            'tonase' => $post['tonase'],
            'BJR' => $post['BJR']
        ];
        $this->M_inti->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_inti/inti'));
    }

    function delete($id_inti)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_inti->Deleted($id_inti);
        redirect(base_url('web/data_inti/inti'));
    }
}
