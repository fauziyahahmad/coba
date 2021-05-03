<?php

class User_model extends CI_Model
{
    public function register()
    {
        $data = [
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('admins', $data);
    }

    public function getUserByUsername($username)
    {
         return $this->db->get_where('admins', ['username' => $username])->row_array();
    }

}
