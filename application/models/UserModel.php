<?php

class UserModel extends CI_Model
{
    function validate($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user', 1);
        return $result;
    }

    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }

    public function edit_user($id)
    {
        $data = $this->db->query('SELECT * FROM user ' . $id);
        return $data;
    }

    public function update_user($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('user', $data);
    }
}
