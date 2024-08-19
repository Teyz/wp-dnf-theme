<?php
    $teams = get_field('teams');
?>


<div class="our-teams-container">
    <div class="block-header-container">
        <div>
            <div class="block-subtitle-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-bottom.svg" alt="">
                DÉCOUVREZ
            </div>
            <h2>NOTRE ÉQUIPE</h2>
        </div>
    </div>
    <ul class="our-teams-list-container">
        <?php foreach($teams as $user): ?>
            <li class="our-team-item">
                <div class="image-container" style="background-color: <?php echo $user["background_color"]; ?>">
                    <img src="<?php echo $user["image"]; ?>" alt="">
                </div>
                <div class="text-container">
                    <div>
                        <span><?php echo $user["tag"]; ?></span>
                        <h3><?php echo $user["fullname"]; ?></h3>
                    </div>
                    <p><?php echo $user["text"]; ?></p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>