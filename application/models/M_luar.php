<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_luar extends CI_Model
{
    public function Get($id_tanggal = null)
    {
        if ($id_tanggal !== null) {
            $this->db->where('id_tanggal', $id_tanggal);
        }

        return $this->db->get('tb_tgl_luar');
    }

    public function Save($data)
    {

        return $this->db->insert('tb_tgl_luar', $data);
    }

    public function Updated($data, $where)
    {
        $this->db->where('id_tanggal', $where);
        return $this->db->update('tb_tgl_luar', $data);
    }

    public function Deleted($id_tanggal)
    {
        return $this->db->delete('tb_tgl_luar', ['id_tanggal' => $id_tanggal]);
    }

    public function Deleted_tb($id_inti)
    {
        return $this->db->delete('tbs_luar', ['id_luar' => $id_luar]);
    }
}
