<section class="brands_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="arabanner"><img src="assets/images/gorsel/banner-home6.jpg" /></div>





                    <div class="brand-wrapper">
                        <div class="headline">
                            <h2>Mağazalarımız</h2>
                        </div>
                        <div class="brand-list">
                            <?php if($customers) : ?>
                                <?php foreach ($customers as $customer) : ?>
                                   <a href="<?php echo base_url('customer?id='.$customer->id.''); ?>"><img src="<?php echo base_url('assets/images/customers/'.$customer->logo); ?>" alt="#"></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>