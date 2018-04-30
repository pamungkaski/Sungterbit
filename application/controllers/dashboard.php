<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {


	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udahlogin') == null)
			redirect('Welcome');
		$this->load->model('dashboard');
        $this->load->model('friend');
	}

	public function index() {
		$this->load->model('dashboard');
		$data = array();
		$data['title'] = 'Daftar Post';
		$data['list'] = $this->dashboard->getAllPost();
		$this->load->view('daftar_mhs', $data);
	}
    public function addPost(){
        $this->load->model('dashboard');
        $data = array(
            'username' => $this->input->post('username'),
            'post' => $this->input->post('post'),
            'CreatedAt' => time(),
            'UpdatedAt' => time(),
        );
        $this->dashboard->addPost($data);
        $this->session->set_flashdata('info', 'Post berhasil');
        redirect('dashboard/index');
    }
    public function addFriend($second){
        $this->load->model('friend');
        $data = array(
            'first' => $this->session->userdata('username'),
            'second' => $second,
            'CreatedAt' => time(),
        );
        $this->friend->addFrined($data);
        $this->session->set_flashdata('info', 'Add Friend berhasil');
    }
    public function editPost($id){
        $this->load->model('dashboard');
        $data = array(
            'id' => $id,
            'username' => $this->input->post('username'),
            'post' => $this->input->post('post'),
            'CreatedAt' => $this->input->post('CreatedAt'),
            'UpdatedAt' => time(),
        );
        $this->dashboard->updPost($data, $id);
        $this->session->set_flashdata('info', 'Edit Post berhasil');
        redirect('dashboard/index');
    }
    public function delPost($id){
        $this->dashboard->delPost($id);
        $this->session->set_flashdata('info','Hapus berhasil');
        redirect('dashboard/index');
    }
}