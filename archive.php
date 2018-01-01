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
                <a class="navbar-brand" href="#page-top">Cesar Restrepo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/wp-portfolio/">Portfolio</a>
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
    
    <section class="blog-section" >
    <div class="container">
        <div class="row">
            
        <div class="col-xs-12 text-center">
            <div class='title'>
                <h2>
                    Blog
                <span class='underscore'>
                     _
                </span>
                </h2>
            </div>
        </div>

        <div class="col-sm-8 blog-index single-blog-content">
            <h2 class="page-header blog-archive-title">
            <?php 
                if(is_category()){
                    single_cat_title();
                }else if(is_author()){
                    the_post();
                    echo 'Archives By Author: ' .get_the_author();
                    rewind_posts();
                }else if(is_tag()){
                    single_tag_title();
                }else if(is_day()){
                    echo 'Archives By Day: ' .get_the_date();
                }else if(is_month()){
                    echo 'Archives By Month: ' .get_the_date('F Y');
                }else if(is_year()){
                    echo 'Archives By Year: ' .get_the_date('Y');
                }else{
                    echo 'Archives';
                }
            ?>
        </h2>
         
      
        <?php if(have_posts()): ?>

            <?php while(have_posts()): the_post(); ?>
                
                <h3 ><i class="fa fa-caret-right" aria-hidden="true"></i>
<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
           

            <?php endwhile; ?>

        <?php else: ?>
            <?php echo wpautop('Sorry, no posts were found'); ?>
        <?php endif; ?>

    <div class="row">
        <div class="col-sm-12 text-center">
        <br>
        <br>
        <br>
            <a href="/wp-portfolio/blog" class="btn btn-success btn-lg text-center">Blog Home</a>
        </div>
    </div>
            
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



   
 
  
     

      
   
        