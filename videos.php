<?php
    /*Template Name: Video*/
    $video = get_field('video');
    $categories = get_the_category();
?>

<?php get_header(); ?>
<section class="body video-container">
  <div class="hero-container">
    <div class="hero-video-container">
        <video controls width="250">
            <source src="/media/cc0-videos/flower.webm" type="video/webm" />
            <source src="/media/cc0-videos/flower.mp4" type="video/mp4" />
        </video>
    </div>
    <div class="hero-content-container">
        <div class="block-header-container">
            <div class="block-subtitle-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-bottom.svg" alt="">
                MISE EN AVANT
            </div>
            <h1><?php echo get_the_title(); ?></h1>
            <ul class="block-categories-container">
                <?php foreach($categories as $category): ?>
                    <li class="active">
                        <?php echo $category->name; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            </div>
            <p><?php echo get_the_content(); ?></p>
            <span>Posté le <?php echo get_the_date(); ?> à <?php echo get_the_time(); ?></span>
            <ul class="socials">
                <?php if (!empty($video["twitter_url"])): ?>
                    <li class="twitter">
                        <a href="<?php echo $video["twitter_url"]; ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/twitter.svg" alt="">
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (!empty($video["twitch_url"])): ?>
                    <li>
                        <a href="<?php echo $video["twitch_url"]; ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/twitch.svg" alt="">
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (!empty($video["insta_url"])): ?>
                    <li>
                        <a href="<?php echo $video["insta_url"]; ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/insta.svg" alt="">
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (!empty($video["tiktok_url"])): ?>
                    <li>
                        <a href="<?php echo $video["tiktok_url"]; ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/tiktok.svg" alt="">
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
  </div>
  <?php get_template_part( 'template-parts/block/last_videos' ); ?>
</section>
<?php get_footer(); ?>