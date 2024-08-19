<?php 
    $args = array(
        'post_type' => 'post',
        'order' => "ASC",
      );
      
    $query = new WP_Query($args);
    
    // Créer une nouvelle requête WP pour obtenir tous les articles de ce type
    $query_categories = new WP_Query(array(
        'post_type' => 'videos',
        'posts_per_page' => -1, // Obtenir tous les articles
    ));

    // Tableaux pour stocker les ID des catégories
    $category_ids = array();

    // Boucler à travers les articles trouvés
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Obtenir les catégories de chaque article
            $categories = get_the_category();
            foreach ($categories as $category) {
                // Ajouter l'ID de la catégorie au tableau si elle n'y est pas déjà
                if (!in_array($category->term_id, $category_ids)) {
                    $category_ids[] = $category->term_id;
                }
            }
        }
        wp_reset_postdata(); // Réinitialiser les données de la requête principale
    }

    // Récupérer les détails des catégories par leurs ID
    $categories = get_categories(array(
        'include' => $category_ids,
    ));
?>

<div class="last-articles-container">
    <div class="block-header-container">
        <div>
            <div class="block-subtitle-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-bottom.svg" alt="">
                MISE EN AVANT
            </div>
            <h2>ARTICLES</h2>
            <div class="block-categories-container last-articles-buttons-container">
                <button type="button" data-category="" class="active">Tout</button>
                <?php foreach($categories as $category): ?>
                    <?php echo '<button type="button" data-category="' . $category->term_id . '">' . $category->name . '</button>'; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="swiper-buttons">
            <div class="swiper-videos-button prev" onclick='goToPrevSlide()'>
                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.55859 6.37891L0.929688 5.75L1.55859 5.14844L5.49609 1.21094L6.125 0.582031L7.35547 1.8125L6.72656 2.44141L4.29297 4.875H12.25H13.125V6.625H12.25H4.29297L6.72656 9.08594L7.35547 9.6875L6.125 10.9453L5.49609 10.3164L1.55859 6.37891Z" fill="#18181A"/>
                </svg>
            </div>
            <div class="swiper-videos-button next" onclick='goToNextSlide()'>
                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.4141 6.37891L8.47656 10.3164L7.875 10.9453L6.61719 9.6875L7.24609 9.08594L9.67969 6.625H1.75H0.875V4.875H1.75H9.67969L7.24609 2.44141L6.61719 1.8125L7.875 0.582031L8.47656 1.21094L12.4141 5.14844L13.043 5.75L12.4141 6.37891Z" fill="#F9F9F9"/>
                </svg>
            </div>
        </div>
    </div>
    <ul class="last-articles-list-container">
        <div class="swiper last-articles-swiper">
            <div class="swiper-wrapper last-articles-swiper-container">
                <?php foreach($query->posts as $post): ?>
                    <div class="swiper-slide">
                        <li class="last-article-item">
                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                <div class="top">
                                    <div class="article-view-counter-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/eye.svg" alt="">
                                        <?php echo wpb_get_post_views($post->ID); ?>
                                    </div>
                                    <?php echo get_the_post_thumbnail(); ?>
                                    <img src="<?php echo get_field("icon", get_post()->ID); ?>" alt="" class="icon">
                                </div>
                                <div class="bottom">
                                    <div class="bottom-header-container">
                                        <div class="titles-container">
                                            <span><?php echo get_the_category()[0]->name; ?></span>
                                            <h3>
                                                <?php echo $post->post_title; ?>
                                            </h3>
                                        </div>
                                        <p><?php echo $post->post_excerpt; ?></p>
                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="btn btn-square">
                                            Lire
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </ul>
</div>

<script>
    let lastArticlesSwiper = new Swiper(".last-articles-swiper", {
        slidesPerView: 3,
        spaceBetween: 16,
        grabCursor: true,
        speed: 450,
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 3,
            },
            990: {
                slidesPerView: 3,
            }
        },
    });

    const goToPrevSlide = () => {
        lastArticlesSwiper.slidePrev();
    }

    const goToNextSlide = () => {
        lastArticlesSwiper.slideNext();
    }

    jQuery(document).ready(function($) {
    $('.last-articles-buttons-container button').on('click', function() {
        var category = $(this).data('category');

        $('.last-articles-buttons-container button').removeClass('active');
        $(this).addClass('active');
        
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'GET',
            data: {
                action: 'filter_posts_slider',
                category: category
            },
            success: function(data) {
                $('.last-articles-swiper-container').html(data);

                lastArticlesSwiper = new Swiper('.last-articles-swiper', {
                    slidesPerView: 3,
                    spaceBetween: 16,
                    grabCursor: true,
                    speed: 450,
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                        },
                        560: {
                            slidesPerView: 3,
                        },
                        990: {
                            slidesPerView: 3,
                        }
                    },
                });
            },
            error: function(errorThrown) {
                console.log(errorThrown);
            }
        });
    });
});
</script>