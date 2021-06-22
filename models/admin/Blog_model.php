<?php
class Blog_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
	
	
      public function getblog()
{
	
	$this->db->select('tbl_blog.*');
	$this->db->from('tbl_blog');
	return $rows=$this->db->get()->result_array();
	
}

  public function getblogByid($id)
{
	$id=dycrypt($id);
	$this->db->select('tbl_blog.*');
	$this->db->from('tbl_blog');
	$this->db->where('blog_id',$id);
	return $rows=$this->db->get()->row_array();
	
}	  
	public function addblog()
	 {
		 
	$exist=fieldexist('tbl_blog','title',$this->input->post('titleeen'));
	if($exist==1){
		echo 1;
	}else{
		$max=maxplus('tbl_blog','blog_id');
		
		$titleeen=$this->input->post('titleeen');
		$contenten=$this->input->post('contenten');
		$keywordsen=$this->input->post('keywordsen');
		$today= date("y-m-d");
		//echo $titleeen;
	//	$image=$this->input->post('imgfile');
		///////////////////////////////////////Attachment////////////////////////////		
//
//			
//		$config['upload_path'] = './images/resource/';
//            $config['allowed_types'] = 'gif|jpg|png';
//            $this->load->library('upload', $config);
//            if ( ! $this->upload->do_upload('imgfile')) {
//            $error = array('error' => $this->upload->display_errors());
//            } 
//			else 
//			{
//            $dataimg = array('upload_data' => $this->upload->data());
//			//resize
//			// $image_data = $this->upload->data();
//                    /*$configr['image_library'] = 'gd2';
//                    $configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
//                     $configr['maintain_ratio'] = FALSE;
//                    $configr['width'] = 55;
//                    $configr['height'] = 55;
//                    $this->load->library('image_lib', $configr);
//                    if (!$this->image_lib->resize()) {
//                        $this->handle_error($this->image_lib->display_errors());
//                    }*/
//            }
//            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
//	   	
//		if(isset($dataimg['upload_data']['file_name'])){
//				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
//			}else{
//				 $path='images/uploads/dummy.png';		
//			}
/////////////////////////////////////////////////////////////////////////////////////////////////////
		 
		
		
		$data= array(
			'blog_id' =>$max,
			'title'=>$titleeen,
		    'content'=>$contenten,
			'keywords'=>$keywordsen,
			'created_date'=>$today,
			'modified_date'=>$today
		);
		$this->db->insert('tbl_blog',$data);
	}
	 }
	 
	 
	 public function update()
	 {
		
		$id=$this->input->post('id');
		$titleeen=$this->input->post('titleeen');
		$contenten=$this->input->post('contenten');
		//$hidimage=$this->input->post('hidimage');
	    $keywordsen=$this->input->post('keywordsen');
		$today= date("y-m-d");
	
		//	
//		   $config['upload_path'] = './images/resource/';
//            $config['allowed_types'] = 'gif|jpg|png';
//            $this->load->library('upload', $config);
//            if ( ! $this->upload->do_upload('imgfile')) {
//            $error = array('error' => $this->upload->display_errors());
//            } 
//			else 
//			{
//            $dataimg = array('upload_data' => $this->upload->data());
//			//resize
//			// $image_data = $this->upload->data();
//                    /*$configr['image_library'] = 'gd2';
//                    $configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
//                     $configr['maintain_ratio'] = FALSE;
//                    $configr['width'] = 55;
//                    $configr['height'] = 55;
//                    $this->load->library('image_lib', $configr);
//                    if (!$this->image_lib->resize()) {
//                        $this->handle_error($this->image_lib->display_errors());
//                    }*/
//            }
//            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
//	   	
//		if(isset($dataimg['upload_data']['file_name'])){
//				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
//			}else{
//				 $path=$hidimage;		
//			}
	     $data= array(
			'blog_id' =>$id,
			'title'=>$titleeen,
		    'content'=>$contenten,
			'keywords'=>$keywordsen,
			'modified_date'=>$today
		);
		$this->db->where('blog_id',$id);
		$this->db->update('tbl_blog',$data);
			

			
				
	}
	
	 public function delete($id)
	 {
		 
	$this->db->where('blog_id',$id);
	$this->db->delete('tbl_blog');
	
 }

}