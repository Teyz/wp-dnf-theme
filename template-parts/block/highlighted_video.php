<?php
    $highlighted_video = get_field('highlighted_video');
?>

<div class="highlighted-video-container">
    <div class="video-container">
        <video controls>
            <source src="/media/cc0-videos/flower.webm" type="video/webm" />
            <source src="/media/cc0-videos/flower.mp4" type="video/mp4" />
        </video>
    </div>
    <div class="text-container">
        <h2><?php echo $highlighted_video["title"]; ?></h2>
        <p><?php echo $highlighted_video["text"]; ?></p>
        <a href="<?php echo $highlighted_video["url"]; ?>"><?php echo $highlighted_video["label"]; ?></a>
    </div>
</div>