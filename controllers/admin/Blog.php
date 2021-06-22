<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Blog extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Blog_model');
	 }	
	 
	
	 
	public function index()
	{
		$data['title']='Blog';
		$data['list']=$this->Blog_model->getblog();
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/blog/list',$data);
		$this->load->view('admin/footer');	 
		
	}
	
	
	public function add()
	{
		$data['title']='Blog';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/blog/add',$data);
		$this->load->view('admin/footer');	 
		
	}
	
	
	public function addblog()
	{
		
		
		$this->Blog_model->addblog();
		
		
		}
	
	
	
	public function edit($id)
	{
		$data['title']='Blog';
		$data['edit']=$this->Blog_model->getblogByid($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/blog/edit',$data);
		$this->load->view('admin/footer');	 
		
		}
	
	public function editblog()
	{
		
		
		$this->Blog_model->update();
		
		
		}
	
	public function remove($id)
	{
		
		$id=dycrypt($id);
		$this->Blog_model->delete($id);
		redirect('admin/blog');
		
		}
	
	
	
}
