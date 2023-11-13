<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tankikernel extends CI_Model
{
    public function Get($id_tkernel = null)
    {
        if ($id_tkernel != null) {
            $this->db->where('id_tkernel', $id_tkernel);
        }

        return $this->db->get('tb_uk_kernel');
    }

    function Save($data)
    {
        return $this->db->insert('tb_uk_kernel', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_tkernel', $where);
        return $this->db->update('tb_uk_kernel', $data);
    }
    function Deleted($id_tkernel)
    {
        return $this->db->delete('tb_uk_kernel', ['id_tkernel' => $id_tkernel]);
    }


}