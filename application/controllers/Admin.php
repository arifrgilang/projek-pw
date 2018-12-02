<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index(){
        if(!$this->session->logged_in){
            redirect('/login');
        }else{
            $this->load->view('admin/admin_header');
            $this->load->view('admin/adminpage');
            $this->load->view('template/footer');
        }
        
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }
}
