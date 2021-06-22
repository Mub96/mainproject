<?php
class Support_services_model extends CI_Model {
	
    public function __construct(){
        $this->load->database(); 
    }
      public function get_sup_services()
{
	$array=array('status'=>0);
	$this->db->where($array);
	$this->db->select('*');
	
	$this->db->from('tbl_support_services');
	return $rows=$this->db->get()->result();
	//return $rows=$this->db->get('tbl_category')->result();
}
  public function getsupport_servicesiden($id)
{
	$array=array('tbl_support_services.status'=>0,'tbl_support_services.sup_services_id'=>$id);
	$this->db->where($array);
	$this->db->select('tbl_support_services.*');
	
	$this->db->from('tbl_support_services');
	return $rows=$this->db->get()->row();
	//return $rows=$this->db->get('tbl_category')->result();
}
	  
	public function addsupport_services()
	 {
		 
	$exist=fieldexist('tbl_support_services','sup_services_title',$this->input->post('titleeen'));
	if($exist==1){
		echo 1;
	}else{
		$max=maxplus('tbl_support_services','sup_services_id');
		$today= date("y-m-d");
		$titleeen=$this->input->post('titleeen');
		$icon=$this->input->post('txticon');
		$contenten=$this->input->post('contenten');		
	
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
			
			
			
			$config['upload_path'] = './images/resource/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('icon')) {
            $error = array('error' => $this->upload->display_errors());
            } 
			else 
			{
            $dataicon = array('upload_data' => $this->upload->data());
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
	   	
		if(isset($dataicon['upload_data']['file_name'])){
				 $icon='images/resource/'.$dataicon['upload_data']['file_name'];		
			}else{
				 $icon='images/uploads/dummy.png';		
			}
			
			
			
			
			
			
			
			
			
		$data= array(
			'sup_services_id' =>$max,
			'sup_services_title'=>$titleeen,
		    'sup_services_content'=>$contenten,
			'image'=>$path,
			'icon'=>$icon,
			'created_date'=>$today,
			'modified_date'=>$today,
			'status'=>0
		);
		$this->db->insert('tbl_support_services',$data);
		
			
			
			
			
			
			
			
			
			/*$data=array('sup_ser_id' =>$max,
						'sup_ser_title'=>$max,
						'sup_ser_img'=>$path,
						'sup_ser_thum' =>$path1,
						'created_date'=>$today,
						'modified_date'=>$today,
						'status'=>0);
						
			$this->db->insert('tbl_support_gallery',$data);*/
		   		
	  }
	}
	 public function getbanneriden($id)
 {
	$array=array('tbl_support_gallery.status'=>0,'tbl_support_gallery.sup_ser_title'=>$id);
	$this->db->where($array);
	$this->db->select('tbl_support_gallery.*');
	
	$this->db->from('tbl_support_gallery');
	return $rows=$this->db->get()->result();
	//return $rows=$this->db->get('tbl_category')->result();
 }
	 
	 
	 public function update()
	 {
		
		$id=decode($this->input->post('txthidden'));
		$today= date("y-m-d");
		$titleeen=$this->input->post('titleeen');
		$contenten=$this->input->post('contenten');
	    $oldimg=$this->input->post('oldimg');
		$oldimgthum=$this->input->post('oldimgthum');
	
		
			$data= array(
			'sup_services_title'=>$titleeen,
		    'sup_services_content'=>$contenten,
			'modified_date'=>$today,
		);
		$array=array('sup_services_id'=>$id);
	    $this->db->where($array);
		$this->db->update('tbl_support_services',$data);
		
			
		$array=array('tbl_support_gallery.sup_ser_title'=>$id);
		$this->db->where($array);
		$this->db->delete('tbl_support_gallery');
				
		$oimg=count($oldimg);
		
		for($i=0;$i<$oimg;$i++)
			{
				if($oldimg[$i]!='' && $oldimgthum[$i]!='')	
				{
					$data=array('sup_ser_id' =>$id,
								'sup_ser_title'=>$id,
								'sup_ser_img'=>$oldimg[$i],
								'sup_ser_thum' =>$oldimgthum[$i],
								'created_date'=>$today,
								'modified_date'=>$today,
								'status'=>0);
									
					$this->db->insert('tbl_support_gallery',$data);
				}
			}
		
			$files = $_FILES;
			$c = count($_FILES['imgfile']['name']);
			    
			$this->load->library('image_lib');
			for($i=0; $i<$c; $i++)
			{          	
				$_FILES['imgfile']['name']= $files['imgfile']['name'][$i];
				if($_FILES['imgfile']['name']=="")
				{
					$path='uploads/dummy.jpg';	
				}
				else
				{
					$_FILES['imgfile']['name']= $files['imgfile']['name'][$i];
					$_FILES['imgfile']['type']= $files['imgfile']['type'][$i];
					$_FILES['imgfile']['tmp_name']= $files['imgfile']['tmp_name'][$i];
					$_FILES['imgfile']['error']= $files['imgfile']['error'][$i];
					$_FILES['imgfile']['size']= $files['imgfile']['size'][$i];
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					if(! $this->upload->do_upload('imgfile')) 
					{
						$error = array('error' => $this->upload->display_errors());
					} 
					else 
					{
						$dataimg = array('upload_data' => $this->upload->data());
						//resize
						$configr['image_library'] = 'gd2';
						$configr['source_image'] = $dataimg['upload_data']['full_path']; //get original image
						$reqfilesize=100;
						$filesize=$dataimg['upload_data']['file_size'];
						$reqpercentage=	($reqfilesize/$filesize)*100; 
						$configr['quality'] =$reqpercentage;
						$configr['width'] = 540;
						$configr['height'] = 205;
						$configr['new_image'] = './uploads/lisie/img/';
						$this->image_lib->initialize($configr);
						if(!$this->image_lib->resize()) 
						{
							$path1='uploads/dummy.jpg';
						}
						else
						{
							$path1='uploads/lisie/img/'.$dataimg['upload_data']['file_name'];
						}
							$this->image_lib->clear();
					}
					if(isset($dataimg['upload_data']['file_name']))
					{
						$path='uploads/'.$dataimg['upload_data']['file_name'];		
					}
					else
					{
						$path='uploads/dummy.jpg';		
					}
					
					
					
				$data=array('sup_ser_id' =>$id,
							'sup_ser_title'=>$id,
							'sup_ser_img'=>$path,
							'sup_ser_thum' =>$path1,
							'created_date'=>$today,
							'modified_date'=>$today,
							'status'=>0);
				$this->db->insert('tbl_support_gallery',$data);
				}
		  }	
	}
	
	
	 public function delete()
	 {
		 
	
		$id=decode($this->input->post('id'));
	
		$data= array(
			   'status'=>1
		);			
	$array=array('tbl_support_services.sup_services_id'=>$id);
	$this->db->where($array);
	$this->db->update('tbl_support_services',$data);
	
	$array=array('tbl_support_gallery.sup_ser_title'=>$id);
	$this->db->where($array);
		$this->db->update('tbl_support_gallery',$data);
	
 }

}