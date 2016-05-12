
<?php include('page-content/header.php'); ?>

<script type="text/javascript" src="<?php echo base_url('assets/js/jQuery.2.1.4.js'); ?>"></script>
<script type="text/javascript">
$(function () {
            $('.order-clear').submit(function(event) {
                var x=confirm("Sepetinizdeki tüm ürünleri kaldırmak istedğinize emin misiniz?");

              if (x) {
                  $('tbody, thead, .order-clear, .shoping-cart-bottom-area').remove();
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
                        <h3>Alışveriş Sepeti</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home'); ?>">Home</a>
                        </li>
                        <li><a href="<?php echo base_url('users/getCart'); ?>">Alışveriş Sepeti</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
    
    <!-- SHOPING-CART-AREA   -->
    <?php  if(isset($cartData) && $cartData != "") { ?>
    <div class="shoping-cart section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="headline">
                    <h2>Ödeme Alanı</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="cart-product item">Ürün Görseli</th>
                                <th class="cart-product-name item">Ürünün Adı</th>
                                <th class="cart-qty item">Ürün Adedi</th>
                                <th class="cart-unit item">Adet Fiyatı</th>
                                <th class="cart-delivery item">Kargo</th>
                                <th class="cart-sub-total last-item">Toplam Fiyat</th>
                                <th class="cart-romove item">Sil</th>
                            </tr>
                        </thead>
                        <!-- /thead -->
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                      <form class="order-clear" action="<?php echo base_url('users/clearCart'); ?>" method="post">
                                    <div class="shopping-cart-btn">
                                        <a href="<?php echo base_url('home'); ?>" class="btn btn-default left-cart shopping-cartlink">Alışverişe Devam Et</a>
                                        <input type="hidden" id="userId" name="userId" value="<?php echo $userId; ?>"> 
                                        <button type="submit" id="removeAll" class="btn btn-default right-cart right-margin">Sepetimi Temizle</button>
                                      <!--  <button type="button" class="btn btn-default right-cart">Update shopping cart</button>-->
                                    </div>
                                        </form>
                                    <!-- /.shopping-cart-btn -->
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                    <?php if(isset($cartData) && $cartData != ""):  ?>
                        <?php foreach ($cartData as $data) : ?>
                                <td class="cart-image">
                                    <a href="<?php echo base_url('product/?id='.$data->productId.'') ?>" class="entry-thumbnail">
                                        <img src="<?php echo base_url('assets/images/products/'.$data->thumbImageURL.'') ?>" alt="">
                                    </a>
                                </td>
                                <td class="cart-product-name-info">
                                    <div class="cc-tr-inner">
                                        <h4 class="cart-product-description"><a href="#"><?php echo $data->name; ?></a></h4>
                                        <div class="cart-product-info">
                                            <span class="product-color">Renk :</span><span><?php echo $data->color; ?></span>
                                            <br>
                                            <span class="product-color">Beden :</span><span><?php echo $data->size; ?></span>
                                        </div>
                                   </div>
                                </td>
                                <td class="cart-product-quantity">
                                    <div class="quant-input">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $data->count; ?>" name="quantity[113]" max="119" min="0" step="<?php echo $data->count; ?>">
                                    </div>
                                </td>
                                <td class="cart-product-price"><div class="cc-pr"><?php echo ($data->updatedPrice)*($data->count); ?> TL</div></td>
                                <td class="cart-product-delivery">
                                    <?php if($data->cargoState == 0) { ?> 
                                    <div class="cc-pr">Ücretsiz Kargo</div>
                               <?php }else{ ?>
                                    <select id="count" name="count" required>
                                    <option value="">Seçiminizi Yapınız</option>
                                    <?php if(isset($cargos) && $cargos !="") : ?>
                                    <?php foreach ($cargos as $cargo) : ?>
                                    <option value="<?php echo $cargo->id; ?>"><?php echo $cargo->name; ?></option>
                                <?php endforeach; ?>
                                <?php endif; ?>
                                 </select>
                            <?php } ?>
                                </td>
                                <td class="cart-product-sub-total"><div class="cc-pr"><?php echo $data->updatedPrice; ?></div></td>
                                <td class="romove-item">
                                         <form class="oneform" action="<?php echo base_url('users/removeItem'); ?>" method="POST">
                                    <input type="hidden" id="cartId" name="cartId" value="<?php echo $data->cartId;?>">
                                    <button type="submit"><img src="<?php echo base_url('assets/images/remove.png'); ?>" alt=""> </button>
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
    <div class="shoping-cart-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="theme-box">
                        <h4>İndirim Kuponunuz Var İse Giriniz</h4>
                     
                        <form id="discount-code">
                            <input type="text">
                        </form>
                        <button type="button" class="btn btn-default right-cart">Kodu Gönder</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
             
               <!-- 
                    <div class="shiptax">
                       
                    </div>
            -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="checkout">
                        <p>Toplam<span>155 TL</span>
                        </p>
                        <h4>Genel Toplam<span>155 TL</span></h4>
                        <button type="button" class="btn btn-default">Ürünleri Satın Al</button>
                        <!--<h5>Checkout  with multiple addresses</h5>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
        <div class="shoping-cart section-padding">
        <div class="container">
              <div class="headline">
                    <h2>Sepetiniz boş.</h2>
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