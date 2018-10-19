<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('pricepage/pricepage');
        $this->load->view('template/footer');
    }
}
