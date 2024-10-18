<?php
/**
 * Template Name: Homepage
 */

get_header();
// while ( have_posts() ) : the_post();
//     the_content();
// endwhile;
?>
<section class="">
    <div class="container mx-auto">
        <div class="flex py-5">
            <h3 class="text-black text-[1.25rem] Mulish-SemiBold font-bold w-[100px]">New Posts</h3>
            <div class="border-custom"></div>
        </div>
        <div class="grid grid-cols-12 gap-5 py-10 lg:mx-0 mx-5">
            <div class="col-span-4 bg-[#FFF9F9] sm:p-5 p-3 rounded-[10px] text-left">
                <div class="sm:pb-10 pb-5">
                <img
                    class="w-full"
                    src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/dedicated-server-bg.png"
                    alt="dedicated-server"
                />
                </div>
                <p class="text-[#0F132A] Mulish-SemiBold">What Is a Dedicated Server? Understanding the Fundamentals</p>
                <p class="text-[#0F132A] pb-4">Understanding the FundamentalsMuch like many organizations, you probably opted for cloud computing when you first launched your web application, database, or mail server...</p>
                <span class="mb-3 text[#5564AD] Mulish-light text-[13px]">
                    7, September 2024
                </span>
                <span class="mb-3 text[#5564AD] Mulish-light text-[13px]">
                    In Dedicated Server, Cloud Hybrid,
                </span>
            </div>
            <div class="col-span-4 bg-[#FFF9F9] sm:p-5 p-3 rounded-[10px] text-left">
                <div class="sm:pb-10 pb-5">
                <img
                    class="w-full"
                    src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/dedicated-server-bg.png"
                    alt="dedicated-server"
                />
                </div>
                <p class="text-[#0F132A] Mulish-SemiBold">What Is a Dedicated Server? Understanding the Fundamentals</p>
                <p class="text-[#0F132A] pb-4">Understanding the FundamentalsMuch like many organizations, you probably opted for cloud computing when you first launched your web application, database, or mail server...</p>
            </div>
            <div class="col-span-4 bg-[#FFF9F9] sm:p-5 p-3 rounded-[10px] text-left">
                <div class="sm:pb-10 pb-5">
                <img
                    class="w-full"
                    src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/dedicated-server-bg.png"
                    alt="dedicated-server"
                />
                </div>
                <p class="text-[#0F132A] Mulish-SemiBold">What Is a Dedicated Server? Understanding the Fundamentals</p>
                <p class="text-[#0F132A] pb-4">Understanding the FundamentalsMuch like many organizations, you probably opted for cloud computing when you first launched your web application, database, or mail server...</p>
            </div>
        </div>
        <div class="flex py-5">
            <h3 class="text-black text-[1.25rem] Mulish-SemiBold font-bold w-[100px]">Old Posts</h3>
            <div class="border-custom"></div>
        </div>
    </div>
</section>
<?php
get_footer();