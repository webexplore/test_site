<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Login extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('template');  
        $this->load->model('template/Template_model','_templateModel',TRUE);
        //$this->load->library(array('form_validation'));
    }

    function index() {  

		$data = 'login/login_view.php';
        $this->load->view($data);

    }

   
}/* end of class  */