<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
        parent::__construct();
		
		$this->load->model('Procedure_model');
		$this->load->model('Fasttrack_model');
		
	 }
	
	
	
	
	public function index()
	{
		
		$this->load->view('generals/header');
		$this->load->view('resources/contact');
		$this->load->view('generals/footer');
	}
}
