<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kehadiran_model extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert('presensi', $data);
        return TRUE;
    }
    public function insert_izin($data)
    {
        $this->db->insert('izin', $data);
        return TRUE;
    }
}
