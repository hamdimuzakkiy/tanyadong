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

        $this->role = $this->session->userdata('role'); // role for auth

        if ($this->role == ''){
        	redirect(base_url().'login');
        	return;
        }

	}

	protected function database_status($from, $message){
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

		else if($from == 'add_question'){
			if($message==0){
				return 'Failed';
			}
			else if($message == 1){
				return 'Success';
			}
		}
	}
}
