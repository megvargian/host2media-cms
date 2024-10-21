<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<section class="bg-[#5564AD] w-full py-12">
    <div class="container mx-auto">
        <footer>
            <div class="grid grid-cols-12 lg:gap-12 gap-5 text-white sm:mx-0 mx-5">
                <div class="lg:col-span-3 col-span-6">
                    <div class="lg:pl-10">
                        <img class="mb-3 sm:w-[75px] sm:h-[43px] w-[50px] h-[29px]" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/footer-logo.svg" alt="logo">
                        <p class="text-[0.5rem] font-light Mulish-light mb-2">Host2Media <br /> Makdesi 2034 1111 <br /> Hamra Beirut 07</p>
                        <p class="text-[0.5rem] font-light Mulish-light mb-2 pt-2">
                            +961 3 821114 <br />
                            Office Hours: M-F,  9 am-16:30 CET
                        </p>
                    </div>
                </div>
                <div class="lg:col-span-3 col-span-6">
                </div>
                <div class="lg:col-span-3 col-span-6">
                </div>
                <div class="lg:col-span-3 col-span-6">
                    <div>
                        <h4 class="font-black Mulish-Black text-[18px] text-white pb-3">Sign up for our newsletter</h4>
                        <p class="text-base Mulish-light text-white pb-5">Subscribe to our newsletter to stay informed about the latest Host2Media solutions, events, exclusive offers, and more!</p>
                        <form action="/">
                            <div class="flex flex-col">
                                <label class="font-bold Mulish-bold text-[14px] text-white text-left" for="email">Email</label>
                                <input class="rounded-md border-2 border-black py-2 text-black Mulish-regular" type="email" name="email" required>
                                <button type="submit" class="px-4 py-2 font-bold Mulish-bold text-[14px] text-white text-left">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>
<section class="bg-white py-3 w-full">
    <div class="flex justify-center">
        <p class="Mulish-light text-[0.6rem]">Copyright © 2024, Host2Media,</p>
    </div>
</section>
</div><!-- #content -->
</div><!-- #page -->
<script>
    jQuery(document).ready(function($) {
    });
</script>
<?php wp_footer(); ?>
</body>
</html>