<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_inti extends CI_Model
{
    public function Get()
    {
        $this->db->select('*');
        $this->db->from('tb_inti');
        $this->db->join('tb_divisi', 'tb_divisi.divisi=tb_inti.divisi');
        $query = $this->db->get();
        return $query->result();
    }

    function Save($data)
    {
        return $this->db->insert('tb_inti', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_inti', $where);
        return $this->db->update('tb_inti', $data);
    }
    function Deleted($id_inti)
    {
        return $this->db->delete('tb_inti', ['id_inti' => $id_inti]);
    }

    function GetIdDivisi()
    {
        $query = $this->db->get('tb_divisi');
        return $query->result_array();
    }

    function GetIdInti($id_inti)
    {
        $this->db->where('id_inti', $id_inti);
        $query = $this->db->get('tb_inti');
        return $query->row_array();
    }
}
