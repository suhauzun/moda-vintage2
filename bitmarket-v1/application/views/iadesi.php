<?php include('page-content/header.php') ?>
<body ng-app="bitpazari" class="shoping">

    <!--  HEADER-AREA  -->


	<?php include('page-content/navigation.php') ?>
    <!-- Header-AREA END -->
	 
 <div class="container"><br><br>


     <div class="arabanner"><img src="assets/images/gorsel/banner-home6.jpg" /></div>
    
    <h4>Ürün İadesi</h4>
    <p>Satın aldığınız ürün ile ilgili Teknik destek veya satış personeli tarafından çözülemeyen bir sorununuz varsa, ürün iade talebinde bulunabilirsiniz. İlk adım olarak ürün iade formunu doldurunuz.</p>
    <p>Bu form tam olarak doldurulmalıdır. En kısa sürede cevap verilecektir. Ürünleri orjinal ambalajında geri gönderiniz. Yetersiz paketleme ile zarar görmüş ürünleri ürün iade talepleriniz olumsuz sonuçlanabilir. Taşıma sırasında zarar görmesini önlemek için lütfen dış koruyucu kutu kullanın. Yiyecek, içecek ve yazılım ürünlerinin ürün iadesi kabul edilmemektedir.</p>
     
     
     
      <form action="https://www.bubohandcraft.com/index.php?route=account/return/add" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <h4>Sipariş Bilgileri</h4>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">Adınız:</label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="" placeholder="Adınız:" id="input-firstname" class="form-control">
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Soyadınız:</label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="" placeholder="Soyadınız:" id="input-lastname" class="form-control">
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Posta:</label>
            <div class="col-sm-10">
              <input type="text" name="email" value="" placeholder="E-Posta:" id="input-email" class="form-control">
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Telefon:</label>
            <div class="col-sm-10">
              <input type="text" name="telephone" value="" placeholder="Telefon:" id="input-telephone" class="form-control">
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-order-id">Sipariş ID:</label>
            <div class="col-sm-10">
              <input type="text" name="order_id" value="" placeholder="Sipariş ID:" id="input-order-id" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-date-ordered">Sipariş Tarihi:</label>
            <div class="col-sm-3">
              <div class="input-group date"><input type="text" name="date_ordered" value="" placeholder="Sipariş Tarihi:" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                    </span>
              </div>
            </div>
          </div>
        </fieldset>
        <br>
        <fieldset>
          <h4>Ürün Bilgileri &amp; Ürün İade Nedeni</h4>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-product">Ürün Adı:</label>
            <div class="col-sm-10">
              <input type="text" name="product" value="" placeholder="Ürün Adı:" id="input-product" class="form-control">
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-model">Ürün Kodu:</label>
            <div class="col-sm-10">
              <input type="text" name="model" value="" placeholder="Ürün Kodu:" id="input-model" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-quantity">Miktar:</label>
            <div class="col-sm-10">
              <input type="text" name="quantity" value="1" placeholder="Miktar:" id="input-quantity" class="form-control">
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label">Ürün İade Nedeni:</label>
            <div class="col-sm-10">
              <div class="radio">
                <label><input type="radio" name="return_reason_id" value="1">Arızalı,detayları belirtin</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="return_reason_id" value="4"> Diğer, lütfen detayları belirtin</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="return_reason_id" value="3">Hasar Görmüş</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="return_reason_id" value="5">Hatalı Sipariş</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="return_reason_id" value="2">Yanlış Ürün Alma</label>
              </div>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label">Ürün Açıldı:</label>
            <div class="col-sm-10">
              <label class="radio-inline"><input type="radio" name="opened" value="1">Evet</label>
              <label class="radio-inline"><input type="radio" name="opened" value="0" checked="checked">Hayır</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-comment">Arıza ya da diğer detaylar:</label>
            <div class="col-sm-10">
              <textarea name="comment" rows="10" placeholder="Arıza ya da diğer detaylar:" id="input-comment" class="form-control"></textarea>
            </div>
          </div>
                    <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-captcha">Doğrulama kodunu giriniz:</label>
            <div class="col-sm-10">
              <input type="text" name="captcha" value="" placeholder="Doğrulama kodunu giriniz:" id="input-captcha" class="form-control">
            </div>
          </div>
          <div class="form-group captcha-row">
            <div class="col-sm-10 pull-right">
             Doğrulama Kodu<h4>JKLEFM</h4>
                          </div>
          </div>
                  </fieldset>
                <div class="buttons">
          <!--<div class="pull-left"><a href="" class="btn btn-danger button">Geri</a></div>-->
          <div class="pull-right"> <a class="colorbox"  href="#" data-toggle="modal" data-target="#iadesartlari" alt="İade Şartları"><b>İade Şartları</b> </a>nı okudum ve kabul ediyorum                        <input type="checkbox" name="agree" value="1">
                        <input type="submit" value="Gönder" class="btn btn-primary button">
          </div>
        </div>
              </form>
      </div>




    

	<!-- Entire FOOTER START -->
	<?php include('page-content/footer.php') ?>
	<!-- Entire FOOTER END -->
	



</body>

</html>