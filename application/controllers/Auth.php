<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Sistem Pendaftaran Vaksinasi';
        //$this->load->view('templates/auth_header', $data);
        $this->load->view('auth/index', $data);
        //$this->load->view('templates/auth_footer');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

        //jika akun admin ada
        if ($admin) {
            //jika akun admin aktif
            if ($admin['email'] == true) {
                //cek password
                if (password_verify($password, $admin['password'])) {
                    $data = [
                        'email' => $admin['email'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">Password Salah</div>'
                    );
                    redirect('auth/login');
                }
            }else{
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">Akun tidak terdaftar</div>'
                );
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Login Gagal. Pastikan email dan password benar</div>'
            );
            redirect('auth/login');
        }
    }

    public function daftaradmin()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Akun Admin';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/daftaradmin');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'date_created' => time()
            ];

            $this->db->insert('admin', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Pendaftaran Berhasil</div>'
            );
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> Logout Berhasil</div>'
        );
        redirect('auth/login');
    }
}
