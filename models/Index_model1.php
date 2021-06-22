<?php
class Index_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
    
	
	
	public function add_contact($data)
	{
		$this->db->insert('tbl_contact',$data);
		
			}
	
	
	public function avail_time()
	{
		
		$this->db->select('*')->from('tbl_avail_time');
	 $res= $this->db->get()->result_array();
		
		return $res;
		}
		
		
	public function get_contact()
	{
		
		$this->db->select('*')->from('tbl_contactus');
	 $res= $this->db->get()->row_array();
		
		return $res;
		
		
		}	
		
  public function who_r_we()
  {
	  
	 $this->db->select()->from('tbl_who_r_we');
	 $res=$this->db->get()->row_array(); 
	  
	  return $res;
	  
	  }		
	
	
	public function request_appointment($st)
	{
		
		$enc=encrypt($st);
		
		$data=array('detail'=>$enc);
		
		$this->db->insert('tbl_appointment',$data);
		
		return $this->db->insert_id();
		
		}
		
		
  public function general_appointment($appoint)
  {
	  
	  $des=encrypt($appoint);
	  $data=array('description'=>$des);
	  $this->db->insert('tbl_general_appointment',$data);
	  return $this->db->insert_id();
	  
	  }		
		
	public function new_appointment($newapp)
	{
	$new=encrypt($newapp);
	$data=array('value'=>$new);	
	$this->db->insert('tbl_new_appointment',$data);
	  return $this->db->insert_id();	
		
		}
	
		
		
		
		public function get_appointment($id)
		{
			$this->db->select('*')->from('tbl_appointment');
			$this->db->where('id',$id);
			return $this->db->get()->row_array();
			
			
			
			}
			
			
			public function get_new_appoint($id)
		{
			$this->db->select('*')->from('tbl_new_appointment');
			$this->db->where('id',$id);
			return $this->db->get()->row_array();
			
			
			
			}
		
			
			
		
		
		public function get_generalappointment($id)
		{
			$this->db->select('*')->from('tbl_general_appointment');
			$this->db->where('id',$id);
			return $this->db->get()->row_array();
			
			
			
			}
		
		
		
		
		
		
		public function get_content($id)
		{
			
			$this->db->select('*')->from('tbl_support_services');
			$this->db->where('sup_services_id',$id);
			return $this->db->get()->row_array();
			
			
			
			}
			
			
			
			
			 public function insurance_content()
           {
	
	$this->db->select('tbl_insurance_content.*');
	$this->db->from('tbl_insurance_content');
	return $rows=$this->db->get()->row_array();
	
     }
	 
	 
	 
	 public function get_general_appoint($id)
	 {
		 
		 $this->db->select('tbl_general_appointment.*');
	$this->db->from('tbl_general_appointment');
	$this->db->where('id',$id);
	return $rows=$this->db->get()->row_array();
		 
		 
		 
		 }
		
	   
  
}