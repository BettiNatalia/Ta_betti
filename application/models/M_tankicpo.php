<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tankicpo extends CI_Model
{
    public function Get($id_tcpo = null)
    {
        if ($id_tcpo != null) {
            $this->db->where('id_tcpo', $id_tcpo);
        }

        return $this->db->get('tb_uk_cpo');
    }

    function Save($data)
    {
        return $this->db->insert('tb_uk_cpo', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_tcpo', $where);
        return $this->db->update('tb_uk_cpo', $data);
    }
    function Deleted($id_tcpo)
    {
        return $this->db->delete('tb_uk_cpo', ['id_tcpo' => $id_tcpo]);
    }


}