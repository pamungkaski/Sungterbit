<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class friend extends CI_Model {

    public function getAllFriends() {
        $data = $this->db->get('friend');
        return $data->result_array();
    }

    public function addFriend($friend){
        $this->db->insert('friend', $friend);
    }

    public function getFriend($id) {
        $this->db->where('id', $id);
        $friend = $this->db->get('friend');
        return $friend->row_array();
    }

    public function delFriend($id) {
        $this->db->where('id', $id);
        $this->db->delete('friend');
    }

    public function updFriend($friend, $id) {
        $this->db->where('id', $id);
        $this->db->update('friend', $friend);
    }
}
