<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class friend extends CI_Model {

    public function getAllFriends($first) {
        $this->db->where('first', $first);
        $data = $this->db->get('friends');
        return $data->result_array();
    }

    public function addFriend($friend){
        $this->db->insert('friends', $friend);
    }

    public function getFriend($id) {
        $this->db->where('id', $id);
        $friend = $this->db->get('friends');
        return $friend->row_array();
    }

    public function cekFriend($first, $second) {
        $this->db->where('first', $first);
        $this->db->where('second', $second);
        $friend = $this->db->get('friends');
        return $friend->num_rows() == 0;
    }

    public function delFriend($id) {
        $this->db->where('id', $id);
        $this->db->delete('friends');
    }

    public function updFriend($friend, $id) {
        $this->db->where('id', $id);
        $this->db->update('friends', $friend);
    }
}
