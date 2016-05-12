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
                        <h3>Ürün Detay</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cart-page.html">Ürün Detay</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
    <!-- PRODUCT-LIST-AREA -->
    <div class="single-product-area section-padding">
        <div class="container">
            <div class="row">
             
                <div class="col-md-12 col-sm-12 col-xs-12">
                       <div class="product-tab product-tab-single">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ürün Resmi ve Video Ekle</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Ürün Bilgilerini Gir</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Görüntüle</a></li>
                        </ul>
                     
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane row active" id="home">
                                
                                 
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            
                                             <div class="state-form">
                                                <button type="button" class="btn btn-default add-cart" data-toggle="modal" data-target=".bs-example-modal-lg-2">Resim Ekle</button>
                                                <button type="button" class="btn btn-default add-cart" data-toggle="modal" data-target=".bs-example-modal-lg">Video Ekle</button>
                                            </div><br>
                                            <div class="row single_product_image">



                                                <div class="col-md-4 col-sm-4 col-xs-12"><img id="large_image" class="thumbnail" src="assets/flea/car-1.jpg" alt=""><br><br><button type="button" class="btn btn-default add-cart">Öne Çıkarılmış Görsel Olarak Belirle</button> </div>
                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="product-image" id="grid_images">
                                                      
                                                      <ul>
                                                            <li><img src="assets/flea/car-1.jpg" onclick="change_image(this.src);" alt=""></li>
                                                            <li><img src="assets/flea/image-2.jpg" onclick="change_image(this.src);" alt=""></li>
                                                            <li><img src="assets/flea/image-3.jpg" onclick="change_image(this.src);" alt=""></li>
                                                            <li><img src="assets/flea/image-4.jpg" onclick="change_image(this.src);" alt=""></li>
                                                            <li><img src="assets/flea/car-1.jpg" onclick="change_image(this.src);" alt=""></li>
                                                            <li><img src="assets/flea/car-1.jpg" onclick="change_image(this.src);" alt=""></li>
                                                            <li><img src="assets/flea/car-1.jpg" onclick="change_image(this.src);" alt=""></li>
                                                            <li><img src="assets/flea/car-1.jpg" onclick="change_image(this.src);" alt=""></li>
                                                            <li><img src="assets/flea/car-1.jpg" onclick="change_image(this.src);" alt=""></li>
                                                        </ul> 
                                                    </div>
                								</div>









                                            </div>
                                        </div>
                              
                           

                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">

                             <div class="col-md-6 col-sm-6 col-xs-12">
                                

                                <div class="state-form">
                                    <form>
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
                                        <label>Kargo Bilgisi</label><br/>
                                         <select>
                                            <option value="Kırmızı">Ücretsiz Kargo</option>
                                            <option value="Mavi">Aras Kargo</option>
                                            <option value="Siyah">Yurt İçi Kargo</option>
                                            <option value="Sarı">Diğer</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="state-form">
                                    <form>
                                       <label>Ayakkabı Renkleri</label><br/>
                                       <input type="radio" name="red" value="kirmizi"> Kırmızı
                                       <input type="radio" name="blue" value="mavi"> Mavi
                                       <input type="radio" name="black" value="siyah"> Siyah
                                       <input type="radio" name="yellow" value="sari"> Sarı                                                            
                                    </form>
                                </div><br><br>
                                <!-- <button type="button" class="btn btn-default add-cart">Ürünü Listele</button>-->
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
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
                               
                            </div>


                        </div>

  

                            <div role="tabpanel" class="tab-pane" id="messages">


                                 <div class="single-product-details">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    
                                <div class="product-img-detail">
                                    <div class="single_product_image">
                                        <input type="hidden" id="__VIEWxSTATE" />
                                        <ul id='zoom1' class=''>
                                            <li><img src="images/Single-Product.png" alt='image1' /></li>
                                            <li><img src="images/Single-Product1.jpg" alt='image2' /></li>
                                            <li><img src="images/Single-Product2.jpg" alt='image3' /></li>
                                            <li><img src="images/Single-Product3.jpg" alt='image1' /></li>
                                            <li><img src="images/Single-Product4.jpg" alt='image2' /></li>
                                            <li><img src="images/Single-Product5.jpg" alt='image2' /></li>
                                        </ul>
                                    </div>
                                </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="single-product-content">
                                                <h3>Ayakkabı</h3>
                                                <div class="product-review"><br>
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
                                                    <h4>Stok <span>: 20 Adet Mevcut</span>
                                                </h4>
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
                                                            <li><a class="rose-clr" href="#"></a></li>
                                                            <li><a class="pest-clr" href="#"></a></li>
                                                            <li><a class="grey-clr" href="#"></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-size">
                                                        <p>Bedenler :</p>
                                                        <select>
                                                            <option>XL</option>
                                                            <option>L</option>
                                                            <option>M</option>
                                                            <option>S</option>
                                                            <option>XS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                      
                                                    <div class="product-collection">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-heart-o"></i>Favorilerime Ekle</a></li>
                                                            <li><a href="#"><i class="fa fa-exchange"></i>Ürün Karşılaştır ?</a></li>
                                                            <li><a href="#"><i class="fa fa-envelope-o"></i>Mesaj Gönder ?</a></li>
                                                        </ul>
                                                    </div>
                                             
                                                <div class="single-color last-color-child">
                                                    <div class="btn btn-default"><a href="index.php">İlanı Yayınla</a></div>
                                                    <div class="btn btn-default"><a href="#" id="taslak">Taslak Olarak Kaydet</a></div>
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
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
       <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Video yüklemek için seçim yapınız.</h4>
          </div>

          <div class="modal-footer">
              <input type="file">
            <button type="button" class="btn btn-default" data-dismiss="modal">Çık</button>
            <button type="button" class="btn btn-primary">Kaydet</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>


    <div class="modal fade bs-example-modal-lg-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
       <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Resim yüklemek için seçim yapınız.</h4>
          </div>

          <div class="modal-footer">
              <input type="file">
            <button type="button" class="btn btn-default" data-dismiss="modal">Çık</button>
            <button type="button" class="btn btn-primary">Kaydet</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>



    <!-- PRODUCT-LIST:END -->
	
    <!-- Entire FOOTER:START -->

	<!-- Entire FOOTER:END -->
	   <?php include('page-content/footer.php') ?>
  <script>
function change_image(imgSrc) {
      document.getElementById("large_image").src = imgSrc;
}

function change_image(id) {
      document.getElementById("large_image").src = id;
}

//sepetten ürün silme fonksiyonu

     $(".taslak").click(function(){
               //alert("Hello! I am an alert box!!");

                if (confirm('taslak olarak kaydedilmiştir.')) {
                       // $(this).prev('span.text').remove();
                            $('.taslak').remove();

                    }

               
        });



    


</script>

</body>

</html>