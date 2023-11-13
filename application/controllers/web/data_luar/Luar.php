<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Luar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_luar');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        
    }

    public function index()
    {
        $data['data'] = $this->M_luar->Get()->result();
        $data['pages'] = 'web/tbs_luar/luar';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['pages'] = 'web/tbs_luar/add_luar';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            
            'tanggal' => $post['tanggal'] // Tanggal dan waktu otomatis saat data disimpan
        ];
        $this->M_luar->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_luar/luar'));
    }

    public function edit($id_tanggal)
    {
        $data['data'] = $this->M_luar->Get($id_tanggal)->row();
        $data['pages'] = 'web/tbs_luar/edit_luar';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            
            'tanggal' => $post['tanggal']
        ];
        $this->M_luar->Updated($data, $post['id_tanggal']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_luar/luar'));
    }

    public function delete($id_tanggal)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_luar->Deleted($id_tanggal);
// redirect itu ke controllernya
        redirect(base_url('web/data_luar/luar'));
    }

    function tbs_luar() 
    {
    // data [data] digunakan unuk menghubungkan atau membuat relasi antar tabel yaitu ketika tampil data tbs_luar kemudian ngambil data dari supplier berdasarkan baris tanggal 
      $data['data'] = $this->db->query("SELECT * FROM tbs_luar a INNER JOIN tb_suplier b ON a.asal_tbs=b.id_suplier WHERE a.id_tanggal='".$this->uri->segment(5)."'")->result();
      $data['id'] = $this->uri->segment(5);
      $data['pages'] = 'web/tbs_luar/luar_next/luar_bisa';
      $this->load->view('template', $data);
    }

    public function add_tbs_luar()
    {


        $data['pages'] = 'web/tbs_luar/luar_next/add_luar_bisa';
        $data['id'] = $this->uri->segment(5);
        $data['suplier_list'] = $this->db->get('tb_suplier')->result_array();
        $this->load->view('template', $data);
        //  var_dump($data); die();
    }

    public function create_tbs_luar()
    {
        $post = $this->input->post();

        if (isset($post['id_tanggal']) && !empty($post['id_tanggal'])) {

        // $this->load->view('template', $data);
            $data = [
                'asal_tbs' => $post['asal_tbs'],
                'janjang' => $post['janjang'],
                'bruto' => $post['bruto'],
                'potong' => $post['potong'],
                'netto' => $post['netto'],
                'id_tanggal' => $post['id_tanggal']
            ];

            // $this->M_inti->Save($data);
            $this->db->insert('tbs_luar',$data);
            $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
            redirect(base_url('web/data_luar/luar/tbs_luar/'.$this->input->post('id_tanggal').''));
        } else {
            $this->session->set_flashdata('danger', 'Kolom "divisi" harus diisi.');
            redirect(base_url('web/data_luar/luar/add_tbs_luar'.$this->input->post('id_tanggal').''));
        }
    }

    public function edit_tbs_luar()
    {
        $data['pages'] = 'web/tbs_luar/luar_next/edit_luar_bisa';
        $data['data'] = $this->db->query("SELECT * FROM tb_tgl_luar a INNER JOIN tbs_luar b ON a.id_tanggal=b.id_tanggal 
        INNER JOIN tb_suplier c ON b.asal_tbs=c.id_suplier
        WHERE b.id_luar='".$this->uri->segment(5)."'")->row_array();
        $data['suplier_list'] = $this->db->get('tb_suplier')->result_array();
        $data['id'] = $this->uri->segment(6);
        $this->load->view('template', $data);
        //  var_dump($id); die();
    }

    public function update_tbs_luar()
    {
        $post = $this->input->post();
        $id = $this->input->post('id_luar');
        $data = [
                'asal_tbs' => $post['asal_tbs'],
                'janjang' => $post['janjang'],
                'bruto' => $post['bruto'],
                'potong' => $post['potong'],
                'netto' => $post['netto']
        ];
        // $this->M_inti->Updated($data, $post['where']);
        $this->db->update('tbs_luar', $data, array('id_luar' => $id));
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_luar/luar/tbs_luar/'.$this->input->post('id_tanggal').''));
    }

    function delete_tbs_luar($id_luar)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        // inisialisasi deleted fungsi mysql di terapkan yaitu id_inti
        $id = $this->uri->segment(6);
        $this->M_luar->Deleted_tb($id_luar);
        redirect(base_url('web/data_luar/luar/tbs_luar/'.$id.''));
    }

}
?>
