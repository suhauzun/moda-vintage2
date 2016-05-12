<header class="entire_header">
    <div class="header-area">
        <div class="container">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('images/newlogo4-mobile.png'); ?>" alt=""></a>
                  <!-- <a class="navbar-brand" href="index.php"><img src="images/newlogo4.png" alt=""></a>-->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <?php if(isset($userId) && $userId != "") { ?>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dil<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                            <li><a href="#">Türkçe</a></li>
                            <li><a href="#">İngilizce</a></li>
                            <li><a href="#">Arapça</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="head-icn" src="<?php echo base_url('images/account.png'); ?>" alt="#">Hesabım<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                            
                            <li><a href="<?php echo base_url('users/myFavorites'); ?>">Favori Listem</a></li>
                            <li><a href="<?php echo base_url('users/satisYap'); ?>">Satış Yap</a></li>
                            <?php if(isset($role) && $role == "1") { ?>
                            <li><a href="<?php echo base_url('users/satisOnay'); ?>">Onay Beklyen Satışlar</a></li>
                            <?php } ?>
                            <li><a href="<?php echo base_url('users/getCart'); ?>">Alışveriş Sepetim</a></li>
                             <?php if(isset($role) && ($role == "1" || $role=='0')) { ?>
                            <li><a href="<?php echo base_url('users/profile'); ?>">Profilim</a></li>
                            <?php }elseif(isset($role) && $role == "2"){ ?>
                            <li><a href="<?php echo base_url('users/customerProfile'); ?>">Profilim</a></li>
                            <?php } ?>
                            <?php if(isset($role) && $role == '1') : ?>
                            <li><a href="<?php echo base_url('customers'); ?>">Mağazalar</a></li>
                            <?php endif; ?>
<!--                            <li><a href="#">Sattığım Ürünler</a></li>
                            <li><a href="#">Blok Paneli</a></li>
                            <li><a href="#">Reklam Kirala</a></li>
                            <li><a href="#">Aldığım Ürünler</a></li>-->

                      </ul>
                    </li>
              
                   
                    <li><a href="<?php echo base_url('logout'); ?>"><img class="head-icn" src="<?php echo base_url('images/check.png'); ?>" alt="#">Çıkış Yap</a></li>
                  <?php }else{ ?>
                   <li class="log"><a href="<?php echo base_url('signup'); ?>"><img <img class="head-icn" class="head-icn" src="<?php echo base_url('assets/images/account.png'); ?>" alt="#">Kayıt Ol</a></li>
                    <li class="log"><a href="<?php echo base_url('Login'); ?>"><img class="head-icn" src="<?php echo base_url('assets/images/check.png'); ?>" alt="#">Giriş Yap</a></li>
                    <?php } ?>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</header>

