<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_olah extends CI_Model
{
    public function Get($id_asisten = null)
    {
        if ($id_asisten !== null) {
            $this->db->where('id_asisten', $id_asisten);
        }

        return $this->db->get('tb_olah');
    }

    public function Save($data)
    {
        // Tambahkan tanggal otomatis di sini
        $data['tanggal'] = date('Y-m-d H:i:s'); // Format tanggal dan waktu MySQL

        return $this->db->insert('tb_olah', $data);
    }

    public function Updated($data, $where)
    {
        $this->db->where('id_asisten', $where);
        return $this->db->update('tb_olah', $data);
    }

    public function Deleted($id_asisten)
    {
        return $this->db->delete('tb_olah', ['id_asisten' => $id_asisten]);
    }
}
