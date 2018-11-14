<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    function index(){
        $this->load->view('template/header');
        $this->load->view('orderpage/orderpage');
        $this->load->view('template/footer');
    }
}
