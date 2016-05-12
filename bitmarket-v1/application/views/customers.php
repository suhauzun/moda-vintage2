<?php include('page-content/header.php') ?>



<body class="shoping">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  HEADER-AREA  -->
	<?php include('page-content/navigation.php') ?>
    <!-- Header-AREA END -->
	
    <!-- PAGE-TITLE-AREA -->

    <!-- PAGE-TITLE-AREA:END -->
	
    <!-- BREADCRUMBS -->
    <div class="title-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bred-title">
                        <h3>Mağazalar</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home') ?>">Ana Sayfa</a>
                        </li>
                        <li><a class="active" href="#">Mağazalar</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
	
    <!-- WISH-AREA     -->
    <div class="wish-area section-padding">
        <div class="container">
            <div class="row">
                <?php if($customers) : ?>
                <?php foreach ($customers as $customer) : ?>
                
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="product-single">
                        <?php if($customer->logo != "") { ?>
                        <a href="<?php echo base_url('customer/?id='.$customer->id.''); ?>"><img src="<?php echo base_url('assets/images/customers/'.$customer->logo); ?>" alt="#">
                        </a>
                    <?php } ?>
                        <div class="hot-wid-rating">
                            <h4><a href="<?php echo base_url('customer/?id='.$customer->id.''); ?>"><?php echo ucfirst($customer->name); ?></a></h4>
                        </div>
                    </div>
                </div>
                 <?php endforeach; ?>
                <?php endif; ?>

            </div>
    
        </div>
    </div>
    <!-- WISH-AREA:END   -->
	
    <!-- Entire FOOTER:START -->

  <script type="text/javascript" src="<?php echo base_url('assets/js/jQuery.2.1.4.js'); ?>"></script>
	<?php include('page-content/footer.php') ?>
	<!-- Entire FOOTER:END -->
	
  

</body>

</html>