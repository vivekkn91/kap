<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
	 
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('form');
	
		$this->load->model('uploads');
		  $this->load->library('email');
		
	}
	public function index()
	{
		  $data['all_data']=$this->uploads->selected_image();
		   $data['all_data_slider']=$this->uploads->selected_image_slider();


		
		
		$result['data']=$this->uploads->all_image();
		
		
 $query4=$this->db->from("image_upload")->count_all_results();
	
	$this->load->view('servies.php',$data);
		
	
		
	}

	public function contact()
	{
		$this->load->view('contact_us.php');
	}
		public function services()
	{
	$this->load->view('index1.php');	
	}

	public function career()
	{
		$this->load->view('carrer.php');
	}
	
	
	
	function sendmail()
	{
	   $username = $this->input->post("name");
	    $email1 = $this->input->post("email1");
		 $subject = $this->input->post("subject");

 $content = $this->input->post("content");

      $this->load->library('email');
	   
      $this->email->set_newline("\r\n");
   
$this->email->from('info@kapreign.com');
//$this->email->To('vivekkn91@gmail.com');
$this->email->To('info@kapreign.com,rhishavdas@gmail.com,vivekkn91@gmail.com,labeebshareef96@gmail.com,asdf10402@gmail.com,sreeharsh.sreelal@gmail.com');
      $this->email->subject(" {$username}");
      $this->email->message("
	 
			name: 	$username 
			email: 	$email1
			subject:$subject
			message:$content");
	
	
	







 if($this->email->send())
{
	
	  redirect();
	
}
	else
	{	
show_error($this->email->print_debugger());
}		
		



	}
}
?>
