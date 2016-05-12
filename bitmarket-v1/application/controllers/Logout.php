<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form'));
		$this->load->model('user');
	}
	
	public function index()
	{

   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 

	}




}
