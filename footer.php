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
	<!-- /.col-sm-9 -->
  </div>
  <div class='col-xs-1'>
    <div class='navigation-page right' data-spy="affix" data-offset-top="100">
      <a class='btn btn-link' href='{{app.nextPage.link}}' ng-if="app.nextPage">
        <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <!-- row -->
  </div>
  <!-- .container -->
</div>
<!-- .row -->

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
              <li><a href="<?php echo get_site_url() ?>#home" title="Home">Home</a></li>
              <li><a href="<?php echo get_site_url() ?>#sobre">Sobre</a></li>
              <li><a href="<?php echo get_site_url() ?>#area-de-atuacao">Áreas de Atuação</a></li>
              <li><a href="<?php echo get_site_url() ?>#portfolio">Portfólio</a></li>
              <li><a href="<?php echo get_site_url() ?>#contato">Contato</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
	<!-- /footer -->

<?php wp_footer(); ?>

</body>
</html>
