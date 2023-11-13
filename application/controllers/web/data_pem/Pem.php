<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        
        $this->load->model('M_pem');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }

        
    }

    public function index()
    {
        $data['data'] = $this->M_pem->Get()->result();
        $data['pages'] = 'web/pempro/pem';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['pages'] = 'web/pempro/add_pem';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            
            'tanggal' => $post['tanggal'] // Tanggal dan waktu otomatis saat data disimpan
        ];
        $this->M_pem->Save($data);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
        redirect(base_url('web/data_pem/pem'));
    }

    public function edit($id_tanggal)
    {
        $data['data'] = $this->M_pem->Get($id_tanggal)->row();
        $data['pages'] = 'web/pempro/edit_pem';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            
            'tanggal' => $post['tanggal']
        ];
        $this->M_pem->Updated($data, $post['id_tanggal']);
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_pem/pem'));
    }

    public function delete($id_tanggal)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        $this->M_pem->Deleted($id_tanggal);
        redirect(base_url('web/data_pem/pem'));
    }

    function pem_pro() 
    {
        $data['data'] = $this->db->query("SELECT * FROM tb_pem a INNER JOIN tb_kernel b ON a.delivery=b.id_delikernel WHERE a.id_tanggal='".$this->uri->segment(5)."'")->result();
        $data['id'] = $this->uri->segment(5);
      $data['pages'] = 'web/pempro/pem_next/pem_bisa';
      $this->load->view('template', $data);
    }

    public function add_pem_pro()
    {
        $data['pages'] = 'web/pempro/pem_next/add_pem_bisa';
        $data['id'] = $this->uri->segment(5);
        $data['delivery_list'] = $this->db->get('tb_kernel')->result_array();
        $this->load->view('template', $data);
        // var_dump($data); die();
    }

    public function create_pem_pro()
    {
        $post = $this->input->post();

        if (isset($post['id_tanggal']) && !empty($post['id_tanggal'])) {
            $data = [
                'jenis_produksi' => $post['jenis_produksi'],
                'delivery' => $post['delivery'],
                'via' => $post['via'],
                'do_no' => $post['do_no'],
                'quantity' => $post['quantity'],
                'bulan_lalu' => $post['bulan_lalu'],
                'hi' => $post['hi'],
                'sd_hi' => $post['sd_hi'],
                'sisa_do' => $post['sisa_do'],
                'pemasaran_kemarin' => $post['pemasaran_kemarin'],
                'id_tanggal' => $post['id_tanggal']
            ];

            // $this->M_inti->Save($data);
            $this->db->insert('tb_pem',$data);
            $this->session->set_flashdata('primary', 'Data Berhasil Di Tambahkan');
            redirect(base_url('web/data_pem/pem/pem_pro/'.$this->input->post('id_tanggal').''));
        } else {
            $this->session->set_flashdata('danger', 'Kolom "divisi" harus diisi.');
            redirect(base_url('web/data_pem/pem/add_pem_pro'.$this->input->post('id_tanggal').''));
        }
    }

    public function edit_pem_pro()
    {
        $data['pages'] = 'web/pempro/pem_next/edit_pem_bisa';
        $data['data'] = $this->db->query("SELECT * FROM tb_tgl_pem a INNER JOIN tb_pem b ON a.id_tanggal=b.id_tanggal 
        INNER JOIN tb_kernel c ON b.delivery=c.id_delikernel
        WHERE b.id_pem='".$this->uri->segment(5)."'")->row_array();
        $data['delivery_list'] = $this->db->get('tb_kernel')->result_array();
        $data['id'] = $this->uri->segment(6);
        $this->load->view('template', $data);
        // var_dump($id); die();
    }

    public function update_pem_pro()
    {
        $post = $this->input->post();
        $id = $this->input->post('id_pem');
        $data = [
            'jenis_produksi' => $post['jenis_produksi'],
                'delivery' => $post['delivery'],
                'via' => $post['via'],
                'do_no' => $post['do_no'],
                'quantity' => $post['quantity'],
                'bulan_lalu' => $post['bulan_lalu'],
                'hi' => $post['hi'],
                'sd_hi' => $post['sd_hi'],
                'sisa_do' => $post['sisa_do'],
                'pemasaran_kemarin' => $post['pemasaran_kemarin']
        ];
        // $this->M_inti->Updated($data, $post['where']);
        $this->db->update('tb_pem', $data, array('id_pem' => $id));
        $this->session->set_flashdata('primary', 'Data Berhasil Di Update');
        redirect(base_url('web/data_pem/pem/pem_pro/'.$this->input->post('id_tanggal').''));
    }

    function delete_pem_pro($id_pem)
    {
        $this->session->set_flashdata('primary', 'Data Berhasil Di Hapus');
        // inisialisasi deleted fungsi mysql di terapkan yaitu id_inti
        $id = $this->uri->segment(6);
        $this->M_pem->Deleted_tb($id_pem);
        redirect(base_url('web/data_pem/pem/pem_pro/'.$id.''));
    }

}
?>
