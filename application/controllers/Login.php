<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index(){
        if($this->session->logged_in){
            redirect('/admin');
        }else{
            $this->load->view('template/header');
            $this->load->view('admin/loginpage');
            $this->load->view('template/footer');
        }
    }

    public function cek_login(){
        $password = $this->input->post('password');
        $cek = $this->m_admin->get_admin_data('admin','password',$password);
        //checking npm
        if($cek->num_rows()>0){
            echo "Login Berhasil...";
            $ses_data = array(
                'username' => 'admin',
                'logged_in' => TRUE
            );
            $this->session->set_userdata($ses_data);
            redirect('/admin');
        } else {
            echo "Password salah";
            redirect('/login');
        }
        
    }
}
