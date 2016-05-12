
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bred-title">
                        <h3>Alışveriş Sepeti</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="cart-page.html">Alışveriş Sepeti</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
	
    <!-- SHOPING-CART-AREA   -->
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
                                    <div class="shopping-cart-btn">
                                        <a href="index.php" class="btn btn-default left-cart">Alışverişe Devam Et</a>
                                        <button type="button" id="order-clear" class="btn btn-default right-cart right-margin">Sepetimi Temizle</button>
                                      <!--  <button type="button" class="btn btn-default right-cart">Update shopping cart</button>-->
                                    </div>
                                    <!-- /.shopping-cart-btn -->
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td class="cart-image">
                                    <a href="#" class="entry-thumbnail">
                                        <img src="images/cart1.png" alt="">
                                    </a>
                                </td>
                                <td class="cart-product-name-info">
									<div class="cc-tr-inner">
										<h4 class="cart-product-description"><a href="#">Fabulas t-shirt</a></h4>
										<div class="cart-product-info">
											<span class="product-color">Renk :</span><span>Black</span>
											<br>
											<span class="product-color">Beden :</span><span>Large</span>
										</div>
								   </div>
                                </td>
                                <td class="cart-product-quantity">
                                    <div class="quant-input">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity[113]" max="119" min="0" step="1">
                                    </div>
                                </td>
                                <td class="cart-product-price"><div class="cc-pr">75 TL</div></td>
                                <td class="cart-product-delivery"><div class="cc-pr">Ücretsiz Kargo</div></td>
                                <td class="cart-product-sub-total"><div class="cc-pr">75 TL</div></td>
                                <td class="romove-item">
                                    <a href="#"><img src="images/remove.png" alt="">
                                    </a>
                                </td>
                            </tr>
                            <tr class="price-table">
                                <td class="cart-image">
                                    <a href="#" class="entry-thumbnail">
                                        <img src="images/cart2.png" alt="">
                                    </a>
                                </td>
                                <td class="cart-product-name-info">
                                   <div class="cc-tr-inner">
										<h4 class="cart-product-description"><a href="#l">Awesome t-shirt</a></h4>
										<div class="cart-product-info">
											<span class="product-color">Renk :</span><span>Red</span>
											<br>
											<span class="product-color">Beden :</span><span>Large</span>
										</div>
								   </div>
                                </td>
                                <td class="cart-product-quantity">
                                    <div class="cart-quantity">
                                        <div class="quant-input">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity[113]" max="119" min="0" step="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-product-price"><div class="cc-pr">75 TL</div></td>
                                <td class="cart-product-delivery"><div class="cc-pr">Ücretsiz Kargo</div></td>
                                <td class="cart-product-sub-total"><div class="cc-pr">75 TL</div></td>
                                <td class="romove-item">
                                    <a href="#"><img id="remove-btn" src="images/remove.png" alt="">
                                    </a>
                                </td>
                            </tr>
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

  
    <!-- SHOPING-CART-BOTTOM-AREA:END   -->
	
    <!-- Entire FOOTER:START -->
		<?php include('page-content/footer.php') ?>

<script>
//sepetten ürün silme fonksiyonu
        $("#remove-btn").click(function(){
               //alert("Hello! I am an alert box!!");
               $(".price-table").remove();

        });
     $("#order-clear").click(function(){
               //alert("Hello! I am an alert box!!");

                if (confirm('Silmek İstediğinize Eminmisiniz ?')) {
                       // $(this).prev('span.text').remove();
                            $('tbody, thead, #order-clear, .shoping-cart-bottom-area').remove();
                            $('.shopping-cart-btn').css({"float": "right", "margin-right": "20px"});

                    }

               
        });



    


</script>
</body>

</html>