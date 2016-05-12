<?php include('page-content/header.php') ?>



<body class="shoping">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  HEADER-AREA  -->
	<?php include('page-content/navigation.php') ?>
    <!-- Header-AREA END -->
	

	
    <!-- BREADCRUMBS  -->
    <div class="title-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                   
                        <div class="bred-title">
                            <h3><?php echo $customerData->name; ?></h3>
                        </div>
                    
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('home'); ?>">Ana Sayfa</a></li>
                            <li><a href="<?php echo base_url('customers'); ?>">Mağazalar</a></li>
                            <li><a href="#"><?php echo $customerData->name; ?></a></li>
                        </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END  -->
	
    <!-- PRODUCT-LIST-AREA  -->
    <div class="product-list-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="brands">
                         <?php if($customerProducts != array()) { ?>
                        <h3>Kategoriler <i class="fa fa-bars"></i></h3>
                        <ul>
                           
                            <?php foreach ($customerCategories as $category) : ?>
                            <?php if($category->count > 0) : ?>
                            <li> <input type="checkbox" name="vehicle" value="<?php echo $category->categoryId; ?>"> <?php echo $category->categoryName; ?> <span>(<?php echo $category->count; ?>)</span>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                         
                        </ul>
                           <?php }else{?>
                           <span>Bu butiğe ait ürün bulunamadı.</span>
                           <?php }?>
                    </div>
                    
                    
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
                        <?php  if($customerProducts): ?>
                        <?php foreach ($customerProducts as $product)  : ?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-single">
                                <a href="<?php echo base_url('product/?id='.$product->productId.''); ?>"><img src="<?php echo base_url('assets/images/products/'.$product->productImageURL.''); ?>" alt="#">
                                </a>
                                <div class="tag new">
                                    <span>new</span>
                                </div>
                                <div class="hot-wid-rating">
                                    <h4><a href="<?php echo base_url('product/?id='.$product->productId.''); ?>"><?php echo ucfirst($product->productName); ?></a></h4>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    
                                    <div class="product-wid-price">
                                        <?php if($product->updatedPrice == $product->price) { ?>
                                        <ins><?php echo $product->updatedPrice; ?></ins>
                                    <?php } else{ ?>
                                      <ins><?php echo $product->updatedPrice; ?></ins> <del><?php echo $product->price; ?></del>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  endforeach; ?>
                    <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT-LIST:END -->
	
    <!-- Entire FOOTER:START -->
		<?php include('page-content/footer.php') ?>
	<!-- Entire FOOTER:END -->
	
    <!-- jQuery latest -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/jQuery.2.1.4.js'); ?>"></script>
	
	<!-- js Modernizr -->
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js'); ?>"></script>

    <!-- Revolution slider -->
    <script type="text/javascript" src="<?php echo base_url('assets/rs-plugin/js/jquery.themepunch.tools.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>"></script>
	
	<!-- Range js -->
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#slider-range" ).slider({
		  range: true,
		  min: 150,
		  max: 1400,
		  values: [ 520, 1100 ],
		  slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		  }
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		  " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	  });
	</script>
	
	<!-- Bootsrap js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	
	<!-- Plugins js -->
    <script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
	
	<!-- Owl js -->
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	
	<!-- Custom js -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>