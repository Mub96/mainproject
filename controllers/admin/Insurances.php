<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurances extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Insurance_model');
	 }	
	 
	
	 
	public function index()
	{
		$data['title']='Insurances';
		$data['content']=$this->Insurance_model->getcontent();
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/insurance/content',$data);
		$this->load->view('admin/footer');	 
		
	}
	
	
	
	public function addcontent()
	{
		
		
		$this->Insurance_model->addcontent();
		
		
		}
	
	
	
	
	public function add()
	{
		$data['title']='Insurances';
		
		 $this->load->view('admin/header',$data);
		$this->load->view('admin/insurance/insuranceadd');
		$this->load->view('admin/footer');	 
		
	}
	
	
	
	
	
	
	/*public function edit($id)
	{
		$data['title']='Fasttrack colonoscopy';
		$data['edit']=$this->Fasttrack_model->getfasttrackByid($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/fasttrack_colon/edit',$data);
		$this->load->view('admin/footer');	 
		
		}*/
	
	/*public function editfasttrack()
	{
		
		
		$this->Fasttrack_model->update();
		
		
		}
	*/
	/*public function remove($id)
	{
		
		$id=dycrypt($id);
		$this->Fasttrack_model->delete($id);
		redirect('admin/fasttrack_colon');
		
		}
	*/
	
	
}
