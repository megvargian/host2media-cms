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
$title = get_the_title(get_the_ID());
?>
<div class="single-article-page bg-[#FEFEFE]">
    <section>
        <img class="w-full" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo $title; ?>">
    </section>
    <section class="py-5">
        <div class="container mx-auto">
            <div class="pb-4">
                <h1 class="leading-tight sm:text-5xl md:text-4xl text-[36px] font-bold text-left"><?php echo $title; ?></h1>
                <p class="text-[14px]">Posted on: <span class="text-[##5564AD]">Sebtember 30, 2024</span></p>
                <p class="text-[14px]">by: <span class="text-[##5564AD]">Nadim Younes, CEO</span></p>
            </div>
            <div class="grid grid-cols-12 gap-5 py-4 lg:mx-0 mx-5">
                <div class="col-span-9 text-left">
                    <?php the_content(); ?>
                </div>
                <div class="col-span-3">
                    test
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
