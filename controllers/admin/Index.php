<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Index extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Index_model','model');
	 }	
	public function index()
	{
		 
		$data['title']='Login';	
		$this->load->view('admin/login',$data);
	}
	
	public function home()
	{	
	    if($this->session->userdata('login')==false)
		{
			  header('location:index');
		}
		$data['title']='Home';	
		/*$data['requests']=$this->model->latestrqsts();	
		$data['request']=$this->model->latestrequest();*/
		//var_dump($data['request']);
		/*$data['permissionbank']=permissioncontrollern('bankacc');
		$data['permissionexpence']=permissioncontrollern('expence');
		$data['bank']=$this->model->getbank();
		$data['expense']=$this->model->getexpense();*/
	//	var_dump($data['expense']);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/footer');
	}
	
	public function login()
	{
	   $this->model->login();	
	}
	
}
