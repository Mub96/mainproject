<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	 function __construct(){
        parent::__construct();
		$this->load->helper(array('url','form'));
       // $this->load->library('session');
		//$this->load->model('Index_model','model');
		//language($_SERVER['REQUEST_URI']);
		
		$this->load->model('Procedure_model');
		$this->load->model('Fasttrack_model');
		$this->load->model('Index_model');
		$this->load->model('admin/About_model');
		$this->load->model('admin/Patient_resource_model');
		
	 }
	 
	 	
	public function index()
	{	
	    $data['service']=$this->header_model->get_service();
		$data['whorwe']=$this->Index_model->who_r_we();
		$data['content']=$this->Index_model->insurance_content();
		$this->load->view('generals/header');
		$this->load->view('resources/index',$data);
		$this->load->view('generals/footer');
	}
	
	
	
		
	public function doctors(){
		$data['doctors']=$this->About_model->get_doctors();
		$this->load->view('generals/header');
		$this->load->view('resources/doctors',$data);
		$this->load->view('generals/footer');
		}
	
	
	
	
	public function staff(){
		$data['staff']=$this->About_model->get_staffs();
		$this->load->view('generals/header');
		$this->load->view('resources/staffs',$data);
		$this->load->view('generals/footer');
		}
	public function gallery(){
		$data['office']=$this->About_model->get_office(); 
	    $this->load->view('generals/header');
		$this->load->view('resources/gallery',$data);
		$this->load->view('generals/footer');
	}
	
	
	
	 public function becomenew(){
		$data['title']='Cypress | Become a patient';
		$data['heading']='Become a new patient at CSGI';
		$data['content']=$this->Patient_resource_model->get();
		
		$this->form_validation->set_rules('firstname','First name','required');
		$this->form_validation->set_rules('lastname','Lastname','required');
		$this->form_validation->set_rules('phone','Phone','required|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('complaint','Complaint','required');
		
		if($this->form_validation->run()==FALSE)
		{
		
		$this->load->view('generals/header');
		$this->load->view('resources/becomenew',$data);
		$this->load->view('generals/footer');
		}
		
		
		else
		{
			
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$gender=$this->input->post('gender');
		$referred_by=$this->input->post('referred_by');
		$complaint=$this->input->post('complaint');
		$symptoms=$this->input->post('symptoms');
		
		$data=array($firstname,$lastname,$phone,$email,$gender,$referred_by,$complaint,$symptoms);
		$newapp=implode('/',$data);
		
		$this->Index_model->new_appointment($newapp);
		
		
		echo "<script>
alert('Your Appointment has been successfully booked');
window.location.href='index/becomenew';
</script>";
		
		
		
			
			
			}
		
		
		
		
		 }
	
    public function procedures(){
		
			
		//$data['procedure']=$this->Procedure_model->getspecialities(); 
	    $this->load->view('generals/header');
		$this->load->view('resources/procedures');
		$this->load->view('generals/footer');
	}
	
	 public function procdetails($id){
		$data['procedure']=$this->Procedure_model->procdetail($id);
		$data['procedure_list']=$this->Procedure_model->get_procedures($id); 
		$this->load->view('generals/header');
		$this->load->view('resources/procdetails',$data);
		$this->load->view('generals/footer');
		 }
		 
		  public function fasttrackdetail($id){
		 
		$data['fasttrack']=$this->Fasttrack_model->fasttrackdetails($id);
		$data['fasttrack_list']=$this->Fasttrack_model->get_fasttrack($id); 
		$this->load->view('generals/header');
		$this->load->view('resources/fasttrackdetails',$data);
		$this->load->view('generals/footer');
		 }
		 
		 
		 public function content($id)
		 {
			 $id=$this->input->post('id');
			 $result=$this->Index_model->get_content($id);
			 
			 echo json_encode($resut);
			 
			 }
		 
		 
		 
	public function contact(){
		
		/*$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('phone','phone','required');
		*/
		
		
		if($this->input->post('submitform')=='submit')
		{
		 $data=array(
		 'location'=>$this->input->post('location'),
		 'name'=>$this->input->post('name'),
		 'email'=>$this->input->post('email'),
		 'phone'=>$this->input->post('phone'),
		 'message'=>$this->input->post('message')
		  
		 );
		 	
		$this->Index_model->add_contact($data);
		$email="help@cypressgastro.org";
		$location=$this->input->post('location');
		$name=$this->input->post('name');
		$mail=$this->input->post('email');
		$phone=$this->input->post('phone');
		$message=$this->input->post('message');
		send_contact_admin($email,$location,$name,$mail,$phone,$message);	
		$this->index();	
			}
		
		$data['avail_time']=$this->Index_model->avail_time();
		$data['contact']=$this->Index_model->get_contact();
		$this->load->view('generals/header',$data);
		$this->load->view('resources/contact',$data);
		$this->load->view('generals/footer');
		}
		
	public function colonoappointment(){
		
		
		$this->form_validation->set_rules('firstname','Firstname','required');
		$this->form_validation->set_rules('secondname','Secondname','required');
		$this->form_validation->set_rules('phno','phno','required|max_length[10]');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('Gender','Gender','required');
		$this->form_validation->set_rules('dob','date of birth','required');
		$this->form_validation->set_rules('height','height','required');
		$this->form_validation->set_rules('weight','height','required');
		$this->form_validation->set_rules('colonoscopy_inpast','colonoscopy_inpast','required');
		//$this->form_validation->set_rules('colon[]','check any','required');
		$this->form_validation->set_rules('g-recaptcha-response','Captcha','required');
		
		if($this->form_validation->run()==FALSE)
		{
		$this->load->view('generals/header');
		$this->load->view('resources/colonoappointment');
		$this->load->view('generals/footer');	
			
			}
		     
			 else
			 {
				
				$firstname=$this->input->post('firstname');
				$secondname=$this->input->post('secondname');
				$phno=$this->input->post('phno');
				$email=$this->input->post('email');
				$Gender=$this->input->post('Gender');
				$dob=$this->input->post('dob');
				$height=$this->input->post('height');
				$weight=$this->input->post('weight');
				$primarycare_doctor=$this->input->post('primarycare_doctor');
				$pharmacy_name=$this->input->post('pharmacy_name');
				$insurance_carrier=$this->input->post('insurance_carrier');
				$member_id=$this->input->post('member_id');
				$group_id=$this->input->post('group_id');
				$name_of_insured=$this->input->post('name_of_insured');
				$insured_dob=$this->input->post('insured_dob');
				$relationship=$this->input->post('relationship');
				$customer_serv_phone=$this->input->post('customer_serv_phone');
				$colonoscopy_inpast=$this->input->post('colonoscopy_inpast');
				$colonoscopy_performed=$this->input->post('colonoscopy_performed');
				$chkprior_exam=$this->input->post('chkprior_exam');
				if(count($chkprior_exam)>0)
				{
					$st_chkprior_exam=implode(',',$chkprior_exam);
					}
				 else
				 {
					$st_chkprior_exam = $chkprior_exam;
					 
					 }
				
				$prior_exam=$this->input->post('prior_exam');
				$colon=$this->input->post('colon');
				if(count($colon)>0)
				{
				$st_colon=implode(',',$colon);
				}
				else
				{
					$st_colon=$colon;
					}
				
				$relatives_diagnosed=$this->input->post('relatives_diagnosed');
				$allergic=$this->input->post('allergic');
				$drug_allergies=$this->input->post('drug_allergies');
				$chkmedication=$this->input->post('chkmedication');
				if(count($chkmedication)>0)
				{
				$st_chkmedication=implode(',',$chkmedication);
				}
				
				else
				{
					$st_chkmedication=$chkmedication;
					}
				$medication=$this->input->post('medication');
				$physician_name=$this->input->post('physician_name');
				$medication_list=$this->input->post('medication_list');
				$any_symptoms=$this->input->post('any_symptoms');
				$anemic=$this->input->post('anemic');
				$hemoglobin_level=$this->input->post('hemoglobin_level');
				$pacemaker=$this->input->post('pacemaker');
				$inflammatory_bowel=$this->input->post('inflammatory_bowel');
				$chkcro=$this->input->post('chkcro');
				if(count($chkcro)>0)
				{
				$st_chkcro=implode(',',$chkcro);
				}
				else
				{
					$st_chkcro=$chkcro;
					}
				 
				
				 $data=array($firstname,$secondname,$phno,$email,$Gender,$dob,$height,$weight,$primarycare_doctor,$pharmacy_name,$insurance_carrier,$member_id,$group_id,$name_of_insured,$insured_dob,$relationship,$customer_serv_phone,$colonoscopy_inpast,$colonoscopy_performed,$st_chkprior_exam,$prior_exam,$st_colon,$relatives_diagnosed,$allergic,$drug_allergies,$st_chkmedication,$medication,$physician_name,$medication_list,$any_symptoms,$anemic,$hemoglobin_level,$pacemaker,$inflammatory_bowel,$st_chkcro);
				 $st=implode('/', $data);
				   ///////////////////////////////captche//////////////////////
		   $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
 
        //$userIp=$this->input->ip_address();
     
        $secret = $this->config->item('google_secret');
   
       
         
			$check=array('secret'=>$secret,
						'response'=>$this->input->post('g-recaptcha-response')
			);    
         
		$ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_POST,true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($check));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
        $output = curl_exec($ch); 
        $status= json_decode($output, true);

		////////////////////////////////////////
		if ($status['success']) {	
				 $insert_id=$this->Index_model->request_appointment($st);
		}
			else{
			
			  $this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
		  }
		  	 /*$pdf=$this->create_pdf($insert_id);*/
				
		$appo=$this->Index_model->get_appointment($insert_id);
		$value=dycrypt($appo['detail']);
		$ar=explode('/',$value);
		$data['appointment']=$ar;
        $html = $this->load->view('resources/pdf', $data, true);
		$pdfFilePath = "Request Appointment.pdf";
        $this->load->library('m_pdf');
		$this->m_pdf->pdf->SetHTMLHeader('<div style="text-align:center;font-weight: bold;">APPOINTMENT</div>','O');
		 $this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
		$this->m_pdf->pdf->Output('pdf/'.$pdfFilePath, 'F');
		
	
			
		/////////////////////email to customer///////////////////////////
	
	$message = '<html><body>';
	$message .= '<p  style="color:#0a5a7d;font-size:14px;">Thank you for considering us for your gastroenterology care!
We have received your request and will be in touch with you shortly. We aim to review and respond to all requests within 3 working days.</p>';
	
	
    $message .= '</div>';
    $message .= "</div>";
    $message .= "</body></html>";
     
   
     require_once('phpmailer/class.phpmailer.php');
   //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
 // $mail->SMTPDebug  = 3;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host       = "smtp.gmail.com"; // sets the SMTP server
  $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "cypress.signature.gi@gmail.com"; // SMTP account username
  $mail->Password   = "Gastro@350NW";        // SMTP account password
  $mail->AddReplyTo('cypress.signature.gi@gmail.com');
  $mail->AddAddress($email);
  $mail->SetFrom('cypress.signature.gi@gmail.com');
  $mail->AddReplyTo('cypress.signature.gi@gmail.com');
  //$mail->Subject = $subject;
 // $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($message);
  //$mail->AddAttachment('images/phpmailer.gif');      // attachment
  //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
   
   
//   ///////////////////////////////emil to customer end///////////////////////////////
   ////////////////////////////////email pdf to cypree.signature.ig@gmail.com//////////////
   
	$message1 = '<html><body>';
	$message1 .= '<p  style="color:#0a5a7d;font-size:14px;">A new appointment requested!</p>';
	$message1 .= '</div>';
    $message1 .= "</div>";
    $message1 .= "</body></html>";
     
   
     require_once('phpmailer/class.phpmailer.php');
   //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  //$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host       = "smtp.gmail.com"; // sets the SMTP server
  $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "cypress.signature.gi@gmail.com"; // SMTP account username
  $mail->Password   = "Gastro@350NW";        // SMTP account password
  $mail->AddReplyTo('help@cypressgastro.com');
  $mail->AddAddress('mijageorge45@gmail.com');
  $mail->SetFrom('help@cypressgastro.com');
  $mail->AddReplyTo('help@cypressgastro.com');
  //$mail->Subject = $subject;
 // $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($message1);
  $mail->AddAttachment('pdf/'.$pdfFilePath);      // attachment
  //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
   unlink('pdf/'.$pdfFilePath);
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
   
   ///////////////////////////////emil to customer end///////////////////////////////
		
	
		//exit;
		
		
		/*echo "<script>
swal('Your Appointment has been successfully booked');

</script>";*/
		
	   
				 }
			
		}
		
		
		
  /*function create_pdf($insert_id,$email)
 {
	
	 
	 
		$appo=$this->Index_model->get_appointment($insert_id);
		
		$value=dycrypt($appo['detail']);
		
		  $ar=explode('/',$value);
		   $data['appointment']=$ar;
        $html = $this->load->view('resources/pdf', $data, true);
		
        $pdfFilePath = "Request Appointment.pdf";
        $this->load->library('m_pdf');
		$this->m_pdf->pdf->SetHTMLHeader('<div style="text-align:center;font-weight: bold;">APPOINTMENT</div>','O');
		
        $this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
		
	
		 
		
		
	   exit;
		
		  
	 }	*/
		
		
		
	public function general_appointment()
	{
	
		$this->form_validation->set_rules('firstname','Firstname','required');
		$this->form_validation->set_rules('lastname','Last name','required');
		$this->form_validation->set_rules('phn','phn','required|max_length[10]');
		$this->form_validation->set_rules('email','email','required');
		
		//$this->form_validation->set_rules('dob','date of birth','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('state','State','required');
		$this->form_validation->set_rules('zipcode','Zip code','required');
		$this->form_validation->set_rules('c_email','Confirm email','required');
		$this->form_validation->set_rules('reach','reach','required');
		$this->form_validation->set_rules('type_of_appointment','Type of appointment','required');
		$this->form_validation->set_rules('reason','Reason','required');
		$this->form_validation->set_rules('preferred_day','Preferred day','required');
		$this->form_validation->set_rules('preferred_time','Preferred time','required');
		$this->form_validation->set_rules('g-recaptcha-response','Captcha code','required');
		 if ($this->form_validation->run() == FALSE) {
              
			 
            $msg = array(
                'firstname' => form_error('firstname'),
                'lastname' => form_error('lastname'),
                'email' => form_error('email'),
                
				 'phn' => form_error('phn'),
				 //'dob' => form_error('dob'),
				 'city' => form_error('city'),
				 'state' => form_error('state'),
				 'zipcode' => form_error('zipcode'),
				 'c_email' => form_error('c_email'),
				 'reach' => form_error('reach'),
				 'reason' => form_error('reason'),
				 'type_of_appointment' => form_error('type_of_appointment'),
				'preferred_day' => form_error('preferred_day'),
				'preferred_time' => form_error('preferred_time'),
				'captcha'=>form_error('g-recaptcha-response'),
				 
            );

            $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        }
		
		else
		{
			
		$array = array('status' => 'success', 'error' => '', 'message' => '');
		
		
			}
		
		
		  echo json_encode($array);
		}	
		
 
		
		public function add_general_appointment()
		{
			
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		//$dob=$this->input->post('dob');
		$addr=$this->input->post('addr');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$zipcode=$this->input->post('zipcode');
		$phn=$this->input->post('phn');
		$email=$this->input->post('email');
		$c_email=$this->input->post('c_email');
		$reach=$this->input->post('reach');
		$type_of_appointment=$this->input->post('type_of_appointment');
		$reason=$this->input->post('reason');
		$hear_about_us=$this->input->post('hear_about_us');
		$list=$this->input->post('list');
		$preferred_day=$this->input->post('preferred_day');
		$preferred_time=$this->input->post('preferred_time');
		
		$get_appoint=array($firstname,$lastname,$addr,$city,$state,$zipcode,$phn,$email,$reach,$type_of_appointment,$reason,$hear_about_us,$list,$preferred_day,$preferred_time);
		
			 $appoint=implode('/', $get_appoint);
			 
			   $data=array();
			    //$insert_id=$this->Index_model->general_appointment($appoint);
		   ///////////////////////////////captche//////////////////////
		   //$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
 
       // $userIp=$this->input->ip_address();
     
        //$secret = $this->config->item('google_secret');
   
       
		//	$check=array('secret'=>$secret,
			//			'response'=>$this->input->post('g-recaptcha-response')
			//);    
         
	//	$ch = curl_init(); 
        //curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		//curl_setopt($ch, CURLOPT_POST,true);
		//curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($check));
		//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
        //$output = curl_exec($ch); 
        //curl_close($ch);   
       // $status= json_decode($output, true);

		////////////////////////////////////////
		//if ($status['success']) {
			$insert_id=$this->Index_model->general_appointment($appoint);
		  
		 // }else{
			
			 // $this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
		  //}
		
		 
		 
		 /////////////////////email to customer///////////////////////////
		
	$message = '<html><body>';
	$message .= '<p  style="color:#0a5a7d;font-size:14px;">Thank you for considering us for your gastroenterology care!
We have received your request and will be in touch with you shortly. We aim to review and respond to all requests within 3 working days.</p>';
	
	
    $message .= '</div>';
    $message .= "</div>";
    $message .= "</body></html>";
     
   
     require_once('phpmailer/class.phpmailer.php');
   //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  //$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host       = "mail.amcsfnck.com"; // sets the SMTP server
  $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "admission2020@amcsfnck.com"; // SMTP account username
  $mail->Password   = "F1kZ&H#2j";        // SMTP account password
  $mail->AddReplyTo('cypress.signature.gi@gmail.com','CYPRESS');
  $mail->AddAddress($email);
  $mail->SetFrom('cypress.signature.gi@gmail.com','CYPRESS','CYPRESS');
  $mail->AddReplyTo('cypress.signature.gi@gmail.com','CYPRESS');
  //$mail->Subject = $subject;
 // $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($message);
  //$mail->AddAttachment('images/phpmailer.gif');      // attachment
  //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
   
//   ///////////////////////////////emil to customer end///////////////////////////////
   ////////////////////////////////email pdf to cypree.signature.ig@gmail.com//////////////
   
	$message1 = '<html><body>';
	$message1 .= '<p  style="color:#0a5a7d;font-size:14px;">A new appointment requested!</p>';
	$message1 .= '</div>';
    $message1 .= "</div>";
    $message1 .= "</body></html>";
     
   
     require_once('phpmailer/class.phpmailer.php');
   //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  //$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host       = "mail.amcsfnck.com"; // sets the SMTP server
  $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "info@goodlifewedding.com"; // SMTP account username
  $mail->Password   = "Qdhim32O#";        // SMTP account password
  $mail->AddReplyTo('help@cypressgastro.com');
  $mail->AddAddress('cypress.signature.gi@gmail.com');
  $mail->SetFrom('help@cypressgastro.com');
  $mail->AddReplyTo('help@cypressgastro.com');
  //$mail->Subject = $subject;
 // $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($message1);
  $mail->AddAttachment('pdf/'.$path);      // attachment
  //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
   unlink('pdf/'.$path);
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
   
   ///////////////////////////////emil to customer end///////////////////////////////
		 
		 
		 
		 
		 
		
		  $appo=$this->Index_model->get_general_appoint($insert_id);
		  $value=dycrypt($appo['description']);
		
		  $ar=explode('/',$value);
		  $data['appointment']=$ar;
		   
        $html = $this->load->view('resources/generalpdf', $data, true);
		$path = "general.pdf";
        $this->load->library('m_pdf');
		$this->m_pdf->pdf->SetHTMLHeader('<div style="text-align:center;font-weight: bold;">APPOINTMENT</div>','O');
		$this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($path, "D");
		$this->m_pdf->pdf->Output('pdf/'.$path, 'F');
	
	
	
	/*require('./fpdf/fpdf.php');
	$pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
	$pdf->SetFont('Arial','',8);
	$pdf->Output();*/
	
	
	
	
	
	
	
		
		
  
	
		
		/*$fromMail='help@cypressgastro.com';
		$fromName='Dr. Siddique';
		$subject='Your appointment has been booked';
		
		$this->load->library('email');
		$this->email->to($email);
        $this->email->from($fromemail,$fromName);
        $this->email->subject($subject );
       
        $this->email->attach($content);
        $mail = $this->email->send();
		*/
		
		
		//;
			}
		
	public function testimonials(){
		$data['title']='CYPRESS | TESTIMONIALS';
		$data['spe_title']='Reviews';
		$this->load->view('generals/header',$data);
		$this->load->view('resources/testimonial',$data);
		$this->load->view('generals/footer');
		}
	public function patientforms(){
		$data['title']='CYPRESS | TESTIMONIALS';
		$data['spe_title']='Patient Forms';
		$this->load->view('generals/header',$data);
		$this->load->view('resources/patientforms',$data);
		$this->load->view('generals/footer');
		}
		
		public function blog(){
		$data['title']='CYPRESS | BLOG';
		$data['spe_title']='Blog ';
		$data['blog']=$this->Index_model->get_blog();
		$this->load->view('generals/header',$data);
		$this->load->view('resources/blog',$data);
		$this->load->view('generals/footer');
		}
		
		public function blogdetails($id=false){
		$data['title']='CYPRESS | BLOG';
		$data['spe_title']='Blog ';
		$data['blog']=$this->Index_model->get_blogdetails($id);
		$this->load->view('generals/header',$data);
		$this->load->view('resources/blogdetails',$data);
		$this->load->view('generals/footer');
		}
		
		
}
