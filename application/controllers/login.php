<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();
		$this->load->model('user');
		if ($this->uri->segment(2) == 'logout')
		{}
		else if($this->cek() == false)
		{}
		else{
			redirect(base_url().'/user');
			return;
		}
	}	

	private function cek(){
		if ($this->session->userdata('role') == ''){
			return false;
		}
		else{			
			return true;			
		}
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
		$this->load->view('login/signup');
		$this->load->view('login/footer');		
	}

	public function logout(){
		$this->session->unset_userdata('role');
		redirect(base_url().'login');
		return; 
	}

	public function verifikasi($id){
		print $id;
	}

	public function do_login(){

		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));

		$result = $this->user->getWhere(array('username'=>$data['username'],'password'=>$data['password']));

		if (sizeof($result)==1){			
			print $this->database_status('login',1);
			foreach ($result as $row) {
				$this->session->set_userdata(array(
                    'role' => $row->role,
                    'id' => $row->id_user                                                                               
            	));	
			}	
		}
		else{
			print $this->database_status('login',0);
			$this->session->set_flashdata('statusLogin','Gagal');
		}

		return;

	}

	public function do_signup(){

		$data['nama_depan'] = $this->input->post('nama_depan');
		$data['nama_belakang'] = $this->input->post('nama_belakang');
		$data['username'] = $this->input->post('username');
		$data['id_user'] = md5($this->input->post('username'));
		$data['email'] = $this->input->post('email_');
		$data['password'] = md5($this->input->post('password'));
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$data['alamat'] = $this->input->post('alamat');



		if ($this->user->insert($data)){			
			if ($this->send_email($data['email'], base_url().'auth/verifikasi/'.$data['id_user']))
			print $this->database_status('signup',2);
			else			
			print $this->database_status('signup',1);
		}
		else{
			print $this->database_status('signup',0);
		}

		return;
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

	private function database_status($from, $message){
		if ($from == 'signup'){
			if ($message == 0)
				return 'Failed';
			else if ($message == 1){
				return 'Failed Send Email';
			}
			else if ($message == 2){
				return "Success";
			}			
		}
		if ($from == 'login'){
			if ($message == 0)
				return 'Failed';

			else if ($message == 1){
				return "Success";
			}			
		}	
	}
}
