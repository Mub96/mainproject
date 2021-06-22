<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Aboutus_model','model');
		if($this->session->userdata('login')==false)
		{
			  header('location:index');
		}
	 }	
	
	public function index()
	{
	

	$data['title']="About Us";
	$data['aboutusen']=$this->model->getaboutusen();
	//$data['aboutusmal']=$this->model->getaboutusmal();
	$this->load->view('admin/header',$data);
	$this->load->view('admin/aboutus/add',$data);
	$this->load->view('admin/footer');
	}
	
	
	
	public function addaboutus()
	{
		$data['addaboutus']=$this->model->addaboutus();
	}
	
	
	public function who_are_we()
	{
		
		$this->form_validation->set_rules('content','Content','required');
		if($this->form_validation->run()==FALSE)
		{
	$data['title']="Who are we";
	$data['get']=$this->model->get_who_r_we();	
	$this->load->view('admin/header',$data);
	$this->load->view('admin/aboutus/who_r_we',$data);
	$this->load->view('admin/footer');
			
			
			}
		
		else
		{
		$id=$this->input->post('id');
		if($id!='')
		{
			
			$data=array(
			'id'=>$id,
		'content'=>$this->input->post('content')
		
		
		);	
			
			
			}
			else
			{
			
		$data=array(
		'content'=>$this->input->post('content')
		
		
		);
			}
			
		$this->model->who_are_we($data);	
			redirect('admin/aboutus/who_are_we');
			}
		
	
		
		
		}
	
	


}
