<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <?php $i=0;foreach($homeBanners as $banner){?>
      <div class="item <?php echo ($i==0)?'active':'';?>">
        <img src="<?php echo Common::backend_url(); ?>/uploads/home_banner/<?php echo $banner->banner;?>" alt="<?php echo $banner->banner;?>" class="img-responsive">
        <div class="carousel-caption">
            <div class="sub-cap">
                <div class="subleft animated fadeInLeft delay-0.2s">
                    <div class="left-img">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/partners.png" width="100px">
                    </div>
                    <h2><?php echo $totalPartners;?></h2>
                    <h3>Total Forkind <br>Partners</h3>
                </div>
                <div class="subright animated fadeInRight delay-0.2s">
                    <div class="left-img">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/private-card.png" width="100px">
                    </div>
                    <h2><?php echo $totalCardholders;?></h2>
                    <h3>Total Private Card <br>Holders</h3>
                </div>
            </div>
        </div>
      </div>
    <?php $i++;} ?>
  </div>
</div>
<section class="home-icons hidden-xs">
    <ul>
       <li>
           <a href="<?php echo Common::backend_url(); ?>">
               <div class="home-icons-box">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/new-registration.png">
                   <p>New Registration</p>
               </div>
           </a>
       </li>
       <li>
           <a href="<?php echo Common::backend_url(); ?>">
               <div class="home-icons-box">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/member-login.png">
                   <p>Member Login</p>
               </div>
           </a>
       </li>
       <li>
           <a href="<?php echo Common::backend_url(); ?>partner">
               <div class="home-icons-box">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/partners-login.png">
                   <p>Partner Login</p>
               </div>
           </a>
       </li>
       
       <li>
           <a href="#">
               <div class="home-icons-box">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/why-noq.png">
                   <p>Why NoQ?</p>
               </div>
           </a>
       </li>
       <li>
           <a href="#">
               <div class="home-icons-box">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/explore-noq.png">
                   <p>Explore NoQ</p>
               </div>
           </a>
       </li>
       <li>
           <a href="#">
               <div class="home-icons-box">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/come-be-a-member.png">
                   <p>Come be a member</p>
               </div>
           </a>
       </li>
       <li>
           <a href="#">
               <div class="home-icons-box">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/partner-withus.png">
                       <p>Partner with Us</p>
                   </div>
               </a>
           </li>
       </ul>
    </section> 
    
    <section class="home-icons home-icons-mb visible-xs">
       <div class="row" style="margin-bottom: 20px;border-bottom: 1px solid #4b4b4b;padding-bottom: 20px;">
       <div class="col-xs-4">
          <a href="<?php echo Common::backend_url(); ?>">
            <div class="home-icons-box">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/new-registration.png">
               <p>New <br>Registration</p>
            </div>
          </a> 
       </div>
       <div class="col-xs-4">
          <a href="<?php echo Common::backend_url(); ?>">
            <div class="home-icons-box">
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/member-login.png">
              <p>Member<br> Login</p>
            </div>
          </a>
       </div>
       <div class="col-xs-4">
          <a href="<?php echo Common::backend_url(); ?>partner">
            <div class="home-icons-box">
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/partners-login.png">
              <p>Partner<br> Login</p>
            </div>
          </a>
       </div>
    </div>
    <div class="row">
       <div class="col-xs-3">
        <a href="#">
          <div class="home-icons-box">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/why-noq.png">
               <p>Why NoQ?</p>
          </div>
        </a>
       </div>
       <div class="col-xs-3">
        <a href="#">
           <div class="home-icons-box">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/explore-noq.png">
               <p>Explore NoQ</p>
           </div>
        </a>   
       </div>
       <div class="col-xs-3">
        <a href="#">
           <div class="home-icons-box">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/come-be-a-member.png">
               <p>Come be a member</p>
           </div>
        </a>   
       </div>
       <div class="col-xs-3">
        <a href="#">
           <div class="home-icons-box">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/partner-withus.png">
                   <p>Partner with Us</p>
               </div>
           </div>
        </a>   
       </div>
    </section> 
    
    
    <section class="block no-padding" style="background:#df9927;">
    <div class="row">
        <div class="col-md-6">
            <div class="cargo-shipment">
                <div class="calculate-shipping privilege-updates style2">
                    <div class="dark-title">
                        <h3>Privilege Updates</h3>
                    </div>
    
                    <div class="blog-post-carousel" id="blog-post-carousel-n1">
                        <div class="blog-post">
                            <div class="shipment-visibility">
                                <div class="overlape2">
                                    <div class="request-quote-body">
                                        <div class="row">
                                            <?php foreach($privillageList as $privillege){?>
                                              <div class="col-md-12 pl-5 pr-5">
                                                  <div class="newsbox privilegebox">
                                                    <a href="#">
                                                        <div class="col-md-3 pr-5 pl-0">
                                                            <img src="<?php echo Common::backend_url(); ?>/uploads/privillage_updates/<?php echo $privillege->partner_id;?>/<?php echo $privillege->image;?>" class="img-responsive">
                                                        </div>
                                                        <div class="col-md-7 pl-5 pr-5">
                                                            <p><?php echo $privillege->description;?></p>
                                                        </div>
                                                        <div class="col-md-2 pl-5">
                                                            <div class="news-date">
                                                                <p class="dates"><?php echo date("d", strtotime($privillege->created_at));?></p> 
                                                                <p><?php echo date("M", strtotime($privillege->created_at));?></p>
                                                                <p><?php echo date("Y", strtotime($privillege->created_at));?></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                  </div>
                                              </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="blog-post">
                            <div class="shipment-visibility">
                                <div class="overlape2">
                                    <div class="request-quote-body">
                                        <div class="row">
                                            <div class="col-md-12 pl-5 pr-5">
                                                <div class="newsbox">
                                                    <a href="#">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pl-5 pr-5">
                                                <div class="newsbox">
                                                    <a href="#">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pl-5 pr-5">
                                                <div class="newsbox">
                                                    <a href="#">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pl-5 pr-5">
                                                <div class="newsbox">
                                                    <a href="#">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div><!-- Blog Post Carousel -->
                </div><!-- Calculate Shipping -->
            </div><!-- Cargo Shipment -->
        </div>
        <div class="col-md-6">
            <div class="cargo-shipment partners-testimonial">
                <div class="calculate-shipping style2 news-events">
                    <div class="dark-title">
                        <h3>News & Events</h3>
                    </div>
    
                    <div class="blog-post-carousel news-events" id="blog-post-carousel-n2">
                        <div class="blog-post">
                            <div class="shipment-visibility">
                                <div class="overlape2">
                                    <div class="request-quote-body">
                                        <div class="row">
                                            <?php foreach($news_events as $news){?>
                                              <div class="col-md-12 pl-5 pr-5">
                                                  <div class="newsbox">
                                                      <a href="javascript:void(0);">
                                                          <p>
                                                              <?php echo $news->description;?>
                                                              <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                          </p>
                                                      </a>
                                                  </div>
                                              </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="blog-post">
                            <div class="shipment-visibility">
                                <div class="overlape2">
                                    
                                    <div class="request-quote-body">
                                        <div class="row">
                                            <div class="col-md-12 pl-5 pr-5">
                                                <div class="newsbox">
                                                    <a href="#">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pl-5 pr-5">
                                                <div class="newsbox">
                                                    <a href="#">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pl-5 pr-5">
                                                <div class="newsbox">
                                                    <a href="#">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pl-5 pr-5">
                                                <div class="newsbox">
                                                    <a href="#">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/right-arrow.png" class="right-arrow">
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    <section class="block" style="background:#007cc3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading heading5">
                    <h2>Categories with Exclusive Privilages</h2>
                </div>
            </div>
        </div>
        <?php $i=1;foreach($exclusive_privileges as $ex){?>
        <?php if($i<=4){?>
            <?php if($i==1){?>
            	<div class="row animated fadeInLeftBig delay-4s">
            <?php }?>
                <div class="col-md-3">
                    <div class="categories viewmore" id="<?php echo $ex->id;?>">
                        <img src="<?php echo Common::backend_url().'/uploads/category/'.$ex->category_image;?>">
                        <p><?php echo $ex->category;?></p>
                    </div>
                </div>
             <?php if($i==4){?>   
             	</div>    
             <?php }?>
        <?php }else{?>
        	 <?php if($i==5){?>
            	<div class="row mt-30 animated fadeInRightBig delay-2s">
            <?php }?>
                <div class="col-md-3">
                    <div class="categories viewmore" id="<?php echo $ex->id;?>">
                        <img src="<?php echo Common::backend_url().'/uploads/category/'.$ex->category_image;?>">
                        <p><?php echo $ex->category;?></p>
                    </div>
                </div>
             <?php if($i==8){?>   
             	</div>    
             <?php }?>
        <?php }?>     
        <?php $i++;}?>
         <div class="viewmore" id="all"><a href="javascript:void(0);">View More</a></div>
      </div>
    </section>
    
    
    <section class="block no-padding">
        <div class="fixed-bg  layer" style="background: url(<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/parallax4.jpg) no-repeat scroll;"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="cargo-shipment">
                <div class="calculate-shipping style2">
                    <div class="dark-title">
                        <span><i class="fa fa-steam"></i>What Our Clients Say</span>
                        <h3>Testimonials</h3>
                    </div>
                    <div class="blog-post-carousel" id="blog-post-carousel-second">
                        <?php //foreach($customer_testimonials as $customer){?>
                          <div class="blog-post">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="client">
                                          <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/user.png">
                                          <h2>Jhon Erani</h2>
                                          <h3>Customer</h3>
                                          <p>Lorem ipsum dolor sit amet, conse ctetuer aessa. Cum sociis natoque pena culus muse ore dolor sit amet dolor sit amet.</p>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="client">
                                          <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/user-female.png">
                                          <h2>Jhon Erani</h2>
                                          <h3>Customer</h3>
                                          <p>Lorem ipsum dolor sit amet, conse ctetuer aessa. Cum sociis natoque pena culus muse ore dolor sit amet dolor sit amet.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-post">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="client">
                                          <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/user.png">
                                          <h2>Jhon Erani</h2>
                                          <h3>Customer</h3>
                                          <p>Lorem ipsum dolor sit amet, conse ctetuer aessa. Cum sociis natoque pena culus muse ore dolor sit amet dolor sit amet.</p>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="client">
                                          <img src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/images/user-female.png">
                                          <h2>Jhon Erani</h2>
                                          <h3>Customer</h3>
                                          <p>Lorem ipsum dolor sit amet, conse ctetuer aessa. Cum sociis natoque pena culus muse ore dolor sit amet dolor sit amet.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        <?php //} ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="cargo-shipment partners-testimonial">
                <div class="calculate-shipping style2">
                    <div class="dark-title">
                        <span><i class="fa fa-steam"></i>What Our Partners Say</span>
                        <h3>Testimonials</h3>
                    </div>
                    <div class="blog-post-carousel" id="blog-post-carousel1">
                      <?php foreach($partner_testimonials as $partner){?>  
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="client">
                                        <img src="<?php echo Common::partner_customer_profile_image($partner->user_id,'1');?>">
                                        <h2><?php echo Common::partner_customer_name($partner->user_id,'1');?></h2>
                                        <h3>Partner</h3>
                                        <p><?php echo $partner->description;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    
    <section class="block" id="contact-us">
        <div class="container">
            <div class="blog-sec">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading heading5">
                            <h2 style="color:#333">Feel Free to Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="overlape2">
                        <div class="request-quote-body" style="padding:0; border:0">
                            <?php
                                $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                    'id'=>'admin-form',
                                    'enableAjaxValidation'=>true,//form-inline
                                    'htmlOptions'=>array('class'=>'form-inline')                
                                )); ?> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>
                                        	<?php echo $form->textField($enquiry, 'full_name', array('class'=>'text-field','placeholder' => 'Full Name','autocomplete'=>'off','data-validation'=>"required")); ?>
                  							<?php echo $form->error($enquiry,'full_name',array('style'=>'color:#FF0000'));?>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                        	<?php echo $form->textField($enquiry, 'email_id', array('class'=>'text-field','placeholder' => 'Email Id','autocomplete'=>'off','data-validation'=>"required")); ?>
                  							<?php echo $form->error($enquiry,'email_id',array('style'=>'color:#FF0000'));?>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                        	<?php echo $form->textField($enquiry, 'mobile_number', array('class'=>'text-field','placeholder' => 'Mobile Number','autocomplete'=>'off','data-validation'=>"required")); ?>
                    						<?php echo $form->error($enquiry,'mobile_number',array('style'=>'color:#FF0000'));?>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="border: none;">
                                        <?php echo $form->textArea($enquiry, 'address', array('placeholder' => 'Comment','data-validation'=>"required",'rows'=>'1','value'=>'Hello, I would like to know more about Forkind NoQ Privilege Card. Please send me more details.')); ?>
                    					<?php echo $form->error($enquiry,'address',array('style'=>'color:#FF0000'));?>
                                    </div>
                                </div>
                                <div class="form-btn text-center">
                                    <?php $this->widget('bootstrap.widgets.TbButton', array(
                                		'buttonType'=>'submit',
                                	    'htmlOptions'=>array('id'=>'submit_reg','class'=>'theme-btn'),
                                		'label'=>'SUBMIT NOW',
                                	)); ?>
                                </div>
                          <?php $this->endWidget(); ?>  
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
   </div>
</section>