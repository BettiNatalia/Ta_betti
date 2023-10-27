<?php 

class Dataku extends CI_Controller {

    public function index(){
        $data['nama'] = "Niken Astriz Laguna";
        $data['nim'] = "202113023";
        $data['kelas'] = "TIF 2B";
        $data['usia'] = "19 Tahun";
        $data['ig'] = "nnnikennn";
        $this->load->view('biodata',$data);
    }
}