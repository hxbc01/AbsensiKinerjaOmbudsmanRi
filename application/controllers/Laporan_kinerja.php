<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_kinerja extends CI_Controller
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
        $data['judul'] = 'laporan kinerja';
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar.php', $data);
        $this->load->view('beranda/laporan kinerja/laporan_kinerja.php');
        $this->load->view('template/footer.php');
    }

    public function input()
    {
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();

        $data = [

            'content' => $this->input->post('content'),
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan'),
            'nip' => $this->session->userdata('nip'),
        ];
        $this->db->insert('laporan_kinerja', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Menginputkan Laporan! </div>');
        redirect('laporan_kinerja/index');
    }

    public function print()
    {
        $data['judul'] = 'Print laporan kinerja';
        $data['users'] = $this->db->get_where('users', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $data['laporan'] = $this->db->get_where('laporan_kinerja', ['nip' =>
        $this->session->userdata('nip')])->result_array();


        $this->load->view('beranda/laporan kinerja/lihat.php', $data);
    }
}
