<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('checkpage/checkpage');
        $this->load->view('template/footer');
    }
}
