<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index(){
        if(!$this->session->logged_in){
            redirect('/login');
        }else{
            $data['waitlist'] = $this->m_admin->get_admin_data('pesanan','statusPesanan','waitlist');
            $data['declined'] = $this->m_admin->get_admin_data('pesanan','statusPesanan','declined');
            if(empty($data['waitlist'])){
                show_404();
            }
            $this->load->view('admin/admin_header');
            $this->load->view('admin/waitlist', $data);
            $this->load->view('template/footer');
        }
    }

    public function on_process(){
        if(!$this->session->logged_in){
            redirect('/login');
        }else{
            $data['onprocess'] = $this->m_admin->get_admin_data('pesanan','statusPesanan','onprocess');
            if(empty($data['onprocess'])){
                show_404();
            }
            $this->load->view('admin/admin_header');
            $this->load->view('admin/on_process', $data);
            $this->load->view('template/footer');
        }
    }

    public function finished(){
        if(!$this->session->logged_in){
            redirect('/login');
        }else{
            $data['finished'] = $this->m_admin->get_admin_data('pesanan','statusPesanan','finished');
            if(empty($data['finished'])){
                show_404();
            }
            $this->load->view('admin/admin_header');
            $this->load->view('admin/finished', $data);
            $this->load->view('template/footer');
        }
    }

    public function accept_order(){
        $kodePesanan = $this->input->post('kodePesanan');

        $data = array(
            'statusPesanan' => 'onprocess'
        );

        $this->db->where('kodePesanan', $kodePesanan);
        $this->db->update('pesanan', $data);
        redirect('/admin');
    }

    public function decline_order(){
        $kodePesanan = $this->input->post('kodePesanan');


        $data = array(
            'statusPesanan' => 'declined'
        );

        $this->db->where('kodePesanan', $kodePesanan);
        $this->db->update('pesanan', $data);
        redirect('/admin');

        // $this->db->where('kodePesanan', $kodePesanan);
        // $this->db->delete('pesanan');
        // redirect('/admin');
    }

    public function finish_order(){
        $kodePesanan = $this->input->post('kodePesanan');

        $data = array(
            'statusPesanan' => 'finished'
        );

        $this->db->where('kodePesanan', $kodePesanan);
        $this->db->update('pesanan', $data);
        redirect('/admin/on_process');
    }

    public function to_waitlist(){
        $kodePesanan = $this->input->post('kodePesanan');

        $data = array(
            'statusPesanan' => 'waitlist'
        );

        $this->db->where('kodePesanan', $kodePesanan);
        $this->db->update('pesanan', $data);
        redirect('/admin');
    }

    public function to_onprocess(){
        $kodePesanan = $this->input->post('kodePesanan');

        $data = array(
            'statusPesanan' => 'onprocess'
        );

        $this->db->where('kodePesanan', $kodePesanan);
        $this->db->update('pesanan', $data);
        redirect('/admin/on_process');
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }
}
