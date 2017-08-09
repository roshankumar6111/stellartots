<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Landing extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    function index(){
        $this->load->database();
        $this->load->model('Blog');
        $data['datablog']=$this->Blog->get_data();
        $this->load->view('frontend/index.php',$data);
    }
    function about(){
        $this->load->view('frontend/about.php');
    }
//upload blog controller starts
    
    function upload_it() {
		//load the helper
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('userfile','trim|required'); $this->form_validation->set_rules('description','trim|required');
        $this->form_validation->set_rules('url','trim|required');
        $this->form_validation->set_rules('headline','trim|required');
        $this->form_validation->set_rules('date','trim|required');
        $this->form_validation->set_rules('month','trim|required');
        $this->form_validation->set_rules('year','trim|required'); 

		//Configure
		//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
		$config['upload_path'] = 'assets/images';
		
    // set the filter image types
		$config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']='1024';
	    $config['max_width']='1024';
        $config['max_height']='768';
        $config['overwrite'] = TRUE;
		
		//load the upload library
		$this->load->library('upload', $config);
    
    $this->upload->initialize($config);
    
    $this->upload->set_allowed_types('*');

		$error= array(
          'error_image'=>''
        );
     
        
		//if not successful, set the error message
		if (!$this->upload->do_upload('userfile')|| !$this->form_validation->run()) {
			$error = array('error_image' => $this->upload->display_errors());
            $this->load->view('frontend/admin.php',$error);

		} 
         elseif($this->upload->do_upload('userfile')==true && $this->input->post('day')== 0){
            $error = array('error_image' => "Select Day");
            $this->load->view('frontend/admin.php',$error);
        }
        
        elseif($this->upload->do_upload('userfile')==true && $this->input->post('month')== 'select'){
            $error = array('error_image' => "Select Month");
            $this->load->view('frontend/admin.php',$error);
        }
        elseif($this->upload->do_upload('userfile')==true && $this->input->post('year')== 0){
            $error = array('error_image' => "Select year");
            $this->load->view('frontend/admin.php',$error);
        }
        elseif($this->upload->do_upload('userfile')==true && empty($this->input->post('headline'))){
            $error = array('error_image' => "Insert Blog Headline");
            $this->load->view('frontend/admin.php',$error);
        }
        elseif($this->upload->do_upload('userfile')==true && empty($this->input->post('description'))){
            $error = array('error_image' => "Insert Blog Description");
            $this->load->view('frontend/admin.php',$error);
        }
        else { //else, set the success message
			$error = array('error_image' => "Upload success!");
            $data = array('upload_data'=> $this->upload->data());
            $upload = array (
              'description' => $this->input->post('description'),
              'url'=> $data['upload_data']['file_name'],
              'headline'=> $this->input->post('headline'),
              'date'=> $this->input->post('day'),
              'month'=> $this->input->post('month'),
              'year'=> $this->input->post('year')
           );
            $this->db->insert('blog', $upload);
            $this->load->view('frontend/admin.php',$error);
		}
		
		//load the view/upload.php
		$this->load->view('frontend/admin.php', $error);
		
	}


    
    
    
    function admin(){
        $errors = array(
        'error_image'=>''
        );
        $this->load->view('frontend/admin.php',$errors);
    }
//    function upload(){
// 	$config=array(
//    'upload_path'=> './assests/images',
//    'allowed_types'=>'*',
//	'max_size'=>'1024',
//	'max_width'=>'1024',
//    'max_height'=>'768',
//    'overwrite' => TRUE
//    );	
//	$this->load->library('form_validation');
//	//$this->load->library('upload',$config_image);
//    $this->load->library('upload');
//    $this->upload->initialize($config);
//    $this->form_validation->set_rules('userfile','trim|required');
//////$this->form_validation->set_rules('type','Content Type','required|max_length[13]',array('required|max_length[13]' => 'You must provide a %s.'));
//////$this->form_validation->set_rules('headline','Title','required',array('required' => 'You must provide a %s.'));
//////$this->form_validation->set_rules('shortdescription','Description','required',array('required' => 'You must provide a %s.'));
//////$this->form_validation->set_rules('caption','Caption','required',array('required' => 'You must provide a %s.'));
//////if (empty($_FILES['userfile']['name']))
//////{
////   //$this->form_validation->set_rules('userfile', 'Image', 'required');
//////}
////   //$this->form_validation->set_rules('news','Post','required');
//////   $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");
//    echo $this->form_validation->run();
//    echo $this->upload->do_upload('userfile');
//        exit;
//if ($this->form_validation->run() && $this->upload->do_upload()  )
//{
////	$url=$this->input->post('uploadimage');
////	$post=$this->input->post();
//	unset($post['submit']);
//	
//	$data=$this->upload->data();
//	
//	
//		$link=("/assests/images/".$data['uploadimage'].$data['file_ext']);
//		$file_name=($data['uploadimage'].$data['file_ext']);
//		$this->thumbnail($file_name);
//		$post['link']=$link;
//	$this->load->model('Post');
//	if ($this->Post->insert($post))
//	{
//	
//		$error= array(
//          'error_image'=>'success'
//        );
//         $this->load->view('frontend/admin.php',$error); 
//	}
//	else{
//		$error= array(
//          'error_image'=>'fail'
//        );
//         $this->load->view('frontend/admin',$error); 
//	}
//	return redirect('admin');
//}
//else{
//	
//	$error = array(
//        'error_image'=>'please select the image to upload'
//        );
//    $this->load->view('frontend/admin',$error); 
//}
//
//    }
//upload blog controller ends
   
    function contact(){
    
      $this->load->library('googlemaps');
      $this->load->library('email');
      $subject = 'Message From Kidzee';
      $message = '<p>This message has been sent for testing purposes.</p>';
      //$config['center'] = '23.5502, 87.2897';
      $config['center'] = '28.67123, 77.17786';
      $config['zoom'] = 'auto';
      $this->googlemaps->initialize($config);

       $marker = array();
       //$marker['position'] = '23.5502, 87.2897';
       $marker['position'] = '28.67123, 77.17786';
       $this->googlemaps->add_marker($marker);
       $data['map'] = $this->googlemaps->create_map();


        $this->load->view('frontend/contact.php',$data);
    }
   
    function curve(){
        $data['pagename']='curve';
        $this->load->view('frontend/organisation.php',$data);
    }
    function facilities(){
        $data['pagename']='facilities';
        $this->load->view('frontend/organisation.php',$data);
    }
    function activity(){
        $data['pagename']='activity';
        $this->load->view('frontend/organisation.php',$data);
    }
    function mentors(){
        $data['pagename']='mentors';
        $this->load->view('frontend/organisation.php',$data);
    }
    function sendmail(){
      $this->load->library('MY_Email');
      $this->email->from('roshankumarsingh6111@gmail.com', 'Roshan');
      $this->email->to('roshnakumarsingh6111@gmail.com');
      $this->email->cc('another@another-example.com');
      $this->email->bcc('them@their-example.com');
      $this->email->subject('Email Test');
      $this->email->message('Testing the email class.');
      $this->email->send(); 
    }

}