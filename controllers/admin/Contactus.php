<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Contactus_model','model');
		if($this->session->userdata('login')==false)
		{
			  header('location:index');
		}
	 }	
	
	public function index()
	{
	$data['title']="Add Contact details";
	$data['news']=$this->model->getnews();
	$this->load->view('admin/header',$data);
	$this->load->view('admin/contactus/index',$data);
	$this->load->view('admin/footer');
	}
	
	public function addcontact()
	{
		$this->model->updatecontactus();
	}
/*	
	public function addnews()
	{
		//permissionadd('unit');
		$data['addnews']=$this->model->addnews();
	}
	
	public function edit($id=false)
	{
		$id=decode($id);
		$data['title']="News";
		$data['subtitle']="Edit News";
		$data['getnewsiden']=$this->model->getnewsiden($id);
		//$data['getnewsidmal']=$this->model->getnewsidmal($id);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/contactus/edit',$data);
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
*/



 public function avail_time()
 {
	 $data['title']=" Available Time";
	 
	 
	 
	 if($this->input->post('submit')=='submit')
	 
	 {
		$day=$this->input->post('day');
		
		$ar=array();
		 foreach($day as $d)
		 {
			
			$data=array(
			'day'=>$d,
			'start_time'=>$this->input->post('stime_'.$d),
			'end_time'=>$this->input->post('etime_'.$d)
			
			); 
			 
			$ar[]=$data; 
			 
			 }
			 $this->model->avail_time($ar); 
		 redirect('admin/contactus/avail_time');
		 
		 }
	 
	
	 $dayname=getDaysname();
	 $result=array();
	 foreach($dayname as $key=>$val)
	 {
	  	$time=$this->model->get_avail_time($key);
		if(!empty($time))
		{
		 $ar['id']=$time['id'];	
		 $ar['start_time']=$time['start_time'];
		 $ar['end_time']=$time['end_time'];	
			} 
			else
			{
				 $ar['id']='';
				 $ar['start_time']='';
				 $ar['end_time']='';
				
				}
		 
		 
           $result[$key]=$ar;		 
		 
		 }
	 $data['day']=$result;
	
	$this->load->view('admin/header',$data);
	$this->load->view('admin/contactus/avail_time',$data);
	$this->load->view('admin/footer'); 
	 
	 
	 }








}
