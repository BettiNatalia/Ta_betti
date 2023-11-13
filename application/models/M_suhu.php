<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_suhu extends CI_Model
{
    public function Get($id_suhu = null)
    {
        if ($id_suhu != null) {
            $this->db->where('id_suhu', $id_suhu);
        }

        return $this->db->get('tb_suhu');
    }

    function Save($data)
    {
        return $this->db->insert('tb_suhu', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_suhu', $where);
        return $this->db->update('tb_suhu', $data);
    }
    function Deleted($id_suhu)
    {
        return $this->db->delete('tb_suhu', ['id_suhu' => $id_suhu]);
    }


}