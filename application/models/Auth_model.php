<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function register($data)
    {
        $this->db->insert('users', $data);
    }
    function cek_login($uji, $where)
    {
        return $this->db->get_where($uji, $where);
    }
}
