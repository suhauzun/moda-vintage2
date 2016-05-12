<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form'));
		$this->load->model('user');
		$this->load->model('visitor');
	}
	
	public function index()
	{
		$data['customers'] = $this->visitor->getCustomers();
		
	if(isset($_POST['submit'])){
		
		$username =	    $_POST['username'];
		$password =	    $_POST['password'];
		$passwordRepeat=$_POST['passwordRepeat'];
		
		if($password == $passwordRepeat){

			$result = $this->user->SignUp($username,$password);
			if($result != ""){
				 $sess_array = array();
				 $sess_array = array(
			         'username' => $result['username'],
			          'userId' => $result['userId'],
			          'role' => $result['role']
			       );
       			  $this->session->set_userdata('logged_in', $sess_array);

				  redirect('home',$sess_array);
			}else{
				$data['message'] = "Kullanıcı kayıt olamadı";
			 redirect('signup',$data);
			}
		}else{
			$data['message'] = "Passwords must match";
			 redirect('signup',$data);
		}
		}else{

			$this->load->view('signup',$data);
		}
	}

	public function asCustomer(){
		$this->load->view('signup_asCustomer');
	}

	public function asCustomerSave(){
		if(isset($_POST['submit'])){
			$name =	$_POST['name'];
			$email =	    $_POST['email'];
			$information =	$_POST['information'];
			$username =	    $_POST['username'];
			$password =	    $_POST['password'];
			$passwordRepeat=$_POST['passwordRepeat'];

			if($password == $passwordRepeat){
				if(isset($_FILES['logo']) && $_FILES['logo']['name'] != ""){
					$url =  $this->base_path('assets/images/'.$_FILES['logo']["name"]);
					copy($_FILES['logo']["tmp_name"],$url);
					$logo = $_FILES['logo']["name"];
				}else{
					$logo = "empty-logo.png";
				}

				$result = $this->user->asCustomerSave($name,$email,$information,$logo,$username,$password);
				  redirect('login','refresh');
			}else{
			$data['message'] = "Passwords must match";
			 redirect('signup',$data);
			}

		}else{
			$this->load->view('signup');
		}
	}

	public function base_path($path){
$folder = $_SERVER['DOCUMENT_ROOT'].'/bitpazari_dev/'.$path;
return $folder;
}


}
