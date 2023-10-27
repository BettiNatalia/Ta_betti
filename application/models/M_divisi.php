<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_divisi extends CI_Model
{
    public function Get($id_divisi = null)
    {
        if ($id_divisi != null) {
            $this->db->where('id_divisi', $id_divisi);
        }

        return $this->db->get('tb_divisi');
    }

    function Save($data)
    {
        return $this->db->insert('tb_divisi', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_divsi', $where);
        return $this->db->update('tb_divisi', $data);
    }
    function Deleted($id_divisi)
    {
        return $this->db->delete('tb_divisi', ['id_divisi' => $id_divisi]);
    }


}