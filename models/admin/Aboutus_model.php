<?php
class Aboutus_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
      public function getaboutusen()
{
	$array=array('tbl_aboutus.status'=>0,'tbl_aboutus.lang'=>'en');
	$this->db->where($array);
	$this->db->select('tbl_aboutus.*');
	
	$this->db->from('tbl_aboutus');
	return $rows=$this->db->get()->row();
	//return $rows=$this->db->get('tbl_category')->result();
}

/*public function getaboutusmal()
{
	$array=array('tbl_aboutus.status'=>0,'tbl_aboutus.lang'=>'ml');
	$this->db->where($array);
	$this->db->select('tbl_aboutus.*');
	
	$this->db->from('tbl_aboutus');
	return $rows=$this->db->get()->row();
	//return $rows=$this->db->get('tbl_category')->result();
}*/
 
	public function addaboutus()
	
	 {
			/* $this->db->where('status',0);
		$this->db->delete('tbl_aboutus');  */
	
		$max=maxplus('tbl_aboutus','about_id');
		$today= date("y-m-d");
		$contenten=$this->input->post('contenten');
		$video=$this->input->post('txtvideo');
		$footertxt=$this->input->post('editor34');
		///////////////////////////////////////Attachment////////////////////////////	
		 $arra=array('tbl_aboutus.about_id'=>1);
			$this->db->where($arra);
			$this->db->select('*');
			$this->db->from('tbl_aboutus');
			$row1=$this->db->get()->row();
			
			$abouimg=$row1->about_img; 
			$banner=$row1->about_banner; 
/*		echo $_FILES['imgfile']['name'];	
if($_FILES['imgfile']['name']==""){
			$data= array(
			'content'=>$contenten,
			'video'=>$video,
			'lang'=>'en', 
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0
		);
		$array=array('about_id'=>1,'status'=>0);
	    $this->db->where($array);
		$this->db->update('tbl_aboutus',$data);	
	}
	else{
		*/	
		$config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
			
			$this->upload->initialize($config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg1 = array('upload_data' => $this->upload->data());
			
			//resize
			// $image_data = $this->upload->data();
                    $configr['image_library'] = 'gd2';
                    $configr['source_image'] = $dataimg1['upload_data']['full_path']; //get original image
                 //    $configr['maintain_ratio'] = FALSE;
                    $configr['width'] = 345;
                    $configr['height'] = 194;
                    $this->load->library('image_lib', $configr);
                    if (!$this->image_lib->resize()) {
                        $this->handle_error($this->image_lib->display_errors());
                    }
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		if(isset($dataimg1['upload_data']['file_name'])){
				 $path='uploads/'.$dataimg1['upload_data']['file_name'];		
			}else{
				 $path=$abouimg;		
			}
/////////////////////////////////////////////////////////////////////////////////////////////////////
		
		$config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('imgfile1')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			
			//resize
			// $image_data = $this->upload->data();
                    $configr['image_library'] = 'gd2';
                    $configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
                 //    $configr['maintain_ratio'] = FALSE;
                    $configr['width'] = 1920;
                    $configr['height'] = 310;
                    $this->load->library('image_lib', $configr);
                    if (!$this->image_lib->resize()) {
                        $this->handle_error($this->image_lib->display_errors());
                    }
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $pathabout='uploads/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $pathabout=$banner;		
			}
		
		
		$data= array(
			'content'=>$contenten,
			'video_footer'=>$footertxt,
			'about_img'=>$path,
			'about_banner'=>$pathabout,
			'video'=>$video,
			'lang'=>'en', 
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0
		);
		$array=array('about_id'=>1,'status'=>0);
	    $this->db->where($array);
		$this->db->update('tbl_aboutus',$data);	
	
		/*}*/
	 }
	 
	 

  public function who_are_we($data)
  {
	  //$this->db->empty_table('tbl_who_r_we');
	  
	  if($data['id']!='')
	  {
		  $this->db->where('id',$data['id']);
		  $this->db->update('tbl_who_r_we',$data);
		  
		  }
		  else
		  {
	      $this->db->insert('tbl_who_r_we',$data);
	  }
	  
	  }

   
	public function get_who_r_we()
	{
		
		$this->db->select('*')->from('tbl_who_r_we');
		return $this->db->get()->row_array();
		
		
		}


}