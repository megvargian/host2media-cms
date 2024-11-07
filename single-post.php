<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
$title = get_the_title(get_the_ID());
$post_url   = urlencode(get_permalink(get_the_ID()));
$post_title = urlencode(get_the_title(get_the_ID()));
?>
<div class="single-article-page bg-[#FEFEFE]">
    <section>
        <img class="w-full" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo $title; ?>">
    </section>
    <section class="py-5 pt-32">
        <div class="container mx-auto">
            <div class="pb-4">
                <h1 class="leading-tight sm:text-5xl md:text-4xl text-[36px] font-bold text-left max-w-2xl"><?php echo $title; ?></h1>
                <p class="text-[14px] pt-3">Posted on: <span class="text-[#5564AD]">Sebtember 30, 2024</span></p>
                <p class="text-[14px]">by: <span class="text-[#5564AD]">Nadim Younes, CEO</span></p>
            </div>
            <div class="grid grid-cols-12 gap-10 py-4 lg:mx-0 mx-5">
                <div class="col-span-9 text-left content-main">
                    <?php the_content(); ?>
                    <div class="py-14 flex justify-between max-w-3xl">
                        <a class="text-[#5564AD]" href="#">
                            « The Future of IT Infrastructure ...
                        </a>
                        <a class="text-[#5564AD]" href="#">
                            A comparative guide: File, Block, and... »
                        </a>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="social-links">
                        <ul class="w-fit">
                            <li class="block relative mb-4 w-fit">
                                <img class="w-20" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/share-arrow.svg" alt="share-arrow">
                                <p class="text-white font-black text-[15px] absolute right-[27%] bottom-0 top-0">share</p>
                            </li>
                            <li class="mb-3 flex justify-center">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank" rel="nofollow">
                                    <img class="w-8 h-8" src="<?php echo get_template_directory_uri() ?>/inc/assets/icons/facebook.svg" alt="facebook">
                                </a>
                            </li>
                            <li class="mb-3 flex justify-center">
                                <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank" rel="nofollow">
                                    <img class="w-8 h-8" src="<?php echo get_template_directory_uri() ?>/inc/assets/icons/x.svg" alt="x">
                                </a>
                            </li>
                            <li class="mb-3 flex justify-center">
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>" target="_blank" rel="nofollow">
                                    <img class="w-8 h-8" src="<?php echo get_template_directory_uri() ?>/inc/assets/icons/linkedin.svg" alt="linkedin">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="common-posts pt-32">
                        <h3 class="leading-tight text-[24px] font-bold text-left mb-4">More similar topics</h3>
                        <a class="pb-4 mb-4 border-b border-[#CBD1EE] text-[#5564AD] block" href="#">
                            Public Cloud: Everything You Should Know
                        </a>
                        <a class="pb-4 mb-4 border-b border-[#CBD1EE] text-[#5564AD] block" href="#">
                            Public Cloud: Everything You Should Know
                        </a>
                        <a class="pb-4 mb-4 border-b border-[#CBD1EE] text-[#5564AD] block" href="#">
                            Public Cloud: Everything You Should Know
                        </a>
                        <a class="pb-4 mb-4 border-b border-[#CBD1EE] text-[#5564AD] block" href="#">
                            Public Cloud: Everything You Should Know
                        </a>
                        <a class="pb-4 mb-4 border-b border-[#CBD1EE] text-[#5564AD] block" href="#">
                            Public Cloud: Everything You Should Know
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
