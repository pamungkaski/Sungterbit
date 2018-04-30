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
        $data['title'] = 'Profile';
        $this->load->view('profile', $data);
    }

    public function editProfile($username){
        $this->load->model('profile');
        $profile = array(
            'username' => $username,
            'name' => $this->input->post('password'),
            'birthdate' => $this->input->post('birthdate'),
            'city' => $this->input->post('city'),
        );
        $this->profile->updProfile($profile, $username);
        $this->session->set_flashdata('info', 'Edit Post berhasil');
        redirect('dashboard/index');
    }
}