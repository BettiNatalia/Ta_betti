<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        
        $this->load->model('M_inti');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        
    }

    public function index()
    {
        $data['data'] = $this->M_inti->Get()->result();
        $data['pages'] = 'web/tbs_inti/inti';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['pages'] = 'web/tbs_inti/add_inti';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            
            'tanggal' => $post['tanggal'] // Tanggal dan waktu otomatis saat data disimpan
        ];
        $this->M_inti->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_inti/inti'));
    }

    public function edit($id_tanggal)
    {
        $data['data'] = $this->M_inti->Get($id_tanggal)->row();
        $data['pages'] = 'web/tbs_inti/edit_inti';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            
            'tanggal' => $post['tanggal']
        ];
        $this->M_inti->Updated($data, $post['id_tanggal']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_inti/inti'));
    }

    public function delete($id_tanggal)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_inti->Deleted($id_tanggal);
        redirect(base_url('web/data_inti/inti'));
    }

    function tbs_inti() 
    {
        $data['data'] = $this->db->query("SELECT * FROM tb_inti a INNER JOIN tb_divisi b ON a.divisi=b.id_divisi WHERE a.id_tanggal='".$this->uri->segment(5)."'")->result();
        $data['id'] = $this->uri->segment(5);
      $data['pages'] = 'web/tbs_inti/inti_next/inti_bisa';
      $this->load->view('template', $data);
    }

    public function add_tbs_inti()
    {
        $data['pages'] = 'web/tbs_inti/inti_next/add_inti_bisa';
        $data['id'] = $this->uri->segment(5);
        $data['divisi_list'] = $this->db->get('tb_divisi')->result_array();
        $this->load->view('template', $data);
        // var_dump($data); die();
    }

    public function create_tbs_inti()
    {
        $post = $this->input->post();

        if (isset($post['divisi']) && !empty($post['divisi'])) {
            $data = [
                'divisi' => $post['divisi'],
                'janjang' => $post['janjang'],
                'tonase' => $post['tonase'],
                'BJR' => $post['BJR'],
                'id_tanggal' => $post['id_tanggal']
            ];

            // $this->M_inti->Save($data);
            $this->db->insert('tb_inti',$data);
            $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
            redirect(base_url('web/data_inti/inti/tbs_inti/'.$this->input->post('id_tanggal').''));
        } else {
            $this->session->set_flashdata('danger', 'Kolom "divisi" harus diisi.');
            redirect(base_url('web/data_inti/inti/add_tbs_inti'.$this->input->post('id_tanggal').''));
        }
    }

    public function edit_tbs_inti()
    {
        $data['pages'] = 'web/tbs_inti/inti_next/edit_inti_bisa';
        $data['data'] = $this->db->query("SELECT * FROM tb_tgl_inti a INNER JOIN tb_inti b ON a.id_tanggal=b.id_tanggal 
        INNER JOIN tb_divisi c ON b.divisi=c.id_divisi
        WHERE b.id_inti='".$this->uri->segment(5)."'")->row_array();
        $data['divisi_list'] = $this->db->get('tb_divisi')->result_array();
        $data['id'] = $this->uri->segment(6);
        $this->load->view('template', $data);
        // var_dump($id); die();
    }

    public function update_tbs_inti()
    {
        $post = $this->input->post();
        $id = $this->input->post('id_inti');
        $data = [
            'divisi' => $post['divisi'],
            'janjang' => $post['janjang'],
            'tonase' => $post['tonase'],
            'BJR' => $post['BJR']
        ];
        // $this->M_inti->Updated($data, $post['where']);
        $this->db->update('tb_inti', $data, array('id_inti' => $id));
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_inti/inti/tbs_inti/'.$this->input->post('id_tanggal').''));
    }

    function delete_tbs_inti($id_inti)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        // inisialisasi deleted fungsi mysql di terapkan yaitu id_inti
        $id = $this->uri->segment(6);
        $this->M_inti->Deleted_tb($id_inti);
        redirect(base_url('web/data_inti/inti/tbs_inti/'.$id.''));
    }

}
?>
