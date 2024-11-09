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
// get realted posts
// Get the categories of the current post
$categories = get_the_category();

if ($categories) {
    // Get the first category ID
    $list_category_ids = array();
    foreach ($$categories as $cat) {
        array_push($list_category_ids, $cat -> term_id);
    }
    // Define WP_Query arguments
    $args = array(
        'category__in'   => $list_category_ids, // Get posts in the same category
        'post__not_in'   => array(get_the_ID()),  // Exclude the current post
        'posts_per_page' => 5,                    // Number of related posts to display
    );
    $query = new WP_Query($args);
}
// Get the next and previous posts
$next_post = get_next_post();
$previous_post = get_previous_post();
echo "<pre>"; print_r($previous_post -> ID); echo "</pre>";
if ($previous_post != "") {
    $previous_link = get_permalink($previous_post -> ID);
    $previous_title = get_the_title($previous_post -> ID);
} else {
    // If there is no previous post, get the latest post in the category
    $latest_post = new WP_Query(array(
        'posts_per_page' => 1,
        'order'          => 'DESC',
    ));
    if ($latest_post->have_posts()) {
        $latest_post->the_post();
        $previous_link = get_permalink();
        $previous_title = get_the_title();
        wp_reset_postdata();
    }
}
if ($next_post != "") {
    $next_link = get_permalink($next_post -> ID);
    $next_title = get_the_title($next_post -> ID);
} else {
    // If there is no next post, get the oldest post in the category
    $oldest_post = new WP_Query(array(
        'posts_per_page' => 1,
        'order'          => 'ASC',
    ));
    if ($oldest_post->have_posts()) {
        $oldest_post->the_post();
        $next_link = get_permalink();
        $next_title = get_the_title();
        wp_reset_postdata();
    }
}
?>
<div class="single-article-page bg-[#FEFEFE]">
    <section>
        <img class="w-full" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo $title; ?>">
    </section>
    <section class="py-5 md:pt-32 sm:pt-16">
        <div class="container mx-auto">
            <div class="pb-4 lg:mx-0 mx-5">
                <h1 class="leading-tight sm:text-3xl md:text-4xl text-2xl font-bold text-left max-w-2xl"><?php echo $title; ?></h1>
                <p class="text-[14px] pt-3">Posted on: <span class="text-[#5564AD]"><?php echo get_the_date('F j, Y'); ?></span></p>
                <p class="text-[14px]">by: <span class="text-[#5564AD]">Nadim Younes, CEO</span></p>
            </div>
            <div class="grid grid-cols-12 md:gap-10 sm:gap-5 py-4 lg:mx-0 mx-5">
                <div class="md:col-span-9 col-span-12 text-left content-main">
                    <?php the_content(); ?>
                    <div class="py-14 flex justify-between max-w-3xl mx-auto md:flex hidden">
                        <a class="text-[#5564AD]" href="<?php $previous_link; ?>">
                            « <?php echo $previous_title; ?>
                        </a>
                        <a class="text-[#5564AD]" href="<?php echo $next_link; ?>">
                            <?php echo $next_title; ?> »
                        </a>
                    </div>
                </div>
                <div class="md:col-span-3 col-span-12 sm:pt-0 pt-4">
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
                    <?php if($categories){?>
                        <div class="common-posts pt-32">
                            <h3 class="leading-tight text-[24px] Mulish-light font-bold text-left mb-4">More similar topics</h3>
                            <?php
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $post_id = get_the_ID();
                            ?>
                                <a class="pb-4 mb-4 border-b border-[#CBD1EE] text-[#5564AD] block" href="<?php echo get_permalink($post_id); ?>">
                                    <?php echo get_the_title($post_id); ?>
                                </a>
                                <!-- <a class="pb-4 mb-4 border-b border-[#CBD1EE] text-[#5564AD] block" href="#">
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
                                </a> -->
                            <?php
                                    }
                                }
                                wp_reset_postdata();
                            ?>
                        </div>
                    <?php } ?>
                    <div class="py-14 flex justify-between md:max-w-3xl mx-auto md:hidden">
                        <a class="text-[#5564AD]" href="<?php $previous_link; ?>">
                            « <?php echo $previous_title; ?>
                        </a>
                        <a class="text-[#5564AD]" href="<?php echo $next_link; ?>">
                            <?php echo $next_title; ?> »
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
