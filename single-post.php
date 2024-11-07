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
    <section class="py-5 pt-32">
        <div class="container mx-auto">
            <div class="pb-4">
                <h1 class="leading-tight sm:text-5xl md:text-4xl text-[36px] font-bold text-left max-w-2xl"><?php echo $title; ?></h1>
                <p class="text-[14px]">Posted on: <span class="text-[#5564AD]">Sebtember 30, 2024</span></p>
                <p class="text-[14px]">by: <span class="text-[#5564AD]">Nadim Younes, CEO</span></p>
            </div>
            <div class="grid grid-cols-12 gap-10 py-4 lg:mx-0 mx-5">
                <div class="col-span-9 text-left content-main">
                    <?php the_content(); ?>
                </div>
                <div class="col-span-3">
                    <div class="social-links">
                        <ul>
                            <li class="block relative" style="width: fit-content;">
                                <img class="w-20" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/share-arrow.svg" alt="share-arrow">
                                <p class="text-white font-black text-[15px] absolute right-[27%] bottom-0 top-0">share</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
