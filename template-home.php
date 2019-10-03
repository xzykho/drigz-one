<?php
/*
 * Template Name: Template Home
 * Description: drigz home page with website content sections i.e. *Summary of skills.
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="hero-header">
        <?php if(has_post_thumbnail()): ?>
            <div class="hero-header--billboard">
                <h2><?php the_title(); ?></h2>
                <?php
                do_action( 'plugins/wp_subtitle/the_subtitle', array(
                    'before'        => '<h3 class="subtitle">',
                    'after'         => '</h3>',
                    'post_id'       => get_the_ID(),
                    'default_value' => ''
                ) );
                ?>
            </div>
            <img src="<?php the_post_thumbnail_url(''); ?>" alt="">
        <?php endif; ?>
    </div>
    <section class="grid-container">

        <?php the_content(); ?>
    </section>
<?php endwhile; endif; ?>

<!-- will include footer-no-sidebar.php; -->
<?php get_footer( 'no-sidebar' ); ?>
