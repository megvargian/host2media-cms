<?php
/**
 * Template Name: Homepage
 */

get_header();
// while ( have_posts() ) : the_post();
//     the_content();
// endwhile;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'DESC',
);
$query = new WP_Query($args);

$args_offest = array(
    'posts_per_page' => 6,
    'offset' => 3,  // Skip the latest 3 posts
    'order' => 'DESC',
);
$query_offset =  new WP_Query($args_offest);
?>
<section class="bg-[#FEFEFE]">
    <div class="container mx-auto">
        <div class="flex py-5 lg:mx-0 mx-5">
            <h3 class="text-black sm:text-[1.25rem] text-xs Mulish-SemiBold font-bold" style="white-space: nowrap;">New Posts</h3>
            <div class="border-custom"></div>
        </div>
        <div class="grid grid-cols-12 gap-5 py-10 lg:mx-0 mx-5 md:flex hidden">
            <?php
             if ( $query -> have_posts() ) :
                while ( $query -> have_posts() ) :  $query -> the_post();
                $post_id = get_the_ID();
                $title = get_the_title($post_id);
                $get_post_category = get_the_category(get_the_ID());
                $get_all_custom_fields = get_fields();
            ?>
            <div class="col-span-4 bg-[#FFF9F9] rounded-[10px] text-left">
                <a href="<?php echo get_permalink($post_id);?>" class="bg-[#FFF9F9] custom-single-blog block h-full rounded-[10px]">
                    <div class="sm:pb-10 pb-5">
                        <img
                            class="w-full rounded-t-[10px]"
                            src="<?php echo $get_all_custom_fields['homepage_image_for_top_3']; ?>"
                            alt="<?php echo $title; ?>"
                        />
                    </div>
                    <div class="px-4">
                        <p class="text-[#0F132A] Mulish-bold pb-4 text-2xl">
                            <?php echo $title; ?>
                        </p>
                        <p class="text-[#0F132A] Mulish-Regular pb-4 text-base">
                            <?php echo get_the_excerpt($post_id); ?>
                        </p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            <?php echo get_the_date('F j, Y', $post_id); ?>
                        </p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            <?php
                                $all_cats = '';
                                foreach ($get_post_category as $cat) {
                                    $all_cats = $all_cats . $cat -> name .',';
                                }
                                echo $all_cats;
                            ?>
                        </p>
                    </div>
                </a>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="relative lg:mx-0 mx-5 md:hidden block pb-5">
            <div class="swiper mainSwiper md:hidden flex">
                <div class="swiper-wrapper">
                    <?php
                    if ( $query -> have_posts() ) :
                        while ( $query -> have_posts() ) :  $query -> the_post();
                        $post_id = get_the_ID();
                        $title = get_the_title($post_id);
                        $get_post_category = get_the_category($post_id);
                        $get_all_custom_fields = get_fields();
                    ?>
                    <div class="swiper-slide">
                        <a href="<?php echo get_permalink($post_id); ?>" class="bg-[#FFF9F9] custom-single-blog block h-full rounded-[10px]">
                            <div class="sm:pb-10 pb-5">
                                <img
                                    class="w-full rounded-t-[10px]"
                                    src="<?php echo $get_all_custom_fields['homepage_image_for_top_3']; ?>"
                                    alt="<?php echo $title; ?>"
                                />
                            </div>
                            <div class="px-4">
                                <p class="text-[#0F132A] Mulish-bold pb-4 text-lg">
                                    <?php echo $title; ?>
                                </p>
                                <p class="text-[#0F132A] Mulish-Regular pb-4 text-sm">
                                    <?php echo get_the_excerpt($post_id); ?>
                                </p>
                                <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                                    <?php echo get_the_date('F j, Y', $post_id); ?>
                                </p>
                                <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                                    <?php
                                        $all_cats = "";
                                        foreach ($get_post_category as $cat) {
                                            $all_cats = $all_cats . $cat -> name .",";
                                        }
                                        echo $all_cats;
                                    ?>
                                </p>
                            </div>
                        </a>
                    </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="flex py-5 lg:mx-0 mx-5">
            <h3 class="text-black sm:text-[1.25rem] text-xs Mulish-SemiBold font-bold w-[100px]" style="white-space: nowrap;">Old Posts</h3>
            <div class="border-custom"></div>
        </div>
        <div id="post-container" class="grid grid-cols-12 gap-5 py-10 lg:mx-0 mx-5">
            <?php
             if ( $query_offset -> have_posts() ) :
                while ( $query_offset -> have_posts() ) :  $query_offset -> the_post();
                    $post_id = get_the_ID();
                    $title = get_the_title($post_id);
                    $get_post_category = get_the_category(get_the_ID());
                    $get_all_custom_fields = get_fields();
            ?>
                <div class="sm:col-span-6 col-span-12 bg-[#FFF9F9] rounded-[10px] flex">
                    <a href="<?php echo get_permalink($post_id); ?>" class="bg-[#FFF9F9] custom-single-blog flex h-full rounded-[10px]">
                        <div class="block text-left px-4">
                            <p class="text-[#0F132A] Mulish-bold pb-4 md:text-2xl text-lg">
                                <?php echo $title; ?>
                            </p>
                            <p class="text-[#0F132A] Mulish-Regular pb-4 text-sm">
                                <?php echo get_the_excerpt($post_id); ?>
                            </p>
                            <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                                <?php echo get_the_date('F j, Y', $post_id); ?>
                            </p>
                            <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            <?php
                                $all_cats = '';
                                foreach ($get_post_category as $cat) {
                                    $all_cats = $all_cats . $cat -> name .',';
                                }
                                echo $all_cats;
                                ?>
                            </p>
                        </div>
                        <img
                            class="w-full lg:block hidden"
                            src="<?php echo $get_all_custom_fields['homepage_image']; ?>"
                            alt="<?php echo $title; ?>"
                        />
                    </a>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            <!-- <div class="sm:col-span-6 col-span-12 bg-[#FFF9F9] rounded-[10px] flex">
                <a href="#" class="bg-[#FFF9F9] custom-single-blog flex h-full rounded-[10px]">
                    <div class="block text-left px-4">
                        <p class="text-[#0F132A] Mulish-bold pb-4 md:text-2xl text-lg">What Is a Dedicated Server? Understanding the Fundamentals</p>
                        <p class="text-[#0F132A] Mulish-Regular pb-4 text-sm">Understanding the FundamentalsMuch like many organizations, you probably opted for cloud computing when you first launched your web application, database, or mail server...</p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            7, September 2024
                        </p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            In Dedicated Server, Cloud Hybrid,
                        </p>
                    </div>
                    <img
                        class="w-full lg:block hidden"
                        src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/dedicated-server-bg-2.png"
                        alt="dedicated-server"
                    />
                </a>
            </div>
            <div class="sm:col-span-6 col-span-12 bg-[#FFF9F9] rounded-[10px] flex">
                <a href="#" class="bg-[#FFF9F9] custom-single-blog flex h-full rounded-[10px]">
                    <div class="block text-left px-4">
                        <p class="text-[#0F132A] Mulish-bold pb-4 md:text-2xl text-lg">What Is a Dedicated Server? Understanding the Fundamentals</p>
                        <p class="text-[#0F132A] Mulish-Regular pb-4 text-sm">Understanding the FundamentalsMuch like many organizations, you probably opted for cloud computing when you first launched your web application, database, or mail server...</p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            7, September 2024
                        </p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            In Dedicated Server, Cloud Hybrid,
                        </p>
                    </div>
                    <img
                        class="w-full lg:block hidden"
                        src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/dedicated-server-bg-2.png"
                        alt="dedicated-server"
                    />
                </a>
            </div>
            <div class="sm:col-span-6 col-span-12 bg-[#FFF9F9] rounded-[10px] flex">
                <a href="#" class="bg-[#FFF9F9] custom-single-blog flex h-full rounded-[10px]">
                    <div class="block text-left px-4">
                        <p class="text-[#0F132A] Mulish-bold pb-4 md:text-2xl text-lg">What Is a Dedicated Server? Understanding the Fundamentals</p>
                        <p class="text-[#0F132A] Mulish-Regular pb-4 text-sm">Understanding the FundamentalsMuch like many organizations, you probably opted for cloud computing when you first launched your web application, database, or mail server...</p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            7, September 2024
                        </p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            In Dedicated Server, Cloud Hybrid,
                        </p>
                    </div>
                    <img
                        class="w-full lg:block hidden"
                        src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/dedicated-server-bg-2.png"
                        alt="dedicated-server"
                    />
                </a>
            </div>
            <div class="sm:col-span-6 col-span-12 bg-[#FFF9F9] rounded-[10px] flex">
                <a href="#" class="bg-[#FFF9F9] custom-single-blog flex h-full rounded-[10px]">
                    <div class="block text-left px-4">
                        <p class="text-[#0F132A] Mulish-bold pb-4 md:text-2xl text-lg">What Is a Dedicated Server? Understanding the Fundamentals</p>
                        <p class="text-[#0F132A] Mulish-Regular pb-4 text-sm">Understanding the FundamentalsMuch like many organizations, you probably opted for cloud computing when you first launched your web application, database, or mail server...</p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            7, September 2024
                        </p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            In Dedicated Server, Cloud Hybrid,
                        </p>
                    </div>
                    <img
                        class="w-full lg:block hidden"
                        src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/dedicated-server-bg-2.png"
                        alt="dedicated-server"
                    />
                </a>
            </div>
            <div class="sm:col-span-6 col-span-12 bg-[#FFF9F9] rounded-[10px] flex">
                <a href="#" class="bg-[#FFF9F9] custom-single-blog flex h-full rounded-[10px]">
                    <div class="block text-left px-4">
                        <p class="text-[#0F132A] Mulish-bold pb-4 md:text-2xl text-lg">What Is a Dedicated Server? Understanding the Fundamentals</p>
                        <p class="text-[#0F132A] Mulish-Regular pb-4 text-sm">Understanding the FundamentalsMuch like many organizations, you probably opted for cloud computing when you first launched your web application, database, or mail server...</p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            7, September 2024
                        </p>
                        <p class="mb-3 text-[#5564AD] Mulish-light text-xs block">
                            In Dedicated Server, Cloud Hybrid,
                        </p>
                    </div>
                    <img
                        class="w-full lg:block hidden"
                        src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/dedicated-server-bg-2.png"
                        alt="dedicated-server"
                    />
                </a>
            </div> -->
        </div>
        <div class="text-left pb-16 lg:mx-0 mx-5">
            <button id="load-more-button" class="rounded-[10px] bg-[#5564AD] text-white text-sm font-bold py-4 px-8 Mulish-ExtraBold">
                Load More
            </button>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        var page = 2; // Set the initial page number
        // Function to load more posts via AJAX
        function loadMorePosts() {
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'load_more_posts',
                    page: page,
                },
                success: function(response) {
                    if (response === ''){
                        $('#load-more-button').hide();
                    }
                    if (response) {
                        $('#post-container').append(response);
                        page++;
                    } else {
                        // No more posts to load
                        $('#load-more-button').hide();
                    }
                },
            });
        }
        // Trigger the AJAX call when the button is clicked
        $('#load-more-button').click(function() {
            loadMorePosts();
        });
        var swiper = new Swiper(".mainSwiper", {
            slidesPerView: 1.5,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
        });
    })
</script>
<?php
get_footer();