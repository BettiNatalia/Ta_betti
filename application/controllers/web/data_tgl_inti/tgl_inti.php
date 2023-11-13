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

    // isi parameter edit sesuai yang di view yaitu (divisi)
    public function edit($divisi)
    {
        $data['data'] = $this->M_inti->GetIdInti($divisi);
        $data['divisi_list'] = $this->M_inti->GetIdDivisi();
        $data['pages'] = 'web/tbs_inti/edit_inti';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'divisi' => $post['divisi'],
            'janjang' => $post['janjang'],
            'tonase' => $post['tonase'],
            'BJR' => $post['BJR']
        ];
        $this->M_inti->Updated($data, $post['where']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_inti/inti'));
    }

    // buat secara bebas parameter delete sesuai data pada view yaitu ($divisi)
    function delete($divisi)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        // inisialisasi deleted fungsi mysql di terapkan yaitu divisi
        $this->M_inti->Deleted($divisi);
        redirect(base_url('web/data_inti/inti'));
    }

    // buat function baru yaitu print
    public function print()
    {
        // buat variabel data, selanjutnya tambahkan model M_inti pada m_inti ambil function yang menampilkan seluruh data yaitu Get
        // setelah get tidak ada result karena result sudah ada di m_inti bagian function get
        $data['data'] = $this->M_inti->Get();
        // selanjutnya menampilkan ke view print, selanjutnya ditambahkan variabel yaitu = $data
        $this->load->view('web/tbs_inti/print_inti', $data);
    } 
}
