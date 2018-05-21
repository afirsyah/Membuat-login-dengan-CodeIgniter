<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

    function cek($nama_user, $password) {
        $this->db->where("nama_user", $nama_user);
        $this->db->where("password", $password);
        return $this->db->get("tbl_user");
    }

}