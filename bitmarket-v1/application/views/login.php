<?php include('page-content/header.php') ?>



<body class="shoping">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  HEADER-AREA  -->
	<?php include('page-content/navigation.php') ?>
    <!-- Header-AREA END -->
	
    <!-- PAGE-TITLE-AREA -->

    <!-- BREADCRUMBS -->














    <section class="password-change">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="headline">
                    <h2>Giriş Yap</h2>
                </div>



                <div class="col-md-8">

 
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                </div>


                <div class="col-md-4">
        





                        <form action="<?php echo base_url('verifylogin'); ?>" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                              <input type="text" id="username" name="username" class="form-control" placeholder="Kullanıcı Adı">
                            </div> 
                            <div class="form-group">
                              <input type="password" id="password" name="password" class="form-control" placeholder="Şifre">
                            </div> 
                            <div class="form-group">
                              <button type="submit" id="submit" name="submit" class="btn btn-default">Oturum Aç</button>
                            </div> 
                            <div>Şifremi Unuttum</div>
                            <div>Beni Anımsa</div>


                        </form>




                   
                </div>








            </div>
            </div>
        </div>
    </section>

     <!-- Entire FOOTER:START -->
        <?php include('page-content/footer.php') ?>
    <!-- Entire FOOTER:END -->
    


</body>

</html>