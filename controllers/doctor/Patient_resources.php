<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_resources extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('doctor/Patient_resource_model');
	 }
	public function index()
	{
		$data['title']='Resources' ;
		$data['content']=$this->Patient_resource_model->get();
	    $this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/new_patient',$data);
		$this->load->view('admin/footer');	 	
	}
	public function patientregistration(){
		$data['title']='Patient Registration' ;
	    $this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/patientregistration',$data);
		$this->load->view('admin/footer');	
		}
	public function patientlist(){
		$data['title']='Patient List' ;
		$data['details']=$this->Patient_resource_model->getdetails();
	    $this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/patient_list',$data);
		$this->load->view('admin/footer');
		}
	public function editPatient($id=false){
		$data['title']='Edit Patient' ;
		$detail=$this->Patient_resource_model->get_details($id);
		$value=dycrypt($detail['value']);
		$ar=explode('/',$value);
		$data['details']=$ar;
		$this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/patientedit',$data);
		$this->load->view('admin/footer');	
		}
	public function addpatient(){
	
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$address=$this->input->post('address');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$zipcode=$this->input->post('zipcode');
		$mobno=$this->input->post('mobno');
		$email=$this->input->post('email');
		$condition=$this->input->post('condition');
		$max=maxplus('tbl_patientreg','id');
		
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
			
		//echo $path;	
		
		$data=array($fname,$lname,$city,$address,$state,$zipcode,$mobno,$email,$condition,$path,$max);
		$newreg=implode('/',$data);
		
		$this->Patient_resource_model->addPatient($newreg);
		}
	public function updatePatient(){
		
	
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$address=$this->input->post('address');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$zipcode=$this->input->post('zipcode');
		$mobno=$this->input->post('mobno');
		$email=$this->input->post('email');
		$condition=$this->input->post('condition');
		$id=$this->input->post('hdnId') ;
		
		 
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
			
		//echo $path;	
		
		$data=array($fname,$lname,$city,$address,$state,$zipcode,$mobno,$email,$condition,$path,$id);
		$newreg=implode('/',$data);
		 
	    //echo $newreg;
		
		$this->Patient_resource_model->updatePatient($newreg,$id);
		
		}
	public function add()
	{
		$id=$this->input->post('id');
		
		if($id!='')
		{
			$data=array(
			'id'=>$id,
		    'content'=>$this->input->post('content')
		);
			
			}
			else{
		
		$data=array(
		'content'=>$this->input->post('content')
		);
		
			}
			
			
			
			
		$this->Patient_resource_model->add($data);
		redirect('admin/patient_resources');
		}
	
	public function appointment()
	{
		$data['title']='Appointment' ;
		$data['list']=$this->Patient_resource_model->get_new_appointment();
	    $this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/appointment_list',$data);
		$this->load->view('admin/footer');	 	
	}
	
	public function newpatient(){
		$data['title']='Patient Registration' ;
		//$data['list']=$this->Patient_resource_model->get_new_appointment();
	    $this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/patientregistration',$data);
		$this->load->view('admin/footer',$data);	
		}
	public function allReports(){
		$data['title']='Report List' ;
		$data['details']=$this->Patient_resource_model->getallReports();
	    $this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/allReports',$data);
		$this->load->view('admin/footer');
		}
	public function get_pdf($id)
	{
		$detail=$this->Patient_resource_model->new_appoint_pdf($id);
		 $value=dycrypt($detail['value']);
		$ar=explode('/',$value);
		
		$data['appointment']=$ar;
		
        $html = $this->load->view('admin/patient_resource/pdf', $data, true);
		$path = "New appointment.pdf";
        $this->load->library('m_pdf');
		$this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($path, "D");
		
		
		
		}
	public function remove($id)
	{
		
		$id=dycrypt($id);
		$this->Patient_resource_model->delete($id);
		redirect('doctor/patient_resources/patientlist');
	}
	public function viewPatient($id){
		$data['title']='View Patient' ;
		$detail=$this->Patient_resource_model->get_details($id);
		$value=dycrypt($detail['value']);
		$ar=explode('/',$value);
		$data['details']=$ar;
		$data['opnos']= $detail['opno'];
		$data['doctor']=$this->Patient_resource_model->doctorDetails();
		$this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/patientview',$data);
		$this->load->view('admin/footer');	
		}
	public function viewallQuery($id){
		$data['title']='View Patient' ;
		$detail=$this->Patient_resource_model->getallQuery($id);
		$value=dycrypt($detail['value']);
		$ar=explode('/',$value);
		$data['id']=$detail['id'];
		$data['details']=$ar;
		$data['opnos']= $detail['opno'];
		$data['doctor']=$this->Patient_resource_model->doctorDetails();
		$this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/appointReport',$data);
		$this->load->view('admin/footer');	
		}
	public function bookOp(){
		
	
		$opno=$this->input->post('hdnOp');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$doctor=$this->input->post('selDoctor');
		$token=$this->input->post('token');
		$treatment=$this->input->post('treatment');
		$name=$fname.$lname;
		$data=array($opno,$name,$doctor,$token,$treatment);
		$newreg=implode('/',$data);
		//echo $newreg;
		
		$this->Patient_resource_model->addOp($newreg);
		
		}
	public function appointList(){
		$data['title']='Appointment List' ;
		$data['details']=$this->Patient_resource_model->getApdetails();
		//var_dump($data['details']);
	    $this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/appoint_list',$data);
		$this->load->view('admin/footer');
		}
	public function editAppointment($id=false){
		$data['title']='Edit Appointments' ;
		$detail=$this->Patient_resource_model->get_Apdetails($id);
		$data['doctor']=$this->Patient_resource_model->doctorDetails();
		$value=dycrypt($detail['value']);
		$ar=explode('/',$value);
		$data['id']= $detail['id'];
		$data['details']=$ar;
		//var_dump($data['details']);
		$this->load->view('admin/header',$data);
		$this->load->view('doctor/patient_resource/appointEdit',$data);
		$this->load->view('admin/footer');	
		}
	public function updateOp(){
		$id=$this->input->post('hdnId');
		$opno=$this->input->post('hdnOp');
		$fname=$this->input->post('fname');
		$doctor=$this->input->post('selDoctor');
		$token=$this->input->post('token');
		$treatment=$this->input->post('treatment');
		$data=array($opno,$fname,$doctor,$token,$treatment);
		$newreg=implode('/',$data);
		$this->Patient_resource_model->updateOp($newreg,$id);
		}
	public function removeApt($id){
		$id=dycrypt($id);
		$this->Patient_resource_model->deleteApt($id);
		redirect('doctor/patient_resources/appointList');
		}
	public function patientConsultation(){
		$opno=$this->input->post('hdnOp');
		$name=$this->input->post('fname');
		$doctor=$this->input->post('selDoctor');
		$token=$this->input->post('token');
		$treatment=$this->input->post('treatment');
		$symptoms=$this->input->post('symptoms');
		$decisions=$this->input->post('decisions');
		$prescriptions=$this->input->post('prescriptions');
		$tests=$this->input->post('tests');
		$data=array($opno,$name,$doctor,$token,$treatment,$symptoms,$decisions,$prescriptions,$tests);
		$newreg=implode('/',$data);
		//echo $newreg;
		
		$this->Patient_resource_model->patientConsultation($newreg);
		}
	
	
	
	
	
}
