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
                        <h3>Satış Yap</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cart-page.html">Satış Yap</a></li>
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
                        <h2>Satış Yap</h2>
                    </div>
                    <div class="table-responsive row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                                       
                            <div class="">
                                        <button type="button" class="btn btn-default add-cart">Resim Ekle</button>
                                        <button type="button" class="btn btn-default add-cart">Video Ekle</button><br><br>
                                <div class="state-form">
                                        
                                    
                                        <a href="#"><img src="assets/flea/car-1.jpg" alt=""> </a>
                                        <div class="product-image">
                                            <img src="images/cart1.png" alt="Öne Çıkarılmış Görsel Olarak Belirle">
                                            <img src="images/cart1.png" alt="">
                                            <img src="images/cart1.png" alt="">
                                            <img src="images/cart1.png" alt="">
                                            <img src="images/cart1.png" alt="">
                                            <img src="images/cart1.png" alt="">
                                            <img src="images/cart1.png" alt="">
                                            <img src="images/cart1.png" alt="">    
                                        </div>



                                      <br><button type="button" class="btn btn-default add-cart">Öne Çıkarılmış Görsel Olarak Belirle</button> 
                                </div>
                                <div class="state-form">
                                    <form><br/>
                                        <label>Satılacak Ürün Kategorisi</label>
                                        <br/>
                                        <select>
                                            <option value="Australia">Ayakkabı</option>
                                            <option value="Austria">Giysi</option>
                                            <option value="Argentina" >Antika</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="state-form">
                                    <form>
                                        <label>Ayakkabı Numarası</label>
                                        <br/>
                                        <select>
                                            <option value="number42">42</option>
                                            <option value="number43">43</option>
                                            <option value="number44">44</option>
                                            <option value="number45">45</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="state-form">
                                    <form>
                                        <label>Ayakkabı Renkleri</label>
                                        <br/>
                                          
                                       <input type="radio" name="red" value="kirmizi"> Kırmızı<br>
                                       <input type="radio" name="blue" value="mavi"> Mavi<br>
                                       <input type="radio" name="black" value="siyah"> Siyah<br>
                                       <input type="radio" name="yellow" value="sari"> Sarı                                 
                                                                   
                                    </form>
                                </div>
                                 <div class="state-form">
                                    <form>
                                        <label>Kargo Bilgisi</label>
                                        <br/>
                                         <select>
                                            <option value="Kırmızı">Ücretsiz Kargo</option>
                                            <option value="Mavi">Aras Kargo</option>
                                            <option value="Siyah">Yurt İçi Kargo</option>
                                            <option value="Sarı">Diğer</option>
                                        </select>
                                    </form>
                                </div>
                                <!--Bu alan sepetteki ürün çıkışına göre çalışacak, sepetteki ürün satın alındığında oradaki adet ile karşılaştırılığ aynı sayıda düşülecektir.-->
                                <div class="state-form">
                                    <form>
                                        <label>Ürün Açıklaması</label>
                                        <br/>
                                        <textarea type="text" class="product-description"></textarea>
                                    </form>
                                </div>
                                <div class="state-form">
                                    <form>
                                        <label>Ürün İle İlgili Etiketler</label>
                                        <br/>
                                        <textarea type="text" class="product-description"></textarea>
                                    </form>
                                </div>
                                <div class="state-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="quant-input"><label>Stok Durumu</label><input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity[113]" max="119" min="0" step="1"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                               <div class="quant-input"><label>Birim Fiyatı</label><input type="number"></div>
                                            </div>
                                             <div class="col-md-4 col-sm-4 col-xs-4">
                                               <div class="quant-input"><label>İndirim Oranı</label><input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity[113]" max="119" min="0" step="1"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div><br>
                                <button type="button" class="btn btn-default add-cart">Ürünü Listele</button>
                            </div>
                        </div> 










                        
                        <div class="col-md-8 col-sm-8 col-xs-12" >
                                <div class="single-product-content">
                                    <h3>A Firmasının Ürünü / Ayakkabı</h3>
                                    <div class="product-review">
                                        <h4>Stok <span>: 20 Adet Mevcut</span></h4>
                                        <div class="product-wid-price">
                                            <ins>75 TL</ins> <del>85 TL</del>
                                        </div>
                                        <p>The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife. And when the odds are against him and their dangers work to do. </p>
                                    </div>
                                    <div class="single-color">
                                        <div class="product-color">
                                            <h4>Renkler :</h4>
                                            <ul>
                                                <li><a class="black-clr" href="#"></a></li>
                                                <li><a class="yellow-clr" href="#"></a></li>
                                                <li><a class="red-clr" href="#"></a></li>
                                                <li><a class="pest-clr" href="#"></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-size">
                                            <p>Ayakkabı Numarası :</p>
                                            <select>
                                                <option>42</option>
                                                <option>43</option>
                                                <option>44</option>
                                                <option>45</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                       
                            </div>









                    </div>
				</div>
            </div>
        </div>
    </div>








    <!-- SHOPING-CART-AREA:END   -->
	
	
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