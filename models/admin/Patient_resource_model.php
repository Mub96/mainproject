<?php
class Patient_resource_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
	
	
	public function add($data)
	{
		
		  if(isset($data['id']))
		  {
			  $this->db->where('id',$data['id']);
			  $this->db->update('tbl_resource',$data);
			  
			  }
			  else{
		  $this->db->insert('tbl_resource',$data);
			  }
		
		}
	 public function getdetails(){
		 
		$this->db->select('*');
		$this->db->where('status',0);
		return $this->db->get('tbl_patientreg')->result();	
		 }
	 public function getApdetails(){
		$this->db->select('*');
		$this->db->where('status',0);
		return $this->db->get('tbl_opregister')->result();	
		 }
	 public function get_details($id){
		 $gid=dycrypt($id);
		 $this->db->select()->from('tbl_patientreg');
		 $this->db->where('id',$gid);
		 return $this->db->get()->row_array();
		 }
	 public function get_Apdetails($id){
		 $gid=dycrypt($id);
		 $this->db->select()->from('tbl_opregister');
		 $this->db->where('id',$gid);
		 return $this->db->get()->row_array();
		 }
	 public function addPatient($newreg){
		 $today=date('y-m-d');
		 $new=encrypt($newreg);
		 $max=maxplus('tbl_patientreg','id');
		 $opno="OPN".$max;
		 $data=array('opno'=>$opno,'value'=>$new,'crea_date'=>$today,'mod_date'=>$today);	
		 $this->db->insert('tbl_patientreg',$data);
	  	 //return $this->db->insert_id();	
		 }
	 public function updatePatient($newreg,$id){
		 //echo $id;
		 $today=date('y-m-d');
		 $new=encrypt($newreg);
		 $data=array('value'=>$new,'mod_date'=>$today);	
		 $this->db->where('id',$id);
		 $this->db->update('tbl_patientreg',$data);
		 }
	 public function addOp($newop){
		 $today=date('y-m-d');
		 $new=encrypt($newop);
		 $token=$this->input->post('token');
		 $doctor=$this->input->post('selDoctor');
		 $data=array('value'=>$new,'token'=>$token,'apnt_date'=>$today,'doctor'=>$doctor,'crea_date'=>$today,'mod_date'=>$today);	
		 $this->db->insert('tbl_opregister',$data);
		 }
	  public function get($id=null)
	  {
		$this->db->select('*')->from('tbl_resource');
		
		return $this->db->get()->row_array();	
	  }
	 public function get_new_appointment()
	{
		$this->db->select('*')->from('tbl_new_appointment');
		return $this->db->get()->result_array();	
	}
	
	
	
	public function new_appoint_pdf($id)
	{
		$id=dycrypt($id);
		$this->db->select('*')->from('tbl_new_appointment');
		$this->db->where('id',$id);
		return $this->db->get()->row_array();	
			
			
	}
	
     
	 public function delete($id)
	 {
		 $data=array('status'=>1);	
		 $this->db->where('id',$id);
		 $this->db->update('tbl_patientreg',$data);
		/*$this->db->where('id',$id);
		$this->db->delete('tbl_patientreg'); */
		 
		 }
	 public function doctorDetails(){
		 $this->db->select('*');
		 //$this->db->where('status','0');
		 return $this->db->get('tbl_doctors')->result();	
		 }
	 public function get_appointments($id){
		 $gid=dycrypt($id);
		 $this->db->select()->from('tbl_opregister');
		 $this->db->where('id',$gid);
		 return $this->db->get()->row_array();
		 }
	 public function updateOp($newreg,$id){
		 //echo $id;
		 $today=date('y-m-d');
		 $new=encrypt($newreg);
		 $data=array('value'=>$new,'mod_date'=>$today);	
		 $this->db->where('id',$id);
		 $this->db->update('tbl_opregister',$data);
		 }
	 public function deleteApt($id)
	 {
		 $data=array('status'=>1);	
		 $this->db->where('id',$id);
		 $this->db->update('tbl_opregister',$data);
	 }
	
	

}