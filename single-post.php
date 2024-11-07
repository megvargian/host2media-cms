<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="single-article-page">
    <section>
        <img src="w-full" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID())) ?>" alt="<?php the_title(); ?>">
    </section>
    <section>
        <div class="container">
            <div class="row text-left">
                <div class="col-9">
                    <div>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
