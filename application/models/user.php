<?php
	class user extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function insert($data){
			if (sizeof($this->getWhere(array('username'=>$data['username']))) == 0 and sizeof($this->getWhere(array('email'=>$data['email']))) == 0)						
			$this->db->insert('user',$data);
			else
			return false;
			return true;			
		}

		function getWhere($data){
			$this->db->where($data);
			$res = $this->db->get('user');			
			return $res->result();
		}
		
	}
