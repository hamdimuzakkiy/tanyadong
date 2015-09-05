<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();				
		// no cache		
		header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
        header("Pragma: no-cache"); // HTTP 1.0.
        header("Expires: 0"); // Proxies.
        // end of no cache        

        $this->role = $this->session->userdata('roleTanyadong'); // role for auth

        if ($this->role == ''){
        	redirect(base_url().'login');
        	return;
        }

	}

	protected function database_status($from, $message){

	}

	protected function sendemail($to, $id){

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
