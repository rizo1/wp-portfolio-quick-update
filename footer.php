    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div id='stars'></div>
                    <div id='stars2'></div>
                    <div id='stars3'></div>
                    <div class="footer-col col-md-4">
                       <h3>Top 4 Reads of 2017</h3>
                       <a href="#" class="btn btn-success btn-lg center-block">Take Me There!</a>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                           
                            <li>
                                <a href="https://github.com/rizo1" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-github" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="http://codepen.io/Rizo/#" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-codepen" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline" ><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                           <li>
                               <a href="https://www.instagram.com/cesar.s.restrepo/" class="btn-social btn-outline" target="_blank" ><i class="fa fa-instagram" aria-hidden="true"></i>
</a>
                           </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                    <?php if( is_singular() || is_archive()): ?>
                        <h3>Blog</h3>
                        <a href="/wp-portfolio/blog/" class="btn btn-success btn-lg center-block">Take Me There!</a>
                    <?php else: ?>
                        <h3>Portfolio</h3>
                        <a href="/wp-portfolio/" class="btn btn-success btn-lg center-block">Take Me There!</a>
                    <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <small class="pull-left">Copyright &copy; Cesar Restrepo <?php echo date('Y'); ?></small>
                    </div>
                    <div class="col-sm-6">
                        <small><a href="#privacyModal" class="privacyModal pull-right" data-toggle="modal">Privacy Policy</a></small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    



    <!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
   
    
    <script src="<?php bloginfo('template_url'); ?>/js/script.min.js" type="text/javascript"></script>
    <!--contains bootstrap.js, jquery.easing.js-->

    <!--prevent default-->
    <script type="text/javascript">
    document.getElementById("notActive").addEventListener("click", function(event){
            event.preventDefault();
        });
    </script>
    
 <div id="some-element"></div>
<?php get_template_part( 'content', 'legal' ); ?>

</body>
 <?php wp_footer(); ?>
</html>
