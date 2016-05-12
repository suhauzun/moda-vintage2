<?php include('page-content/header.php') ?>
 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jQuery.2.1.4.js'); ?>"></script>

<body class="shoping">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  HEADER-AREA  -->
	<?php include('page-content/navigation.php') ?>
    <!-- Header-AREA END -->
	

	
    <!-- BREADCRUMBS -->
    <div class="title-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bred-title">
                        <h3>Ürün Detayı</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home'); ?>">Ana Sayfa</a>
                        </li>
                        <li><a href="<?php echo base_url('product/?id='.$productDetail->productId.''); ?>">Ürün Detayı</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
    <!-- PRODUCT-LIST-AREA -->
    <div class="single-product-area section-padding">
        <div class="container">
            <div class="row">
             
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-product-details">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="product-img-detail">
										
									<div class="single_product_image">
										<input type="hidden" id="__VIEWxSTATE" />
										<?php if(isset($productImages) && $productImages != array()) { ?>
                                        <ul id='zoom1' class=''>
										<?php foreach ($productImages as $productImage) : ?>
											<li>
												<img src="<?php echo base_url('assets/images/products/'.$productImage->imageUrl); ?>" alt='image1' />
											</li>
									<?php endforeach; ?>
                                    </ul>
									<?php }else { ?>
                                    <ul id='zoom1' class=''>
                                            <li>
                                                <img src="<?php echo base_url('assets/images/products/'.$productDetail->thumbImageURL); ?>" alt='image1' />
                                            </li>
                                        
                                        </ul>
                                    <?php } ?>
									</div>
									
                                </div>
                            </div>
                            	
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-product-content">
                                	<form action="<?php echo base_url('users/addToCart'); ?>" method="post">
                                    <h3><?php echo $productDetail->name; ?></h3>
                                    <div class="product-review">
                                       <ul>
                                            <li>
                                                <section class="yildiz2">
                                                    <input type="radio" name="example" class="rating" value="1" />
                                                    <input type="radio" name="example" class="rating" value="2" />
                                                    <input type="radio" name="example" class="rating" value="3" />
                                                    <input type="radio" name="example" class="rating" value="4" />
                                                    <input type="radio" name="example" class="rating" value="5" />
                                                </section>
                                            </li>
                                         
                                        </ul>
                                        <h4>Stok <span>:<?php echo $productDetail->count; ?> Adet Mevcut</span>
                                    </h4>
                           
                                    <h4>Adet <span>:
                                      <select id="count" name="count">
                                           <?php 
                                           $count = $productDetail->count; 
                                          for ($i=1; $i <=$count; $i++) { ?>
                                           <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                           ?>
                                       </select></span>
                                      </h4> 
                                        <div class="product-wid-price">
                                        	<?php if($productDetail->updatedPrice != $productDetail->price) { ?>
                                            <ins><?php echo $productDetail->updatedPrice; ?></ins> <del><?php echo $productDetail->price; ?></del>
                                        	<?php }else {?>
                                        		 <ins><?php echo $productDetail->updatedPrice; ?></ins>
                                        	<?php  } ?>
                                        </div>
                                        <p><?php echo $productDetail->properties; ?></p>
                                    </div>

                                    <div class="single-color">
                                        <div class="product-size">
                                            <p>Renkler :</p>
                                                <?php   
                                            $colors = $productDetail->colors;
                                            $colorList = array();
                                            $colorList= explode(",", $colors); 
                                            ?>
                                                  <select id="color" name="color">
                                            <?php if($colorList != array()) :
                                                foreach ($colorList as $eachColor) : ?>
                                                <option value="<?php echo $eachColor; ?>" ><?php echo $eachColor; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                         </select>


                                     <!--
                                        <div class="product-color">
                                            <ul>
                                                <li><a class="black-clr" href="#"></a></li>
                                                <li><a class="yellow-clr" href="#"></a></li>
                                                <li><a class="red-clr" href="#"></a></li>
                                                <li><a class="rose-clr" href="#"></a></li>
                                                <li><a class="pest-clr" href="#"></a></li>
                                                <li><a class="grey-clr" href="#"></a></li>
                                            </ul> -->
                                        </div>
                                        <div class="product-size">
                                        	<?php   
                                        	$sizes = $productDetail->sizes;
                                            $list = array();
                                            $list= explode("-", $sizes); 
                                            ?>
                                            <p>Bedenler :</p>
                                               <select id="size" name="size">
                                            <?php if($list != array()) :
                                            	foreach ($list as $eachSize) : ?>
                                                <option value="<?php echo $eachSize; ?>" ><?php echo $eachSize; ?></option>
	                                        	<?php endforeach; ?>
	                                        <?php endif; ?>
                                         </select>
                                        </div>
                                    </div>

                                    <div class="product-collection">
                                            <ul>
                                                <li><a href="<?php echo base_url('users/likeProduct?id='.$productDetail->productId.''); ?>"><i class="fa fa-heart-o"></i>Favorilerime Ekle</a></li>
                                                <!--<li><a href="#"><i class="fa fa-exchange"></i>Ürün Karşılaştır ?</a></li>-->
                                                <li><a href="#"><i class="fa fa-envelope-o"></i>Mesaj Gönder ?</a></li>
                                            </ul>
                                    </div>

                                    <div class="single-color last-color-child">
                                        <!--<div class="size-heading">
                                            <h5>Qty :</h5>
                                        </div>-->
                                       
                                        <input type="hidden" id="productId" name="productId" value="<?php echo $productDetail->productId; ?>">
										<button class="btn btn-default" id="cart" name="cart" type="submit"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                    </div>
                                   </form>
                           			<div class="single-color">
                                        <div class="product-collection">
                                            <ul>
                                            	<?php
                                            	if(isset($likeResult) && $likeResult!= ""){
                                            		if($likeResult == TRUE){
                                            			$class= "fa fa-heart";
                                            		}else{
                                            			$class= "fa fa-heart-o";
                                            		}
                                            	}elseif(isset($productLikeStatus) && $productLikeStatus == TRUE){
                                            		$class= "fa fa-heart";
                                            	}else{
                                                    $class= "fa fa-heart-o";
                                                }

                                            	 ?>
                                              
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="product-tab product-tab-single">
                           <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ürün Bilgiler</a>
                            </li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Kullanıcı Yorumları</a>
                            </li>
                          
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home"><?php echo $productDetail->properties; ?></div>
                            <div role="tabpanel" class="tab-pane" id="profile">
								<div class="review_panel">
									<div class="review_comments">
										<div class="review_heading">
											<div class="review_heading_left">
												<h2><span>Ürüne Yapılmış Yorumlar</span></h2>
											</div>
										<!-- 	<div class="review_heading_right">  ÜRÜN DERECELENDİRME YOKKİ YORUMDA
												<ul id="review_heading_star">
													<li><a href="" class="fa fa-star"></a></li>
													<li><a href="" class="fa fa-star"></a></li>
													<li><a href="" class="fa fa-star"></a></li>
													<li><a href="" class="fa fa-star"></a></li>
													<li><a href="" class="fa fa-star"></a></li>
												</ul>
											</div> -->
										</div>
                                        <?php if(isset($comments) && $comments !="") :?>
                                        <?php foreach ($comments as $comment) : ?>
                                    
										<div class="single_review_comment">
											<!-- <div class="single_review_img">  KULLANICI PROFİL RESMİ YOKKİ
												<img src="../assets/images/kous.png" alt="">
											</div> -->
											<div class="single_review_text">
												<h4><?php echo $comment->commentsubject; ?></h4>
												<!-- <ul id="single_review_star">
													<li><a href="" class="fa fa-star"></a></li>
													<li><a href="" class="fa fa-star"></a></li>
													<li><a href="" class="fa fa-star"></a></li>
													<li><a href="" class="fa fa-star"></a></li>
													<li><a href="" class="fa fa-star"></a></li>
												</ul> -->
												<p><?php echo $comment->commentmessage; ?></p>
												<div class="review_italic">
													<p><span><?php echo $comment->commentusername; ?></span> | <?php echo $comment->commentDate; ?></p>
												</div>
											</div>
										</div>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
									</div> 
                                    <?php if(isset($username) && $username != "") : ?>
									<div class="Review_input">
										<div class="review_input_heading">
											<h3>Yorum Yap</h3>
										</div>
										<div class="review_comment_input">
                                            <form method="POST" action="<?php echo base_url('product/addComment'); ?>">
    											<input type="text" id="commentusername" name="commentusername" placeholder="Adınız"><br>
                                                <input type="hidden" id="productId" name="productId" value="<?php echo  $productDetail->productId; ?>">
                                                <input type="hidden" id="customerId" name="customerId" value="<?php echo  $productDetail->customerId; ?>">
    											<input type="text" id="commentsubject" name="commentsubject" placeholder="Konu"><br>
    											<textarea cols="30" rows="10" id="commentmessage" name="commentmessage" placeholder="Mesajınız"></textarea><br>
    											<input type="submit" value="Yorumu Gönder">
                                            </form>
										</div>
									</div>
                                <?php endif; ?>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="product-latest">
                        <div class="">
                            <div class="headline">
                                <h2>Benzer Ürünler</h2>
                            </div>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="product-single">
										<a href="#"><img src="../assets/images/product7.png" alt="#">
										</a>
										<div class="tag percent">
											<span>15%</span>
										</div>
										<div class="hot-wid-rating">
											<h4><a href="#">stylish dress for women</a></h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<div class="product-wid-price">
												<ins>$3000.00</ins>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="product-single">
										<a href="#"><img src="../assets/images/product8.png" alt="#">
										</a>
										<div class="hot-wid-rating">
											<h4><a href="#">stylish dress for women</a></h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<div class="product-wid-price">
												<ins>$3000.00</ins>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="product-single">
										<a href="#"><img src="../assets/images/product9.png" alt="#">
										</a>
										<div class="hot-wid-rating">
											<h4><a href="#">stylish dress for women</a></h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<div class="product-wid-price">
												<ins>$3000.00</ins>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT-LIST:END -->
	
    <!-- Entire FOOTER:START -->
	<?php include('page-content/footer.php') ?>
	
    <!-- Entire FOOTER:END -->



<script type="text/javascript"   src="<?php echo base_url('/assets/js/modernizr-2.6.2.min.js'); ?>"></script>
<script type="text/javascript"   src="<?php echo base_url('/assets/royalslider/jquery-1.8.3.min.js'); ?>"></script>
<script type="text/javascript"   src="<?php echo base_url('/assets/js/jquery.glasscase.minf195.js'); ?>"></script>
  <script type="text/javascript">
        $(function () {
            //ZOOM
            $("#zoom1").glassCase({ 'widthDisplay': 456, 'heightDisplay': 470, 'isSlowZoom': true });
        });
    </script>












</body>


</html>