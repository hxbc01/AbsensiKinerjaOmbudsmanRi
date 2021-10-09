<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model

        if ($this->session->userdata('status') != "admin") {
            redirect(base_url("Auth/index"));
        }
    }

    public function index()
    {

        $data['judul'] = 'Home admin';
        $data['users'] = $this->db->get_where('admin', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar_admin.php', $data);
        $this->load->view('admin/index.php');
        $this->load->view('template/footer.php');
    }

    public function user()
    {
        $data['judul'] = 'Kelola account';
        $data['asisten'] = $this->db->get('users')->result_array();
        $data['users'] = $this->db->get_where('admin', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar_admin.php', $data);
        $this->load->view('admin/user.php', $data);
        $this->load->view('template/footer.php');
    }

    public function delete($nip)
    {
        $this->db->get_where('users', ['nip' => $nip])->row_array();
        $this->db->delete('users', ['nip' => $nip]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Berhasil DiHapus! </div>');
        redirect('admin/Home_admin/user');
    }

    public function presensi()
    {
        $data['judul'] = 'Rekap Laporan Kehadiran';
        $data['presensi'] = $this->db->get('presensi')->result_array();
        $data['users'] = $this->db->get_where('admin', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar_admin.php', $data);
        $this->load->view('admin/rekap_kehadiran.php');
        $this->load->view('template/footer.php');
    }

    public function izin()
    {
        $data['judul'] = 'Rekap Laporan Perizinan';
        $data['izin'] = $this->db->get('izin')->result_array();
        $data['users'] = $this->db->get_where('admin', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar_admin.php', $data);
        $this->load->view('admin/rekap_izin.php');
        $this->load->view('template/footer.php');
    }

    public function reset()
    {
        $this->db->truncate('presensi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Dihapus! </div>');
        redirect('admin/Home_admin/presensi');
    }

    public function reset_izin()
    {
        $this->db->truncate('izin');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Dihapus! </div>');
        redirect('admin/Home_admin/izin');
    }
}
