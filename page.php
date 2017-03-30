<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Clean Blog
 */

function post_get_main_description($id){
  return get_field('pagedescription', $id);
}

function post_get_main_description_media($id){
  return get_field('pagemaindescriptionmedia', $id)['url'];
}
function post_get_banner_optional_1($id){
  return get_field('banneroptional1', $id)['url'];
}

function post_get_optional_description_1($id){
  return get_field('optional1description', $id);
}

function post_get_optional_description_1_media($id){
  return get_field('optional1descriptionmedia', $id)['url'];
}
function post_get_banner_optional_2($id){
  return get_field('banneroptional2', $id)['url'];
}

function post_get_optional_description_2($id){
  return get_field('optional2description', $id);
}

function post_get_optional_description_2_media($id){
  return get_field('optional2descriptionmedia', $id)['url'];
}
function post_get_banner_optional_3($id){
  return get_field('banneroptional3', $id)['url'];
}

function post_get_optional_description_3($id){
  return get_field('optional3description', $id);
}

function post_get_optional_description_3_media($id){
  return get_field('optional3descriptionmedia', $id)['url'];
}
function post_get_banner_optional_4($id){
  return get_field('banneroptional4', $id)['url'];
}

get_header(); ?>
  <div class="wp-content">
    <!-- IS REQUIRED -->
    <div class="row middle">
      <div class="col-md-7 col-sm-6">
        <?php echo post_get_main_description($post->ID); ?>
      </div>

      <div class="col-md-5 col-sm-6">
        <img src="<?php echo post_get_main_description_media($post->ID); ?>" class="img-responsive">
      </div>
    </div>

    <?php if($post_get_banner_optional_1 = post_get_banner_optional_1($post->ID)) { ?>
      <div class="row">
        <div class="col-md-12">
          <img src="<?php echo $post_get_banner_optional_1; ?>" class='img-responsive'>
        </div>
      </div>
    <?php } ?>

    <!-- OPTIONAL 1 -->
    <?php if($post_get_optional_description_1 = post_get_optional_description_1($post->ID)) { ?>
      <div class="row middle">
        <div class="col-md-7 col-sm-6">
          <?php echo $post_get_optional_description_1; ?>
        </div>

        <div class="col-md-5 col-sm-6">
          <img src="<?php echo post_get_optional_description_1_media($post->ID); ?>" class="img-responsive">
        </div>
      </div>
      <?php if($post_get_banner_optional_2 = post_get_banner_optional_2($post->ID)) { ?>
        <div class="row">
          <div class="col-md-12">
            <img src="<?php echo $post_get_banner_optional_2; ?>" class="img-responsive">
          </div>
        </div>
      <?php } ?>
    <?php } ?>

    <!-- OPTIONAL 2 -->
    <?php if($post_get_optional_description_2 = post_get_optional_description_2($post->ID)) { ?>
      <div class="row middle">
        <div class="col-md-7 col-sm-6">
          <?php echo $post_get_optional_description_2; ?>
        </div>

        <div class="col-md-5 col-sm-6">
          <img src="<?php echo post_get_optional_description_2_media($post->ID); ?>" class="img-responsive">
        </div>
      </div>
      <?php if($post_get_banner_optional_3 = post_get_banner_optional_3($post->ID)) { ?>
        <div class="row">
          <div class="col-md-12">
            <img src="<?php echo $post_get_banner_optional_3; ?>" class="img-responsive">
          </div>
        </div>
      <?php } ?>
    <?php } ?>

    <!-- OPTIONAL 3 -->
    <?php if($post_get_optional_description_3 = post_get_optional_description_3($post->ID)) { ?>
      <div class="row middle">
        <div class="col-md-7 col-sm-6">
          <?php echo $post_get_optional_description_3; ?>
        </div>

        <div class="col-md-5 col-sm-6">
          <?php echo post_get_optional_description_3_media($post->ID); ?>
        </div>
      </div>
      <?php if($post_get_banner_optional_4 = post_get_banner_optional_4($post->ID)) { ?>
        <div class="row">
          <div class="col-md-12">
            <?php echo $post_get_banner_optional_4; ?>
          </div>
        </div>
      <?php } ?>
    <?php } ?>

    <?php do_action('cleanblog_page_top'); ?>

    <?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

		<?php do_action('cleanblog_page_bottom'); ?>
	</div>
<?php get_footer(); ?>

<!-- application -->
<script src="<?php bloginfo('template_directory'); ?>/js/app/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/wp.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/applicationCtrl.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/scrollSref.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/scrollDown.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/ngLazy.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/openTeamDirective.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/wavesDirective.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/filterByCategory.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/galleryItemDirective.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app/galleryContentDirective.js"></script>
<!-- endapplication -->
