<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form'));
		$this->load->model('visitor');
		$this->load->model('user');
		$this->load->library('session');
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
		if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['role'] = $session_data['role'];
			$data['username'] = $session_data['username'];
			$data['cartCount'] = $this->user->getCartCount($data['userId']);
		}
		$data['customers'] = $this->visitor->getCustomers(); //Buraya kaç firma çekilecek?
		$data['customerImages'] = $this->visitor->getCustomersImages();
		$data['newProducts'] = $this->visitor->getNewProducts();
		$data['populerProducts'] = $this->visitor->getPopulerProducts();
		$data['likedProducts'] = $this->visitor->getLikedProducts();
		$data['inOrderProducts'] = $this->visitor->getInOrderProducts();

		$this->load->view('home', $data);
	}




}
