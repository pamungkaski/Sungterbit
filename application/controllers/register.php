<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


    function __construct(){
        parent::__construct();
        $this->load->model('user');
        $this->load->model('profile_mod');
    }

    public function index() {;
        $data['title'] = 'Register';
        $this->load->view('register', $data);
    }
    public function add_User(){
        $this->load->model('user');
        $this->load->model('profile_mod');
        $user = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('pass'),
        );
        $profile = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email')
        );
        $this->user->addUser($user);
        $this->profile_mod->addProfile($profile);
        $this->session->set_flashdata('info', 'Register berhasil');
        redirect('Welcome/form_Login');
    }
}