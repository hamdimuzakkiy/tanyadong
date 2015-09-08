<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends MY_Controller {

	public function __construct()
	{		
		parent::__construct();
		//$this->load->model('user');
	}	
		
	function index(){
		redirect(base_url().'user/beranda');			
	}

	function beranda(){
		$data['title'] = 'Home';
		$this->load->view('user/header',$data);
		$this->load->view('user/home');
		$this->load->view('user/footer');
	}

	function profil(){
		$data['title'] = 'Profil';
		$this->load->view('user/header',$data);
		$this->load->view('user/profil');
		$this->load->view('user/footer');
	}
}
