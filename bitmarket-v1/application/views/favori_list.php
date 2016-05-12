<?php include('page-content/header.php') ?>



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
                <div class="col-md-12">
                    <div class="bred-title">
                        <h3>Favori Listesi</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home'); ?>">Ana Sayfa</a>
                        </li>
                        <li><a href="<?php echo base_url('users/myFavorites'); ?>">Favori Listesi</a>
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
              <?php if(isset($userFavorites) && $userFavorites != array())  {?>
            <div class="row">
                <?php $favorites = array_unique($userFavorites, SORT_REGULAR); foreach ($favorites as $userFavorite) : ?>
                 <div class="col-md-3 col-sm-4 col-xs-12 product-box">
                                        <div class="women-single">
                                            <a href="<?php echo base_url('product/?id='.$userFavorite->productId.'') ?>"><img src="<?php echo base_url('assets/images/products/'.$userFavorite->thumbImageURL.'') ?>" alt="#">
                                            </a>
                                             <?php if($userFavorite->updatedPrice != $userFavorite->price) { ?>
                                                <div class="tag percent">
                                                    <?php $percent = (($userFavorite->price*100) - ($userFavorite->updatedPrice*100)) / $userFavorite->price;?>
                                                <span><?php echo ceil($percent)."%"; ?></span>
                                                </div>
                                                    <?php } ?>
          
                                            <div class="hot-wid-rating">
                                                <h4><a href="<?php echo base_url('product/?id='.$userFavorite->productId.''); ?>"><?php echo $userFavorite->name; ?></a></h4>
                                                 <section class="yildiz">
                                                        <input type="radio" name="example" class="rating" value="1" />
                                                        <input type="radio" name="example" class="rating" value="2" />
                                                        <input type="radio" name="example" class="rating" value="3" />
                                                        <input type="radio" name="example" class="rating" value="4" />
                                                        <input type="radio" name="example" class="rating" value="5" />
                                                    </section>
                                                 <div class="product-wid-price">
                                                    <?php if($userFavorite->updatedPrice != $userFavorite->price) { ?>
                                                    <ins><?php echo $userFavorite->updatedPrice; ?></ins> <del><?php echo $userFavorite->price; ?></del>
                                                    <?php }else {?>
                                                         <ins><?php echo $userFavorite->updatedPrice; ?></ins>
                                                    <?php  } ?>
                                                </div>
                                            </div>
                                        <a href="<?php echo base_url('product/?id='.$userFavorite->productId.''); ?>"><p class="submit-btn">Ürünü İncele</p></a>
                                            <a href="sepetim.php"><p class="submit-btn"><i class="fa fa-shopping-cart"></i> Sepete Ekle</p></a>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="wish-button">
                                                <!--<button type="button" class="btn btn-default add-cart">Yeni Ürün Ekle</button>-->
                                                   <form action="<?php echo base_url('users/clearMyFavorites'); ?>" method="POST"><button type="submit" id="clearList" name="clearList" onclick="return ConfirmDialogForUser();" class="btn btn-default clear-list">Listeyi Temizle</button></form>
                                               <!--  <button type="button" id="clear-list" class="btn btn-default clear-list">Listeyi Temizle</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php } ?>      
              
                
            
         
            <?php if($userFavorites == array()){ ?>

               <div class="col-md-3 col-sm-3 col-xs-12">
                <span>Favori listeniz boş.</span>
               </div>
               <?php } ?>
        </div>
    </div>
    <!-- WISH-AREA:END   -->
    
    <!-- Entire FOOTER:START -->
    <?php include('page-content/footer.php') ?>
    <!-- Entire FOOTER:END -->

<script>
//sepetten ürün silme fonksiyonu
$("#clear-list").click(function(){
   //alert("Hello! I am an alert box!!");

    if (confirm('Silmek İstediğinize Eminmisiniz ?')) {
           // $(this).prev('span.text').remove();
                $('.product-single, #clear-list').remove();

        }        
});
</script>
    
</body>

</html>