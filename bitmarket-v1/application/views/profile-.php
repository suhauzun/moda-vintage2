<?php include('page-content/header.php') ?>
<script type="text/javascript" src="<?php echo base_url('js/jQuery.2.1.4.js'); ?>"></script>
<script type="text/javascript">
$(function () {
    $('#passwordUpdateButton').submit(function(event) {
       if($("#newPassword").val() != $("#confirmPassword").val()){
        alert("Şifre ve şifre tekrarı aynı değil. Lütfen tekrar deneyiniz.");
        return FALSE;
       }else if($("#password").val() == '' || $("#newPassword").val() == '' || $("#confirmPassword").val() == ''){
        alert("Şifreler boş bırakılamaz.");
        return FALSE;
       }else{
        return TRUE;
       }

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
                        <h3>Profilim</h3>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home'); ?>">Ana Sayfa</a>
                        </li>
                        <li><a href="<?php echo base_url('users/profile'); ?>">Profilim</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS:END -->
	
    <!-- PERSONAL-DETAIL-AREA -->
    <section class="pessonal-detail section-padding">
        <div class="container">
            <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="headline">
						<h2>Profilim</h2>
					</div>
                
                    <div class="personal-form change-form">
<form action="<?php echo base_url('users/editProfile'); ?>" method="POST">
                        <div class="userleft">
                                Kullanıcı Adı
                                <br>
                                <input type="text" id="username" name="username" value="<?php echo $profileData->username; ?>">
                                <br> Ad
                                <br>
                                <input type="text" id="firstname" name="firstname" value="<?php echo $profileData->firstname; ?>">
                                <br> Soyad
                                <br>
                                <input type="text" id="surname" name="surname" value="<?php echo $profileData->surname; ?>">
                                <br> E-Posta
                                <br>
                                <input type="email" id="email" name="email" value="<?php echo $profileData->email; ?>">
                                <br> Telefon
                                <br>
                                <input type="text" id="telNo" name="telNo" value="<?php echo $profileData->telNo; ?>">
                                
                               
                        </div>



                        <div class="userright">
                            <!--<h5>Username cannot be changed</h5>-->
                                Adres
                                <br>
                                <textarea rows="5" cols="50" id="address" name="address" type="text"><?php echo $profileData->address; ?></textarea>
                                <br> Posta Kodu
                                <br>
                                <input type="text" id="city" name="city" value="<?php echo $profileData->city; ?>">
                                <br> Şehir
                                <br>
                                <input type="text" id="country" name="country" value="<?php echo $profileData->country; ?>">
                                <br> Ülke 
                                <br>
                                <input type="text" id="zipCode" name="zipCode" value="<?php echo $profileData->zipCode; ?>">
                                <br>
                                <button id="detailUpdateButton" style="display:block;" type="submit" class="btn btn-default">Güncelle</button>
                        </div>
                    </form>
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
                    <h2>Şifreni Değiştir</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php if(isset($message) && $message !="") : ?>
                        <p style="color: red;"><?php echo "* ".$message; ?></p>
                    <?php endif; ?>
                    <div class="change-form">
                       <form action="<?php echo base_url('users/changePassword'); ?>" method="POST">
                            Eski Şifre
                            <br>
                            <input id="password" name="password" type="password">
                            <br>Yeni Şifre
                            <br>
                            <input id="newPassword" name="newPassword" type="password">
                            <br>Şifreni Tekrar Gir
                            <br>
                            <input id="confirmPassword" name="confirmPassword" type="password">
                             <br>
                        <button id="passwordUpdateButton" style="display:block;" type="submit" class="btn btn-default">Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- CHANGE-PASSWORD-AREA:END -->
	
    <!-- Entire FOOTER:START -->
		<?php include('page-content/footer.php') ?>
	<!-- Entire FOOTER:END -->
</body>
</html>