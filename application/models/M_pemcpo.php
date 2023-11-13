<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pemcpo extends CI_Model
{
    public function Get($id_pemasaran = null)
    {
        if ($id_pemasaran != null) {
            $this->db->where('id_pemasaran', $id_pemasaran);
        }

        return $this->db->get('tb_pemcpo');
    }

    function Save($data)
    {
        return $this->db->insert('tb_pemcpo', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_pemasaran', $where);
        return $this->db->update('tb_pemcpo', $data);
    }
    function Deleted($id_pemasaran)
    {
        return $this->db->delete('tb_pemcpo', ['id_pemasaran' => $id_pemasaran]);
    }


}