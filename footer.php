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

    <hr class="footer">

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
              <li><a href="#home" scroll-sref>Home</a></li>
              <li><a href="#sobre" scroll-sref>Sobre</a></li>
              <li><a href="#area-de-atuacao" scroll-sref>Áreas de Atuação</a></li>
              <li><a href="#portfolio" scroll-sref>Portfólio</a></li>
              <li><a href="#contato" scroll-sref>Contato</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
	<!-- /footer -->

<?php wp_footer(); ?>

</body>
</html>
