<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form'));
		$this->load->model('user');
		$this->load->model('visitor');
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
	public function likeProduct()
	{
		  
			if($this->session->userdata('logged_in'))
			{

			
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			 $productId = $this->input->get_post('id');
			$data['likeResult']= $this->user->likeProduct($data['userId'],$productId);
			$data['customers'] = $this->visitor->getCustomers(); 
			$data['cartCount'] = $this->user->getCartCount($data['userId']);
			$data['productDetail'] = $this->visitor->getProductDetail($productId);
			$data['productImages'] = $this->visitor->getProductImages($productId);
			redirect('users/myFavorites','refresh');
			}else{
				redirect('login','refresh');
			}
	}

	public function profile(){
			if($this->session->userdata('logged_in'))
			{

			
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$data['profileData']= $this->user->getProfileData($data['userId'],$data['role']);
			$this->load->view('profile', $data);
			}else{
				redirect('login','refresh');
			}
	}

	public function customerProfile(){
			if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['userId'] = $session_data['userId'];
				$data['username'] = $session_data['username'];
				$data['role'] = $session_data['role'];
				$data['profileData']= $this->user->getCustomerProfileData($data['userId'],$data['role']);
				$this->load->view('customer_profile', $data);
			}else{
				redirect('login','refresh');
			}
	}

	public function changeCustomerPassword(){
			if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['userId'] = $session_data['userId'];
				$data['username'] = $session_data['username'];
				$data['role'] = $session_data['role'];
				$password = $this->input->get_post('password');
				$newPassword = $this->input->get_post('newPassword');
				$confirmPassword = $this->input->get_post('confirmPassword');
				$data['profileData']= $this->user->getCustomerProfileData($data['userId'],$data['role']);
				$result = $this->user->checkPass($data['userId'],$password);
				if($result == '2'){
					$data['message'] = "Eski şifreyi yanlış girdiniz.Lütfen tekrar deneyiniz.";
					$this->load->view('customer_profile', $data);
				}else{
					if($newPassword ==$confirmPassword){
						$this->user->changeCustomerPassword($data['userId'],$newPassword);
						redirect('users/customerProfile','refresh');
					}else{
						$data['message'] = "Şifreler eşleşmiyor. Lütfen tekrar deneyiniz.";
						$this->load->view('customer_profile', $data);
					}
				}
				
				
			}else{
				redirect('login','refresh');
			}
	}


	public function editProfile(){
		if($this->session->userdata('logged_in'))
			{

			
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$username = $this->input->get_post('username');
			$firstname = $this->input->get_post('firstname');
			$surname = $this->input->get_post('surname');
			$email = $this->input->get_post('email');
			$telNo = $this->input->get_post('telNo');
			$address = $this->input->get_post('address');
			$zipCode = $this->input->get_post('zipCode');
			$city = $this->input->get_post('city');
			$country = $this->input->get_post('country');

			$this->user->editProfile($data['userId'],$username,$firstname,$surname,$email,$telNo,$address,$zipCode,$city,$country);
			redirect('users/profile','refresh');

			}else{
				redirect('login','refresh');
			}
	}

	public function editCustomerProfile(){
		if($this->session->userdata('logged_in'))
			{

			
			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$username = $this->input->get_post('username');
			$email = $this->input->get_post('email');
			$information = $this->input->get_post('information');
			$customerId = $this->input->get_post('customerId');
			if(isset($_FILES['logo']) && $_FILES['logo']['name'] != ""){
					$url =  $this->base_path('assets/images/customers/'.$_FILES['logo']["name"]);
					copy($_FILES['logo']["tmp_name"],$url);
					$file = "assets/images/customers/".$_FILES['logo']["name"];
				
					$this->user->editCustomerProfile($customerId,$username,$email,$information,$_FILES['logo']["name"]);

				redirect('users/customerProfile','refresh');
			  }else{
			  	$this->user->editCustomerProfile($customerId,$username,$email,$information,"empty-logo.png");
			  }

			
			redirect('users/customerProfile','refresh');

			}else{
				redirect('login','refresh');
			}
	}

	public function changePassword(){
			if($this->session->userdata('logged_in'))
			{

			
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$password = $this->input->get_post('password');
			$newPassword = $this->input->get_post('newPassword');
			$confirmPassword = $this->input->get_post('confirmPassword');
			$data['profileData']= $this->user->getProfileData($data['userId'],$data['role']);
			$result = $this->user->checkPass($data['userId'],$password);
			if($result == '2'){
				$data['message'] = "Eski şifreyi yanlış girdiniz.Lütfen tekrar deneyiniz.";
				$this->load->view('profile', $data);
			}else{
				if($newPassword ==$confirmPassword){
					$this->user->changePassword($data['userId'],$newPassword);
					redirect('users/profile','refresh');
				}else{
					$data['message'] = "Şifreler eşleşmiyor. Lütfen tekrar deneyiniz.";
					$this->load->view('profile', $data);
				}
			}


			}else{
				redirect('login','refresh');
			}
	}

	public function addProdInfo(){

			if($this->session->userdata('logged_in'))
			{

			
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$category = $this->input->get_post('selectcategory');
			$size = $this->input->get_post('size');
			$cargo = $this->input->get_post('selectcargo');
			$colors = $this->input->get_post('colors');
			$description = $this->input->get_post('description');
			$tag = $this->input->get_post('tag');
			$stock = $this->input->get_post('stock');
			$price = $this->input->get_post('price');
			$sale = $this->input->get_post('sale');

			$result = $this->user->addProdInfo($data['userId'],$category,$size,$cargo,$colors,$description,$tag,$stock,$price,$sale);
			print_r($result); 
			return $result;
			}else{
				redirect('login','refresh');
			}

	
	}

	public function myFavorites(){
	
		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['role'] = $session_data['role'];
			$data['username'] = $session_data['username'];
			$data['cartCount'] = $this->user->getCartCount($data['userId']);
			$data['customers'] = $this->visitor->getCustomers(); 
			$data['userFavorites'] = $this->user->getUserFavorites($data['userId']); 
			$this->load->view('favori_list', $data);
			}else{
				redirect('login','refresh');
			}
	}

	public function acceptAllProducts(){
		if($this->session->userdata('logged_in'))
			{
		$session_data = $this->session->userdata('logged_in');
		$data['userId'] = $session_data['userId'];
		$data['role'] = $session_data['role'];
		$data['username'] = $session_data['username'];
		$this->user->acceptAllProducts($data['userId']);
		
		redirect('users/satisOnay','refresh');
		}else{
			redirect('login','refresh');
		}
	}

	public function removeProduct(){

		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['role'] = $session_data['role'];
			$data['username'] = $session_data['username'];
			$data['productId'] = $this->input->get_post('productId');
			 $this->user->removeProduct($data['productId']); 
			redirect('users/satisOnay','refresh');
			}else{
				redirect('login','refresh');
			}
	}

	public function saveProductImage(){
			if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			if(isset($_FILES['imageKaydet']) && $_FILES['imageKaydet']['name'] != ""){
					$url =  $this->base_path('assets/images/'.$_FILES['imageKaydet']["name"]);
					copy($_FILES['imageKaydet']["tmp_name"],$url);
					$file = "assets/images/".$_FILES['imageKaydet']["name"];
				
					$this->user->saveProductImage($productId,$file);

				$this->load->view('favori_list', $data);
			  }
			}else{
					redirect('login','refresh');
				}
	}


	public function satisYap(){
	
		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$data['categories'] = $this->visitor->getCategories();
			$data['cargos'] = $this->visitor->getCargos();
			$this->load->view('satis_yap', $data);
			}else{
				redirect('login','refresh');
			}
	}
	/* need to control according to roleId and redirect to error page */
	public function satisOnay(){ 
		if($this->session->userdata('logged_in') && $this->session->userdata('logged_in')['role'] == '1')
			{
				$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$data['pendingProducts'] = $this->visitor->getPendingProducts();
			$data['pendingProductImages'] = $this->visitor->getPendingProductImages();
			$this->load->view('satis_onay', $data);
			}else{
				redirect('login','refresh');
			}
	}

	public function acceptProduct(){
		if($this->session->userdata('logged_in') && $this->session->userdata('logged_in')['role'] == '1')
			{
			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['role'] = $session_data['role'];
			$data['username'] = $session_data['username'];
			$productId = $this->input->get_post('productId');
			$this->user->acceptProduct($productId);
			redirect('users/satisOnay','refresh');
			}else{
				redirect('login','refresh');
			}
	}

	public function clearMyFavorites(){
			if($this->session->userdata('logged_in'))
			{
			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['role'] = $session_data['role'];
			$data['username'] = $session_data['username'];
			$data['cartCount'] = $this->user->getCartCount($data['userId']);
			$data['result'] = $this->user->clearMyFavorites($data['userId']); 
				redirect('home','refresh');
			}else{
				redirect('login','refresh');
			}
	}
	public function in_array_field($needle, $needle_field, $haystack, $strict = false) { 
    if ($strict) { 
        foreach ($haystack as $item) 
            if (isset($item->$needle_field) && $item->$needle_field === $needle) 
                return true; 
    } 
    else { 
        foreach ($haystack as $item) 
            if (isset($item->$needle_field) && $item->$needle_field == $needle) 
                return true; 
    } 
    return false; 
}
	public function addToCart(){
		if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$productId = $this->input->get_post('productId');
			$size = $this->input->get_post('size');
			$color = $this->input->get_post('color');
			$productId = $this->input->get_post('productId');
			$count = $this->input->get_post('count');
			$data['cartCount'] = $this->user->getCartCount($data['userId']);

			$result = $this->user->checkCartData($data['userId'],$productId,$size,$color);
			if($result > 0 ){
				$this->user->updateCart($data['userId'],$productId,$count,$result,$size,$color);
			}else{
				$this->user->addToCart($data['userId'],$productId,$count,$size,$color);
			}



			
		redirect('users/getCart','refresh');


		}else{
			redirect('login','refresh');
		}
	}


	public function removeItem(){
			if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$cartId = $this->input->get_post('cartId');
			$data['cartCount'] = $this->user->getCartCount($data['userId']);
			$this->user->removeItem($data['userId'],$cartId);
			redirect('users/getCart','refresh');

		}else{
			redirect('login','refresh');
		}	
	}



	public function clearCart(){
			if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$userId = $this->input->get_post('userId');
			$this->user->clearCart($userId);
			redirect('users/getCart','refresh');

		}else{
			redirect('login','refresh');
		}
	}

	public function getCart(){
			if($this->session->userdata('logged_in'))
		{

			$session_data = $this->session->userdata('logged_in');
			$data['userId'] = $session_data['userId'];
			$data['username'] = $session_data['username'];
			$data['role'] = $session_data['role'];
			$data['cartCount'] = $this->user->getCartCount($data['userId']);
			$data['customers'] = $this->visitor->getCustomers(); 
			$data['cargos'] = $this->visitor->getCargos();
			$data['cartData'] = $this->user->getCart($data['userId']);
			$this->load->view('shopping_cart',$data);


		}else{
			redirect('login','refresh');
		}
	}
	public function base_path($path){
$folder = $_SERVER['DOCUMENT_ROOT'].'/bitpazari_dev/'.$path;
return $folder;
}

}
