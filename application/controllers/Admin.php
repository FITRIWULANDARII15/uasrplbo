<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Admin SPV';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Ini berhasil login, selamat datang admin ' . $data['admin']['nama'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);        
        $this->load->view('templates/footer');
    }

    public function datapendaftaran(){
        $data['title'] = 'Data Pendaftaran Vaksinasi Pertama';
        $data['pvaksin1'] = $this->db->get('pendaftaran_vaksin1')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/datapendaftaran', $data);        
        $this->load->view('templates/footer');

    }
    public function datapendaftaran2(){
        $data['title'] = 'Data Pendaftaran Vaksinasi Kedua';
        $data['pvaksin2'] = $this->db->get('pendaftaran_vaksin2')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/datapendaftaran2', $data);        
        $this->load->view('templates/footer');

    }

    public function tentukanjadwal(){
        $data['title'] = 'Atur Jadwal Vaksinasi';
        $this->Admin_model->aturJadwal();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/datapendaftaran', $data);        
        $this->load->view('templates/footer');
    }
}
