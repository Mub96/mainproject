<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Fasttrack_colon extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Fasttrack_model');
	 }	
	 
	
	 
	public function index()
	{
		$data['title']='Fasttrack colonoscopy';
		$data['list']=$this->Fasttrack_model->getfasttrack();
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/fasttrack_colon/list',$data);
		$this->load->view('admin/footer');	 
		
	}
	
	
	public function add()
	{
		$data['title']='Fasttrack colonoscopy';
		
		 $this->load->view('admin/header',$data);
		$this->load->view('admin/fasttrack_colon/add',$data);
		$this->load->view('admin/footer');	 
		
	}
	
	
	public function addfasttrack()
	{
		
		
		$this->Fasttrack_model->addfasttrack();
		
		
		}
	
	
	
	public function edit($id)
	{
		$data['title']='Fasttrack colonoscopy';
		$data['edit']=$this->Fasttrack_model->getfasttrackByid($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/fasttrack_colon/edit',$data);
		$this->load->view('admin/footer');	 
		
		}
	
	public function editfasttrack()
	{
		
		
		$this->Fasttrack_model->update();
		
		
		}
	
	public function remove($id)
	{
		
		$id=dycrypt($id);
		$this->Fasttrack_model->delete($id);
		redirect('admin/fasttrack_colon');
		
		}
	
	
	
}
