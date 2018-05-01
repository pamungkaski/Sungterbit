<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('user_log');
    }
	public function index()
	{
		$data = array();
		$data['title']='Homepage';
		if( $this->session->userdata('udahlogin') != NULL ){
			redirect('dashboard/index');
		} else {
			$this->load->view('homepage', $data);
		}
	}
    public function form_Login(){
        $data = array();
        $data['title'] = 'Login';
        $this->load->view('login', $data);
    }
	public function login(){
	    $username = $this->input->post('username');
		$this->db->where('username', $username);
		$this->db->where('password', $this->input->post('pass'));
		$u = $this->db->get('user');
		if ($u->num_rows() == 1) {
            $this->load->model('user_log');
            $data =  array(
                'username' => $username,
            );

            $ses_id = $this->user_log->addSession($data);

			$this->session->set_userdata('udahlogin', 'ok');
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('ses_id', $ses_id);
			redirect('dashboard');
		}else{
			$this->session->set_flashdata('info', 'username atau password salah');
			redirect('Welcome/form_Login');
		}
	}
}
