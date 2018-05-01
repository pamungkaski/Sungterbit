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
    public function formLogin(){
        $data = array();
        $data['title'] = 'Login';
        $this->load->view('login', $data);
    }
	public function login(){
	    $username = $this->input->post('user');
		$this->db->where('username', $username);
		$this->db->where('password', $this->input->post('pass'));
		$u = $this->db->get('user');
		if ($u->num_rows() == 1) {
            $this->load->model('user_log');
            $data =  array(
                'username' => $username,
                'start' => time(),
            );

            $ses_id = $this->user_log->addSession($data);

			$this->session->set_userdata('udahlogin', 'ok');
			$this->session->set_userdata('username', $this->input->post('user'));
			$this->session->set_userdata('ses_id', $ses_id);
			redirect('dashboard');
		}else{
			$this->session->set_flashdata('info', 'username atau password salah');
			redirect('Welcome/formLogin');
		}
	}

	public function logout(){
        $this->load->model('user_log');
        $ses_id = $this->session->userdata('ses_id');
        $data = $this->user_log->getSession($ses_id);
        $data['finish'] =  time();
        $this->user_log->destSession($data, $ses_id);
        $this->session->sess_destroy();
		redirect('Welcome');
	}
}
