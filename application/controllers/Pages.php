<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function view($page = 'homepage'){
        $this->load->view('template/header');
        $this->load->view('mainweb/'.$page);
        $this->load->view('template/footer');
    }
}
