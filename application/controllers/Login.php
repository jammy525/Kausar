<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('security');
    }

    public function index() {
        $data['head'] = $this->load->view('parts/admin/head', null, true);
        $data['footerscript'] = $this->load->view('parts/admin/footerScript', null, true);
        $this->load->view('admin/login', $data);
    }

    public function loginProcess() {
        //collect login data
        $username = $this->input->post('username');
        $this->form_validation->set_rules('username', 'User Name', 'trim|required|xss_clean');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        // check form validation of user input
        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array('status' => false, 'message' => validation_errors()));
            exit;
        }

        $sessionVariable = array(
            'username' => $username,
            'password' => sha1($password)
        );
        //load authentication library to check username and password
        $this->load->library('authentication');
        $isUserFound = $this->authentication->checkUser($sessionVariable);
        if ($isUserFound) {
            $this->authentication->updateTime($sessionVariable);
            $this->session->set_userdata($sessionVariable);
            $json = array('status' => true, 'message' => 'Welcome admin you successfully logged in', 'redirect' => base_url() . "admin/dashboard", 'dialogMsg' => 'Welcome admin please wait for dashboard');
        } else {
            $json = array('status' => false, 'message' => 'Please check your username and password');
        }

        echo json_encode($json);
    }

}
