<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');


        if ($this->session->userdata('status') != "admin") {
            redirect(base_url("Auth/index"));
        }
    }

    public function index()
    {
        $data['judul'] = 'Profile Admin';
        $data['users'] = $this->db->get_where('admin', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar_admin.php', $data);
        $this->load->view('admin/profile/profile.php', $data);
        $this->load->view('template/footer.php');
    }
    public function edit()
    {
        $data['judul'] = 'Edit Profile Admin';
        $data['users'] = $this->db->get_where('admin', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar_admin.php', $data);
        $this->load->view('admin/profile/edit.php', $data);
        $this->load->view('template/footer.php');
    }

    public function password_update()
    {
        $this->form_validation->set_rules('password', 'New password', 'required', [
            'required' => 'New password is required.',
        ]);
        $this->form_validation->set_rules('password2', 'Password confirmation', 'required|trim|matches[password]', [
            'required' => 'Password confirmation is required.',
            'matches'  => 'Password confirmation not match.'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'change Profile Admin';
            $data['users'] = $this->db->get_where('admin', ['nip' =>
            $this->session->userdata('nip')])->row_array();
            $this->load->view('template/header.php', $data);
            $this->load->view('template/topbar_admin.php', $data);
            $this->load->view('admin/profile/edit.php', $data);
            $this->load->view('template/footer.php');
        } else {

            $id = $this->session->userdata('nip');
            $data = [
                'password' => md5($this->input->post('password')),
            ];

            $this->db->update('admin', $data, ['nip' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password Berhasil di update! </div>');

            redirect(base_url('admin/Profile_admin/edit'));
        }
    }
}
