<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function view($page = 'homepage'){
        if($page != 'checkpage'){
            $this->load->view('template/header');
            $this->load->view('pages/'.$page);
            $this->load->view('template/footer');
        } else {
            redirect('/pages/checkpage');
        }
    }

    public function checkpage(){
        $kodePesanan = $this->input->post('kodPes');

        $data['status'] = $this->m_admin->get_admin_data('pesanan','kodePesanan', $kodePesanan);

        $this->load->view('template/header');
        $this->load->view('pages/checkpage', $data);
        $this->load->view('template/footer');
    }
}
