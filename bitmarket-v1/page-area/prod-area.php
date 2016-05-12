 
 <section class="women-accessories-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="headline women_head">
                        <h2>Ürünlerin Listesi</h2>
                    </div>
                    <div class="product-tab">
                        <ul class="nav nav-tabs women-tab" role="tablist">
                           <li role="presentation" class="active"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">Yeni Ürünler</a>
                            </li>
                            <li role="presentation"><a href="#populer" aria-controls="populer" role="tab" data-toggle="tab">Popüler Ürünler</a>
                            </li>
                            <li role="presentation"><a href="#liked" aria-controls="liked" role="tab" data-toggle="tab">En Çok Beğenilenler</a>
                            </li>
                            <li role="presentation"><a href="#order" aria-controls="order" role="tab" data-toggle="tab">En Çok Satanlar</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="new">
                                <div class="row">
                                      <?php if(isset($newProducts) && $newProducts != "") : ?>
                                    <?php $newPro = array_unique($newProducts, SORT_REGULAR);  foreach ($newPro as $new) : ?>
                                    <div class="col-md-3 col-sm-4 col-xs-12 product-box">
                                        <div class="women-single">
                                            <a href="<?php echo base_url('product?id='.$new->id.''); ?>"><img src="<?php echo base_url('assets/images/products/'.$new->thumbImageURL.''); ?>" alt="">
                                            </a>
                                            <div class="tag new">
                                                <span>new</span>
                                            </div>
                                            <div class="hot-wid-rating">
                                                    <h4><a href="<?php echo base_url('product?id='.$new->id.''); ?>"><?php echo $new->name; ?></a></h4>
                                                   <section class="yildiz">
                                                        <input type="radio" name="example" class="rating" value="1" />
                                                        <input type="radio" name="example" class="rating" value="2" />
                                                        <input type="radio" name="example" class="rating" value="3" />
                                                        <input type="radio" name="example" class="rating" value="4" />
                                                        <input type="radio" name="example" class="rating" value="5" />
                                                    </section>
                                                
                                                    <div class="product-wid-price">
                                                        <?php if($new->updatedPrice == $new->price) { ?>
                                                        <ins><?php echo $new->updatedPrice; ?></ins>
                                                    <?php } else{ ?>
                                                      <ins><?php echo $new->updatedPrice; ?></ins> <del><?php echo $new->price; ?></del>
                                                    <?php } ?>
                                                    </div>
                                                
                                            </div>
                                            <a href="<?php echo base_url('product?id='.$new->id.''); ?>"><p class="submit-btn">Ürünü İncele</p></a>
                                             <a href="<?php echo base_url('users/likeProduct?id='.$new->id.''); ?>"><p class="submit-btn"> Favorilerime Ekle</p></a>


                                            


                                        </div>
                                    </div>
                                           <?php endforeach; ?>
                                <?php endif; ?>


                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="populer">
                                <div class="row">
                                  <?php if(isset($populerProducts) && $populerProducts != "") : ?>
                                    <?php $populerProd = array_unique($populerProducts, SORT_REGULAR); foreach ($populerProd as $populer) : ?>
                                    <div class="col-md-3 col-sm-4 col-xs-12 product-box">
                                        <div class="women-single">
                                            <a href="<?php echo base_url('product?id='.$populer->id.''); ?>"><img src="<?php echo base_url('assets/images/products/'.$populer->thumbImageURL.''); ?>" alt="">
                                            </a>

                                            <div class="hot-wid-rating">
                                                <h4><a href="<?php echo base_url('product?id='.$populer->id.''); ?>"><?php echo $populer->name; ?></a></h4>
                                                 <section class="yildiz">
                                                        <input type="radio" name="example" class="rating" value="1" />
                                                        <input type="radio" name="example" class="rating" value="2" />
                                                        <input type="radio" name="example" class="rating" value="3" />
                                                        <input type="radio" name="example" class="rating" value="4" />
                                                        <input type="radio" name="example" class="rating" value="5" />
                                                    </section>
                                                    <div class="product-wid-price">
                                                        <?php if($populer->updatedPrice == $populer->price) { ?>
                                                        <ins><?php echo $populer->updatedPrice; ?></ins>
                                                    <?php } else{ ?>
                                                      <ins><?php echo $populer->updatedPrice; ?></ins> <del><?php echo $populer->price; ?></del>
                                                    <?php } ?>
                                                    </div>
                                            </div>
                                        <a href="<?php echo base_url('product?id='.$populer->id.''); ?>"><p class="submit-btn">Ürünü İncele</p></a>
                                              <a href="<?php echo base_url('users/likeProduct?id='.$populer->id.''); ?>"><p class="submit-btn"> Favorilerime Ekle</p></a>
                                        </div>
                                    </div>
                                   <?php endforeach; ?>
                                <?php endif; ?>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="liked">
                                <div class="row">
                                   <?php if(isset($likedProducts) && $likedProducts != "") : ?>
                                    <?php $likedPro = array_unique($likedProducts, SORT_REGULAR); foreach ($likedPro as $liked) : ?>
                                    <div class="col-md-3 col-sm-4 col-xs-12 product-box">
                                        <div class="women-single">
                                            <a href="<?php echo base_url('product?id='.$liked->id.''); ?>"><img src="<?php echo base_url('assets/images/products/'.$liked->thumbImageURL.''); ?>" alt="">
                                            </a>
                                            <div class="hot-wid-rating">
                                                <h4><a href="<?php echo base_url('product?id='.$liked->id.''); ?>"><?php echo $liked->name; ?></a></h4>
                                                 <section class="yildiz">
                                                        <input type="radio" name="example" class="rating" value="1" />
                                                        <input type="radio" name="example" class="rating" value="2" />
                                                        <input type="radio" name="example" class="rating" value="3" />
                                                        <input type="radio" name="example" class="rating" value="4" />
                                                        <input type="radio" name="example" class="rating" value="5" />
                                                    </section>
                                               <div class="product-wid-price">
                                                        <?php if($liked->updatedPrice == $liked->price) { ?>
                                                        <ins><?php echo $liked->updatedPrice; ?></ins>
                                                    <?php } else{ ?>
                                                      <ins><?php echo $liked->updatedPrice; ?></ins> <del><?php echo $liked->price; ?></del>
                                                    <?php } ?>
                                                    </div>
                                            </div>
                                        <a href="<?php echo base_url('product?id='.$liked->id.''); ?>"><p class="submit-btn">Ürünü İncele</p></a>
                                             <a href="<?php echo base_url('users/likeProduct?id='.$liked->id.''); ?>"><p class="submit-btn"> Favorilerime Ekle</p></a>
                                        </div>
                                    </div>
                                 <?php endforeach; ?>
                                <?php endif; ?>

  
                                </div>
                            </div>
                             <div role="tabpanel" class="tab-pane" id="order">
                                <div class="row">
                                <?php if(isset($inOrderProducts) && $inOrderProducts != "") : ?>
                                    <?php $inOrderPro = array_unique($inOrderProducts, SORT_REGULAR); foreach ($inOrderPro as $order) : ?>
                                    <div class="col-md-3 col-sm-4 col-xs-12 product-box">
                                        <div class="women-single">
                                            <a href="<?php echo base_url('product?id='.$liked->id.''); ?>"><img src="<?php echo base_url('assets/images/products/'.$order->thumbImageURL.''); ?>" alt="">
                                            </a>
                                            <div class="hot-wid-rating">
                                                <h4><a href="<?php echo base_url('product?id='.$liked->id.''); ?>"><?php echo $order->name; ?></a></h4>
                                                 <section class="yildiz">
                                                        <input type="radio" name="example" class="rating" value="1" />
                                                        <input type="radio" name="example" class="rating" value="2" />
                                                        <input type="radio" name="example" class="rating" value="3" />
                                                        <input type="radio" name="example" class="rating" value="4" />
                                                        <input type="radio" name="example" class="rating" value="5" />
                                                    </section>
                                                    <div class="product-wid-price">
                                                        <?php if($order->updatedPrice == $order->price) { ?>
                                                        <ins><?php echo $order->updatedPrice; ?></ins>
                                                    <?php } else{ ?>
                                                      <ins><?php echo $order->updatedPrice; ?></ins> <del><?php echo $order->price; ?></del>
                                                    <?php } ?>
                                                    </div>
                                            </div>
                                        <a href="<?php echo base_url('product?id='.$order->id.''); ?>"><p class="submit-btn">Ürünü İncele</p></a>
                                            <a href="<?php echo base_url('users/likeProduct?id='.$order->id.''); ?>"><p class="submit-btn"> Favorilerime Ekle</p></a>
                                        </div>
                                    </div>
                                 <?php endforeach; ?>
                                <?php endif; ?>

  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>