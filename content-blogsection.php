    <section class="blog-section" id="blog">
        <div class="container">
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
            <div class="row">
            <?php query_posts('posts_per_page=3'); ?>
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>

                <div class="col-sm-4 ">


                
                    <div class="blog-preview">
                    <?php if(has_post_thumbnail()): ?>
                        <?php
                            $attr = array(
                                'class' => 'img-responsive center-block'
                                );
                        ?>

                        <a href="<?php echo the_permalink(); ?>">
                         <?php echo get_the_post_thumbnail($id, 'large', $attr); ?>
                        </a>
                    <?php endif; ?>
                    <div class="blog-title-link">
                        <a href="<?php echo the_permalink(); ?>" >
                             <h3 class="blog-title"><?php the_title(); ?></h3>
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
                   <!-- <p><i class="fa fa-comment-o" aria-hidden="true"></i> 12</p>-->
                    </div>
                
                </div>

            <?php endwhile; ?> 

            <?php else: ?>    
                <?php echo wpautop('Sorry, no blog posts were found.'); ?>


            <?php endif; ?>
                
         
                <div class="col-xs-12 blog-view-more">
                    <a href="./blog/" >View More...</a>
                </div>

            </div>
        </div>
    </section>