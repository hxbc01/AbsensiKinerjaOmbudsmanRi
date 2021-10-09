<?php
defined('BASEPATH') or exit('No direct script access allowed');

class diagram extends CI_Model
{
    function jumlah_masuk()
    {
        $this->db->select('keterangan');
        $this->db->from('presensi');
        $this->db->where('keterangan = masuk');
    }
}
