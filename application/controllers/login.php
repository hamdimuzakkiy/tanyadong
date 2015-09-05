<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();
		$this->load->model('user');
	}	
		
	public function index(){

		$data['title'] = 'login';

		$this->load->view('login/header',$data);
		$this->load->view('login/login');
		$this->load->view('login/footer');		
	}

	public function signup(){

		$data['title'] = 'sign up';
		print $this->session->flashdata('statusSignUp');
		$this->load->view('login/header',$data);
		$this->load->view('login/create_account');
		$this->load->view('login/footer');		
	}

	public function verifikasi($id){
		print $id;
	}

	public function do_signup(){

		// faketanyadong@gmail.com
		// faketanyadong123				
		$data['nama_depan'] = $this->input->post('nama_depan');
		$data['nama_belakang'] = $this->input->post('nama_belakang');
		$data['username'] = $this->input->post('username');
		$data['id_user'] = md5($this->input->post('username'));
		$data['email'] = $this->input->post('email_');
		$data['password'] = md5($this->input->post('password'));
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$data['alamat'] = $this->input->post('alamat');

		if ($this->user->insert($data)){
			$this->session->set_flashdata('statusSignUp',1);
			print $this->send_email($data['email'], base_url().'auth/verifikasi/'.$data['id_user']);
			//redirect(base_url().'login');
		}
		else{
			$this->session->set_flashdata('statusSignUp',0);
			//redirect(base_url().'login/signup');
		}		
	}

	protected function send_email($to, $message){

		$this->load->library('email');
		$this->email->from('faketanyadong@gmail.com', 'Tanyadong');	
		$this->email->to($to);
		 
		$this->email->subject('Verifikasi Tanyadong');
		$this->email->message($message);
		 
		
		if($this->email->send())		
			return true;				
		return false;		
	}
}
