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
                    <div>
                        <p class="text-lg font-black pb-3">Links</p>
                        <ul>
                            <li class="sm:text-[0.75rem] text-sm font-light mb-2">
                                <a>
                                    Customer Portal
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Status
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Host2Media Blog
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Knowladge Base
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-3 col-span-6">
                    <div>
                        <p class="text-lg font-black pb-3">Products</p>
                        <ul>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Website Hosting
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Domain name
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    VPS
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Professional Email
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Dev Services
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Reseller & Affiliate Program
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-3 col-span-6">
                    <div>
                        <p class="text-lg font-black pb-3">Legal</p>
                        <ul>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Terms Of Service
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Cookie Settings
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Acceptable Use Policy
                                </a>
                            </li>
                            <li class="sm:text-[0.75rem] sm:leading-4 text-sm font-light mb-2">
                                <a>
                                    Report Abuse
                                </a>
                            </li>
                        </ul>
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