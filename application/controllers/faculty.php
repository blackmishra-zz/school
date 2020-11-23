<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {

	public function index()
	{
		$email = $this->session->userdata('sess_email');
		if(isset($email))
		{
			$this->load->view('dashboard');
		}
		else
			$this->load->view('login');
	}

	public function import_data()
	{
		$this->load->view('marks_upload');
		if(isset($_POST["submit"]))
		{
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			$c = 0;//
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				$std_id = $filesop[0];
				$std_name = $filesop[1];
				$std_sub = $filesop[2];
				$tot_marks = $filesop[3];
				$marks_obt = $filesop[4];				
				$tmp=array('std_id'=>$std_id,'std_name'=>$std_name,'std_sub'=>$std_sub,'tot_marks'=>$tot_marks,'marks_obt'=>$marks_obt);
				if($c<>0){					
					$this->load->model('facultyM');
					$this->facultyM->saverecords($tmp);
				}
				$c = $c + 1;
			}
			echo "Sucessfully uploaded marks!";
				
		}
	}

	public function view_std()
	{
		//$this->load->view('std_list');
		$this->load->model('facultyM');
		$result['data']=$this->facultyM->displayrecords();
		$this->load->view('std_list',$result);
	}
}
