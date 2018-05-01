<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {


	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udahlogin') == null)
			redirect('Welcome');
		$this->load->model('post');
        $this->load->model('friend');
	}

	public function index() {
		$this->load->model('post');
		$data = array();
		$data['title'] = 'Daftar Post';
		$data['username'] = $this->session->userdata('username');
		$data['list'] = $this->post->getAllPost();
		$this->load->view('beranda', $data);
	}
    public function addPost(){
        $this->load->model('post');
        $username = $this->session->userdata('username');
        $data = array(
            'username' => $username,
            'post' => $this->input->post('post'),
            'CreatedAt' => date("Y-m-d H:i:s"),
            'UpdatedAt' => date("Y-m-d H:i:s"),
        );
        $this->post->addPost($data);
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
        $this->load->model('post');
        $data = array(
            'post' => $this->input->post('post'),
            'UpdatedAt' => date("Y-m-d H:i:s"),
        );
        $this->post->updPost($data, $id);
        $this->session->set_flashdata('info', 'Edit Post berhasil');
        redirect('dashboard');
    }
    public function delPost($id){
        $this->post->delPost($id);
        $this->session->set_flashdata('info','Hapus berhasil');
        redirect('dashboard/index');
    }
    public function settings(){
        $this->load->model('user');
        $this->load->model('profile_mod');
        $username = $this->session->userdata('username');
	    $user = $this->user->getUser($username);
	    $profile = $this->profile_mod->getProfile($username);
	    $data = array(
	        'user' => $user,
            'profile' => $profile
        );
        $this->load->view('settings', $data);
    }
    public function logout(){
        $this->load->model('user_log');
        $ses_id = $this->session->userdata('ses_id');
        $data = $this->user_log->getSession($ses_id);
        $data['finish'] =  date("Y-m-d H:i:s");;
        $this->user_log->destSession($data, $ses_id);
        $this->session->sess_destroy();
        redirect('Welcome');
    }
}