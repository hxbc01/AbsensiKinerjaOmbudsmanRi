<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');


        if ($this->session->userdata('status') != "users") {
            redirect(base_url("Auth/index"));
        }
    }

    public function index()
    {
        $data['judul'] = 'Profile';
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar.php', $data);
        $this->load->view('beranda/profile/profile.php', $data);
        $this->load->view('template/footer.php');
    }

    public function edit()
    {
        $data['judul'] = 'Edit Profile';
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header.php', $data);
            $this->load->view('template/topbar.php', $data);
            $this->load->view('beranda/profile/edit.php', $data);
            $this->load->view('template/footer.php');
        } else {
            $name = $this->input->post('name');
            $nip = $this->input->post('nip');

            //jika ada gambar akan di upload 

            $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['allowed_types']  = 'jpg|png|jpeg|gif';
                $config['max_size']       = 2048;
                $config['upload_path'] = './assets/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    $old_image = $data['users']['foto'];
                    if ($old_image != 'default.png') {

                        unlink(FCPATH . '/assets/profile' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->db->set('name', $name);
            $this->db->where('nip', $nip);
            $this->db->update('users');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Profil Berhasil Diupdate! </div>');
            redirect('user/Profile/index');
        }
    }
}
