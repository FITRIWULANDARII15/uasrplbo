<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Pendaftaran Vaksin Pertama';
        //$this->load->view('templates/auth_header', $data);
        $this->load->view('pendaftaran/daftarvaksin', $data);
        //$this->load->view('templates/auth_footer');

    }

    public function daftarvaksin()
    {
        $this->form_validation->set_rules('noktp', 'No. KTP', 'required|trim|exact_length[16]', array(
            'required' => 'No. KTP harus di isi!',
            'exact_length' => 'No. KTP tidak sesuai format (16 digit)!'
        ));
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', array(
            'required' => 'Nama harus di isi!'
        ));
        $this->form_validation->set_rules('nohp', 'No. HP', 'required|trim|min_length[10]|max_length[13]', array(
            'required' => 'No. HP harus di isi!',
            'min_length' => 'No. HP tidak sesuai (terlalu pendek)!',
            'max_length' => 'No. HP tidak sesuai (terlalu panjang)!'
        ));
        $this->form_validation->set_rules('nowhatsapp', 'No. Whatsapp', 'required|trim|min_length[10]|max_length[13]', array(
            'required' => 'No. HP harus di isi!',
            'min_length' => 'No. HP tidak sesuai (terlalu pendek)!',
            'max_length' => 'No. HP tidak sesuai (terlalu panjang)!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', array(
            'required' => 'Alamat harus di isi!'
        ));
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', array(
            'required' => 'Pekerjaan harus di isi!'
        ));
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|trim', array(
            'required' => 'Tanggal lahir harus di isi!'
        ));

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Vaksin Pertama';
            //$this->load->view('templates/auth_header', $data);
            $this->load->view('pendaftaran/daftarvaksin', $data);
            //$this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'tgl' => $this->input->post('tgl'),
                'nohp' => htmlspecialchars($this->input->post('nohp')),
                'noktp' => htmlspecialchars($this->input->post('noktp')),
                'nowhatsapp' => htmlspecialchars($this->input->post('nowhatsapp')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan')),
                'jadwal' => time()
            ];

            $this->db->insert('pendaftaran_vaksin1', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Pendaftaran Vaksin Pertama Berhasil, silahkan cek jadwal vaksinasi</div>'
            );
            redirect('auth');
        }
        //echo 'proses insert';
    }
    public function daftarvaksin2()
    {
        $this->form_validation->set_rules('noktp', 'No. KTP', 'required|trim|exact_length[16]', array(
            'required' => 'No. KTP harus di isi!',
            'exact_length' => 'No. KTP tidak sesuai format (16 digit)!'
        ));
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', array(
            'required' => 'Nama harus di isi!'
        ));
        $this->form_validation->set_rules('nohp', 'No. HP', 'required|trim|min_length[10]|max_length[13]', array(
            'required' => 'No. HP harus di isi!',
            'min_length' => 'No. HP tidak sesuai (terlalu pendek)!',
            'max_length' => 'No. HP tidak sesuai (terlalu panjang)!'
        ));
        $this->form_validation->set_rules('nowhatsapp', 'No. Whatsapp', 'required|trim|min_length[10]|max_length[13]', array(
            'required' => 'No. HP harus di isi!',
            'min_length' => 'No. HP tidak sesuai (terlalu pendek)!',
            'max_length' => 'No. HP tidak sesuai (terlalu panjang)!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', array(
            'required' => 'Alamat harus di isi!'
        ));
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', array(
            'required' => 'Pekerjaan harus di isi!'
        ));
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|trim', array(
            'required' => 'Tanggal lahir harus di isi!'
        ));
        $this->form_validation->set_rules('jenisvaksin', 'Jenis Vaksin', 'required|trim', array(
            'required' => 'Jenis vaksin harus di isi!'
        ));

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Vaksin Kedua';
            //$this->load->view('templates/auth_header', $data);
            $this->load->view('pendaftaran/daftarvaksin2', $data);
            //$this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'tgl' => $this->input->post('tgl'),
                'nohp' => htmlspecialchars($this->input->post('nohp')),
                'noktp' => htmlspecialchars($this->input->post('noktp')),
                'nowhatsapp' => htmlspecialchars($this->input->post('nowhatsapp')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan')),
                'jenisvaksin' => htmlspecialchars($this->input->post('jenisvaksin')),
                'jadwal' => time()
            ];

            $this->db->insert('pendaftaran_vaksin2', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Pendaftaran Vaksin Kedua Berhasil, silahkan cek jadwal vaksinasi</div>'
            );
            redirect('auth');
        }
    }
}
