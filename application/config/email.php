<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
/* 
| ------------------------------------------------------------------- 
| EMAIL CONFIG 
| ------------------------------------------------------------------- 
| Konfigurasi email keluar melalui mail server
| */  
			$config = Array(
			   'protocol'  => 'smtp',
			   'smtp_host'    => 'ssl://smtp.googlemail.com',
			   'smtp_port'    => 465,
			   'smtp_user'    => 'faketanyadong@gmail.com',
			   'smtp_pass'    => 'faketanyadong123',
			   'mailtype'     => 'html',
			   'charset'      => 'iso-8859-1',
			   'newline'   => "\r\n"
			);
   
/* End of file email.php */ 
/* Location: ./system/application/config/email.php */