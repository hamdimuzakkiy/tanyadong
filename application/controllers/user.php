<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();
		//$this->load->model('user');
	}	
		
	public function index(){
		$data['title'] = 'Home';
		$this->load->view('user/header',$data);
		$this->load->view('user/home');
		$this->load->view('user/footer');				
	}
}
