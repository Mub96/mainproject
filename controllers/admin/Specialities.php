<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specialities extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Specialities_model','model');
		if($this->session->userdata('login')==false)
		{
			  header('location:index');
		}
	 }	
	
	public function index()
	{
	$data['title']="Procedures";
	$data['specialities']=$this->model->getspecialities();
	$this->load->view('admin/header',$data);
	$this->load->view('admin/specialities/index',$data);
	$this->load->view('admin/footer');
	}
	public function add()
	{
	$data['title']="Add Procedures";
	$this->load->view('admin/header',$data);
	$this->load->view('admin/specialities/add',$data);
	$this->load->view('admin/footer');
	}
	
	public function addspecialities()
	{
		 //echo "yes";
		$this->model->addspecialities();
	}
	
	public function edit($id=false)
	{
		$id=dycrypt($id);
		$data['title']="Procedures";
		$data['subtitle']="Edit Procedures";
		$data['getspecialitiesiden']=$this->model->getspecialitiesiden($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/specialities/edit',$data);
	    $this->load->view('admin/footer');
	}
	public function update()
	{
		//echo "dfgfd";
		$this->model->update();
	}

	public function delete()
	{
		$this->model->delete();
	}

}
