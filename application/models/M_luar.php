<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_luar extends CI_Model
{
    public function Get()
    {
        $this->db->select('*');
        $this->db->from('tbs_luar');
        $this->db->join('tb_suplier', 'tb_suplier.suplier=tbs_luar.asal_tbs');
        $query = $this->db->get();
        return $query->result();
    }

    function Save($data)
    {
        return $this->db->insert('tbs_luar', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_tbs', $where);
        return $this->db->update('tbs_luar', $data);
    }
    function Deleted($id_tbs)
    {
        return $this->db->delete('tbs_luar', ['id_tbs' => $id_tbs]);
    }

    function GetIdSuplier()
    {
        $query = $this->db->get('tb_suplier');
        return $query->result_array();
    }

    function GetIdLuar($id_tbs)

    {
        $this->db->where('id_tbs', $id_tbs);
        $query = $this->db->get('tbs_luar');
        return $query->row_array();
    }


}