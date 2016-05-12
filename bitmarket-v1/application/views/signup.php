<?php include('page-content/header.php') ?>
<body class="shoping">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  HEADER-AREA  -->
	<?php include('page-content/navigation.php') ?>
	

	
    <!-- BREADCRUMBS -->
    <div class="title-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bred-title">
                        <h3>Kayıt Ol</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                        <li><a href="#">Kayıt Ol</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
	
    <!-- PERSONAL-DETAIL-AREA -->

      
<div class="container signupcss ">
    <div class="tab-content">
    
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active btn btn-default"><a href="#kayit" aria-controls="kayit" role="tab" data-toggle="tab">Bireysel Kayıt Ol</a></li>
            <li role="presentation" class="btn btn-default"><a href="#magaza-kayit" aria-controls="magaza-kayit" role="tab" data-toggle="tab">Mağaza Olarak Kayıt Ol</a></li>
        </ul>  

        <div role="tabpanel" class="tab-pane active row" id="kayit">
            <form action="<?php echo base_url('signup'); ?>" method="POST" enctype="multipart/form-data" class="form-inline">          
                <section class="pessonal-detail section-padding">
                            
                            <div class="col-md-4">
                                <div class="headline">
                                    <h2>Kullanıcı Bilgileri</h2>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <input type="text" id="username" name="username" class="form-control" placeholder="Kullanıcı Adı">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" id="password" name="password" class="form-control" placeholder="Şifre">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" id="passwordRepeat" name="passwordRepeat" class="form-control" placeholder="Şifre Tekrarı">
                                    </div>
                                     <div class="form-group">
                                       <button type="submit" id="submit" name="submit" class="btn btn-warning">Kayıt Ol</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                              <!--  <div class="headline">
                                    <h2>Kişisel Bilgiler</h2>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                      <input type="text" id="firstname" class="form-control" placeholder="Adı" name="firstname" >
                                    </div> 
                                    <div class="form-group">
                                        <input type="text" id="lastname" class="form-control" placeholder="Soyadı" name="lastname">  
                                    </div> 
                                    <div class="form-group">
                                         <input type="email" id="email" class="form-control" placeholder="E-posta Adresi" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="telNumber" class="form-control" placeholder="Telefon Numarası" name="telNumber" maxlength="11">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <input type="text" id="address" class="form-control" placeholder="Adres" name="address">
                                    </div>
                                    <div class="form-group">
                                         <input type="text" id="city" class="form-control" placeholder="Şehir" name="city">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" id="zipCode" class="form-control" placeholder="Posta Kodu" name="zipCode">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" id="country" class="form-control" placeholder="Ülke" name="country">
                                    </div>
                                </div>-->
                            </div>
                </section>              
            </form>
        </div>



        <div role="tabpanel" class="tab-pane row" id="magaza-kayit">
            <form action="<?php echo base_url('signup/asCustomerSave'); ?>" method="POST" enctype="multipart/form-data">
                <section class="pessonal-detail section-padding">
                    <div class="col-md-8">
                        <div class="headline">
                            <h2>Mağaza Bilgileri</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <input required type="text" id="name" name="name" class="form-control" placeholder="Mağaza Adı">
                            </div> 
                            <div class="form-group">
                               <input required type="email" id="email" name="email" class="form-control" placeholder="E-posta Adresi">
                            </div> 
                            <div class="form-group">
                                 <input type="file" id="logo" name="logo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <textarea required cols="50" id="information" name="information" class="form-control" placeholder="Mağaza Bilgileri"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="headline">
                            <h2>Mağaza Kullanıcı Bilgileri</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <input required type="text" id="username" name="username" class="form-control" placeholder="Kullanıcı Adı">
                            </div>
                            <div class="form-group">
                              <input required type="password" id="password" name="password" class="form-control" placeholder="Şifre">
                            </div>
                            <div class="form-group">
                              <input required type="password" id="passwordRepeat" name="passwordRepeat" class="form-control" placeholder="Şifre Tekrarı">
                            </div>
                             <div class="form-group">
                               <button type="submit" id="submit" name="submit" class="btn btn-warning">Kayıt Ol</button>
                            </div>
                        </div>
                    </div>        
                </section>
            </form>
        </div>
    </div>
</div>
    <!-- CHANGE-PASSWORD-AREA:END -->
	
    <!-- Entire FOOTER:START -->
			<?php include('page-content/footer.php') ?>
	<!-- Entire FOOTER:END -->

</body>

</html>