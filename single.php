<?php 
  wpb_set_post_views(get_the_ID());
?>

<?php get_header(); ?>
<section class="body single-body">
  <div class="single-hero-container">
    <?php echo get_the_post_thumbnail(); ?>
  </div>
  <div class="single-hero-content">
    <div class="block-header-container">
        <div class="block-subtitle-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-bottom.svg" alt="">
            MISE EN AVANT
        </div>
        <h1><?php echo get_the_title(); ?></h1>
        <ul class="block-categories-container">
            <li>
                THEMATIQUE
            </li>
            <li>
                THEMATIQUE
            </li>
        </ul>
    </div>
    <?php echo get_the_content(); ?>
    <span>Posté le <?php echo get_the_date(); ?> à <?php echo get_the_time(); ?></span>
    <ul class="socials">
        <li class="twitter">
          <a href="https://x.com/Ascension_tn" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/twitter.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.twitch.tv/zerator" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/twitch.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/ascension_tn/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/insta.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@ascensiontn" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/tiktok.svg" alt="">
          </a>
        </li>
      </ul>
  </div>
  <?php get_template_part( 'template-parts/block/last_articles' ); ?>
</section>
<?php get_footer(); ?>