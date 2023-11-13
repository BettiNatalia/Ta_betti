<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_delicpo extends CI_Model
{
    public function Get($id_delicpo = null)
    {
        if ($id_delicpo != null) {
            $this->db->where('id_delicpo', $id_delicpo);
        }

        return $this->db->get('tb_cpo');
    }

    function Save($data)
    {
        return $this->db->insert('tb_cpo', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_delicpo', $where);
        return $this->db->update('tb_cpo', $data);
    }
    function Deleted($id_delicpo)
    {
        return $this->db->delete('tb_cpo', ['id_delicpo' => $id_delicpo]);
    }


}