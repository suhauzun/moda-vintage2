<?php include('page-content/header.php') ?>
<style type="text/css">
.focusblue{ border:3px solid #94B6ED !important;}
</style>


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
                                <li><a href="<?php echo base_url('home'); ?>">Anasayfa</a></li>
                                <li><a href="<?php echo base_url('users/satisYap'); ?>">Satış Yap</a></li>
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
                                <li role="presentation" id="profiletab" class="active"><a href="#profile" id="profiletabId" aria-controls="profile" role="tab" data-toggle="tab">Ürün Bilgilerini Gir</a></li>
                                <li role="presentation" id="hometab"><a href="#home"  id="hometabId" aria-controls="home" role="tab" data-toggle="tab" onclick="val1(this.id);">Ürün Resmi ve Video Ekle</a></li>
                                <li role="presentation" id="messagetab"><a href="#messages"  id="messagetabId" aria-controls="messages" role="tab" data-toggle="tab">Görüntüle</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane row" id="home">
                                  <form>
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                       <div class="state-form">

                                        
                                        <button type="button" class="btn btn-default add-cart" data-toggle="modal" data-target=".bs-example-modal-lg-2">Resim Ekle</button>
                                        <button type="button" class="btn btn-default add-cart" data-toggle="modal" data-target=".bs-example-modal-lg">Video Ekle</button>
                                    </div><br>

                                
                                    <div class="row single_product_image">
                                        <div class="col-md-4 col-sm-4 col-xs-12"><img id="large_image" class="thumbnail" src="<?php echo base_url('assets/flea/car-1.jpg'); ?>" alt=""><br><br><form action="<?php ?>"><button type="button" class="btn btn-default add-cart">Öne Çıkarılmış Görsel Olarak Belirle</button></form> </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <div class="product-image" id="grid_images">
                                              <ul id="list">
                                             
                                            </ul> 

                                        </div>
                                    </div>

                                </div>
                    
                    </div>
                      <div class="shopping-cart-btn">
                          <a   class="btn btn-default right-cart right-margin" id="nextbutton2" name="nextbutton2" onclick="val2(this.id);">Devam</a>
                         <!-- <a href="#home"   aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Devam</a> -->
                     </div>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane active" id="profile">
                    <form id="infoform" name="infoform" method="post" action="<?php echo base_url('users/addProdInfo'); ?>">
                   <div class="col-md-6 col-sm-6 col-xs-12">

                    <div id="errorDiv"></div>
                    <div class="state-form">
                        <label>Satılacak Ürün Kategorisi *</label>
                        <br/>
                        <select name="selectcategory" id="selectcategory" onchange="changeCategory()">
                            <option id="category_0" value="0">Seçiminizi Yapınız</option>
                            <?php foreach ($categories as $category) { ?>
                            <option id="category_<?php echo $category->id; ?>" value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="state-form" id="size-form">
                        <label>Beden: *</label>
                        <br/>
                        <select  id="size" name="size" >
                          <option value="0">Seçiniz</option>
                           <option value="34">34</option>
                           <option value="36">36</option>
                           <option value="38">38</option>
                           <option value="40">40</option>
                           <option value="42">42</option>
                           <option value="44">44</option>
                       </select>
                   </div>
                   <div class="state-form">
                    <label>Kargo Bilgisi *</label><br/>
                    <select  id="selectcargo" name="selectcargo" >
                        <option value="0" >Seçiniz</option>
                        <?php foreach ($cargos as $cargo) { ?>
                        <option value="ucretsiz" >Ücretsiz Kargo</option>
                        <option value="<?php echo $cargo->id; ?>"><?php echo $cargo->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="state-form">
                 <label>Renkler</label><br/>
                 <select  id="colors" name="colors" >
                        <option value="Kırmızı">Kırmızı</option>
                        <option value="Mavi">Mavi</option>
                        <option value="Siyah">Siyah</option>
                        <option value="Mor">Mor</option>
                        <option value="Yeşil">Yeşil</option>
                    </select>                                                           
             </div><br><br>
             <!-- <button type="button" class="btn btn-default add-cart">Ürünü Listele</button>-->
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <!--Bu alan sepetteki ürün çıkışına göre çalışacak, sepetteki ürün satın alındığında oradaki adet ile karşılaştırılığ aynı sayıda düşülecektir.-->
            <div class="state-form">
                <label>Ürün Açıklaması *</label>
                <br/>
                <textarea id="description" name="description" type="text" class="product-description"></textarea>
            </div>
            <div class="state-form">
                <label>Ürün İle İlgili Etiketler</label>
                <br/>
                <textarea type="text" id="tag" name="tag" class="product-tag"></textarea>
            </div>
            <div class="state-form">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="quant-input"><label>Stok Durumu</label><input id="stock" name="stock" type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity[113]" max="119" min="0" step="1"></div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                     <div class="quant-input"><label>Birim Fiyatı *</label><input id="price" name="price" type="number"></div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-xs-4">
                     <div class="quant-input"><label>İndirim Oranı</label><input id="sale" name="sale" type="number" size="4" class="input-text qty text" title="Qty" value="" name="quantity[113]" max="119" min="0" step="1"></div>
                 </div>
             </div>

         </div><br>

     </div>
     <div class="shopping-cart-btn">
        <a   class="btn btn-default right-cart rimessageght-margin" id="nextbutton1" name="nextbutton1" onclick="val1(this.id);">Devam</a>
       <!-- <a href="#home"   aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Devam</a> -->
   </div>
</form>
</div>


<div role="tabpanel" class="tab-pane" id="messages">


   <div class="single-product-details">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

            <div class="product-img-detail">
                <div class="single_product_image">
                    <input type="hidden" id="__VIEWxSTATE" />
                    <ul id='zoom1' class=''>
                        <li><img src="<?php echo base_url('images/Single-Product.png'); ?>" alt='image1' /></li>
                        <li><img src="<?php echo base_url('images/Single-Product1.jpg'); ?>" alt='image2' /></li>
                        <li><img src="<?php echo base_url('images/Single-Product2.jpg'); ?>" alt='image3' /></li>
                        <li><img src="<?php echo base_url('images/Single-Product3.jpg'); ?>" alt='image1' /></li>
                        <li><img src="<?php echo base_url('images/Single-Product4.jpg'); ?>" alt='image2' /></li>
                        <li><img src="<?php echo base_url('images/Single-Product5.jpg'); ?>" alt='image2' /></li>
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
        <form action="<?php echo base_url('users/saveProductVideo'); ?>" method="post" enctype="multipart/form-data">
          <input type="file"  required id="videoKaydet" name="videoKaydet">
          <button type="button" class="btn btn-default" data-dismiss="modal">Çık</button>
          <button type="submit" class="btn btn-primary">Kaydet</button>
      </form>
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
        <form id="imageform" name="imageform" method="post" action="<?php echo base_url('users/saveProductImages'); ?>">
          <input type="file"  required id="files" name="files[]" multiple="" >
          <input type="hidden" id="pro" name="pro" value="">
          <button type="button" class="btn btn-default" data-dismiss="modal">Çık</button>
          <button id="imageSave" name="imageSave" type="submit" class="btn btn-primary">Kaydet</button>
        </form>
  </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>



<!-- PRODUCT-LIST:END -->

<!-- Entire FOOTER:START -->

<!-- Entire FOOTER:END -->
<?php include('page-content/footer.php') ?>
<script>

 var newImages =[];

  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

     

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var list = document.getElementById('list');
          list.innerHTML = list.innerHTML +['<li><img onclick="change_image(this.src);"  src="', e.target.result,
                            '" title="', escape(theFile.name), '"/></li>'].join('');
          document.getElementById('grid_images').insertBefore(list, null);
          newImages.push(e.target.result);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
  $("#nextbutton2").click(function(){
  if(newImages != ''){

    $.ajax({
            type: 'post',
            url: 'http://localhost/bitpazari_dev/users/addProd',
            data: $('#infoform,#imageform').serialize(),
            dataType: 'json',
             success: function(response) {
               console.log(response); 
            }
          });

  }else{
    alert("ohmaygad");
  }

  });
</script>

<script>

function val1(id){

   $("#errorDiv").empty();



 if ($("#selectcategory").val() == '0')  {
   
   $("#errorDiv").append("Lütfen bir kategori seçiniz.<br>");   
  
   $("#selectcategory").addClass("focusblue");
     if(id == 'hometabId'){
  $("#hometabId").removeAttr("href", "#home");
  $("#hometabId").removeAttr("aria-controls", "home");
  $("#hometabId").removeAttr("role", "tab");
  $("#hometabId").removeAttr("data-toggle", "tab");
  }
 }

if($("#selectcategory").val() != '3') {
  if ($("#size").val() == '0')  {
     
     $("#errorDiv").append("Lütfen beden seçimi yapınız.<br>");   

     $("#size").addClass("focusblue");
       if(id == 'hometabId'){
  $("#hometabId").removeAttr("href", "#home");
  $("#hometabId").removeAttr("aria-controls", "home");
  $("#hometabId").removeAttr("role", "tab");
  $("#hometabId").removeAttr("data-toggle", "tab");
  }
   }
}


 if ($("#selectcargo").val() == '0')  {
   
   $("#errorDiv").append("Lütfen kargo seçimi yapınız.<br>");   

   $("#selectcargo").addClass("focusblue");
     if(id == 'hometabId'){
  $("#hometabId").removeAttr("href", "#home");
  $("#hometabId").removeAttr("aria-controls", "home");
  $("#hometabId").removeAttr("role", "tab");
  $("#hometabId").removeAttr("data-toggle", "tab");
  }
 }

 if ($(".product-description").val() == '')  {
   
   $("#errorDiv").append("Lütfen ürün açıklaması giriniz.<br>");   

   $(".product-description").addClass("focusblue");
     if(id == 'hometabId'){
  $("#hometabId").removeAttr("href", "#home");
  $("#hometabId").removeAttr("aria-controls", "home");
  $("#hometabId").removeAttr("role", "tab");
  $("#hometabId").removeAttr("data-toggle", "tab");
  }
 }


  if ($("#price").val() == '')  {
   
   $("#errorDiv").append("Lütfen fiyat bilgisi giriniz.<br>");   

   $("#price").addClass("focusblue");
     if(id == 'hometabId'){
  $("#hometabId").removeAttr("href", "#home");
  $("#hometabId").removeAttr("aria-controls", "home");
  $("#hometabId").removeAttr("role", "tab");
  $("#hometabId").removeAttr("data-toggle", "tab");
  }
 }
 
 if($("#selectcategory").val() != '3') {

if($(".product-description").val() != '' && $("#selectcargo").val() != '0' && $("#size").val() != '0' && $("#selectcategory").val() != '0' && $("#price").val() != ''){
   
 $.ajax({
            type: 'post',
            url: 'http://localhost/bitpazari_dev/users/addProdInfo',
            data: $('#infoform').serialize(),
            dataType: 'json',
             success: function(response) {
              $("#pro").val(response); 
            }
          });


       if(id == 'hometabId'){
  $("#hometabId").attr("href", "#home");
  $("#hometabId").attr("aria-controls", "home");
  $("#hometabId").attr("role", "tab");
  $("#hometabId").attr("data-toggle", "tab");
  }
  $("#nextbutton1").attr("href", "#home");
  $("#nextbutton1").attr("aria-controls", "home");
  $("#nextbutton1").attr("role", "tab");
  $("#nextbutton1").attr("data-toggle", "tab");
  $("#profiletab").removeClass("active");
  $("#hometab").addClass("active");
  $("#errorDiv").empty();
  $("#selectcategory").removeClass("focusblue");
  $("#size").removeClass("focusblue");
  $("#selectcargo").removeClass("focusblue");
  $(".product-description").removeClass("focusblue");

}

}

if($("#selectcategory").val() == '3'){
  if($(".product-description").val() != '' && $("#selectcargo").val() != '0' && $("#selectcategory").val() != '0' && $("#price").val() != ''){

         if(id == 'hometabId'){
  $("#hometabId").attr("href", "#home");
  $("#hometabId").attr("aria-controls", "home");
  $("#hometabId").attr("role", "tab");
  $("#hometabId").attr("data-toggle", "tab");
  }
  $("#nextbutton1").attr("href", "#home");
  $("#nextbutton1").attr("aria-controls", "home");
  $("#nextbutton1").attr("role", "tab");
  $("#nextbutton1").attr("data-toggle", "tab");
  $("#profiletab").removeClass("active");
  $("#hometab").addClass("active");
  $("#errorDiv").empty();
  $("#selectcategory").removeClass("focusblue");
  $("#selectcargo").removeClass("focusblue");
  $(".product-description").removeClass("focusblue");

}
}


}

function val2(id){
  $("#nextbutton2").attr("href", "#messages");
  $("#nextbutton2").attr("aria-controls", "messages");
  $("#nextbutton2").attr("role", "tab");
  $("#nextbutton2").attr("data-toggle", "tab");
  $("#hometab").removeClass("active");
  $("#messagetab").addClass("active");
}

function change_image(imgSrc) {
  document.getElementById("large_image").src = imgSrc;
}

function change_image(id) {
  document.getElementById("large_image").src = id;
}

function changeCategory(){
      if(document.getElementById('category_3').selected==true){
        document.getElementById('size-form').style.display = "none";
    }else{
       document.getElementById('size-form').style.display = "block";
    }
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