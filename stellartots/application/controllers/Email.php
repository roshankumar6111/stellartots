<?php 
     class Email extends CI_Controller
     {
 function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
      public function index() { 
	
         $this->load->helper('form'); 
         $this->load->view('email_form'); 
      } 
     public function send_mail_byparent(){
         $name =$_POST["txtname"]
         $fromemail =$_POST["txtemail"];
         $subject =$_POST["txtsubject"];
         $message =$_post["txtmessage"];
          $from_email = $fromemail; 
         $to_email = 'roshankumarsingh6111@gmail.com';    
         //Load email library 
         $this->load->library('email'); 
         $this->email->from($from_email, 'stellartots'); 
         $this->email->to($to_email);
         $this->email->subject($subject); 
         $this->email->message($message); 
         //Send mail   
         $this->email->send();
         echo $this->email->print_debugger();
         $this->load->view('frontend/contact');
     }
  
      public function send_mail() { 
        $email                  = $_POST["email"];
        $reset_account_type     = '';
        //resetting user password here
        $new_password           =   substr( md5( rand(100000000,20000000000) ) , 0,7);

        // Checking credential for admin
        $query = $this->db->get_where('admin' , array('email' => $email));
        if ($query->num_rows() > 0) 
        {
            $reset_account_type     =   'admin';
            $this->db->where('email' , $email);
            $this->db->update('admin' , array('password' => $new_password));
            $resp['status']         = 'true';
        }
        // Checking credential for student
        $query = $this->db->get_where('student' , array('email' => $email));
        if ($query->num_rows() > 0) 
        {
            $reset_account_type     =   'student';
            $this->db->where('email' , $email);
            $this->db->update('student' , array('password' => $new_password));
            $resp['status']         = 'true';
        }
        // Checking credential for teacher
        $query = $this->db->get_where('teacher' , array('email' => $email));
        if ($query->num_rows() > 0) 
        {
            $reset_account_type     =   'teacher';
            $this->db->where('email' , $email);
            $this->db->update('teacher' , array('password' => $new_password));
            $resp['status']         = 'true';
        }
        // Checking credential for parent
        $query = $this->db->get_where('parent' , array('email' => $email));
        if ($query->num_rows() > 0) 
        {
            $reset_account_type     =   'parent';
            $this->db->where('email' , $email);
            $this->db->update('parent' , array('password' => $new_password));
            $resp['status']         = 'true';
        }
           if($reset_account_type == ''){
            $msg['msg']='Email not exist';
             $this->load->view('backend/forgot_password',$msg);
        }
          else{
         $from_email = "roshankumarsingh6111@gmail.com"; 
         $to_email = $email; 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'stellartots'); 
         $this->email->to($to_email);
         $this->email->subject('Reset Password'); 
         $this->email->message('Hello Your New Password is :-'.$new_password); 
   
         //Send mail 
        
         $this->email->send();
         echo $this->email->print_debugger();
         $msg['msg']='Password is sended to your mail please check your mail';
         $this->load->view('backend/forgot_password',$msg);
        
    }
     }
     }