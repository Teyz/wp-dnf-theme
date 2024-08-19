<?php 
    $hero = get_field("hero");
    $categories = get_the_category($hero["video"]->ID);
?>

<div class="hero-container">
    <div class="hero-video-container">

    </div>
    <div class="hero-content-container">
        <div class="block-header-container">
            <div class="block-subtitle-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-bottom.svg" alt="">
                MISE EN AVANT
            </div>
            <h2> <?php echo get_the_title($hero["video"]->ID); ?></h2>
            <ul class="block-categories-container">
                <?php foreach($categories as $category): ?>
                    <li class="active">
                        <?php echo $category->name; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <p>
            <?php echo $hero["video"]->post_content; ?>
        </p>
        <a href="<?php echo get_the_permalink($hero["video"]->ID); ?>" class="btn">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/loupe.svg" alt="">
            Découvrir la vidéo
        </a>
    </div>
</div>