<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}

	public function pst_login()
	{
		$email = $this->session->userdata('sess_email');
		if(isset($email))
		{
			$this->load->view('dashboard');
		}
		else
			$this->load->view('login');
	}

	public function chk_login()
	{
		$this->load->view('login');
		$email = $this->input->post('email');		
		$password = $this->input->post('password');
		$data = array('email'=>$email, 'password'=>$password);	
		$this->load->model('usr_login');
		$this->usr_login->user_login_chk($data);
	}

	public function logout()
	{
		/*unset($_SESSION['sess_email']);
		unset($_SESSION['sess_name']);
		unset($_SESSION['sess_password']);*/
		session_destroy();
		$this->load->view('login', 'refresh');
	}
	
	public function register()
	{
		$this->load->view('reg');
		//echo "I am inside reg function";
		
		if(isset($_POST["submit"])) 
		{
			/*echo "I am inside submit function";
			exit;*/
			$name = $this->input->post('name');
			$email = $this->input->post('email');		
			$password = $this->input->post('password');
			$data = array('name'=>$name, 'email'=>$email, 'password'=>$password);	
			/*print_r($data);
			exit;*/
			$this->load->model('usr_login');
			$this->usr_login->user_reg($data);
		}
	}

	
}
