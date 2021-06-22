<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Appointment_model');
		
		
		
	 }
	 
	 
	 	
	public function index()
	{
		$data['title']='Appointment';
		$data['appoint_list']=$this->Appointment_model->get_appoint_list();
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/appointment/appointment_list',$data);
		$this->load->view('admin/footer');	 	 
		
	}
	
	public function appointment_detail($id)
	{
		$data['title']='Appointment';
		$detail=$this->Appointment_model->appointment($id);
		$value=dycrypt($detail['detail']);
		$ar=explode('/',$value);
		
		$data['appointment']=$ar;
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/appointment/appointment_detail',$data );
		$this->load->view('admin/footer');	 	 
		
	}
	
	
	public function remove($id)
	{
		$id=dycrypt($id);
		$this->Appointment_model->delete($id);
		redirect('admin/appointment');
		
		}
	
	
	
	public function general_appointment()
	{
		$data['title']='Appointment';
		$data['appoint_list']=$this->Appointment_model->get_general_appointment();
	    $this->load->view('admin/header',$data);
		$this->load->view('admin/appointment/general_appointment_list',$data);
		$this->load->view('admin/footer');	 	 
		
	}
	
	public function general_appointment_pdf($id)
	{
		/*$data['title']='Appointment';
		/*$detail=$this->Appointment_model->appointment($id);
		$value=dycrypt($detail['detail']);
		$ar=explode('/',$value);
		
		$data['appointment']=$ar;
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/appointment/general_appointment_detail');
		$this->load->view('admin/footer');	 */	 
		
		
		 $detail=$this->Appointment_model->get_pdf($id);
		 $value=dycrypt($detail['description']);
		$ar=explode('/',$value);
		
		$data['appointment']=$ar;
		
        $html = $this->load->view('admin/appointment/generalpdf', $data, true);
		$path = "general.pdf";
        $this->load->library('m_pdf');
		$this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($path, "D");
		//exit;
		
	}
	
	
	
	
	
}
