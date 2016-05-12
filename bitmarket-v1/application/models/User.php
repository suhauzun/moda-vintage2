<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

	public function SignUp($username,$password){
		$date = date("Y-m-d H:i:s"); 
		$userdata = array('username' => $username,'password' => md5($password),'createdDate' => $date,'updatedDate' => $date);

		$this->db->insert('users',$userdata);
		$userId = $this->db->insert_id();

		/*$userDetailData = array('userId' => $userId,'email' => $email,'firstname' => $firstname,'surname'=> $lastname,'telNo' => $telNumber,'createdDate'=>$date,'updatedDate' => $date);
		$this->db->insert('user_detail',$userDetailData);


		$userAddressesData = array('userId' => $userId,'address' => $address,'city' => $city,'country' => $country,'zipCode' => $zipCode,'createdDate' => $date,'updatedDate' =>$date);
		$this->db->insert('user_address',$userAddressesData);*/

		$userRoleData = array('userId' => $userId,'roleId' => '0','createdDate'=> $date,'updatedDate' => $date);
		$this->db->insert('user_roles',$userRoleData);

		$userLogData = array('userId' => $userId,'lastLoginDate' => $date,'lastOrderDate'=> "");
		$this->db->insert('user_log',$userLogData);

		$resultData = array('userId' => $userId,'username' => $username,'role' => '0');
		return $resultData;
	}

	public function likeProduct($userId,$productId){
			$date = date("Y-m-d H:i:s"); 
			$data = array('userId' => $userId,'productId' => $productId,'createdDate' => $date,'updatedDate'=> $date);
			$this->db->insert('product_likes',$data);
			return TRUE;
	}

	public function checkPass($userId,$password){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$userId);
		$this->db->where('password',md5($password));
		$query =$this->db->get();
		if($query->num_rows() > 0){
			$result = $query->first_row();
			return "1";
		}else{
			return "2";
		}
	}

	


	public function asCustomerSave($name,$email,$information,$logo,$username,$password){
		$date = date("Y-m-d H:i:s"); 
		$userdata = array('username' => $username,'password' => md5($password),'createdDate' => $date,'updatedDate' => $date);

		$this->db->insert('users',$userdata);
		$userId = $this->db->insert_id();

		$userRoleData = array('userId' => $userId,'roleId' => '1','createdDate'=> $date,'updatedDate' => $date);
		$this->db->insert('user_roles',$userRoleData);

		$customerData = array('name' => $name,'userId' => $userId,'emailAddress' => $email,'information' => $information,'logo' => $logo,'createdDate' => $date,'updatedDate' => $date);
		$this->db->insert('customers',$customerData);
		return TRUE;
	}

	public function checkCartData($userId,$productId,$size,$color){
		$this->db->select('count');
		$this->db->from('shoppingcart');
		$this->db->where('size',$size);
		$this->db->where('color',$color);
		$this->db->where('productId',$productId);
		$this->db->where('userId',$userId);
		$query =$this->db->get();
		if($query->num_rows() > 0){
			$result = $query->first_row();
			return $result->count;
		}else{
			return "0";
		}
		

	}

	public function updateCart($userId,$productId,$count,$result,$size,$color){
		$data = array('count' => $result+$count);
		$this->db->where('userId', $userId);
		$this->db->where('productId', $productId);
		$this->db->where('size', $size);
		$this->db->where('color', $color);
		$this->db->update('shoppingcart',$data);
		return TRUE;
	}

	public function getUserFavorites($userId){
		$this->db->select('*');
		$this->db->from('product_likes');
		$this->db->join('products','product_likes.productId = products.id','LEFT');
		$this->db->join('product_detail','products.id = product_detail.productId','LEFT');
		$this->db->where('product_likes.userId',$userId);
		$this->db->order_by('product_likes.createdDate','desc');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result();
			return $result;
		}else{
			return array();
		}
	}


    public function addComment($userId,$productId,$customerId,$commentusername,$commentsubject,$commentmessage){
    	$date = date("Y-m-d"); 
      	$data = array('userId' => $userId, 'productId' => $productId, 'customerId' => $customerId,'commentsubject' => $commentsubject,'commentmessage' => $commentmessage,'createdDate' => $date,'status' => '0');
      	$this->db->insert('comments',$data);
      	return TRUE;
    }

	public function clearMyFavorites($userId){
		$this->db->where('product_likes.userId',$userId);
		$this->db->delete('product_likes');
		return TRUE;
	}

	public function saveProductImage($productId,$file){
		$data = array('productId' => $productId, 'imageUrl' => $file);
		$this->db->insert('product_images',$data);
		return TRUE;
	}

	public function addToCart($userId,$productId,$count,$size,$color){
		$date = date("Y-m-d H:i:s"); 
		//Status 0 sa cartta halen var. 1 SE ARTIK ödenip silinir bu tablodan.
		$data = array('userId' => $userId,'productId' => $productId,'count' => $count,'size' => $size,'color' => $color,'createdDate' => $date,'updatedDate' => $date,'status' => '0');
		$this->db->insert('shoppingcart',$data);
		$cartId = $this->db->insert_id();

		$resultData = array('cartId' => $cartId,'userId' => $userId,'productId' => $productId,'count' => $count,'size' => $size);
		return $resultData;
	}

	public function getCart($userId){
		$this->db->select('shoppingcart.id as cartId,product_detail.cargoState as cargoState,shoppingcart.userId as userId, shoppingcart.productId as productId,shoppingcart.color as color,shoppingcart.count as count,shoppingcart.size as size,products.name as name,products.price as price,products.updatedPrice as updatedPrice,products.thumbImageURL as thumbImageURL');
		$this->db->from('shoppingcart');
		$this->db->join('products','shoppingcart.productId = products.id','LEFT');
		$this->db->join('product_detail','shoppingcart.productId = product_detail.productId','LEFT');
		$this->db->where('shoppingcart.userId',$userId);
		$this->db->order_by('shoppingcart.createdDate','DESC');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result();
			return $result;
		}else{
			return "";
		}
	}

	public function addProdInfo($userId,$category,$size,$cargo,$colors,$description,$tag,$stock,$price,$sale){
		$date = date("Y-m-d H:i:s"); 
		$data= array('name' => $description,'customerId' => $userId,'categoryId' => $category, 'price' => $price,'updatedPrice' => $price,'thumbImageURL' => '','campaignDate' => '','createdDate' => $date,'updatedDate' => $date,'status' => '0');
		$this->db->insert('products',$data);
		$productId = $this->db->insert_id();
		if($cargo == '0'){
			$cargoState = '0';
		}else{
			$cargoState = '1';
		}
		$detailData = array('productId' => $productId,'sizes' => $size,'colors' => $colors,'properties' => $description,'count' => $stock,'cargoState' => $cargoState,'cargos' => $cargo,'createdDate' => $date,'updatedDate' => $date);
		$this->db->insert('product_detail',$detailData);
		return $productId;
	}

	public function removeItem($userId,$cartId){
		$this->db->where('shoppingcart.id',$cartId);
		$this->db->delete('shoppingcart');
		return TRUE;
	}



	public function clearCart($userId){
		$this->db->where('shoppingcart.userId',$userId);
		$this->db->delete('shoppingcart');
		return TRUE;
	}

	public function acceptAllProducts($userId){
		$data = array('status' => '1');
		$this->db->update('products',$data);
		return TRUE;
	}
	public function changePassword($userId,$password){
		$date = date("Y-m-d H:i:s");
		$data = array('password' => md5($password),'updatedDate' => $date);
		$this->db->where('id',$userId);
		$this->db->update('users',$data);

		return TRUE;
	}

	public function changeCustomerPassword($userId,$newPassword){
		$date = date("Y-m-d H:i:s");
		$data = array('password' => md5($newPassword),'updatedDate' => $date);
		$this->db->where('id',$userId);
		$this->db->update('users',$data);

		return TRUE;
	}

	public function editProfile($userId,$username,$firstname,$surname,$email,$telNo,$address,$zipCode,$city,$country){
		$date = date("Y-m-d H:i:s");
		$data = array('username' => $username,'updatedDate' => $date);
		$this->db->where('id',$userId);
		$this->db->update('users',$data);

		$detailData = array('email' => $email,'firstname' => $firstname,'surname' => $surname,'telNo' => $telNo,'updatedDate' => $date);
		$this->db->where('userId',$userId);
		$this->db->update('user_detail',$detailData);

		$addressData = array('address' => $address,'city' => $city,'country' => $country,'zipCode' => $zipCode,'updatedDate' => $date);
		$this->db->where('userId',$userId);
		$this->db->update('user_address',$addressData);

		return TRUE;
	}

	public function editCustomerProfile($customerId,$username,$email,$information,$logo){
		$date = date("Y-m-d H:i:s");
		$data = array('logo' => $logo,'name' => $username,'emailAddress' => $email,'information' => $information,'updatedDate' => $date);
		$this->db->where('id',$customerId);
		$this->db->update('customers',$data);
		return TRUE;
	}

	public function getProfileData($userId,$role){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('user_detail','user_detail.userId = users.id','LEFT');
		$this->db->join('user_address','user_detail.userId = user_address.userId','LEFT');
		$this->db->where('users.id',$userId);
		$query =$this->db->get();
		if($query->num_rows() > 0){
			$result = $query->first_row();
			return $result;
		}else{
			return "";
		}
	}

	public function getCustomerProfileData($userId,$roleId){
		$this->db->select('users.id as userId,customers.logo as logo ,customers.id as customerId,customers.name as name,users.username as username,customers.emailAddress as emailAddress,customers.information as information');
		$this->db->from('users');
		$this->db->join('customers','customers.userId = users.id','LEFT');
		$this->db->join('user_roles','users.id = user_roles.userId','LEFT');
		$this->db->where('users.id',$userId);
		$this->db->where('user_roles.roleId',$roleId);
		$query =$this->db->get();
		if($query->num_rows() > 0){
			$result = $query->first_row();
			return $result;
		}else{
			return "";
		}
	}

	public function getCartCount($userId){
		$this->db->select('*');
		$this->db->from('shoppingcart');
		$this->db->where('shoppingcart.userId',$userId);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->num_rows();
			return $result;
		}else{
			return 0;
		}
	}

	public function removeProduct($productId){
		$this->db->where('id',$productId);
		$this->db->delete('products');

		return TRUE;
	}

	public function acceptProduct($productId){
		$data = array('status' => '1');
		$this->db->where('id',$productId);
		$this->db->update('products',$data);

		return TRUE;
	}

	public function getProductLikeStatus($userId,$productId){
		$this->db->select('*');
		$this->db->from('product_likes');
		$this->db->where('userId',$userId);
		$this->db->where('productId',$productId);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return TRUE;
		}else{	
			return FALSE;
		}
	}


	public function login($username, $password){

	   $this->db->select('users.id as userId, users.username as username, user_roles.roleId as role');
	   $this->db->from('users');
	   $this->db->join('user_roles','user_roles.userId = users.id','LEFT');
	   $this->db-> where('username', $username);
	   $this->db-> where('password', md5($password));
	   //  $this -> db -> where('token', $token);
	   $this -> db -> limit(1);

	   $query = $this -> db -> get();

	   if($query -> num_rows() == 1)
	   {

	    return $query->result();
	  }
	  else
	  {
	   return array();
	 }
	}

}