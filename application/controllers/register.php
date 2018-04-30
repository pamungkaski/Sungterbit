<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {


    function __construct(){
        parent::__construct();
        if ($this->session->userdata('udahlogin') == null)
            redirect('Welcome');
        $this->load->model('user');
        $this->load->model('profile');
    }

    public function index() {;
        $data['title'] = 'Register';
        $this->load->view('register', $data);
    }
    public function addUser(){
        $this->load->model('user');
        $this->load->model('profile');
        $user = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        $profile = array(
            'username' => $this->input->post('username'),
            'name' => $this->input->post('password'),
            'birthdate' => $this->input->post('birthdate'),
            'city' => $this->input->post('city'),
        );
        $this->user->addUser($user);
        $this->profile->addProfile($profile);
        $this->session->set_flashdata('info', 'Register berhasil');
        redirect('Welcome');
    }
}