<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Visitor extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCustomers(){
  		$this->db->select('*');
  		$this->db->from('customers');
  		$this->db->order_by('name','asc');
  		$query = $this->db->get();
  		if($query->num_rows() > 0){
  			$result = $query->result();
  			return $result;
  		}else{
  			return array();
  		}
    } 
     public function getProducts(){
      	$this->db->select('*');
  		$this->db->from('products');
  		$this->db->where('status','1');
  		$this->db->order_by('updatedDate','desc');
  		$query = $this->db->get();
  		if($query->num_rows() > 0){
  			$result = $query->result();
  			return $result;
  		}else{
  			return array();
  		}
    }

      public function getPendingProducts(){
      $this->db->select('*');
    $this->db->from('products');
    $this->db->join('product_detail','product_detail.productId = products.id','LEFT');
    $this->db->where('products.status','0');
    $this->db->order_by('products.createdDate','DESC');
    $query = $this->db->get();
    if($query->num_rows() > 0){
      $result = $query->result();
      return $result;
    }else{
      return "";
    }
  }

    public function getPendingProductImages(){
      $this->db->select('*');
    $this->db->from('product_images');
    $this->db->join('products','product_images.productId = products.id','LEFT');
    $this->db->where('products.status','0');
    $this->db->order_by('products.createdDate','DESC');
    $query = $this->db->get();
    if($query->num_rows() > 0){
      $result = $query->result();
      return $result;
    }else{
      return "";
    }
  }

    public function getCategories(){
              $this->db->select('*');
      $this->db->from('categories');
      $this->db->order_by('name','asc');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        $result = $query->result();
        return $result;
      }else{
        return array();
      }
    }


    public function getNewProducts(){

      $date = date("Y-m-d H:i:s"); 
      $this->db->distinct();
      $this->db->select('*');
      $this->db->from('products');
      $this->db->where('status','1');
      $this->db->order_by('updatedDate','desc');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        $result = $query->result();
        return $result;
      }else{
        return array();
      }
    }

    public function getComments($id){
      $this->db->distinct();
      $this->db->select('comments.createdDate as commentDate,commentmessage,commentsubject,users.username as commentusername');
      $this->db->from('comments');
      $this->db->join('users','users.id = comments.userId','LEFT');
      $this->db->where('productId',$id);
      $this->db->where('comments.status','1');
      $this->db->order_by('comments.id','desc');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        $result = $query->result();
        return $result;
      }else{
        return array();
      }
    }

    public function getPopulerProducts(){
       $this->db->distinct('products.id');
      $this->db->select('*');
      $this->db->from('shoppingcart');
      $this->db->join('products','products.id = shoppingcart.productId','left');
      $this->db->where('shoppingcart.status','0');
      $this->db->order_by('shoppingcart.updatedDate','desc');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        $result = $query->result();
        return $result;
      }else{
        return array();
      }
    }

    public function getLikedProducts(){
  
      $this->db->select('*');
      $this->db->from('product_likes');
      $this->db->join('products','products.id = product_likes.productId','left');
      $this->db->order_by('product_likes.updatedDate','desc');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        $result = $query->result();
        return $result;
      }else{
        return array();
      }
    }

   public function getInOrderProducts(){
     $this->db->distinct();
      $this->db->select('*');
      $this->db->from('orders');
      $this->db->join('shoppingcart','shoppingcart.id = orders.cartId','left');
      $this->db->join('products','products.id = shoppingcart.productId','left');
      $this->db->order_by('orders.createdDate','desc');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        $result = $query->result();
        return $result;
      }else{
        return array();
      }
    }

    public function getCargos(){
      $this->db->select('*');
      $this->db->from('cargos');
      $this->db->order_by('name','asc');
      $query = $this->db->get();
      if($query->num_rows() > 0){
        $result = $query->result();
        return $result;
      }else{
        return array();
      }
    }

    public function getCustomerProducts($id){
    	  	$this->db->select('products.name as productName, products.thumbImageURL AS productImageURL, products.id as productId, products.updatedPrice as updatedPrice,products.price as price');
  		$this->db->from('products');
  		$this->db->join('customers','customers.id = products.customerId');
  		$this->db->where('products.status','1');
  		$this->db->where('customers.id', $id);
  		$this->db->order_by('products.updatedDate','desc');
  		$query = $this->db->get();
  		if($query->num_rows() > 0){
  			$result = $query->result();
  			return $result;
  		}else{
  			return array();
  		}
    }

    public function getCustomersImages(){
    	$this->db->select('*');
  		$this->db->from('customer_images');
  		$this->db->order_by('id','desc');
  		$query = $this->db->get();
  		if($query->num_rows() > 0){
  			$result = $query->result();
  			return $result;
  		}else{
  			return array();
  		}
    }

    public function getCustomer($id){

    	$this->db->select('*');
  		$this->db->from('customers');
  		$this->db->where('id',$id);
  		$query = $this->db->get();
  		if($query->num_rows() > 0){
  			$result = $query->first_row();
  			return $result;
  		}else{
  			return array();
  		}
    }

    public function getCustomerCategories($id){
    	$this->db->distinct();
    	$this->db->select('products.customerId as customerId,categories.name as categoryName, categories.id as categoryId,count(categoryId) AS count');
  		$this->db->from('categories');
  		$this->db->join('products','products.categoryId = categories.id','LEFT');
  		$this->db->where('products.customerId',$id);
  		$this->db->order_by('categories.name','asc');


  		$query = $this->db->get();

  		if($query->num_rows() > 0){
  			$results = $query->result();
  			return $results;
  		}else{
  			return array();
  		}
    }

    public function getProductDetail($id){
    	$this->db->select('*');
    	$this->db->from('products');
    	$this->db->join('product_detail','products.id = product_detail.productId','LEFT');
    	$this->db->where('products.id',$id);
    	$this->db->order_by('products.createdDate','desc');
    	$query = $this->db->get();
    	if($query->num_rows() > 0){
    		$result = $query->first_row();
    		return $result;
    	}else{
    		return array();
    	}
    }

        public function getProductImages($id){
    	$this->db->select('*');
    	$this->db->from('product_images');
    	$this->db->where('product_images.productId',$id);
    	$this->db->order_by('product_images.id','desc');
    	$query = $this->db->get();
    	if($query->num_rows() > 0){
    		$result = $query->result();
    		return $result;
    	}else{
    		return array();
    	}
    }


    public function getProductCountInCategory($categoryId,$customerId){
    	$this->db->select('products.id');
    	$this->db->from('products');
    	$this->db->where('products.customerId',$customerId);
    	$this->db->where('products.categoryId',$categoryId);
    	$query = $this->db->get();
    	if($query->num_rows() > 0){
    		$count = $query->num_rows();
    		return $count;
    	}else{
    		return array();
    	}
    }
}