<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends MY_Controller {

	public function __construct()
	{		
		parent::__construct();
		$this->load->model('pertanyaan');
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

	function pembayaran(){
		$data['title'] = 'Pembayaran';
		$this->load->view('user/header',$data);
		$this->load->view('user/pembayaran');
		$this->load->view('user/footer');
	}

	function add_question(){
		//$this->load->helper('date');

		//$data['id_user'] = $this->session->userdata('id_user');
		$data['judul_pertanyaan'] = $this->input->post('judul_pertanyaan');
		$data['keterangan_pertanyaan'] = $this->input->post('keterangan_pertanyaan');
		//$data['waktu_pertanyaan'] = now();
		$data['topik_pertanyaan'] = $this->input->post('topik_pertanyaan');
		
		if ($this->pertanyaan->insert($data)){
			print 'Success';
			print $this->database_status('add_question',1);
		}
		else{
			print $this->database_status('add_question',0);
		}

		return;
	}
}
