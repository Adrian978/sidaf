<?php 
class M_profile extends CI_Model 
{
    public function ambil_profile()
    {
        $query=$this->db->query("SELECT * FROM profile");
        return $query;
    }

    public function simpan($table,$data){
        return $this->db->insert($table, $data);
    }

    public function edit_profile($where= ""){
        $data = $this->db->query('SELECT * FROM profile '.$where);
        return $data;
    }

    public function update_profile($data){
        $this->db->where('id_profile',$data['id_profile']);
        $this->db->update('profile',$data);
    }

    public function hapus($table,$where){
        return $this->db->delete($table,$where);
    }
}


?>