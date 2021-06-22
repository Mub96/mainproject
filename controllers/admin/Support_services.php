<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support_services extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Support_services_model','model');
		if($this->session->userdata('login')==false)
		{
			  header('location:index');
		}
	 }	
	
	public function index()
	{
	

	$data['title']="Support services";
	$data['sup_services']=$this->model->get_sup_services();
	$this->load->view('admin/header',$data);
	$this->load->view('admin/support_services/index',$data);
	$this->load->view('admin/footer');
	}
	
	public function add()
	{
	$data['title']="Add Support services";
	$this->load->view('admin/header',$data);
	$this->load->view('admin/support_services/add',$data);
	$this->load->view('admin/footer');
	}
	
	public function addsupport_services()
	{
		$this->model->addsupport_services();
	}
	
	public function edit($id=false)
	{
		$id=decode($id);
		$data['title']="Facilities";
		$data['subtitle']="Add Support services";
		$data['banneren']=$this->model->getbanneriden($id);
		$data['support_services']=$this->model->getsupport_servicesiden($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/support_services/edit',$data);
	    $this->load->view('admin/footer');
	}
	public function update()
	{
		
		$this->model->update();
	}

	public function delete()
	{
		$this->model->delete();
	}

}
