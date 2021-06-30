<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
	 
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('form');
		$this->load->model('uploads');
		
	}

	public function index()
	{
		$this->load->view('admin/dashboard.php');
	
	}
	
	public function upload_image()
	{
	
		$this->load->view('admin/image_upload', array('error' => ' ' ));
	}
	
	public function slider_upload()
	{
	
		$this->load->view('admin/slider_upload', array('error' => ' ' ));
	}
	
	
	
	 public function do_upload()
        {
			
			
			 
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
					 $data = array('upload_data' => $this->upload->data());
				
                        $error = array('error' => $this->upload->display_errors());
print_r($error);
                        $this->load->view('upload_form', $error);
                }
                else
                {
					    $imgname = $this->input->post("name");
				
                        $data = array('upload_data' => $this->upload->data());
					$name=$this->upload->data('file_name');
					
					
					 $id=$name;
					$flag=1; 
					$gtx=1;
	 $id=$this->uploads->image_uploads([
				'image_name' => $name,
				'id' =>'',
				'flag' =>$flag,
				 'name' =>$imgname
		]);
				
				$name1['success']='success';
				
    
echo "<script>
alert('upload success');


</script>";


 
                        	$this->load->view('admin/image_upload', array('error' => ' ' ));

                }
        }
	
	
	
	
	
	
	 public function do_upload_slider()
        {
			
			
			 
                $config['upload_path']          = './slider_uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
					 $data = array('upload_data' => $this->upload->data());
				
                        $error = array('error' => $this->upload->display_errors());
print_r($error);
                        $this->load->view('upload_form', $error);
                }
                else
                {
					    
				
                        $data = array('upload_data' => $this->upload->data());
					$name=$this->upload->data('file_name');
					
					
					 $id=$name;
					$flag=1; 
					$gtx=1;
	 $id=$this->uploads->image_uploads_slider([
				'image_name' => $name,
				'id' =>'',
				'flag' =>$flag
				
		]);
				
				$name1['success']='success';
				
    
echo "<script>
alert('upload success');


</script>";


 
                        	$this->load->view('admin/image_upload', array('error' => ' ' ));

                }
        }
	
	
	
	
		public function take()
	{
	

	
	$result['data']=$this->uploads->all_image();
 $query4=$this->db->from("image_upload")->count_all_results();

	
	$this->load->view('admin/display_records',$result);
	
	}




	public function take_slider()
	{
	

	
	$result['data']=$this->uploads->all_image_slider();
 $query4=$this->db->from("slider")->count_all_results();

	
	$this->load->view('admin/display_slider',$result);
	
	}
	
	
	
	public function toggledata()
	{
	
	 $data = array(
            'flag' => $this->input->post('status'),
            'id' => $this->input->post('id'),
          
        );
print_r($data);
die();
	
		$this->db->where('id', $data['id']);
		 $this->db->update('image_upload', $data);
		 // return $this->db->update('image_upload', $data, array('flag' => $data['id']));
		
       
    }
	
	
	public function multiform()
	{
		
  $id = $this->input->post("id");
    $status = $this->input->post("status");
	
	
  $image_name = $this->input->post("image_name");


$data = array(
               'id' => $id,
               'image_name' => $image_name,
               'flag' =>$status
            );


		$this->db->where('id',$id);
		 $this->db->update('image_upload', $data);
 $this->take(); 

	}

public function multiform_slider()
	{
		
  $id = $this->input->post("id");
    $status = $this->input->post("status");
	
	
  $image_name = $this->input->post("image_name");


$data = array(
               'id' => $id,
               'image_name' => $image_name,
               'flag' =>$status
            );


		$this->db->where('id',$id);
		 $this->db->update('slider', $data);
 $this->take_slider(); 

	}

	public function career()
	{
		$this->load->view('carrer.php');
	}

}
?>
