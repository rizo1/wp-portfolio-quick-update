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
                <a class="navbar-brand" href="http://cesar-restrepo.com">Cesar Restrepo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="page-scroll">
                        <a href="<?php echo site_url(); ?>">Portfolio</a>
                    </li>
                  
                    <li class="page-scroll">
                        <a href="<?php echo site_url(); ?>/blog/">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
   
    
    <section class="blog-section" >
    
    <div class="container">

        <div class="row">
         <div class="row blog-intro-section">
             <div class="col-sm-6 text-center blog-intro-title">
                <div class='title'>
                    <h2>
                       Welcome To My Blog
                    <span class='underscore'>
                         _
                    </span>
                    </h2>
                </div>
            </div>
            <div class="col-sm-6"  style="font-size:1.8em; ">
                <p class="tag-line">Tips and tricks I've learnt from smart people</p>
            </div>

         </div>   
         
        <div class="col-sm-8 blog-index">
        
            <?php query_posts('posts_per_page=-1'); ?>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                    <div class="blog-preview blog-main-content"> 
                    <div class="row">  
                        <div class="col-sm-4">
                            <?php if(has_post_thumbnail()): ?>
                                <?php
                                    $attr = array(
                                        'class' => 'img-responsive center-block index-blog-img'
                                        );
                                ?>

                                <a href="<?php echo the_permalink(); ?>">
                                 <?php echo get_the_post_thumbnail($id, 'large', $attr); ?>
                                </a>

                            <?php endif; ?>
                            <br>
                            <p class="blog-tags"><i class="fa fa-tag" aria-hidden="true"></i>  
                                <?php
                            $categories = get_the_category();
                            $separator = ", ";
                            $output = '';

                            if($categories){
                                foreach($categories as $category){
                                    $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
                                }
                            }
                            echo trim($output, $separator);

                         ?>
                         </p>
                        </div>
                        <div class="col-sm-8">
                            <div class="blog-title-link">
                                <a href="<?php echo the_permalink(); ?>" >
                                     <h3 class="index-blog-title"><?php the_title(); ?></h3>
                                </a>
                            </div>

                              <p class="meta">
                        By 
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                          <?php the_author(); ?>    
                        </a> 
                        on 
                        <?php the_time('d M Y'); ?>                    
                      
                    </p>

                    
                    <hr class="first-hr">
                    <p>
                       <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php echo the_permalink(); ?>">Read More...</a>
                    <hr>


                            <div class="clr"></div>
                        </div>
                    </div>
                    </div><!--div.row-->
                    <br>
                    <?php endwhile; ?> 

            <?php else: ?>    
                <?php echo wpautop('Sorry, no blog posts were found.'); ?>
            <?php endif; ?>
        
        </div><!--div.col-sm-8-->
        <div class="col-md-4 sidebar-section">
                <?php if(is_active_sidebar('sidebar')): ?> 
                  <?php dynamic_sidebar('sidebar'); ?> 
                <?php endif; ?>
        </div><!--div.col-sm-4-->
       </div><!--div.row-->
    </div><!--div.container-->
    </section>

<?php get_footer(); ?>



   
 
  
     

      
   
        