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
?>
<div class="single-article-page">
    <section>
        <img src="w-full" src="<?php echo $post_image; ?>" alt="<?php echo $post_title; ?>">
    </section>
    <section class="py-5">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-5 py-10">
                <div class="col-span-9">
                    <h1><?php echo $post_title; ?></h1>
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
