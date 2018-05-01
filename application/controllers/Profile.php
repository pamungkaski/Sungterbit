<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


    function __construct(){
        parent::__construct();
        if ($this->session->userdata('udahlogin') == null)
            redirect('Welcome');
    }

    public function index() {;
        $this->load->model('user');
        $this->load->model('profile_mod');
        $this->load->model('post');
        $username = $this->session->userdata('username');
        $user = $this->user->getUser($username);
        $profile = $this->profile_mod->getProfile($username);
        $post =  $this->post->getgetAllPostSpecUser($username);
        $data = array(
            'user' => $user,
            'profile' => $profile,
            'list' => $post
        );
        $data['title'] = 'Profile';
        $this->load->view('profile', $data);
    }

    public function editProfile($username){
        $this->load->model('profile_mod');
        $this->load->model('user');
        $profile = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'bio' => $this->input->post('bio'),
        );
        $this->profile_mod->updProfile($profile, $username);
        $this->session->set_flashdata('info', 'Edit Post berhasil');
        redirect('dashboard/settings');
    }
}