<?php $this->load->view("header");?>
<?php $this->load->view("menu");?>    
<div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
      <div class="ps-section--hero"><img src="<?php echo base_url();?>assets/images/hero/03.jpg" alt="">
        <div class="ps-section__content text-center">
          <h3 class="ps-section__title">OUR BAKERY</h3>
          <div class="ps-breadcrumb">
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="active">About Us</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="ps-section ps-section--about pt-100 pb-40">
        <div class="container">
          <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header text-center">
                    <div class="ps-section__top">Our Baker</div>
                    <h3 class="ps-section__title">Ms. Velvet Vanilla</h3>
                  </div>
                  <div class="ps-section__content text-center">
                    <p>“Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie…”</p>
                    <div class="ps-about__sign text-center mb-30 mt-40"><img src="<?php echo base_url();?>assets/images/about/img-signature.png" alt=""></div>
                    <p class="ps-about-sign">CEO - Vanila Bakery Shop</p>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 "><img src="<?php echo base_url();?>assets/images/about/about-intro.png" alt="">
                </div>
          </div>
        </div>
      </div>
      <?php $this->load->view("footer");?>
   