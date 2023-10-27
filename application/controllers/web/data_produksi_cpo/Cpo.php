<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cpo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_procpo');
    }

    public function index()
    {
        $data['data'] = $this->M_procpo->Get()->result();
        $data['pages'] = 'web/produksi_cpo/produksi_cpo';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/produksi_cpo/add_produksi_cpo';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_asisten_pemasaran' => $post['id_asisten_pemasaran'],
            'nama_asisten' => $post['nama_asisten'],
            'ukuran_tank' => $post['ukuran_tank'],
            'tinggi' => $post['tinggi'],
            'volume' => $post['volume'],
            'suhu' => $post['suhu'],
            'bj_suhu' => $post['bj_suhu'],
            'stok' => $post['stok'],
            'cpo_hi' => $post['cpo_hi'],
            'total_cpo' => $post['total_cpo']
            
        ];
        $this->M_procpo->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_produksi_cpo/cpo'));
    }

    public function edit($id_asisten_pemasaran)
    {
        $data['data'] = $this->M_procpo->Get($id_asisten_pemasaran)->row();
        $data['pages'] = 'web/produksi_cpo/edit_produksi_cpo';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_asisten_pemasaran' => $post['id_asisten_pemasaran'],
            'nama_asisten' => $post['nama_asisten'],
            'ukuran_tank' => $post['ukuran_tank'],
            'tinggi' => $post['tinggi'],
            'volume' => $post['volume'],
            'suhu' => $post['suhu'],
            'bj_suhu' => $post['bj_suhu'],
            'stok' => $post['stok'],
            'cpo_hi' => $post['cpo_hi'],
            'total_cpo' => $post['total_cpo']
            
        ];
        $this->M_procpo->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_produksi_cpo/cpo'));

    }

    function delete($id_asisten_pemasaran)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_procpo->Deleted($id_asisten_pemasaran);
        redirect(base_url('web/data_produksi_cpo/cpo'));
    }


}