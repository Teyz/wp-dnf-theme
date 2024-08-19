<?php
    $ambassadors = get_field('ambassadors');
    $currentAge = 0;
?>

<div class="ambassadors-swiper-container">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($ambassadors as $ambassador): ?>
                <div 
                    class="swiper-slide"
                    data-name="<?php echo $ambassador['name']; ?>" 
                    data-pronom="<?php echo $ambassador['pronom']; ?>"
                    data-text="<?php echo $ambassador['text']; ?>"
                    data-interview="<?php echo $ambassador['interview_url']; ?>"
                    data-tiktok="<?php echo $ambassador['tiktok_url']; ?>"
                    data-twitter="<?php echo $ambassador['twitter_url']; ?>"
                    data-twitch="<?php echo $ambassador['twitch_url']; ?>"
                    data-instagram="<?php echo $ambassador['insta_url']; ?>"
                >
                    <div class="ambassador-item" style="background-color: <?php echo $ambassador['background_color']; ?>">
                        <img src="<?php echo $ambassador['image']; ?>" alt="">
                        <span class="tag name"><?php echo $ambassador['name']; ?></span>
                        <span class="tag age"><?php echo $ambassador['age']; ?> ans</span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="ambassadors-details-container">
        <div>
            <span class="pronom">SHE / HER</span>
            <h2>Areliann</h2>
        </div>
        <span class="tag">Saison 1</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum. Nulla facilisi. Fusce sit amet arcu et lacus posuere euismod. Curabitur a dolor nec libero varius vulputate. Phasellus sit amet eros quis lorem interdum bibendum.</p>
        <div class="buttons-container">
            <ul class="socials">
                <li class="twitter">
                    <a href="https://x.com/Ascension_tn" target="_blank" class="twitter-btn">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/twitter.svg" alt="">
                    </a>
                </li>
                <li>
                <a href="https://www.twitch.tv/zerator" target="_blank" class="twitch-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/twitch.svg" alt="">
                </a>
                </li>
                <li>
                <a href="https://www.instagram.com/ascension_tn/" target="_blank" class="insta-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/insta.svg" alt="">
                </a>
                </li>
                <li>
                <a href="https://www.tiktok.com/@ascensiontn" target="_blank" class="tiktok-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/single/tiktok.svg" alt="">
                </a>
                </li>
            </ul>
            <a href="" target="_blank" class="btn btn-pink interview">Interview</a>
        </div>
    </div>
    
</div>

<script>
    function updateInfo() {
        const activeSlide = document.querySelector('.swiper-slide-visible');
        
        const fullname = activeSlide.getAttribute('data-name');
        const pronom = activeSlide.getAttribute('data-pronom');
        const text = activeSlide.getAttribute('data-text');
        const interview = activeSlide.getAttribute('data-interview');
        const tiktok = activeSlide.getAttribute('data-tiktok');
        const twitter = activeSlide.getAttribute('data-twitter');
        const twitch = activeSlide.getAttribute('data-twitch');
        const instagram = activeSlide.getAttribute('data-instagram');

        document.querySelector('h2').textContent = fullname;
        document.querySelector('.pronom').textContent = pronom;
        document.querySelector('p').textContent = text;
        document.querySelector('.interview').href = interview;
        document.querySelector('.tiktok-btn').href = tiktok;
        document.querySelector('.twitter-btn').href = twitter;
        document.querySelector('.twitch-btn').href = twitch;
        document.querySelector('.insta-btn').href = instagram;
    }
const swiper = new Swiper('.swiper-container', {
	loop: true,
    speed: 350,
    spaceBetween: 240,
    autoplay: {
        delay: 3000,
    },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 80,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    on: {
        slideChange: function () {
            updateInfo();
        },
    },
});


</script>