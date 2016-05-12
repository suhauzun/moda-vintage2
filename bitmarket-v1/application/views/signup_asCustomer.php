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
                        <li><a href="#">Mağaza Aç</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
	
    <!-- PERSONAL-DETAIL-AREA -->


    <form action="<?php echo base_url('signup/asCustomerSave'); ?>" method="POST" enctype="multipart/form-data">
    <section class="pessonal-detail section-padding">
        <div class="container">
        <a href="<?php echo base_url('signup/asCustomer'); ?>" class="btn btn-default" style="background: #5A5F65 none repeat scroll 0 0;border: 0 solid;border-radius: 0;color: #ffffff;font-weight: 600;margin-top: 17px;padding: 9px 37px;text-transform: uppercase;"> Mağaza Olarak Kayıt Ol</a>
            
            <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="headline">
						<h2>Mağaza Bilgileri</h2>
					</div>
                
                    <div class="personal-form">
                        <div class="userleft">
                                Mağaza Adı<br>
                                <input required type="text" id="name" name="name"><br>
                                E-posta Adresi<br>
                                <input required type="email" id="email" name="email"><br>
                                Mağaza Logosu<br>
                                <input type="file" id="logo" name="logo">
                        </div>
                        <div class="userright" style="margin-top:0px !important;">
                                Mağaza Bilgileri<br>
                                <textarea required cols="50" id="information" name="information"></textarea><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PERSONAL-DETAIL-AREA:END   -->
	
    <!-- CHANGE-PASSWORD-AREA   -->
    <section class="password-change">
        <div class="container">
            <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="headline">
                    <h2>Mağaza Kullanıcı Bilgileri</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="userleft change-form">
                    	    Kullanıcı Adı<br>
                            <input required type="text" id="username" name="username"><br>
                            Şifre<br>
                            <input required type="password" id="password" name="password"><br>
                            Şifre Tekrarı<br>
                            <input required type="password" id="passwordRepeat" name="passwordRepeat"><br>
                            <button type="submit" id="submit" name="submit" class="btn btn-default">Kayıt Ol</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</form>
    <!-- CHANGE-PASSWORD-AREA:END -->
	
    <!-- Entire FOOTER:START -->
			<?php include('page-content/footer.php') ?>
	<!-- Entire FOOTER:END -->

</body>

</html>