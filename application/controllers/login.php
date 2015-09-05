<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();		        
	}	
		
	public function index(){
		$this->load->view('login/header');
		$this->load->view('login/login');
		$this->load->view('login/footer');
	}

	public function create_account(){
		$this->load->view('login/header');
		$this->load->view('login/create_account');
		$this->load->view('login/footer');
	}
}
