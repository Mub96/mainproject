<?php
class Appointment_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
      
	
	
	public function get_appoint_list()
	{
		
		$this->db->select()->from('tbl_appointment');
		return $this->db->get()->result_array();
		
		
		}
	
	
	 public function appointment($id)
	 {
		$ap_id=dycrypt($id);
		$this->db->select('*')->from('tbl_appointment');
		$this->db->where('id',$ap_id);
		return $this->db->get()->row_array();
		
		 
		 }
	
	 public function delete($id)
	 {
		
		
		$this->db->where('id',$id);
		$this->db->delete('tbl_appointment');
		
		 
		 }
	
	
	
	
	 public function get_general_appointment()
	 {
		
		
		$this->db->select()->from('tbl_general_appointment');
		return $this->db->get()->result_array();
		
		 
		 }
	
	
	
	
	 public function get_pdf($id)
	 {
		
		$gid=dycrypt($id);
		$this->db->select()->from('tbl_general_appointment');
		$this->db->where('id',$gid);
		return $this->db->get()->row_array();
		
		 
		 }
	
	

}