<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function dashboard()
    {
        $tanggalHariIni = date("Y-m-d");
        $query = "SELECT * FROM costumer WHERE created_at = '$tanggalHariIni' ";

        $data_costumer = $this->db->query($query);
        return $data_costumer->result();
    }

    function data_today()
    {
        $today = date("Y-m-d");
        $this->db->where('created_at', $today);
        return $this->db->count_all_results('costumer');
    }

    public function filter()
    {
        $today = date("Y-m-d");
        $this->db->where('created_at', $today);
        $this->db->order_by('no_antrian', 'asc'); // Ganti 'field_name' dengan nama kolom yang ingin Anda urutkan
        return $this->db->get('costumer')->result();
    }

    public function karyawan(){
        $query = "SELECT * FROM user";

        $data_karyawan = $this->db->query($query);
        return $data_karyawan->result();
    }
    
}
