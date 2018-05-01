<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {
	
	public function getAllPost() {
		$data = $this->db->get('post');
		return $data->result_array();
	}
    public function getAllPostSpecUser($username) {
        $this->db->where('username', $username);
        $data = $this->db->get('post');
        return $data->result_array();
    }

	public function addPost($post){
		$this->db->insert('post', $post);
	}

	public function getPost($id) {
		$this->db->where('id', $id);
		$post = $this->db->get('post');
		return $post->row_array();
	}

	public function delPost($id) {
		$this->db->where('id', $id);
		$this->db->delete('post');
	}

	public function updPost($post, $id) {
		$this->db->where('id', $id);
		$this->db->update('post', $post);
	}
}
