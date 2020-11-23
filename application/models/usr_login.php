<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usr_login extends CI_Model {
	
	public function user_login_chk($data)
	{
		
		$tmp = $this->db->get_where('user_reg',$data);
		$row = $tmp->result();			
		
		if($tmp->num_rows()>0){			
			echo '<script>alert("Login Successful")</script>'; 		

			//$usr_count = $this->db->get('user_reg', )
			$usr_count = $this->db->count_all_results('user_reg');	
			$this->session->set_userdata('user_count', $usr_count);
			
			$this->session->set_flashdata('flash_message', 'Login Successful');	
			$this->session->set_userdata('sess_email', $row[0]->email);
			$this->session->set_userdata('sess_pwd', $row[0]->password);
			$this->session->set_userdata('sess_name',$row[0]->name);
			$this->session->set_userdata('login_type', 'admin');
			$this->session->set_userdata('admin_login', '1');
			$this->session->set_userdata('admin_id', $row[0]->admin_id);			
		}
		if($tmp->num_rows()==0)
		{
			echo '<script>alert("Login Failed")</script>'; 
			$this->session->set_flashdata('flash_message', 'Login Failed');			
		}
		redirect(base_url().'home/pst_login');
	}

	public function user_reg($data)
	{
		$this->db->insert('user_reg',$data);
		echo '<script>alert("User registered successfully")</script>'; 
		//redirect(base_url().'home/chk_login');
	}

}
