<?php
class Header_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
    
	
	public function get_fasttrack()
	{
		
		$this->db->select('title,fasttrack_id')->from('tbl_fasttrack_colon');
		return $this->db->get()->result_array();
		
		
		
		}
		
		
		
		
		public function get_service()
		{
			
		$this->db->select('*')->from('tbl_support_services');
		 return $this->db->get()->result_array();	
			
			
			}
			
			
			
			
	 public function get_contact_address()
	    {
		 
		 $this->db->select('*')->from('tbl_contactus');
		 return $this->db->get()->row_array();
		 
		 
		   }		
	
		   
  
}