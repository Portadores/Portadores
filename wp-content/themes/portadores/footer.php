<?php
/**
 * The template for displaying the footer
 */
?>  
	<footer id="footer">
    	<div class="container">
        	<div class="row">
        		<img src="<?php echo get_template_directory_uri(); ?>/img/landing-footer.png" class="img-responsive">
            </div>
        </div>
    </footer>


     <!-- /container -->        
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-64586128-1', 'auto');
		  ga('send', 'pageview');
		</script>
        <?php wp_footer(); ?>
    </body>
</html>