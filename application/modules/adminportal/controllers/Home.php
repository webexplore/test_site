<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('template');
        $this->load->model('template/Template_model','_templateModel',TRUE);
        //$this->load->library(array('form_validation'));
    }

    function index() {
       $data['view_file'] = 'home';
       $this->template->admin_template($data);
    }

   
}
