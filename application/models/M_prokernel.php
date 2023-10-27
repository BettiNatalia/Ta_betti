<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prokernel extends CI_Model
{
    public function Get($id_produksi = null)
    {
        if ($id_produksi != null) {
            $this->db->where('id_produksi', $id_produksi);
        }

        return $this->db->get('tb_produksi_kernel');
    }

    function Save($data)
    {
        return $this->db->insert('tb_produksi_kernel', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_produksi', $where);
        return $this->db->update('tb_produksi_kernel', $data);
    }
    function Deleted($id_produksi)
    {
        return $this->db->delete('tb_produksi_kernel', ['id_produksi' => $id_produksi]);
    }


}