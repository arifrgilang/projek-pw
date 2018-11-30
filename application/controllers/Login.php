<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function index(){
        $this->load->view('admin/admin_header');
        $this->load->view('admin/loginpage');
        $this->load->view('template/footer');
    }
}
