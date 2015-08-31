<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Summer_contrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('form');
        
    }

    public function summer() {
        $this->load->view('summernote');
    }

    
    

}

?>
