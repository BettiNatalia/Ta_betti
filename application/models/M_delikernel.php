<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_delikernel extends CI_Model
{
    public function Get($id_delikernel = null)
    {
        if ($id_delikernel != null) {
            $this->db->where('id_delikernel', $id_delikernel);
        }

        return $this->db->get('tb_kernel');
    }

    function Save($data)
    {
        return $this->db->insert('tb_kernel', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_delikernel', $where);
        return $this->db->update('tb_kernel', $data);
    }
    function Deleted($id_delikernel)
    {
        return $this->db->delete('tb_kernel', ['id_delikernel' => $id_delikernel]);
    }


}