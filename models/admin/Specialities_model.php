<?php
class Specialities_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
	
      public function getspecialities()
{
	$array=array('tbl_specialities.status'=>0,'tbl_specialities.lang'=>'en');
	$this->db->where($array);
	$this->db->select('tbl_specialities.*');
	$this->db->from('tbl_specialities');
	return $rows=$this->db->get()->result();
	//return $rows=$this->db->get('tbl_category')->result();
}
  public function getspecialitiesiden($id)
{
	$array=array('tbl_specialities.status'=>0,'tbl_specialities.lang'=>'en','tbl_specialities.spe_id'=>$id);
	$this->db->where($array);
	$this->db->select('tbl_specialities.*');
	
	$this->db->from('tbl_specialities');
	return $rows=$this->db->get()->row();
	//return $rows=$this->db->get('tbl_category')->result();
}	  
	public function addspecialities()
	 {
		 
	$exist=fieldexist('tbl_specialities','spe_title',$this->input->post('titleeen'));
	if($exist==1){
		echo 1;
	}else{
		$max=maxplus('tbl_specialities','spe_id');
		$today= date("y-m-d");
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
			'spe_id' =>$max,
			'spe_title'=>$titleeen,
		    'spe_content'=>$contenten,
			'spe_image'=>$path,
			'lang'=>'en', 
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0
		);
		$this->db->insert('tbl_specialities',$data);
	}
	 }
	 
	 
	 public function update()
	 {
		
		$id=dycrypt($this->input->post('txthidden'));
		$today= date("y-m-d");
		$titleeen=$this->input->post('titleeen');
		$contenten=$this->input->post('contenten');
	
	
		///////////////////////////////////////Attachment////////////////////////////		

			if($_FILES['imgfile']['name']==""){
					$data= array(
			'spe_title'=>$titleeen,
		    'spe_content'=>$contenten,
			'modified_date'=>$today
		);
		$array=array('spe_id'=>$id,'lang'=>'en');
	    $this->db->where($array);
		$this->db->update('tbl_specialities',$data);
				}
				else{
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
                   /*  $configr['image_library'] = 'gd2';
                    $configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
                     $configr['maintain_ratio'] = FALSE;
                    $configr['width'] = 55;
                    $configr['height'] = 55;
                    $this->load->library('image_lib', $configr);
                    if (!$this->image_lib->resize()) {
                        $this->handle_error($this->image_lib->display_errors());
                    } */
            }
            //$path='uploads/'.$dataimg['upload_data']['file_name'];		
	   	
		if(isset($dataimg['upload_data']['file_name'])){
				 $path='images/resource/'.$dataimg['upload_data']['file_name'];		
			}else{
				 $path='images/uploads/dummy.png';		
			}
/////////////////////////////////////////////////////////////////////////////////////////////////////
			$data= array(
			'spe_title'=>$titleeen,
		    'spe_content'=>$contenten,
			'spe_image'=>$path,
			'lang'=>'en', 
			'modified_date'=>$today,
		);
		$array=array('spe_id'=>$id,'lang'=>'en');
	    $this->db->where($array);
		$this->db->update('tbl_specialities',$data);
		//echo "hf";
				}
	}
	
	 public function delete()
	 {
		 
	
		$id=dycrypt($this->input->post('id'));
	
		$data= array(
			   'status'=>1
		);			
	$array=array('tbl_specialities.spe_id'=>$id);
	$this->db->where($array);
	$this->db->update('tbl_specialities',$data);
	
 }

}