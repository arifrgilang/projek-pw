<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function view($page = 'homepage'){
        $this->load->view('template/header');
        $this->load->view('pages/'.$page);
        $this->load->view('template/footer');
    }

    public function orderpage(){
        $this->load->view('template/header');
        $this->load->view('pages/orderpage');
        $this->load->view('template/footer');
    }

    public function checkpage(){
        $kodePesanan = $this->input->post('kodPes');

        $data['status'] = $this->m_admin->get_admin_data('pesanan','kodePesanan', $kodePesanan);

        $this->load->view('template/header');
        $this->load->view('pages/checkpage', $data);
        $this->load->view('template/footer');
    }

    public function order(){
        $dataPemesan = array(
            'namaPemesan' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'notelp' => $this->input->post('no_telp'),
        );
        // Buat insert ke tabel PEMESAN
        $this->db->insert('pemesan', $dataPemesan);
        
        ////
        
        $this->db->select('kodePesanan');
        $this->db->from('pemesan');
        $this->db->where('notelp', $this->input->post('no_telp'));

        $kodePemesan = $this->db->get()->row_array();

        $dataPesanan = array(
            'kodePesanan' => $kodePemesan['kodePesanan'],
            'kodeCover' => $this->input->post('je_co'),
            'kodeJenis' => $this->input->post('je_ke'),
            'kodeUkuran' => $this->input->post('uk_ke'),
            'kodeKurir' => $this->input->post('kurir'),
            'jumlahHalaman' => $this->input->post('jumlah_halaman'),
            'hargaTotal' => $this->input->post('hargahidden'),
            'statusPesanan' => 'waitlist',
            'link_file' => $this->input->post('link_file')
        );
        // Buat insert ke tabel PESANAN
        $this->db->insert('pesanan', $dataPesanan);

        $data['datauser'] = $dataPemesan;
        $data['dataorder'] = $dataPesanan; 
        
        $this->load->view('template/header');
        $this->load->view('pages/order', $data);
        $this->load->view('template/footer');

    }
}
