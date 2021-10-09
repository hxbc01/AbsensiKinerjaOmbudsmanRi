<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/header.php', $data);
            $this->load->view('Auth/login.php');
            $this->load->view('Auth/footer.php');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $nip = $this->input->post('nip');
        $password = md5($this->input->post('password'));
        $where = array(
            'nip' => $nip,
            'password' => $password
        );
        if ($cek = $this->Auth_model->cek_login("users", $where)->num_rows()) {
            if ($cek > 0) {
                $data_session = array(
                    'nip' => $nip,
                    'status' => "users"
                );

                $this->session->set_userdata($data_session);

                redirect(base_url("Home/index"));
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> NIP atau password yang anda masukan salah! </div>');
                redirect(base_url("Auth/index"));
            }
        } else {
            $cek = $this->Auth_model->cek_login("admin", $where)->num_rows();
            if ($cek > 0) {

                $data_session = array(
                    'nip' => $nip,
                    'status' => "admin"
                );

                $this->session->set_userdata($data_session);

                redirect(base_url("admin/Home_admin/index"));
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  NIP atau password yang anda masukan salah! </div>');
                redirect(base_url("Auth/index"));
            }
        }
    }
    public function register()
    {

        $this->form_validation->set_rules('name', 'Name', 'required', [
            'required'        => 'Name is required',
        ]);
        $this->form_validation->set_rules('nip', 'Nip', 'required', [
            'required'        => 'NIP is required',
            'valid_nip'       => 'NIP not valid'
        ]);
        $this->form_validation->set_rules('bidang', 'Bidang', 'required', [
            'required'        => 'Bidang is required',
            'valid_bidang'    => 'Bidang not valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required'        => 'Password is required'
        ]);
        $this->form_validation->set_rules('password2', 'Password confirmation', 'required|trim|matches[password]', [
            'required'        => 'Password confirmation is required',
            'matches'        => 'Password confirmation not same with password'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/header.php');
            $this->load->view('Auth/register.php');
            $this->load->view('Auth/footer.php');
        } else {
            $data =  [
                'name'        => $this->input->post('name'),
                'nip'         => $this->input->post('nip'),
                'bidang'      => $this->input->post('bidang'),
                'foto'        => 'default.png',
                'password'    => md5($this->input->post('password')),

            ];
            $this->Auth_model->register($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Berhasil Ditambahkan! </div>');
            redirect(base_url('admin/Home_admin/user'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("auth/index");
    }
}
