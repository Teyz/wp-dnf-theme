<?php
    /*Template Name: À propos*/
?>

<?php get_header(); ?>
<section class="body about-container">
  <div class="hero-container" style="align-items: flex-end">
    <div class="hero-video-container">

    </div>
    <div class="hero-content-container">
        <div class="block-header-container">
            <h1><?php echo get_the_title(); ?></h1>
            <p><?php echo get_the_content(); ?></p>
        </div>
    </div>
  </div>
  <div class="timeline-container">
    <div class="timeline-header-container">
        <span>SUBTILE ICI</span>
        <h2>TITRE ICI</h2>
    </div>
    <div class="timeline-events-container">
        <div class="event left first">
            <div class="content">
                <p class="date">18 JUILLET 2010</p>
                <h2>INTITULÉ DE L'ÉVÉNEMENT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
            </div>
        </div>
        <div class="event right second">
            <div class="content">
                <p class="date">18 JUILLET 2010</p>
                <h2>INTITULÉ DE L'ÉVÉNEMENT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
            </div>
        </div>
        <div class="event left third">
            <div class="content">
                <p class="date">18 JUILLET 2010</p>
                <h2>INTITULÉ DE L'ÉVÉNEMENT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
            </div>
        </div>
    </div>
  </div>
  <?php get_template_part( 'template-parts/block/our_teams' ); ?>
</section>
<?php get_footer(); ?>