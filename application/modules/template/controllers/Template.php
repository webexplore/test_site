<?php

class Template extends MX_Controller
{
	public function __construct()
	{
		parent ::__construct();
        date_default_timezone_set('Asia/Kolkata'); 
		$this->load->model('Template_model','_templates',TRUE);
	}
	public function web_template($data = NULL)
	{
		
		$lang = $data['lang'];
		$menus = $this->_templates->getWebMenusByLang('web_menu_master',$lang);
		$pincodes = $this->_templates->getPincode();
		// echo "<pre>";
		// print_r($menus);
		// echo "</pre>";
		$data['menus'] = $menus;
		$data['pincode'] = $pincodes;
		$data['language'] = $lang;
		$this->load->view('template/web_template', $data);
	}

	public function admin_template($data = NULL)
	{
		
		$this->load->view('template/admin_template', $data);
	}

	public function report_template($data=null){
		$this->load->view('template/report_template', $data);
	}
	
}