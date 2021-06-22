<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->model('admin/Logout_model','model');
	 }	
	   public function index(){    
       $this->session->sess_destroy();
        header('location:'.ADMIN_PATH);     
    }
	
}
