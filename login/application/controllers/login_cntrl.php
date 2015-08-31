<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_cntrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('db_newuser');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function check_user() {

        $this->form_validation->set_rules('name', 'Username', 'required|min_length[4]|max_length[10]');
        $this->form_validation->set_rules('pw', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('newuser');
        } else {
            $uname = $this->input->post('name'); //$_POST['']; //get user name to uname from ajax function
            $pw = $this->input->post('pw'); //$_POST['pw'];
            $session_name = "";
            $session_id = "";
        }
//        $uname = $this->input->post('name'); //$_POST['']; //get user name to uname from ajax function
//        $pw = $this->input->post('pw'); //$_POST['pw'];
        $epw = md5($pw);
        $check = TRUE; //check user available or not
//        $session_name = "";
//        $session_id = "";

        $result = $this->db_newuser->db_select($uname, $epw);
        if ($result === FALSE) {
            //user not in newuser table
            $check = FALSE;
        } else {
            $check = TRUE;
            $session_name = $result['username'];
            $this->session->set_userdata('username', $session_name);
            $session_id = $this->session->userdata('username');
        }
        echo json_encode($session_id);
    }
    
    public function user_login(){
        $this->form_validation->set_rules('name', 'Username', 'required|min_length[4]|max_length[10]');
        $this->form_validation->set_rules('pw', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $uname = $this->input->post('name'); //$_POST['']; //get user name to uname from ajax function
            $pw = $this->input->post('pw'); //$_POST['pw'];
            $session_name = "";
            $session_id = "";
        }
//        $uname = $this->input->post('name'); //$_POST['']; //get user name to uname from ajax function
//        $pw = $this->input->post('pw'); //$_POST['pw'];
//        $epw = md5($pw);
//        $check = TRUE; //check user available or not
//        $session_name = "";
//        $session_id = "";

        $result = $this->db_newuser->db_select($uname, $epw);
        if ($result === FALSE) {
            //user not in newuser table
            $check = FALSE;
        } else {
            $check = TRUE;
            $session_name = $result['username'];
            $this->session->set_userdata('username', $session_name);
            $session_id = $this->session->userdata('username');
        }
        echo json_encode($session_id);
    }

}

?>
