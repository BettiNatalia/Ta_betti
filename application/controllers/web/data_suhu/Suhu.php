<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suhu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


// ambil model sesuai yang digunakan
        $this->load->model('M_suhu');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

       
    }

    public function index()
    {
        $data['data'] = $this->M_suhu->Get()->result();
// tambahkan load ke view 
        $data['pages'] = 'web/suhu/suhu';
        $this->load->view('template', $data);
    }

    function add()
    {
// tambahkan load ke view
        $data['pages'] = 'web/suhu/add_suhu';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
        
            'suhu' => $post['suhu'],
            'BJ' => $post['BJ']
            
        ];
        $this->M_suhu->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
// redirect itu ke controller
        redirect(base_url('web/data_suhu/suhu'));
    }

// parameter edit (id_suhu) ini sesuai dengan parameter edit di view
    public function edit($id_suhu)
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
           
            'suhu' => $post['suhu'],
            'BJ' => $post['BJ']
            
        ];
        // where diganti menjadi id_role sebagai keyword
        $this->M_suhu->Updated($data, $post['id_suhu']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
// redirect ke controller
        redirect(base_url('web/data_suhu/suhu'));

    }

    function delete($id_suhu)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_suhu->Deleted($id_suhu);
// redirect ke controller
        redirect(base_url('web/data_suhu/suhu'));
    }


}