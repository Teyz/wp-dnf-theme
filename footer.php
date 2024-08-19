<?php 
  $current_language = pll_current_language();
?>

<footer>
  <div class="shape-footer-container"></div>
  <div class="content">
    <div class="informations">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_footer.svg" alt="">
      <p>
        <?php echo pll_e('footer_texte'); ?>
      </p>
    </div>
    <div class="categories-container">
      <h4><?php echo pll_e('Catégories'); ?></h4>
      <?php
        wp_nav_menu(array(
            'menu' => 'footer-' . $current_language,
            'container' => false,
            'menu_class' => 'footer-list'
        ));
      ?>
    </div>
    <div class="socials-list-container">
      <h4>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-bottom-white.svg" alt="">
        <?php echo pll_e('socials'); ?>
      </h4>
      <ul class="socials">
        <li class="twitter">
          <a href="https://x.com/Ascension_tn" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/twitter.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.twitch.tv/zerator" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/twitch.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/ascension_tn/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/insta.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@ascensiontn" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/tiktok.svg" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="separator"></div>
  <p>Copyright © <?php echo date("Y"); ?> <strong>Rentre Dans Le Game</strong>. <?php echo pll_e('Tous droits réservés'); ?>.</p>
</footer>

</body>
</html>