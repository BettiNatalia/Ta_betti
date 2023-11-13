<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_user extends CI_Model 
{

    // getuserlogin ini mengambil 1 baris data dari tabel tb user dan mengembalikannya
    public function getuserlogin($data)
    {
        return $this->db->get_where('tb_user', $data, 1)->row();
    }     
    
    // mengambil data dari tabel tb_user tanpa filter berdasarkan nilai email
    public function Get($email = null)
    {
        if ($email != null) {
            $this->db->where('email', $email);
        }
        
        return $this->db->get('tb_user');
    }

    // fungsi save untuk memasukkan data yang diberikan $data tb_user 
    function Save($data)
    {
        return $this->db->insert('tb_user', $data);
    }

    // cara melakukan update pada basis data 
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

    // untuk menghapus data berdasarkan email dan disini menggunakan parameter($email) sama dengan parameter di delete/ hapus
    function Deleted($email)
    {
        return $this->db->delete('tb_user', ['email' => $email]);
    }

    // detail data menggunakan fungsi null karena boleh data dari kolom tersebut kosong seperti boleh tidak memunculkan foto
    function detail_data($id_user = NULL)
    {
        // untuk mengambil 1 baris data tb_user dan kemudian di kembalikan sesuai kebutuhan yaitu data di tampilkan pada sesi detail
        $query = $this->db->get_where('tb_user', array('id_user' => $id_user))->row();
        return $query;
    }
}
