<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->config('../config/config.php');
        $this->load->module('template');
        $this->load->model('Gallery_model','_gallery',TRUE);
        $this->load->model('Commonmodule_model','_commonmodule',TRUE);
        $this->load->model('template/Template_model','_templateModel',TRUE);
        //$this->load->library(array('form_validation'));
    }

    function index() {
      
        $lang = $this->config->item('language_code');
       
        $data['lang'] = $lang;
		$data['view_file'] = 'home';
       
        //print_r($data['hometexts']);exit;
     

       $this->template->admin_template($data);
    }

   
}
