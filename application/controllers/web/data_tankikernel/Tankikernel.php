<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tankikernel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


// ambil model sesuai yang digunakan
        $this->load->model('M_tankikernel');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

       
    }

    public function index()
    {
        $data['data'] = $this->M_tankikernel->Get()->result();
// tambahkan load ke view 
        $data['pages'] = 'web/tanki_kernel/tanki_kernel';
        $this->load->view('template', $data);
    }

    function add()
    {
// tambahkan load ke view
        $data['pages'] = 'web/tanki_kernel/add_tanki_kernel';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
        
            'ukuran' => $post['ukuran'],
            'kapasitas' => $post['kapasitas']
            
        ];
        $this->M_tankikernel->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
// redirect itu ke controller
        redirect(base_url('web/data_tankikernel/tankikernel'));
    }

    public function edit($id_tkernel)
    {
        $data['data'] = $this->M_tankikernel->Get($id_tkernel)->row();
// tambahkan ke load view
        $data['pages'] = 'web/tanki_kernel/edit_tanki_kernel';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
           
            'ukuran' => $post['ukuran'],
            'kapasitas' => $post['kapasitas']
            
        ];
        // where diganti menjadi id_role sebagai keyword
        $this->M_tankikernel->Updated($data, $post['id_tkernel']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
// redirect ke controller
        redirect(base_url('web/data_tankikernel/tankikernel'));

    }

    function delete($id_tkernel)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_tankikernel->Deleted($id_tkernel);
// redirect ke controller
        redirect(base_url('web/data_tankikernel/tankickernel'));
    }


}