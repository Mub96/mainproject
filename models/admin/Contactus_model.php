<?php
class Contactus_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
      public function getnews()
{
	$array=array('tbl_contactus.status'=>0);
	$this->db->where($array);
	$this->db->select('tbl_contactus.*');
	
	$this->db->from('tbl_contactus');
	return $rows=$this->db->get()->result();
	//return $rows=$this->db->get('tbl_category')->result();*/
}
	public function updatecontactus() {
		$max=maxplus('tbl_contactus', 'c_uid');
		$this->db->where('status',0);
		$this->db->delete('tbl_contactus');
		/*		$id=decode($this->input->post('txthidden'));*/
		$today= date("y-m-d");
		$hspaddress=$this->input->post('hspaddress');
		$hspphn=$this->input->post('hspphn');
		$hspemail=$this->input->post('hspemail');
		$hspfb=$this->input->post('hspfb');
		$hsptw=$this->input->post('hsptw');
		$hspgplus=$this->input->post('hspgplus');
		$hspyout=$this->input->post('hspyout');
		$data=array('c_haddress'=>$hspaddress,'c_hphone'=>$hspphn,'c_hemail'=>$hspemail,'c_hfb'=>$hspfb,'c_htw'=>$hsptw,'c_hgp'=>$hspgplus,'c_hyout'=>$hspyout,'created_date'=>$today,'modified_date'=>$today,'status'=>0);
		//echo json_encode($data);
		
		
		
		$this->db->insert('tbl_contactus',$data);
	}
	
	
	
	
	public function avail_time($ar)
	{
		
		$this->db->empty_table('tbl_avail_time');
		foreach($ar as $a)
		{
		$this->db->insert('tbl_avail_time',$a);
		
		}
		
		}
	
	
	public function get_avail_time($key)
	{
	$this->db->select('')->from('tbl_avail_time');
	$this->db->where('day',$key);
	return $this->db->get()->row_array();	
		
		
		}
	
	

}