<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_role extends CI_Model
{
    public function Get($id_role = null)
    {
        if ($id_role != null) {
            $this->db->where('id_role', $id_role);
        }

        return $this->db->get('tb_role');
    }

    function Save($data)
    {
        return $this->db->insert('tb_role', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_role', $where);
        return $this->db->update('tb_role', $data);
    }
    function Deleted($id_role)
    {
        return $this->db->delete('tb_role', ['id_role' => $id_role]);
    }


}