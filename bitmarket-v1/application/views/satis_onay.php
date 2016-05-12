
<?php include('page-content/header.php'); ?>

<script type="text/javascript" src="<?php echo base_url('js/jQuery.2.1.4.js'); ?>"></script>
<script type="text/javascript">
$(function () {
            $('.acceptAll').submit(function(event) {
                var x=confirm("Sepetinizdeki tüm ürünleri onaylamak istedğinize emin misiniz?");

              if (x) {
                  $('tbody, thead, .order-clear, .shoping-cart-bottom-area').remove();
                    return TRUE;
                    } else {
                    return false;
                    }

    });

            $('#remove').click(function(event) {
                var x=confirm("Bu ürünü kaldırmak istediğinize emin misiniz?");

              if (x) {
                  
                    return TRUE;
                    } else {
                    return false;
                    }

    });
                        $('#save').click(function(event) {
                var x=confirm("Bu ürünü satış için onaylamak istedğinize emin misiniz?");

              if (x) {
                  
                    return TRUE;
                    } else {
                    return false;
                    }

    });
            });
</script>

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
                        <h3>Satış İçin Onay Bekleyen Ürünler</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home'); ?>">Home</a>
                        </li>
                        <li><a href="<?php echo base_url('users/satisOnay'); ?>">Satış İçin Onay Bekleyen Ürünler</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
    
    <!-- SHOPING-CART-AREA   -->
    <?php  if(isset($pendingProducts) && $pendingProducts != "") { ?>
    <div class="shoping-cart section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="headline">
                    <h2>Satış İçin Onay Bekleyen Ürünler</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="cart-product item">Ürün Görseli</th>
                                <th class="cart-product-name item">Ürünün Adı</th>
                                <th class="cart-qty item">Ürün Adedi</th>
                                <th class="cart-unit item">Adet Fiyatı</th>
                                <th colspan="2" class="cart-unit item">İşlem</th>
                            </tr>
                        </thead>
                        <!-- /thead -->
                        <tfoot>
                            <tr>
                                 <td colspan="7">
                                      <form class="order-clear" action="<?php echo base_url('users/acceptAllProducts'); ?>" method="post">
                                    <div class="shopping-cart-btn">
                                        <input type="hidden" id="userId" name="userId" value="<?php echo $userId; ?>"> 
                                        <button type="submit" id="acceptAll" class="btn btn-default right-cart right-margin">Tümünü Onayla</button>
                                      <!--  <button type="button" class="btn btn-default right-cart">Update shopping cart</button>-->
                                    </div>
                                        </form>
                                    <!-- /.shopping-cart-btn -->
                                </td>
                            

                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                    <?php if(isset($pendingProducts) && $pendingProducts != ""):  ?>
                        <?php foreach ($pendingProducts as $data) : ?>
                                <td class="cart-image">
                                    <a href="<?php echo base_url('product/?id='.$data->productId.'') ?>" class="entry-thumbnail">
                                        <img src="<?php echo base_url('assets/images/products/'.$data->thumbImageURL.'') ?>" alt="">
                                    </a>
                                </td>
                                <td class="cart-product-name-info">
                                    <div class="cc-tr-inner">
                                        <h4 class="cart-product-description"><a href="#"><?php echo $data->name; ?></a></h4>
                                        <div class="cart-product-info">
                                          
                                        </div>
                                   </div>
                                </td>
                                <td class="cart-product-quantity">
                                    <div class="quant-input">
                                        <p><?php echo $data->count; ?></p>
                                    </div>
                                </td>
                                <td class="cart-product-price"><div class="cc-pr"><?php echo ($data->updatedPrice)*($data->count); ?> TL</div></td>
                                <td class="romove-item">
                                     <form class="oneform" action="<?php echo base_url('users/removeProduct'); ?>" method="POST">
                                    <input type="hidden" id="productId" name="productId" value="<?php echo $data->productId;?>">
                                    <button id="remove" type="submit"><img src="<?php echo base_url('assets/images/remove.png'); ?>" alt=""> </button>
                                    </form>
                                </td>
                                <td class="cart-product-quantity">
                                     <form class="oneform" action="<?php echo base_url('users/acceptProduct'); ?>" method="POST">
                                    <input type="hidden" id="productId" name="productId" value="<?php echo $data->productId;?>">
                                    <button id="save" type="submit"><img src="<?php echo base_url('assets/images/item2.png'); ?>" alt=""> </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                        </tbody>
                        <!-- /tbody -->
                    </table>
                    <!-- /table -->
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- SHOPING-CART-AREA:END   -->
    
    <!-- SHOPING-CART-BOTTOM-AREA   -->

<?php } else { ?>
        <div class="shoping-cart section-padding">
        <div class="container">
              <div class="headline">
                    <h2>Satış için onay bekleyen ürün yok.</h2>
                </div>
        </div>
    </div>
    <?php } ?>
  
    <!-- SHOPING-CART-BOTTOM-AREA:END   -->
    
    <!-- Entire FOOTER:START -->
        <?php include('page-content/footer.php') ?>

<script>
//sepetten ürün silme fonksiyonu
        $("#remove-btn").click(function(){
               //alert("Hello! I am an alert box!!");
               $(".price-table").remove();

        });
 /*    $("#order-clear").click(function(){
               //alert("Hello! I am an alert box!!");

                if (confirm('Silmek İstediğinize Eminmisiniz ?')) {
                       // $(this).prev('span.text').remove();
                            $('tbody, thead, #order-clear, .shoping-cart-bottom-area').remove();
                            $('.shopping-cart-btn').css({"float": "right", "margin-right": "20px"});

                    }

               
        });*/



    


</script>
</body>

</html>