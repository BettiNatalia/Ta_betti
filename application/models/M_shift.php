<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_shift extends CI_Model
{
    public function Get($id_shift = null)
    {
        if ($id_shift != null) {
            $this->db->where('id_shift', $id_shift);
        }

// function get tb role
        return $this->db->get('tb_shift');
    }

// functuion save
    function Save($data)
    {
        return $this->db->insert('tb_shift', $data);
    }

// function updated
    function Updated($data, $where)
    {
        $this->db->where('id_shift', $where);
        return $this->db->update('tb_shift', $data);
    }
// function hapus
    function Deleted($id_shift)
    {
        return $this->db->delete('tb_shift', ['id_shift' => $id_shift]);
    }


}