<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('landingpage/homepage');
        $this->load->view('template/footer');
    }
}
