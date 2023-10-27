<?php

class Mahasswa extends CI_Controller {  

    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Mahasswa_model');
    }
    


    public function index()
    {
        // $this->load->database(); digunakan untuk meload ke database tapi khusus method index saja kalau mau buat lagi haru sdibuat berulang - ulang untuk mengatasi 
        // buat public function _ _construct(); $this->load-> database kalau banyak controller butuh database.
        $data['judul'] = 'Daftar Mahasiswa';

        $data['mahasswa'] = $this->Mahasswa_model->getAllMahasswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasswa/index', $data);
        $this->load->view('templates/footer');
    } 
}