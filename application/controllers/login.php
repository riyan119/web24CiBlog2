<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct() /*methodyang pertama kali dipanggil dalam class seblum method method lainnya di panggil*/
	{
		parent::__construct();
	}

	function index(){
		if ($this->session->userdata('logged_in')) {
			redirect('home','refresh');
		}
		else{
			$this->load->view('login/login_view');
		}
	}
}