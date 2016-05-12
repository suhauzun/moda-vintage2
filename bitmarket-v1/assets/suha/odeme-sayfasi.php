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
                        <h3>Checkout</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="about-us.html">Checkout</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END  -->
	
    <!-- CHECK-CONTACT-AREA -->
    <section class="check-contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="headline">
                        <h2>Hesabına Giriş Yap</h2>
                    </div>
                    <div class="contact-mail">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="mail-left">
                                    <form>
                                        Email *
                                        <br>
                                        <input type="text" name="name">
                                        <br> Password *
                                        <br>
                                        <input type="text" name="phone">
                                    </form>
                                    <div class="mail-btn">
                                        <button type="button" class="btn btn-default">Giriş Yap</button>
                                        <a href="#">Şifremi Unuttum ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="mail-right">
                                    <h3>Kayıt Ol</h3>
                                    <label>
                                        <input type="radio" name="optradio">Kayıt Ol ve Ödeme Yap</label>
                                    <!--<h3>Guest Checkout</h3>
                                    <label>
                                        <input type="radio" name="optradio">Checkout without registering</label>
                                    -->
                                    <div class="mail-rbtn">
                                        <button type="button" class="btn btn-default">İlerle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="headline">
                        <h2>Sipariş Özeti</h2>
                    </div>
                    <div class="summary">
                        <h2>Ürünler<span>Toplam</span></h2>
                        <p>Fabulas T-shirt<span>75 TL</span>
                        </p>
                        <p>Awesome t-Shirt<span>75 YL</span>
                        </p>
                        <!--<h3 class="line"><span>$155</span></h3>-->
                        <h3 class="line">Kargo<span class="mcolor">Ücretsiz Kargo</span></h3>
                        <h5>Fatura Tutarı<span>155 TL</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CHECK-CONTACT-AREA:END   -->
	
    <!-- BILL-SHIP-AREA   -->
    <section class="bill-ship section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                   <div class="headline">
                       <h2>Fatura Adresi</h2>
                   </div>
                    <div class="billing">
                        <div class="bill-tow">
                            <div class="bill-left">
                                <form>
                                <input type="text" name="name" placeholder="First name">
                            </form>
                            </div>
                            <div class="bill-right">
                                <form>
                                <input type="text" name="name" placeholder="Last name">
                            </form>
                            </div>
                        </div>
                        <div class="bill-single">
                            <form>
                                <input type="text" name="name" placeholder="Company Name">
                            </form>
                            <form>
                                <input type="text" name="name" placeholder="Address">
                            </form>
                            <form>
                                <input type="text" name="name" placeholder="Town / City">
                            </form>
                            <form>
                                <input type="text" name="name" placeholder="State / Country">
                            </form>
                        </div>
                        <div class="bill-tow">
                            <div class="bill-left">
                                <form>
                                <input type="text" name="name" placeholder="Postcode / ZIP">
                            </form>
                            </div>
                            <div class="bill-right">
                                <form>
                                <input type="text" name="name" placeholder="Phone">
                            </form>
                            </div>
                        </div>
                        <div class="bill-text">
                        <input type="checkbox" name="vehicle" value="Bike"> Ürünleri Fatura Adresine Yollayın.
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="headline">
                       <h2>Kargo Adresi</h2>
                   </div>
                    <div class="Shipping">
                        <div class="bill-tow">
                            <div class="ship-left">
                                <form>
                                <input type="text" name="name" placeholder="First name">
                            </form>
                            </div>
                            <div class="ship-right">
                                <form>
                                <input type="text" name="name" placeholder="Last name">
                            </form>
                            </div>
                        </div>
                        <div class="ship-single">
                            <form>
                                <input type="text" name="name" placeholder="Company Name">
                            </form>
                            <form>
                                <input type="text" name="name" placeholder="Address">
                            </form>
                            <form>
                                <input type="text" name="name" placeholder="Town / City">
                            </form>
                            <form>
                                <input type="text" name="name" placeholder="State / Country">
                            </form>
                        </div>
                        <div class="ship-tow">
                            <div class="ship-left">
                                <form>
                                <input type="text" name="name" placeholder="Postcode / ZIP">
                            </form>
                            </div>
                            <div class="ship-right">
                                <form>
                                <input type="text" name="name" placeholder="Phone">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12"></div>
            </div>
        </div>
    </section>
    <!-- BILL-SHIP-AREA:END   --> 
	
    <!-- PAYMENT-AREA   --> 
    <section class="payment-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="headline">
                        <h2>Ödeme Yöntemleri</h2>
                    </div>
                    <div class="payment">
                    <div class="bank">
                        <input type="radio" name="optradio">Havale veya Eft<br/>
                        <!--<div class="b_text"><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped
                            <br/>until the funds have cleared in our account.</p></div>-->
                    </div>
                    <div class="bank-radio">
                     
                        <label>
                            <input type="radio" name="optradio">Paypal<img src="images/master-card.png" alt="">
                        </label><br/>
                        <button type="button" class="btn btn-default right-cart">Place order</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- PAYMENT-AREA:END   -->
	
    <!-- Entire FOOTER:START -->
		<?php include('page-content/footer.php') ?>
	<!-- Entire FOOTER:END -->
	
    <!-- jQuery latest -->
	<script type="text/javascript" src="js/jQuery.2.1.4.js"></script>
	
	<!-- js Modernizr -->
	<script src="js/modernizr-2.6.2.min.js"></script>

    <!-- Revolution slider -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
	<!-- Bootsrap js -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Plugins js -->
    <script src="js/plugins.js"></script>
	
	<!-- Owl js -->
    <script src="js/owl.carousel.min.js"></script>
	
	<!-- Custom js -->
    <script src="js/main.js"></script>

</body>

</html>