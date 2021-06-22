<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  About extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/About_model');
	 }	
	 
	
	 
	public function index()
	{
		$data['title']='Meet the doctor';
		$data['list']=$this->About_model->get_doctors();
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/about/meet_the_doctor/meet_the_doctor_list',$data);
		$this->load->view('admin/footer');	 
		
	}
	
	
	public function meet_the_doctor()
	{
		$data['title']='Meet the doctor';
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('designation','Designation','required');
		$this->form_validation->set_rules('experience','Experience','required');
		
		if($this->form_validation->run() == FALSE)
		{
			
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/about/meet_the_doctor/meet_the_doctor',$data);
		$this->load->view('admin/footer');	 
			
			}
		else
		{
		
		$config['upload_path'] = './images/resource/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			
            }
          	
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path='images/uploads/dummy.png';		
			}
		
		
		
		
		
		 $data=array(
		 'name'=>$this->input->post('name'),
		 'designation'=>$this->input->post('designation'),
		 'content'=>$this->input->post('content'),
		 'experience'=>$this->input->post('experience'),
		 'image'=>$path,
		 'email'=>$this->input->post('email'),
		 'facebook'=>$this->input->post('facebook'),
		 'twitter'=>$this->input->post('twitter')
		 );
		 
		
			
			
			$this->About_model->add_meetthe_doctor($data);
			 $max=maxVal('tbl_doctors','id');
			 //echo $max;
			$logdata=array(
		 					'username'=>$this->input->post('email'),
		 					'password'=>$this->input->post('cpwd'),
		 					'user_type'=>3,
							'userid'=>$max,
							'status'=>0
		 					);
			$this->About_model->add_login($logdata);	
						
			$this->session->set_flashdata('msg','<div class="alert alert-success text-left"> Doctor Added Successfully</div>');
			redirect('admin/about');
			
			}
	}
	
	
	
	
	public function meet_the_doctor_edit($id)
	{
		
	
	$data['title']='Meet the doctor';
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('designation','Designation','required');
		$this->form_validation->set_rules('experience','Experience','required');
		
		if($this->form_validation->run() == FALSE)
		{
			
		$id=dycrypt($id);	
			
		$data['id']=$id;
		$data['edit']=$this->About_model->get_doctors($id);	
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/about/meet_the_doctor/meet_the_doctor_edit',$data);
		$this->load->view('admin/footer');	 
			
			}
		else
		{
		
		$img=$this->input->post('image');
		
		$config['upload_path'] = './images/resource/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			
            }
          	
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path=$img;		
			}
		
		
		
		
		
		 $data=array(
		 'id'=>$id,
		 'name'=>$this->input->post('name'),
		 'designation'=>$this->input->post('designation'),
		 'content'=>$this->input->post('content'),
		 'experience'=>$this->input->post('experience'),
		 'image'=>$path,
		 'email'=>$this->input->post('email'),
		 'facebook'=>$this->input->post('facebook'),
		 'twitter'=>$this->input->post('twitter')
		 );
			
			
			$this->About_model->add_meetthe_doctor($data);
			$this->session->set_flashdata('msg','<div class="alert alert-success text-left">Doctor Updated Successfully</div>');
			redirect('admin/about');
			
			}
	}
	
	
  	public function meet_the_doctor_delete($id)
	{
		$id=dycrypt($id);
		$this->About_model->meet_the_doctor_delete($id);
		$this->session->set_flashdata('msg','<div class="alert alert-success text-left"> Staff Deleted Successfully</div>');
		redirect('admin/about');
	
	}
	
	
	
	public function meet_the_staffs_view()
	{
		$data['title']='Meet the staffs';
		$data['list']=$this->About_model->get_staffs();
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/about/meet_the_staff/meet_the_staff_list',$data);
		$this->load->view('admin/footer');	 
		
	}
	
	
	public function meet_the_staffs()
	{
		$data['title']='Meet the staffs';
		
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('designation','Designation','required');
		$this->form_validation->set_rules('experience','Experience','required');
		
			if($this->form_validation->run() == FALSE)
		{
		
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/about/meet_the_staff/meet_the_staff');
		$this->load->view('admin/footer');	 
		}
		
		
		else
		{
		
		$config['upload_path'] = './images/resource/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			
            }
          	
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path='images/uploads/dummy.png';		
			}
		
		
		
		
		
		 $data=array(
		 'name'=>$this->input->post('name'),
		 'designation'=>$this->input->post('designation'),
		 'content'=>$this->input->post('content'),
		 'experience'=>$this->input->post('experience'),
		 'image'=>$path,
		 'email'=>$this->input->post('email'),
		 'facebook'=>$this->input->post('facebook'),
		 'twitter'=>$this->input->post('twitter')
		 );
			
			
			$this->About_model->add_meetthe_staff($data);
			
			$max=maxVal('tbl_staff','id');
			 //echo $max;
			$logdata=array(
		 					'username'=>$this->input->post('email'),
		 					'password'=>$this->input->post('cpwd'),
		 					'user_type'=>4,
							'userid'=>$max,
							'status'=>0
		 					);
			$this->About_model->add_login($logdata);	
			
			$this->session->set_flashdata('msg','<div class="alert alert-success text-left"> Staff Added Successfully</div>');
			
			
			redirect('admin/about/meet_the_staffs_view');
			
			}
		
		
		
		
	}
	
	
	
	
	
	
	 public function meet_the_staffs_edit($id)
	{
		$data['title']='Meet the staffs';
		
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('designation','Designation','required');
		$this->form_validation->set_rules('experience','Experience','required');
		
			if($this->form_validation->run() == FALSE)
		  {
		
		$id=dycrypt($id);
		$data['id']=$id;
		$data['edit']=$this->About_model->get_staffs($id);	
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/about/meet_the_staff/meet_the_staff_edit',$data);
		$this->load->view('admin/footer');	 
		}
		
		
		else
		{
		$img=$this->input->post('img');
		$config['upload_path'] = './images/resource/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			
            }
          	
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path=$img;		
			}
		
		
		
		
		
		 $data=array(
		 'id'=>$id,
		 'name'=>$this->input->post('name'),
		 'designation'=>$this->input->post('designation'),
		 'content'=>$this->input->post('content'),
		 'experience'=>$this->input->post('experience'),
		 'image'=>$path,
		 'email'=>$this->input->post('email'),
		 'facebook'=>$this->input->post('facebook'),
		 'twitter'=>$this->input->post('twitter')
		 );
			
			
			$this->About_model->add_meetthe_staff($data);
			
			$this->session->set_flashdata('msg','<div class="alert alert-success text-left"> Staff Updated Successfully</div>');
			
			
			redirect('admin/about/meet_the_staffs_view');
			
			}
		
		
		
		
	}
	
	
	public function meet_the_staff_delete($id)
	{
		
	
	$id=dycrypt($id);
		$this->About_model->meet_the_staff_delete($id);
			$this->session->set_flashdata('msg','<div class="alert alert-success text-left"> Staff Deleted Successfully</div>');
	redirect('admin/about/meet_the_staffs_view');
	
		
		
		}
	
	
	
	public function office()
	{
		$data['title']='Office';
		$data['list']=$this->About_model->get_office();
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/about/office_list',$data);
		$this->load->view('admin/footer');	 
		
	}
	
	
	
	public function add_office()
	{
		
		
		if($this->input->post('btnsubmit')=='submit')
		{
			
		    $config['upload_path'] = './images/resource/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			
            }
          	
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path='images/uploads/dummy.png';		
			}
		
		
			
		$data=array(
		'image'=>$path
		);	
			
		$this->About_model->add_office($data);	
		$this->session->set_flashdata('msg','<div class="alert alert-success text-left"> Image Added Successfully</div>');
	redirect('admin/about/office');	
			
			}
		
		
		$data['title']='Office';
		
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/about/office');
		$this->load->view('admin/footer');
		
		
	}
	
	
	
	public function delete_office($id)
	{
		$id=dycrypt($id);
		$this->About_model->delete_office($id);
		$this->session->set_flashdata('msg','<div class="alert alert-success text-left"> Image Deleted Successfully</div>');
	redirect('admin/about/office');
	
		
		
		}
	
	
	
	
	
	
	
	
	
}
