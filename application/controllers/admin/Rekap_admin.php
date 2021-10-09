<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Rekap_admin extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();



        if ($this->session->userdata('status') != "admin") {
            redirect(base_url("Auth/index"));
        }
    }

    // public function exel()
    // {

    //     $data['presensi'] = $this->db->get('presensi')->result_array();

    //     require(APPPATH . 'assets/vendor/exel/Classes/PHPExcel.php');
    //     require(APPPATH . 'assets/vendor/exel/Classes/PHPExcel/Writer/Excel2007.php');
    //     $object = new PHPExcel();
    //     $object->getProperties()->setCreator('Muhammad Arif A.F');
    //     $object->getProperties()->setLastModifiedBy('Kinerja Ombudsman');
    //     $object->getProperties()->setTitle('Daftar Hadir Ombudsman');

    //     $object->setActiveSheetIndex(0);

    //     $object->getActiveSheet()->setCellValue('A1', 'No');
    //     $object->getActiveSheet()->setCellValue('B1', 'nip');
    //     $object->getActiveSheet()->setCellValue('C1', 'file');
    //     $object->getActiveSheet()->setCellValue('D1', 'nama');
    //     $object->getActiveSheet()->setCellValue('E1', 'waktu');
    //     $object->getActiveSheet()->setCellValue('F1', 'keterangan');

    //     $baris = 2;
    //     $no = 1;

    //     foreach ($data['presensi'] as $item) {

    //         $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
    //         $object->getActiveSheet()->setCellValue('B' . $baris, $item->nip);
    //         $object->getActiveSheet()->setCellValue('C' . $baris, $item->file);
    //         $object->getActiveSheet()->setCellValue('D' . $baris, $item->nama);
    //         $object->getActiveSheet()->setCellValue('E' . $baris, date('H:i:s', $item['waktu']));
    //         $object->getActiveSheet()->setCellValue('F' . $baris, $item->keterangan);

    //         $baris++;
    //     }


    //     $filename = "Data Presensi" . '.xlsx';

    //     $object->getActiveSheet()->setTitle("Data Presensi");

    //     header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    //     header('content-Disposition: attachment;filename="' . $filename . '"');
    //     header('Cache-Control: max-age=0');

    //     $writer = PHPExcel_IOFactory::createwriter($object, 'Exel2007');
    //     $writer->save('PHP://output');

    //     exit;
    // }

    public function exel()
    {
        $data['title'] = 'Rekap Laporan Kehadiran';
        $data['presensi'] = $this->db->get('presensi')->result_array();
        $this->load->view('admin/excel.php', $data);
    }

    public function excel_izin()
    {
        $data['title'] = 'Rekap Laporan Perizinan';
        $data['izin'] = $this->db->get('izin')->result_array();
        $this->load->view('admin/excel_izin.php', $data);
    }
}
