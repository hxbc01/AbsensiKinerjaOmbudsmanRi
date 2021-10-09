<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_admin extends CI_Controller
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
        $data['judul'] = 'Kelola Laporan';
        $data['laporan'] = $this->db->get('laporan_kinerja')->result_array();
        $data['users'] = $this->db->get_where('admin', ['nip' =>
        $this->session->userdata('nip')])->row_array();
        $this->load->view('template/header.php', $data);
        $this->load->view('template/topbar_admin.php', $data);
        $this->load->view('admin/kelola_laporan.php');
        $this->load->view('template/footer.php');
    }
    public function reset()
    {
        $this->db->truncate('laporan_kinerja');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Dihapus! </div>');
        redirect('admin/Laporan_admin/index');
    }
}
