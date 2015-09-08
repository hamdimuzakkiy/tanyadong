<?php
	class pertanyaan extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function insert($data){						
			$this->db->insert('pertanyaan',$data);
			return true;			
		}

		function getWhere($data){
			$this->db->where($data);
			$res = $this->db->get('pertanyaan');			
			return $res->result();
		}
		
	}
