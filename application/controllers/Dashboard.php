<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); 
        if($this->session->userdata('login')!=TRUE && $this->session->userdata('username') == "")
        {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['pages']='pages/dashboard';
        $this->load->view('template',$data);
    }

   

   
}
//end of dashboard.php