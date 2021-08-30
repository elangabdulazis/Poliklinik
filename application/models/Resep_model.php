<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep_model extends MY_Model
{
    public function __construct()
    {
        $table = 'tbl_transaksi';
        $detail = 'tbl_obat';
        parent::__construct($table, $detail);
    }

    public function getCount()
    {
        $data = $this->db->count_all_results('tbl_transaksi');
        return $data;
    }

    public function getThisDay()
    {
        $query = "SELECT * FROM `tbl_transaksi` WHERE date(created_at) = CURRENT_DATE";
        $data = $this->db->query($query)->result_array();
        return $data;
    }
}