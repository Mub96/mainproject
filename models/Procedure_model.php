<?php
class Procedure_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
    
	
	public function procdetail($id)
	{
		$spe_id=dycrypt($id);
		return $this->db->select('*')->from('tbl_specialities')->where('spe_id',$spe_id)->get()->row_array();
		
		}
	
	
	public function get_procedures($id)
	{
		$spe_id=dycrypt($id);
		$this->db->select('spe_title,spe_id')->from('tbl_specialities');
		$this->db->where('spe_id !=',$spe_id);
		$res=$this->db->get();
	     return	$res->result_array();
		
		
		}
	
	   
  
}