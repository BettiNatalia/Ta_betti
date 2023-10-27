<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kernel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        $this->load->model('M_prokernel');
    }

    public function index()
    {
        $data['data'] = $this->M_prokernel->Get()->result();
        $data['pages'] = 'web/produksi_kernel/produksi_kernel';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'web/produksi_kernel/add_produksi_kernel';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_produksi' => $post['id_produksi'],
            'id_asisten_pemasaran' => $post['id_asisten_pemasaran'],
            'nama_asisten' => $post['nama_asisten'],
            'ukuran' => $post['ukuran'],
            'stok' => $post['stok'],
            'kernel_hi' => $post['kernel_hi'],
            'total_kernel' => $post['total_kernel']
            
        ];
        $this->M_prokernel->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_produksi_kernel/kernel'));
    }

    public function edit($id_produksi)
    {
        $data['data'] = $this->M_prokernel->Get($id_produksi)->row();
        $data['pages'] = 'web/produksi_kernel/edit_produksi_kernel';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_produksi' => $post['id_produksi'],
            'id_asisten_pemasaran' => $post['id_asisten_pemasaran'],
            'nama_asisten' => $post['nama_asisten'],
            'ukuran' => $post['ukuran'],
            'stok' => $post['stok'],
            'kernel_hi' => $post['kernel_hi'],
            'total_kernel' => $post['total_kernel']
            
        ];
        $this->M_prokernel->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_produksi_kernel/kernel'));

    }

    function delete($id_produksi)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_prokernel->Deleted($id_produksi);
        redirect(base_url('web/data_produksi_kernel/kernel'));
    }


}