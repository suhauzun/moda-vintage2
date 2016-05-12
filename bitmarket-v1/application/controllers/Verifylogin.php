<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   $this->load->library('session');
   $this->load->helper('url');
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }

 }

 function check_database($password)
 {

   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'username' => $row->username,
          'userId' => $row->userId,
          'role' => $row->role
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
    $message = '<div class="alert alert-error">
                    <strong>Error!</strong> Invalid username or password.
                  </div>';
     $this->form_validation->set_message('check_database', $message);
     return false;
   }
 }

 function check(){
  $this->load->view('forget_password_email');
 }
}
?>