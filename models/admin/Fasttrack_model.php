<?php
class Fasttrack_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
	
	
	
	
	
	
      public function getfasttrack()
{
	
	$this->db->select('tbl_fasttrack_colon.*');
	$this->db->from('tbl_fasttrack_colon');
	return $rows=$this->db->get()->result_array();
	
}

  public function getfasttrackByid($id)
{
	$fasttrack_id=dycrypt($id);
	$this->db->select('tbl_fasttrack_colon.*');
	$this->db->from('tbl_fasttrack_colon');
	$this->db->where('fasttrack_id',$fasttrack_id);
	return $rows=$this->db->get()->row_array();
	
}	  
	public function addfasttrack()
	 {
		 
	$exist=fieldexist('tbl_fasttrack_colon','title',$this->input->post('titleeen'));
	if($exist==1){
		echo 1;
	}else{
		$max=maxplus('tbl_fasttrack_colon','fasttrack_id');
		
		$titleeen=$this->input->post('titleeen');
		$contenten=$this->input->post('contenten');
		//echo $titleeen;
	//	$image=$this->input->post('imgfile');
		///////////////////////////////////////Attachment////////////////////////////		

			
		$config['upload_path'] = './images/resource/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			//resize
			// $image_data = $this->upload->data();
                    /*$configr['image_library'] = 'gd2';
                    $configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
                     $configr['maintain_ratio'] = FALSE;
                    $configr['width'] = 55;
                    $configr['height'] = 55;
                    $this->load->library('image_lib', $configr);
                    if (!$this->image_lib->resize()) {
                        $this->handle_error($this->image_lib->display_errors());
                    }*/
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path='images/uploads/dummy.png';		
			}
/////////////////////////////////////////////////////////////////////////////////////////////////////
		 
		
		
		$data= array(
			'fasttrack_id' =>$max,
			'title'=>$titleeen,
		    'content'=>$contenten,
			'image'=>$path,
			'status'=>0
		);
		$this->db->insert('tbl_fasttrack_colon',$data);
	}
	 }
	 
	 
	 public function update()
	 {
		
		$id=$this->input->post('id');
		$titleeen=$this->input->post('titleeen');
		$contenten=$this->input->post('contenten');
		$hidimage=$this->input->post('hidimage');
	
	
			
		$config['upload_path'] = './images/resource/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('imgfile')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataimg = array('upload_data' => $this->upload->data());
			//resize
			// $image_data = $this->upload->data();
                    /*$configr['image_library'] = 'gd2';
                    $configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
                     $configr['maintain_ratio'] = FALSE;
                    $configr['width'] = 55;
                    $configr['height'] = 55;
                    $this->load->library('image_lib', $configr);
                    if (!$this->image_lib->resize()) {
                        $this->handle_error($this->image_lib->display_errors());
                    }*/
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path=$hidimage;		
			}
	     $data= array(
			'fasttrack_id' =>$id,
			'title'=>$titleeen,
		    'content'=>$contenten,
			'image'=>$path,
			'status'=>0
		);
		$this->db->where('fasttrack_id',$id);
		$this->db->update('tbl_fasttrack_colon',$data);
			

			
				
	}
	
	 public function delete($id)
	 {
		 
	$this->db->where('fasttrack_id',$id);
	$this->db->delete('tbl_fasttrack_colon');
	
 }

}