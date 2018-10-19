<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('faqpage/faqpage');
        $this->load->view('template/footer');
    }
}
