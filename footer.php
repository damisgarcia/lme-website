<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Clean Blog
 */

?>

       </div>
	   <!-- /.row -->
    </div>
	<!-- /.container -->

    <div class="line-8"></div>

    <!-- Footer -->
    <footer>
      <div class='container'>
        <img src="<?php bloginfo('template_directory'); ?>/images/lme.svg" width="115">
        <div class='row'>
          <div class='col-md-4'>
            <p>Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.</p>
          </div>
          <div class='col-md-8'>
            <ul class="nav nav-pills lme-portfolio-pills">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" scroll-sref>Home</a></li>
              <?php // wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '%3$s' ) ); ?>
            </ul>
          </div>
        </div>
      </div>
    </footer>
	<!-- /footer -->

<?php wp_footer(); ?>

</body>
</html>
