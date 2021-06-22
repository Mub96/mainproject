<?php
class Fasttrack_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
    
	
	public function fasttrackdetails($id)
	{
		$fasttrack_id=dycrypt($id);
		return $this->db->select('*')->from('tbl_fasttrack_colon')->where('fasttrack_id',$fasttrack_id)->get()->row_array();
		
		}
	
	
	public function get_fasttrack($id)
	{
		$fasttrack_id=dycrypt($id);
		$this->db->select('title,fasttrack_id')->from('tbl_fasttrack_colon');
		$this->db->where('fasttrack_id !=',$fasttrack_id);
		$res=$this->db->get();
	     return	$res->result_array();
		
		
		}
	
	   
  
}