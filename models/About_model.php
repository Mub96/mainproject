<?php
class About_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
       
  
   
  public function getdoctoridmal($id)
{
	$array=array('tbl_doctor.status'=>0,'tbl_doctor.lang'=>'ml','tbl_doctor.doc_id'=>$id);
	$this->db->where($array);
	$this->db->select('tbl_doctor.*');
	$this->db->from('tbl_doctor');
	return $rows=$this->db->get()->row();
	//return $rows=$this->db->get('tbl_category')->result();
}
	  
	public function adddoctors()
	{
	$exist=fieldexist('tbl_doctor','doc_name',$this->input->post('depnameen'));
	if($exist==1)
	{
		echo 1;
	}
	else
	{
		$max=maxplus('tbl_doctor','doc_id');
		$today= date("y-m-d");
		$nameen=$this->input->post('docnameen');
		$qualifications=$this->input->post('qualifications');
		$dept=$this->input->post('docDept');
		$experience=$this->input->post('docexp');
		$designation=$this->input->post('designation');
		$facebook=$this->input->post('docfacebook');
		$skype=$this->input->post('docskype');
		$instagram=$this->input->post('docinstagram');
		$google=$this->input->post('docgoogle');
		$docorder=$this->input->post('docorder');
		$time=$this->input->post('doctime');
		$docroom=$this->input->post('docroom');
		$doclocation=$this->input->post('doclocation');
		//$image=$this->input->post('imgfile');
		///////////////////////////////////////Attachment////////////////////////////		
			
		$config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) 
			{
            	$error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
           		$dataimg = array('upload_data' => $this->upload->data());
				//resize
				// $image_data = $this->upload->data();
                    $configr['image_library'] = 'gd2';
                    $configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
                    $configr['maintain_ratio'] = FALSE;
                    $configr['width'] = 270;
                    $configr['height'] = 270;
                    $this->load->library('image_lib', $configr);
                    if (!$this->image_lib->resize()) 
					{
                        $this->handle_error($this->image_lib->display_errors());
                    }
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		  if(isset($dataimg['upload_data']['file_name']))
		  {
		  		$path='uploads/'.$dataimg['upload_data']['file_name'];		
		  }
		  else
		  {
				 $path='uploads/dummy.jpg';		
		  }
/////////////////////////////////////////////////////////////////////////////////////////////////////
		//echo json_encode($dataimg);
		 
		
		$data= array(
			'doc_id' =>$max,
			'doc_name'=>$nameen,
		    'doc_qualification'=>$qualifications,
			'doc_image'=>$path,
			'dept'=>$dept,
			'designation'=>$designation,
			'experience'=>$experience,
			'time'=>$time,
			'room'=>$docroom,
			'location'=>$doclocation,
			'facebook'=>$facebook,
			'skype'=>$skype,
			'instagram'=>$instagram,
			'google'=>$google,
			'doc_order'=>$docorder,
			'lang'=>'en', 
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0);
		$this->db->insert('tbl_doctor',$data);
	 }
	 }
	 
	 
public function update()
	 {
		$today= date("y-m-d");
		$id=decode($this->input->post('txthidden'));
		$today= date("y-m-d");
		$nameen=$this->input->post('docnameen');
		$dept=$this->input->post('docDept');
		$qualifications=$this->input->post('qualifications');
		$designation=$this->input->post('designation');
		$experience=$this->input->post('docexp');
		$time=$this->input->post('doctime');
		$facebook=$this->input->post('docfacebook');
		$skype=$this->input->post('docskype');
		$instagram=$this->input->post('docinstagram');
		$google=$this->input->post('docgoogle');
		$docorder=$this->input->post('docorder');
		$docroom=$this->input->post('docroom');
		$doclocation=$this->input->post('doclocation');
	
		///////////////////////////////////////Attachment////////////////////////////		
if($_FILES['imgfile']['name']==""){
			$data= array(
			'doc_name'=>$nameen,
		    'doc_qualification'=>$qualifications,
			'dept'=>$dept,
			'designation'=>$designation,
			'experience'=>$experience,
			'time'=>$time,
			'room'=>$docroom,
			'location'=>$doclocation,
			'facebook'=>$facebook,
			'skype'=>$skype,
			'instagram'=>$instagram,
			'google'=>$google,
			'doc_order'=>$docorder,
			'modified_date'=>$today);
		$array=array('doc_id'=>$id,'lang'=>'en');
	    $this->db->where($array);
		$this->db->update('tbl_doctor',$data);
		
	}
	else{
			
		$config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
			/*$config['max_size']     = 0;
			$config['max_width'] =0;
			$config['max_height'] = 0;*/
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
		
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			//resize
			$configr['image_library'] = 'gd2';
                    $configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
                  $configr['maintain_ratio'] = FALSE;
                    $configr['width'] = 270;
                    $configr['height'] = 270;
                    $this->load->library('image_lib', $configr);
                    if (!$this->image_lib->resize()) {
                        $this->handle_error($this->image_lib->display_errors());
                    }
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='uploads/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path='uploads/dummy.jpg';		
			}
			//echo json_encode($error);
/////////////////////////////////////////////////////////////////////////////////////////////////////
			$data= array(
			'doc_name'=>$nameen,
		    'doc_qualification'=>$qualifications,
			'doc_image'=>$path,
			'dept'=>$dept,
			'designation'=>$designation,
			'experience'=>$experience,
			'time'=>$time,
			'room'=>$docroom,
			'location'=>$doclocation,
			'facebook'=>$facebook,
			'skype'=>$skype,
			'instagram'=>$instagram,
			'google'=>$google,
			'doc_order'=>$docorder,
			'modified_date'=>$today);
		$array=array('doc_id'=>$id,'lang'=>'en');
	    $this->db->where($array);
		$this->db->update('tbl_doctor',$data);
	}
	}
	 public function delete()
	 {	
		$id=decode($this->input->post('id'));
		$data= array('status'=>1);			
		$array=array('tbl_doctor.doc_id'=>$id);
		$this->db->where($array);
		$this->db->update('tbl_doctor',$data);
 	}
}