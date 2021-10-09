<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model

        if ($this->session->userdata('status') != "users") {
            redirect(base_url("Auth/index"));
        }
    }

    public function index()
    {

        $data['judul'] = 'Home';
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar.php', $data);
        $this->load->view('beranda/index.php');
        $this->load->view('template/footer.php');
    }
    public function presensi()
    {
        $data['judul'] = 'presensi';
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar.php', $data);
        $this->load->view('beranda/absen/presensi.php', $data);
        $this->load->view('template/footer.php');
    }
    public function kehadiran()
    {
        $data['judul'] = 'Daftar kehadiran';
        $data['presensi'] = $this->db->get('presensi')->result_array();
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar.php', $data);
        $this->load->view('beranda/laporan_kehadiran.php', $data);
        $this->load->view('template/footer.php');
    }
    public function izin()
    {
        $data['judul'] = 'Perizinan';
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar.php', $data);
        $this->load->view('beranda/absen/izin.php', $data);
        $this->load->view('template/footer.php');
    }
}
