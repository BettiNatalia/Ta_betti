<?php

class Home extends CI_Controller {
    public function index($nama = ' ') //kirim data lewat url kemudian ditangkap oleh controller dan ditampilkan di view
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama; //jadi ini digunakan untuk mengirim data dari url 
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);//ke index
        $this->load->view('templates/footer');
    }
}