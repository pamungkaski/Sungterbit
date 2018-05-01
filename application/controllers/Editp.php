<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editp extends CI_Controller {


    function __construct(){
        parent::__construct();
        if ($this->session->userdata('udahlogin') == null)
            redirect('Welcome');
    }

    public function index() {;
        $this->load->model('post');
		$data = array();
		$data['title'] = 'Daftar Post';
		$data['username'] = $this->session->userdata('username');
		$data['list'] = $this->post->getAllPost();
        $this->load->view('edit', $data);
    }

}