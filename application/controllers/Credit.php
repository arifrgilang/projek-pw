<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credit extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('credit/creditpage');
        $this->load->view('template/footer');
    }
}
