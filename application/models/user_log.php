<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_log extends CI_Model {

	
	public function getAllSession($username) {
		$data = $this->db->get_where('session');
		return $data->result_array();
	}
	public function addSession($post) {
		$this->db->insert('post', $post);
        return $this->db->insert_id();
	}
	public function getSession($id){
		$this->db->where('id', $id);
		$post = $this->db->get('session');
		return $post->row_array();
	}
	public function destSession($data, $id) {
		$this->db->where('id', $id);
		$this->db->update('session', $data);
	}
	public function delSession($id) {
        $this->db->where('id', $id);
        $this->db->delete('session');
    }
}
