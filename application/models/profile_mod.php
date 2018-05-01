<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile_mod extends CI_Model {

    public function getAllProfiles() {
        $data = $this->db->get('profile');
        return $data->result_array();
    }

    public function addProfile($profile){
        $this->db->insert('profile', $profile);
    }

    public function getProfile($username) {
        $this->db->where('username', $username);
        $profile = $this->db->get('profile');
        return $profile->row_array();
    }

    public function delProfile($username) {
        $this->db->where('username', $username);
        $this->db->delete('profile');
    }

    public function updProfile($profile, $username) {
        $this->db->where('username', $username);
        $this->db->update('profile', $profile);
    }
}
