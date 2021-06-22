<?php
class Index_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
      
	  public function login()
	  {
		  	  $user    = $this->input->post('txtusername');
         $password  =  $this->input->post('txtpassword');
		 $array=array('username'=>$user,'password'=>$password,'status'=>0);
                $this->db->where($array);
				$query = $this->db->get('tbl_admin');
				$result=$query->row();
				//var_dump($result);
				if($query->num_rows() >0){
					 if($result->user_type==3){
						 $array=array('doctor' =>true,'username' =>$user,'user'=>$user,'user_type' =>$result->user_type,'userid'=>$result->userid,'login'=>true);
						$this->session->set_userdata($array);
						echo 3;
						 }
					 elseif($result->user_type==4){
						 $array=array('staff' =>true,'username' =>$user,'user'=>$user,'user_type' =>$result->user_type,'userid'=>$result->userid,'login'=>true);
						$this->session->set_userdata($array);
						echo 4;
						 }
					 elseif($result->user_type==1){
						$array=array('admin' =>true,'username' =>$user,'user'=>$user,'Usergroup' =>50,'login'=>true,'user_type'=>$result->user_type,);
						$this->session->set_userdata($array);
						echo 1;
					 }
			} if($query->num_rows()=='null'){
				echo 2;
				}
	  }
	  
    public function latestrqsts(){
	 	$userid=$this->session->userdata('user');
		//return $userid;
		$array=array('tbl_request.unithead'=>$userid,'tbl_requeststatus.status'=>0);
		$this->db->where($array);
		$this->db->order_by("tbl_request.date","desc");
		$this->db->select("tbl_request.*,tbl_employee.Name,tbl_employee.emp_id,tbl_employee.image,tbl_requeststatus.*");
		$this->db->from('tbl_request');
		$this->db->join('tbl_employee','tbl_request.user_id=tbl_employee.emp_id');
		$this->db->join('tbl_requeststatus','tbl_request.request_id=tbl_requeststatus.request_id');
		return $rows=$this->db->get()->result();
		 }

	   public function latestrequest(){
		   $a=array();
		   $b=array();
	 	if($this->session->userdata('admin')==true)
		 {
			 $userid=100000;
		 }else
		 {
				$array=array('status'=>0,'unithead'=>$this->session->userdata('user'));
				$this->db->where($array);
				$this->db->select("*");
				$this->db->from('tbl_unit');
				$rows=$this->db->get()->result();
				if($rows)
				{
			     
					foreach($rows as $val)
					{
						array_push($a,$val->unit_id);
						array_push($b,$val->nodetype);
					}
					if (in_array('0', $b)) {
                     $this->session->set_userdata(array('root'=>'root'));
                     }
					 else
					 {
						   if($rows[0]->nodetype==0)
						   {
					 $this->session->set_userdata(array('root'=>'root'));
						   }
						   else{
							    $this->session->set_userdata(array('root'=>$rows[0]->nodetype));
						   }
					 }
					 $this->session->set_userdata(array('unit'=>$rows[0]->unit_id));
				}
				else{
					 $userid=100000;
				}
				 
		 }
	 	$ids = join("','",$a); 
		/*$array=$a;
		$this->db->where($array);
		$this->db->order_by("tbl_request.date","desc");
		$this->db->select("tbl_request.*,tbl_employee.*,tbl_requeststatus.*");
		$this->db->from('tbl_request');
		$this->db->join('tbl_employee','tbl_request.user_id=tbl_employee.emp_id');
		$this->db->join('tbl_requeststatus','tbl_request.request_id=tbl_requeststatus.request_id');
		return $rows=$this->db->get()->result();*/
		$row=$this->db->query("SELECT tbl_request.*, tbl_employee.Name,tbl_employee.Image, tbl_requeststatus.* FROM tbl_request JOIN tbl_employee ON tbl_request.user_id=tbl_employee.emp_id JOIN tbl_requeststatus ON tbl_request.request_id=tbl_requeststatus.request_id WHERE tbl_requeststatus.requested_id IN ('$ids') AND tbl_requeststatus.status=0 ORDER BY tbl_request.date DESC" );
//$this->db->join('tbl_rules as tbl_rules','tbl_rules.method=tbl_request.type_id');
    
	 return $row->result();
	 
		 }   
		 		 ////////////////////////////////////////////Get Bank/////////////////////////////////////////////////////	

public function getbank()
	{
		$array=array('status' =>0);
		$this->db->where($array);
		$this->db->select('*');
		 $query=$this->db->get('tbl_bank');
		 return $value=$query->result();
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////


public function getexpense()
{
		$array=array('tbl_rules.workflow_category' =>1);
		$this->db->where($array);
		$this->db->select('*');
		 $query=$this->db->get('tbl_rules');
		 return $value=$query->result();
}

 
}