<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_create extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('db_newuser'); //load login page to the contoller user_create
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

//    public function index() {
//        die('no direct access');
//    }
    public function check_user() {
        $uname = "";
        $pw = "";
        $email = "";

//        $this->form_validation->set_rules('name', 'Username', 'required|min_length[4]|max_length[10]');
//        $this->form_validation->set_rules('pw', 'Password', 'required|matches[pwconf]');
//        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//        $this->form_validation->set_rules('pwconf', 'Password confermation', 'required');
//
//        if ($this->form_validation->run() === FALSE) {
//            $this->load->view('newuser');
//        } else {
//            $uname = $this->input->post('name'); //$_POST['']; //get user name to uname from ajax function
//            $pw = $this->input->post('pw'); //$_POST['pw'];
//            $email = $this->input->post('email'); //$_POST['pw'];
//        }

        $uname = $this->input->post('name'); //$_POST['']; //get user name to uname from ajax function
        $pw = $this->input->post('pw'); //$_POST['pw'];
        $epw = md5($pw);//encript password
        $check = FALSE;  // for check user already avilabe or not

        $result = $this->db_newuser->user_select($uname); //login(model) page db_select() funtion access and result get back to result variable

        if ($result === FALSE) {//if user not available go inside the if condition
            $this->db_newuser->db_insert($uname, $epw);
            $check = FALSE;
        } else {
//            if user already available go inside the else

            $check = TRUE;
        }
        // $abc = $result['id'];
        //       echo json_encode($result['id']);
        echo json_encode($check);
    }

}
?>


