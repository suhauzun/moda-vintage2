
<style type="text/css">


</style>

<header class="entire_header">
<div class="header-top-nav">
<div class="container">
  <ul class="tp-nv">
 
    <li class="brdr"><a href="#" class="active">Tr</a></li>
    <li><a href="#">Eng</a></li>
    <li><a href="#">Arp</a></li>
    <li>Modanın Yeni Yüzü</li>  
  </ul>
</div>


</div>

    <div class="header-area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('assets/images/newlogo4-mobile.png'); ?>" alt=""></a>
                  <!-- <a class="navbar-brand" href="index.php"><img src="images/newlogo4.png" alt=""></a>-->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse in-drop" id="bs-example-navbar-collapse-1">
                   <ul >
                 <?php if(isset($userId) && $userId != "") { ?>
                 
                
                    
                <div class="mobile row">

                           <form class="navbar-form navbar-left" role="search">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                              </div>
                              <button type="submit" class="btn btn-default">Ara</button>
                            </form>



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
                            <li><a href="<?php echo base_url('logout'); ?>">Çıkış Yap</a></li>
                   
       
                
             
                </div>
              
                <div class="desktop">   
                  <li class="log"><a href="<?php echo base_url('logout'); ?>">Çıkış Yap</a></li>
                  <li class="log brandss">
                      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hesabım<span class="caret"></span></a>
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
                      </ul>
                    </li>

                </div>


              
                   

                      </ul>
                    </li>

               
               

                  <?php }else{ ?>
             <div class="desktop">
                    <li class="log"><a href="<?php echo base_url('signup'); ?>">Kayıt Ol</a></li>
                    <li class="log"><a href="<?php echo base_url('Login'); ?>">Giriş Yap</a></li>
             </div>  
             <div class="mobile">
                    <li class="log"><a href="<?php echo base_url('signup'); ?>">Kayıt Ol</a></li>
                    <li class="log"><a href="<?php echo base_url('Login'); ?>">Giriş Yap</a></li>
             </div>        
                  <?php } ?> 
               

            


                 

                 <div class="desktop">
                   <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Ara</button>
                  </form>
                 </div> 
                   
                 
                  <!--   <li class="log brandss">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mağazalarımız<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Arapça</a></li>
                        </ul>
                    </li>
                    <li class="log brandss">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategoriler<span class="caret"></span></a>
                        

                        <ul class="dropdown-menu sub-nav">
                          <div class="row">
                            <div class="col-md-4">
                               <p class="btm-line"><strong>Bayanlara Özel</strong></p> 

                               <div class="row">
                                <div class="col-md-8">
                                  <img src="<?php echo base_url('images/indir.jpg'); ?>" alt="">
                                  <p>Tüm çanta modellerini görmek için tıklayabilir veya siz de çanta satabilirsiniz... </p>
                                  <p><a href="">Tüm Kategoriler İçin Tıklayınız... >>></a></p>
                                </div>
                                <div class="col-md-4">
                                      <li><a href="#">Çantalar</a></li>
                                      <li><a href="#">Aksesuar</a></li>
                                      <li><a href="#">Ayakkabı</a></li>
                                      <li><a href="#">Bluz</a></li>
                                      <li><a href="#">Dış Giyim</a></li>
                                      <li><a href="#">Pantolon</a></li>
                                      <li><a href="#">Abiye</a></li>
                                      <li><a href="#">Elbise</a></li>
                                      <li><a href="#">Etek</a></li>
                                      <li><a href="#">Gelinlik</a></li>
                                      <li><a href="#">Jean</a></li>
                                      <li><a href="#">Takı</a></li>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                               <p class="btm-line"><strong>Baylara Özel</strong></p>
                               <div class="row">
                                <div class="col-md-8">
                                  <img src="<?php echo base_url('images/indir.jpg'); ?>" alt="">
                                  <p>Tüm çanta modellerini görmek için tıklayabilir veya siz de çanta satabilirsiniz... </p>
                                  <p><a href="">Tüm Kategoriler İçin Tıklayınız... >>></a></p>
                                </div>
                                <div class="col-md-4">
                                      <li><a href="#">Ayakkabı</a></li>
                                      <li><a href="#">Gömlek</a></li>
                                      <li><a href="#">Dış Giyim</a></li>
                                      <li><a href="#">Pantolon</a></li>
                                      <li><a href="#">Jean</a></li>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                               <p class="btm-line"><strong>Markalar</strong></p>
                               <div class="row">
                                <div class="col-md-8">
                                  <img src="<?php echo base_url('images/indir.jpg'); ?>" alt="">
                                  <p>Tüm çanta modellerini görmek için tıklayabilir veya siz de çanta satabilirsiniz... </p>
                                  <p><a href="">Tüm Kategoriler İçin Tıklayınız... >>></a></p>
                                </div>
                                <div class="col-md-4">
                                      <li><a href="#">Çantalar</a></li>
                                      <li><a href="#">Aksesuar</a></li>
                                      <li><a href="#">Ayakkabı</a></li>
                                      <li><a href="#">Bluz</a></li>
                                      <li><a href="#">Dış Giyim</a></li>
                                      <li><a href="#">Pantolon</a></li>
                                      <li><a href="#">Abiye</a></li>
                                      <li><a href="#">Elbise</a></li>
                                      <li><a href="#">Etek</a></li>
                                      <li><a href="#">Gelinlik</a></li>
                                      <li><a href="#">Jean</a></li>
                                      <li><a href="#">Takı</a></li>

                                </div>
                              </div>
                            </div>
                          </div>
                              
                        </ul>
                     
                      </li>-->



                  </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>




</header>

