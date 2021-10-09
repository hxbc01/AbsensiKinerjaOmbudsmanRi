<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kehadiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "users") {
            redirect(base_url("Auth/index"));
        }
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('kehadiran_model');
    }
    public function presensi()
    {
        $nama       = $this->input->post('nama');
        $nip        = $this->input->post('nip');
        $keterangan = $this->input->post('keterangan');

        $config['upload_path'] = './assets/foto';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['file']['name'];

        $this->upload->initialize($config);
        if (!empty($_FILES['file']['name'])) {
            if ($this->upload->do_upload('file')) {
                $file = $this->upload->data();
                $data = array(
                    'nama'       => $nama,
                    'nip'        => $nip,
                    'waktu'      => time(),
                    'keterangan' => $keterangan,
                    'file'       => $file['file_name'],

                );
                $this->kehadiran_model->insert($data);
                $this->session->set_flashdata('message', '<div class ="alert alert-success" role="alert"> Berhasil Melakukan Presensi! </div>');
                redirect('Home/presensi');
            } else {
                $this->load->view('Kehadiran/presensi');
            }
        } else {

            $this->load->view('Home/index');
        }
    }
    public function izin()
    {
        $nama       = $this->input->post('nama');
        $nip        = $this->input->post('nip');
        $penjelasan = $this->input->post('penjelasan');

        $config['upload_path'] = './assets/foto';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['file']['name'];

        $this->upload->initialize($config);
        if (!empty($_FILES['file']['name'])) {
            if ($this->upload->do_upload('file')) {
                $file = $this->upload->data();
                $data = array(
                    'nama'       => $nama,
                    'nip'        => $nip,
                    'penjelasan' => $penjelasan,
                    'file'       => $file['file_name'],

                );
                $this->kehadiran_model->insert_izin($data);
                $this->session->set_flashdata('message', '<div class ="alert alert-success" role="alert"> Berhasil Melakukan Izin! </div>');

                redirect('Home/izin');
            } else {
                $this->load->view('Kehadiran/izin');
            }
        } else {

            $this->load->view('Home/index');
        }
    }
}
