<?php
    /*Template Name: Partenaires*/
?>

<?php get_header(); ?>
<?php $blocks = parse_blocks( get_the_content() ); ?>
<section class="body">
    <?php
        foreach( $blocks as $block ) {
            echo render_block($block);
        }
    ?>
</section>
<?php get_footer(); ?>