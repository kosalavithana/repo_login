<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
//         $this->load->view('welcomeindex');
    }

    public function index() {

        $this->load->view('welcomeindex');
    }

    public function newuser() {
        $this->load->view('newuser');
    }
    public function login(){
        $this->load->view('login');
    }
    public function welcomehome(){
        $this->load->view('home');
    }

}

?>