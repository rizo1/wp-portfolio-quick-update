<?php get_header(); ?>


<body id="page-top" <?php body_class(); ?>>

<!--image preload -->
<img src="<?php bloginfo('template_url'); ?>/img/bg1.png">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="http://cesar-restrepo.com">Cesar Restrepo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://cesar-restrepo.com">Portfolio</a>
                    </li>
                  
                    <li class="page-scroll">
                        <a href="/wp-portfolio/blog/">Blog</a>
                    </li>
                </ul>

               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    


    <section class="blog-section" id="blog">
        <div class="container">
        <div class="row">
         <div class="row">
                <div class="col-lg-12 text-center">
                  <div class='title'>
                      <h2>
                        Blog
                        <span class='underscore'>
                          _
                        </span>
                      </h2>
                    </div>
                </div>
          </div>
        <div class="col-md-8 single-blog-content">
    
            <div class="row">
            <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post(); ?>
                <article class="post">
                  <div class="row">
                
                    <div class="col-md-12">
                      <h2>
                        <?php echo the_title(); ?>
                      </h2>
                      <?php if(has_post_thumbnail()): ?>
                        <div class="post-thumbnail">
                          <?php the_post_thumbnail('',array('class' => 'img-responsive', 'center-block')); ?>
                        </div>
                      <?php endif; ?>
                      <br>
                      <p class="meta">
                        Posted at 
                        <?php the_time(); ?> on
                        <?php the_date(); ?> by
                        <strong><?php the_author(); ?></strong>

                      </p>

                      <div class="content">
                        <?php the_content(); ?>
                      </div>

                      <hr>
                       
                    <div class="row">            
                      <div class="col-sm-4 text-left">
                        <?php previous_post_link(); ?> 
                      </div>
                      <div class="col-sm-4 text-center">                                               
                        <a href="/wp-portfolio/blog" class="btn btn-success btn-lg">Blog Home</a>
                      </div>
                      <div class="col-sm-4 text-right">           
                        <?php next_post_link(); ?> 
                      </div>
                    </div>           
                      <hr>

                      <?php comments_template(); ?> 
                      

                    </div>
                
                  </div>
                </article>
              <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4 sidebar-section">
            <?php if(is_active_sidebar('sidebar')): ?> 
              <?php dynamic_sidebar('sidebar'); ?> 
            <?php endif; ?>

          </div>
          </div><!--div.row-->
        </div>
    </section>

<?php get_footer(); ?>