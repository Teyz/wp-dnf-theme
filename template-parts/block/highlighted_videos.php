<?php
    $highlighted_videos = get_field('highlighted_videos');
?>

<div class="highlighted-videos-container">
    <div class="text-container">
        <h2><?php echo $highlighted_videos["title"]; ?></h2>
        <p><?php echo $highlighted_videos["text"]; ?></p>
        <a href="<?php echo $highlighted_videos["url"]; ?>"><?php echo $highlighted_videos["label"]; ?></a>
    </div>
    <ul class="videos-container">
        <?php foreach ($highlighted_videos["videos"] as $video) : ?>
            <a href="<?php echo get_the_permalink($video["video"]->ID); ?>">
                <li class="last-video-item">
                    <img src="<?php echo get_the_post_thumbnail_url($video["video"]->ID); ?>" alt="">
                </li>
            </a>
        <?php endforeach; ?>
    </ul>
</div>