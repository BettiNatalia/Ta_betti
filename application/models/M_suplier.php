<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_suplier extends CI_Model
{
    public function Get($id_suplier = null)
    {
        if ($id_suplier != null) {
            $this->db->where('id_suplier', $id_suplier);
        }

        return $this->db->get('tb_suplier');
    }

    function Save($data)
    {
        return $this->db->insert('tb_suplier', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_suplier', $where);
        return $this->db->update('tb_suplier', $data);
    }
    function Deleted($id_suplier)
    {
        return $this->db->delete('tb_suplier', ['id_suplier' => $id_suplier]);
    }


}