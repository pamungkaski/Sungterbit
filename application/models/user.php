<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {

    public function getAllUser() {
        $data = $this->db->get('user');
        return $data->result_array();
    }

    public function addUser($user){
        $this->db->insert('user', $user);
    }

    public function getUser($username) {
        $this->db->where('username', $username);
        $user = $this->db->get('user');
        return $user->row_array();
    }

    public function delUser($username) {
        $this->db->where('username', $username);
        $this->db->delete('user');
    }

    public function updUser($user, $username) {
        $this->db->where('username', $username);
        $this->db->update('user', $user);
    }
}
