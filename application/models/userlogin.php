<?php
class Userlogin extends CI_model
{
    public function insert($user)
    {
        $this->db->insert('userlogin', $user);
    }
}