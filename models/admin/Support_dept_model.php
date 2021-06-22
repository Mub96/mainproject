<?php
class Support_dept_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
      public function getsupdepartments()
{
	$array=array('tbl_support_dept.status'=>0,'tbl_support_dept.lang'=>'en');
	$this->db->where($array);
	$this->db->select('tbl_support_dept.*');
	
	$this->db->from('tbl_support_dept');
	return $rows=$this->db->get()->result();
	//return $rows=$this->db->get('tbl_category')->result();
}
  public function getdepartmentiden($id)
{
	$array=array('tbl_support_dept.status'=>0,'tbl_support_dept.lang'=>'en','tbl_support_dept.support_dept_id'=>$id);
	$this->db->where($array);
	$this->db->select('tbl_support_dept.*');
	
	$this->db->from('tbl_support_dept');
	return $rows=$this->db->get()->result();
	//return $rows=$this->db->get('tbl_category')->result();
}
  public function getdepartmentidmal($id)
{
	$array=array('tbl_support_dept.status'=>0,'tbl_support_dept.lang'=>'ml','tbl_support_dept.support_dept_id'=>$id);
	$this->db->where($array);
	$this->db->select('tbl_support_dept.*');
	
	$this->db->from('tbl_support_dept');
	return $rows=$this->db->get()->result();
	//return $rows=$this->db->get('tbl_category')->result();
}
	  
	public function addsupportdept()
	 {
		 
	$exist=fieldexist('tbl_support_dept','support_dept_name',$this->input->post('depnameen'));
	if($exist==1){
		echo 1;
	}else{
			$max=maxplus('tbl_support_dept','support_dept_id');
		$today= date("y-m-d");
		$nameen=$this->input->post('depnameen');
		$namemal=$this->input->post('depnamemal');
		$decriptionen=$this->input->post('depdescriptionen');
		$decriptionmal=$this->input->post('depdescriptionmal');
		$icon=$this->input->post('depicon');
	//	$image=$this->input->post('imgfile');
		///////////////////////////////////////Attachment////////////////////////////		

			
		$config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='uploads/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path='uploads/dummy.jpg';		
			}
/////////////////////////////////////////////////////////////////////////////////////////////////////
		
		
		
		$data= array(
			'support_dept_id' =>$max,
			'support_dept_name'=>$nameen,
		    'support_dept_description'=>$decriptionen,
			'support_dept_img'=>$path,
			'support_dept_icon'=>$icon,
			'lang'=>'en', 
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0
		);
		$this->db->insert('tbl_support_dept',$data);
		/*$data= array(
			'support_dept_id' =>$max,
			'support_dept_name'=>$namemal,
		    'support_dept_description'=>$decriptionmal,
			'support_dept_img'=>$path,
			'support_dept_icon'=>$icon,
			'lang'=>'ml', 
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0
		);
		$this->db->insert('tbl_support_dept',$data);*/
	
	}
	 }
	 
	 
	 public function update()
	 {
		 
		 
		$today= date("y-m-d");
		
		$id=decode($this->input->post('txthidden'));
		$today= date("y-m-d");
		$nameen=$this->input->post('depnameen');
		$namemal=$this->input->post('depnamemal');
		$decriptionen=$this->input->post('depdescriptionen');
		$decriptionmal=$this->input->post('depdescriptionmal');
		$icon=$this->input->post('depicon');
	
	
		///////////////////////////////////////Attachment////////////////////////////		

			if($_FILES['imgfile']['name']==""){
						$data= array(
			'support_dept_name'=>$nameen,
		    'support_dept_description'=>$decriptionen,
			'support_dept_icon'=>$icon,
			'modified_date'=>$today,
			'status'=>0
		);
		$array=array('support_dept_id'=>$id,'lang'=>'en');
	    $this->db->where($array);
		$this->db->update('tbl_support_dept',$data);
		
		
			/*$data= array(
			'support_dept_name'=>$namemal,
		    'support_dept_description'=>$decriptionmal,
			'support_dept_icon'=>$icon,
			'modified_date'=>$today,
			'status'=>0
		);
		$array=array('support_dept_id'=>$id,'lang'=>'ml');
	    $this->db->where($array);
		$this->db->update('tbl_support_dept',$data);*/
				
				}
				else{
			
		$config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='uploads/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path='uploads/dummy.jpg';		
			}
/////////////////////////////////////////////////////////////////////////////////////////////////////
			$data= array(
			'support_dept_name'=>$nameen,
		    'support_dept_description'=>$decriptionen,
			'support_dept_img'=>$path,
			'support_dept_icon'=>$icon,
			'lang'=>'en', 
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0
		);
		$array=array('support_dept_id'=>$id,'lang'=>'en');
	    $this->db->where($array);
		$this->db->update('tbl_support_dept',$data);
		
		
		/*	$data= array(
			'support_dept_name'=>$namemal,
		    'support_dept_description'=>$decriptionmal,
			'support_dept_img'=>$path,
			'support_dept_icon'=>$icon,
			'lang'=>'ml', 
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0
		);
		$array=array('support_dept_id'=>$id,'lang'=>'ml');
	    $this->db->where($array);
		$this->db->update('tbl_support_dept',$data);*/
		
				}
		
	}
	
	 public function delete()
	 {
		 
	
		$id=decode($this->input->post('id'));
	
		$data= array(
			   'status'=>1
		);			
	$array=array('tbl_support_dept.support_dept_id'=>$id);
	$this->db->where($array);
		$this->db->update('tbl_support_dept',$data);
	
 }

}