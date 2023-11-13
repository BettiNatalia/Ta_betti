<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_procpo extends CI_Model
{
    public function Get($id_asisten_pemasaran = null)
    {
        if ($id_asisten_pemasaran != null) {
            $this->db->where('id_asisten_pemasaran', $id_asisten_pemasaran);
        }

        return $this->db->get('tb_produksi_cpo');
    }

    function Save($data)
    {
        return $this->db->insert('tb_produksi_cpo', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_asisten_pemasaran', $where);
        return $this->db->update('tb_produksi_cpo', $data);
    }
    function Deleted($id_asisten_pemasaran)
    {
        return $this->db->delete('tb_produksi_cpo', ['id_asisten_pemasaran' => $id_asisten_pemasaran]);
    }


}