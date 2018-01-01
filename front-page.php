<?php get_header(); ?>


<body id="page-top" <?php body_class(); ?>>



    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Cesar Restrepo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll blog-link">
                        <a href="<?php echo site_url(); ?>/blog/">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <!-- Header -->
    <header class="landing-page">
	 <div class="geoPattern">   
         

<?php get_template_part( 'content', 'ielements' ); ?>
<!--should i have just used an include?????-->   
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="intro-text header">
                            <h1 class='elegantshadow mainTitle'>Cesar <br class="visible-xs visible-sm">Restrepo</h1>

                            <h2 class="elegantshadow1">
                           Front-End Web Developer
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        
    </header>

    <!-- Portfolio Grid Section -->
	
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class='title'>
                      <h2>
                        PORTFOLIO
                        <span class='underscore'>
                          _
                        </span>
                      </h2>
                    </div>
                </div>
            </div>
            <div class="row portfolio-menu">
              
                <div class="col-md-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content caption-kpc">
                               
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/kpc-voices-logo.png" class="img-responsive center-block">
                            </div>
                           
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/voiceover.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content caption-tppc">
                               
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/tppc-logo.png" class="img-responsive center-block">
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/family.jpg" class="img-responsive center-block" alt="">
                    </a>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content caption-pet">
                                
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/pet-support-logo.png" class="img-responsive center-block">
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/dog.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content caption-bless">
                               
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/bless-logo.png" class="img-responsive center-block">
                                
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/music.jpg" class="img-responsive center-block" alt="">
                    </a>
                </div>

            </div>
       
        </div>
    </section>
	<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/bg1.jpg" alt="" style="display:none;">
   <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/bg2.jpg" alt="" style="display:none;"> -->
    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/bg3.jpg" alt="" style="display:none;">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/bg4.jpg" alt="" style="display:none;"> -->


<?php get_template_part( 'content', 'modals' ); ?>
<!--should i have just used an include?????-->
    <!-- About Section -->
      <div class=" bottom">
    <section class="success about" id="about">
       
              <div class="scroll"></div>
        <div class="container-fluid about-me-container">
           
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class='title'>
                      <h2>
                        ABOUT ME
                        <span class='underscore'>
                          _
                        </span>
                      </h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
               <div class="darker-green-bg ">  
                   <div class="large-screen-margin"></div>
                   <div class="col-sm-3 hidden-xs hidden-xs hidden-sm">
                       <div class="container1 ">
                          <div class="gearbox">
                          <div class="overlay"></div>
                            <div class="gear one">
                              <div class="gear-inner">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                              </div>
                            </div>
                            <div class="gear two">
                              <div class="gear-inner">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                              </div>
                            </div>
                            <div class="gear three">
                              <div class="gear-inner">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                              </div>
                            </div>
                            <div class="gear four large">
                              <div class="gear-inner">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                              </div>
                            </div>
                          </div>

                        </div>
                       <div class="skillset">
                       <h3>Skillset</h3>
                       <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JAVASCRIPT</li>
                            <li>JQUERY</li>
                            <li>WORDPRESS</li>
                            <li>PHP</li>
                       </ul>
                       <p>
                           currently developing skills in using 
                           the MEAN stack.
                       </p>
                       </div>
                   </div>
                   <div class="col-md-9">
                       <div class="row">
                           
                               <div class="about-me-info">
                                 <div class="col-md-6">
                                    <div class="about-first-line">
                                        <p>
                                          Hi, welcome to my website!
                                        </p>
                                    </div>
                                    <p>
                                       I am a front-end web developer based in London. 
                                       My main objective is to attempt to contribute in  
                                       making the web a more beautiful interactive place for everyone. 
                                       I started coding because I needed a website for a business idea that I had and since then I has become an obsession - 
                                       I found myself coding for the sake of coding and soon forgot about the business idea that had driven me to it in the first place. 
                                   </p>
                               </div>
                                    <div class="col-md-6 second-about-p">
                                        
                                   <p>
                                       I'm easy going and friendly with a strong work ethic and an autodidact. 
                                       What I love the most about Web Development is that it is ever evolving 
                                       and is intertwined with the technology that is  available to us.
                                       As technology continually  improves, the possibilities become endless, 
                                       and I want to be a part of that. 
                                   </p>
                                   <p>
                                       Interested In working together? Id love to hear from you...
                                   </p>
                               </div>
                           </div>
                        
                          
                       </div>
                       <div class="row availability hidden-xs hidden-sm">
                            <div class="col-sm-4 hire page-scroll">
                               <p><a href="#contact" style="color:#fff;">Want to hire me?</a></p>
                           </div>
                           <div class="col-sm-4 neon page-scroll">
                               <p ><a href="#contact" class="active">Available</a></p>
                           </div>
                           <div class="col-sm-4 neon1">
                               <p><a href="#" id="notActive">  Not<br>
                               Available</a></p>
                           </div>
                       </div>
                   </div>     
                    
                   <div class="col-sm-6 col-md-3 visible-xs visible-sm">
                     
                       <div class="skillset">
                       <h3>Skillset</h3>
                       <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JAVASCRIPT</li>
                            <li>JQUERY</li>
                            <li>WORDPRESS</li>
                            <li>PHP</li>
                       </ul>
                       <p>
                           currently developing skills in using 
                           the MEAN stack.
                       </p>
                       </div>
                   </div>
                   <div class="col-sm-6 visible-sm">
                    <div class="container1 ">
                          <div class="gearbox">
                          <div class="overlay"></div>
                            <div class="gear one">
                              <div class="gear-inner">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                              </div>
                            </div>
                            <div class="gear two">
                              <div class="gear-inner">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                              </div>
                            </div>
                            <div class="gear three">
                              <div class="gear-inner">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                              </div>
                            </div>
                            <div class="gear four large">
                              <div class="gear-inner">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                              </div>
                            </div>
                          </div>

                        </div>
                   </div>
                   <div class="row availability visible-xs visible-sm">
                            <div class="col-sm-12 col-md-4 hire page-scroll">
                               <p><a href="#contact" style="color:#fff;">Want to hire me?</a></p>
                           </div>
                           <div class="col-sm-6 neon page-scroll">
                               <p ><a href="#contact" class="active">Available</a></p>
                         
                           </div>
                           <div class="col-sm-6 neon1">
                               <p><a href="#" id="notActive">  Not<br>
                               Available</a></p>
                           </div>
                       </div>
                    
                </div><!--darker-green-bg-->        
            </div> 
        </div><!--container-fluid-->
      
    </section>
  </div>
    <!-- Contact Section -->
    <section id="contact" class="contact ">
      
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <div class='title'>
                      <h2>
                        Contact Me
                        <span class='underscore'>
                          _
                        </span>
                      </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input class="form-control" placeholder="Phone Number" id="phone" type="tel" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls last-input">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg center-block">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php //get_template_part( 'content', 'blogsection' ); ?> 


<?php get_footer(); ?>