<?php
class About_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
	
	
	public function add_meetthe_doctor($data)
	{
		
		  if(isset($data['id']))
		  {
			  $this->db->where('id',$data['id']);
			  $this->db->update('tbl_doctors',$data);
			  
			  }
			  else{
		  $this->db->insert('tbl_doctors',$data);
			  }
		
	}
	public function add_login($data)
	{
	   $this->db->insert('tbl_admin',$data);
	}
	
	  public function get_doctors($id=null)
	{
		$this->db->select('*')->from('tbl_doctors');
		if($id!=null)
		{
			$res=$this->db->where('id',$id)->get()->row_array();
			
			}
		else
		{
		$res=$this->db->get()->result_array();	
			
			}
			return $res;
		
		}
		
	
	 public function meet_the_doctor_delete($id)
	 {
		 $this->db->where('id',$id);
	     $this->db->delete('tbl_doctors');
		 
		 }
	
	
	public function add_meetthe_staff($data)
	{
		
		  if(isset($data['id']))
		  {
			  $this->db->where('id',$data['id']);
			  $this->db->update('tbl_staff',$data);
			  
			  }
			  else{
		  $this->db->insert('tbl_staff',$data);
			  }
		
		}
	
	
	
	
	public function get_staffs($id=null)
	{
		$this->db->select('*')->from('tbl_staff');
		if($id!=null)
		{
			$res=$this->db->where('id',$id)->get()->row_array();
			
			}
		else
		{
		$res=$this->db->get()->result_array();	
			
			}
			return $res;
		
		}
  
  
  
   public function meet_the_staff_delete($id)
	 {
		 $this->db->where('id',$id);
	     $this->db->delete('tbl_staff');
		 
		 }
  
   public function add_office($data)
   {
	   
	   $this->db->insert('tbl_office',$data);
	   
	   
	   }
  
  public function get_office()
  {
	 $this->db->select('*')->from('tbl_office'); 
	 return $this->db->get()->result_array();
	  
	  }
	  
	  
	 public function delete_office($id)
	 {
		 
		 $this->db->where('id',$id);
	     $this->db->delete('tbl_office');
		 
		 
		 
		 } 
	  
	

}