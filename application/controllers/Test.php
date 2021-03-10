<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('global_model');
	}
    
	public function index(){
		$this->load->view('test');
	}
	
	public function add(){
		if($this->input->post())
		{
            
			$data['fname']=$this->input->post('fname');
			$data['lname']=$this->input->post('lname');
			$data['email']=$this->input->post('mail');
			$data['password']=$this->input->post('password');

			$this->global_model->add('users',$data);
			echo "<script> alert('Post Successfully') </script>";
			$this->load->database();
            //$query['data']=$this->global_model->query('SELECT * FROM users');	
			$this->load->view('get_all');
				
		}else
		{
		   //echo "<script> alert('Something Went Wrong') </script>";
		   $this->load->view('test');
		}	
	}

	public function show()
	{
		$this->load->database();
        $this->global_model->select_alladd('users',$data);
		$data['data']=$this->global_model->get_all('users');
		$this->load->view('get_all',$data);
	}
}
?>


