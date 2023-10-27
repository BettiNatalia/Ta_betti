<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_user extends CI_Model 
{
    public function getuserlogin($data)
    {
        return $this->db->get_where('tb_user', $data, 1)->row();
    }     
    
    public function Get($email = null)
    {
        if ($email != null) {
            $this->db->where('email', $email);
        }
        
        return $this->db->get('tb_user');
    }

    function Save($data)
    {
        return $this->db->insert('tb_user', $data);
    }

    function Updated($data, $where)
    {
        if (isset($data['foto'])) {
            // Jika ada foto baru, update foto
            $this->db->set('foto', $data['foto']);
            unset($data['foto']);
        }

        $this->db->where('email', $where);
        return $this->db->update('tb_user', $data);
    }

    function Deleted($email)
    {
        return $this->db->delete('tb_user', ['email' => $email]);
    }

    function detail_data($id_user = NULL)
    {
        $query = $this->db->get_where('tb_user', array('id_user' => $id_user))->row();
        return $query;
    }
}
