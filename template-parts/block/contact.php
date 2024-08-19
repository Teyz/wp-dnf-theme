<?php
    $contact = get_field('contact');
?>

<div class="contact-container">
    <div class="contact-form-container">
        <?php
            if ( class_exists( 'WPForms_Template' ) ) {
                $form_id = $contact["formID"];
                
                echo do_shortcode( '[wpforms id="' . $form_id . '"]' );
            } else {
                echo '<p>Le plugin WPForms n\'est pas actif.</p>';
            }
        ?>
    </div>
    <div class="contact-header-container">
        <div>
            <span class="tag"><?php echo $contact["tag"]; ?></span>
            <h2><?php echo $contact["title"]; ?></h2>
        </div>
        <p><?php echo $contact["text"]; ?></p>
        <ul class="socials">
            <?php foreach($contact["socials"] as $social): ?>
                <li>
                    <a href="<?php echo $social["link"]; ?>">
                        <img src="<?php echo $social["logo"]; ?>" alt="">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>