<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tankicpo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


// ambil model sesuai yang digunakan
        $this->load->model('M_tankicpo');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

       
    }

    public function index()
    {
        $data['data'] = $this->M_tankicpo->Get()->result();
// tambahkan load ke view 
        $data['pages'] = 'web/tanki_cpo/tanki_cpo';
        $this->load->view('template', $data);
    }

    function add()
    {
// tambahkan load ke view
        $data['pages'] = 'web/tanki_cpo/add_tanki_cpo';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
        
            'ukuran' => $post['ukuran'],
            'kapasitas' => $post['kapasitas']
            
        ];
        $this->M_tankicpo->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
// redirect itu ke controller
        redirect(base_url('web/data_tankicpo/tankicpo'));
    }

    public function edit($id_tcpo)
    {
        $data['data'] = $this->M_tankicpo->Get($id_tcpo)->row();
// tambahkan ke load view
        $data['pages'] = 'web/tanki_cpo/edit_tanki_cpo';
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
        $this->M_tankicpo->Updated($data, $post['id_tcpo']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
// redirect ke controller
        redirect(base_url('web/data_tankicpo/tankicpo'));

    }

    function delete($id_tcpo)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_tankicpo->Deleted($id_tcpo);
// redirect ke controller
        redirect(base_url('web/data_tankicpo/tankicpo'));
    }


}