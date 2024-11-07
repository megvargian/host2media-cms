<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
$post_title = urlencode(get_the_title(get_the_ID()));
$post_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
$title = the_title();
?>
<div class="single-article-page">
    <section>
        <img src="w-full" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo $title; ?>">
    </section>
    <section class="py-5">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 py-10">
                <div class="col-span-9">
                    <h1><?php echo $title; ?></h1>
                    <?php the_content(); ?>
                </div>
                <div class="col-span-3">

                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
