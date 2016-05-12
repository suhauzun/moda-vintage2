<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form'));
		$this->load->model('visitor');
		$this->load->model('user');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcomes
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
			$id = $this->input->get_post('id');
		if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['role'] = $session_data['role'];
			$data['username'] = $session_data['username'];
			$data['productLikeStatus'] = $this->user->getProductLikeStatus($data['userId'],$id);
			$data['cartCount'] = $this->user->getCartCount($data['userId']);
		}

		$data['comments'] = $this->visitor->getComments($id);
		$data['customers'] = $this->visitor->getCustomers(); 
		$data['productDetail'] = $this->visitor->getProductDetail($id);
		$data['productImages'] = $this->visitor->getProductImages($id);
		$this->load->view('product_detail', $data);
	}

	public function addComment(){
			if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$productId = $this->input->get_post('productId');
			$customerId = $this->input->get_post('customerId');
			$commentusername = $this->input->get_post('commentusername');
			$commentsubject = $this->input->get_post('commentsubject');
			$commentmessage = $this->input->get_post('commentmessage');	
			$data = $this->user->addComment($data['userId'],$productId,$customerId,$commentusername,$commentsubject,$commentmessage);

			redirect('product?id='.$productId.'',$data);
			
		}else{
			redirect('login','refresh');
		}	
	}



}
