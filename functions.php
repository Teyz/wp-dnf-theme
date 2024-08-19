<?php

add_theme_support( 'title-tag' );

function post_type_videos() {
  $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
  );
  $labels = array(
    'name' => _x('Videos', 'plural'),
    'singular_name' => _x('Video', 'singular'),
    'menu_name' => _x('Videos', 'admin menu'),
    'name_admin_bar' => _x('Videos', 'admin bar'),
    'add_new' => _x('Add New Video', 'add new'),
    'add_new_item' => __('Add New Videos'),
    'new_item' => __('New Video'),
    'edit_item' => __('Edit Video'),
    'view_item' => __('View Video'),
    'all_items' => __('All Videos'),
    'search_items' => __('Search Videos'),
    'not_found' => __('No Videos found.'),
  );
  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'Videos'),
    'has_archive' => true,
    'hierarchical' => false,
    'taxonomies' => array( 'category' ),
  );
  register_post_type('videos', $args);
}

add_action('init', 'post_type_videos');
add_action( 'init', 'add_tags_to_videos' );

function add_tags_to_videos() {
  register_taxonomy_for_object_type('post_tag', 'videos');
}

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function my_load_jquery() {
  /* load the minified script Library from the Child Theme Folder */
  wp_enqueue_script('jquery_min_script', get_stylesheet_directory_uri() .'/js/jquery.min.js');

  /* load your custom script from the Child Theme Folder */
  wp_enqueue_script('my_script', get_stylesheet_directory_uri() .'/js/script.js');
  }

  add_action( 'wp_enqueue_scripts', 'my_load_jquery' );

function my_theme_enqueue_styles() {
  $theme = wp_get_theme();
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/scss/main.css', array( $theme ), filemtime( get_stylesheet_directory() . '/assets/scss/main.css' )  );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/*Custom Post type end*/
function wpb_header_menu() {
  register_nav_menu('header-menu',__( 'Header' ));
}
add_action( 'init', 'wpb_header_menu' );


function wpb_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer' ));
}
add_action( 'init', 'wpb_footer_menu' );

function my_acf_block_render_callback( $block ) {
  $slug = str_replace('acf/', '', $block['name']);

  if( file_exists( get_theme_file_path("/template-parts/block/{$slug}.php") ) ) {
      include( get_theme_file_path("/template-parts/block/{$slug}.php") );
  }
}

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
    if( function_exists('acf_register_block') ) {
      acf_register_block(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'description'       => __('A custom Hero block.'),
        'render_template'   => 'template-parts/block/hero.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'hero'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'last videos',
        'title'             => __('Dernières vidéos'),
        'description'       => __('A custom Last videos block.'),
        'render_template'   => 'template-parts/block/last_videos.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'last videos'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'structure du tournois',
        'title'             => __('Structure du tournois'),
        'description'       => __('A custom Structure du tournois block.'),
        'render_template'   => 'template-parts/block/tournament_structure.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'structure du tournois'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'cast',
        'title'             => __('Cast'),
        'description'       => __('A custom Cast block.'),
        'render_template'   => 'template-parts/block/cast.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'cast'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'cashprize',
        'title'             => __('Cashprize'),
        'description'       => __('A custom Cashprize block.'),
        'render_template'   => 'template-parts/block/cashprize.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'cashprize'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'faq',
        'title'             => __('FAQ'),
        'description'       => __('A custom FAQ block.'),
        'render_template'   => 'template-parts/block/faq.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'faq'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'organization',
        'title'             => __('Organization'),
        'description'       => __('A custom Organization block.'),
        'render_template'   => 'template-parts/block/organization.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'organization'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'hero partners',
        'title'             => __('Hero - Partners'),
        'description'       => __('A custom Hero - Partners block.'),
        'render_template'   => 'template-parts/block/partners_hero.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'hero_partners'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'partners',
        'title'             => __('Partners'),
        'description'       => __('A custom Partners block.'),
        'render_template'   => 'template-parts/block/partners.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'partners'),
        'mode'              => 'auto',
      ));

      acf_register_block(array(
        'name'              => 'contact',
        'title'             => __('Contact'),
        'description'       => __('A custom Contact block.'),
        'render_template'   => 'template-parts/block/contact.php',
        'category'          => 'layout',
        'icon'              => 'layout',
        'keywords'          => array( 'contact'),
        'mode'              => 'auto',
      ));
    }
}

function load_block( $block ) {
  $slug = str_replace('acf/', '', $block['blockName']);

  if( file_exists( get_theme_file_path("/template-parts/block/{$slug}.php") ) ) {
      include( get_theme_file_path("/template-parts/block/{$slug}.php") );
  }
}

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );

add_action('init', function() {
  pll_register_string('ascension-text-domain', 'socials');
  pll_register_string('ascension-text-domain', 'Catégories');
  pll_register_string('ascension-text-domain', 'footer_texte');
});

function wpb_set_post_views($postID) {
  $count_key = 'wpb_post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
  $count_key = 'wpb_post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0 View";
  }
  return $count.' Views';
}

function ajax_filter_posts_slider() {
  $category_id = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';

  $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
  );

  if ($category_id) {
      $args['cat'] = $category_id;
  }

  $query = new WP_Query($args);

  if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
          ?>
          <div class="swiper-slide">
              <li class="last-article-item">
                  <a href="<?php echo get_the_permalink(); ?>">
                      <div class="top">
                          <div class="article-view-counter-container">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/eye.svg" alt="">
                              <?php echo wpb_get_post_views(get_the_ID()); ?>
                          </div>
                          <?php echo get_the_post_thumbnail(); ?>
                          <img src="<?php echo get_field("icon", get_the_ID()); ?>" alt="" class="icon">
                      </div>
                      <div class="bottom">
                          <div class="bottom-header-container">
                              <div class="titles-container">
                                  <span><?php echo get_the_category()[0]->name; ?></span>
                                  <h3>
                                      <?php echo get_the_title(); ?>
                                  </h3>
                              </div>
                              <p><?php echo get_the_excerpt(); ?></p>
                              <a href="<?php echo get_the_permalink(); ?>" class="btn btn-square">
                                  Lire
                              </a>
                          </div>
                      </div>
                  </a>
              </li>
          </div>
          <?php
      endwhile;
  else :
      echo '<p>Aucun article trouvé.</p>';
  endif;

  wp_reset_postdata();
  die();
}
add_action('wp_ajax_filter_posts_slider', 'ajax_filter_posts_slider');
add_action('wp_ajax_nopriv_filter_posts_slider', 'ajax_filter_posts_slider');

function set_custom_video_template($single_template) {
  global $post;

  if ($post->post_type == 'videos') {
      $single_template = dirname(__FILE__) . '/videos.php';
  }

  return $single_template;
}
add_filter('single_template', 'set_custom_video_template');

function ajax_filter_videos_slider() {
  $category_id = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';

  $args = array(
      'post_type' => 'videos',
      'posts_per_page' => -1,
  );

  if ($category_id) {
      $args['cat'] = $category_id;
  }

  $query = new WP_Query($args);

  if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
          ?>
          <div class="swiper-slide">
              <li class="last-video-item">

              </li>
          </div>
          <?php
      endwhile;
  else :
      echo '<p>Aucun article trouvé.</p>';
  endif;

  wp_reset_postdata();
  die();
}
add_action('wp_ajax_filter_videos_slider', 'ajax_filter_videos_slider');
add_action('wp_ajax_nopriv_filter_videos_slider', 'ajax_filter_videos_slider');