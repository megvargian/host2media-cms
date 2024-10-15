<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site main_page_wrapper">
	<div id="content" class="site-content">
	<div class="w-full">
    <header>
      <nav>
        <div class="w-full py-3 bg-[#5564ad]">
          <div class="grid grid-cols-12 gap-5">
            <div class="col-span-6 hidden lg:block"></div>
            <div class="col-span-12 lg:col-span-6">
              <ul
                class="flex lg:justify-end justify-center items-center text-white"
              >
                <li class="lg:hidden block sm:mr-8 mr-2">
                  <NuxtLink to="/">
                    <img class="h-6 w-12" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/logo.svg" />
                  </NuxtLink>
                </li>
                <li class="mx-2 Mulish-light text-[0.75rem]">
                  <a href="#"> Blog </a>
                </li>
                <li class="mx-2 Mulish-light text-[0.75rem]">
                  <a href="#"> Knowladge Base </a>
                </li>
                <li class="mx-2 Mulish-light text-[0.75rem]">
                  <a href="#"> Status </a>
                </li>
                <li
                  class="mx-2 Mulish-light font-semibold text-[0.75rem] lg:pr-32"
                >
                  <a href="#"> Customer Portal </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <nav
        class="py-5 flex flex-row justify-start items-center lg:px-16 md:px-16 sm:px-8"
      >
        <NuxtLink to="/">
            <img class="lg:block hidden h-12 w-18" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/logo.svg" />
        </NuxtLink>
        <ul class="basic-2/4 lg:flex hidden font-medium text-sm xl:text-lg pl-8">
          <li class="mx-2">
            <a class="" href="#"> Domains </a>
          </li>
          <li class="mx-2">
            <a class="" href="#"> Website Hosting </a>
          </li>
          <li class="mx-2">
            <a class="" href="#"> Professional Email </a>
          </li>
          <li class="mx-2">
            <a class="" href="#"> Reseller Program </a>
          </li>
          <li class="mx-2">
            <a class="" href="#"> Dev Serices </a>
          </li>
          <li class="mx-2">
            <a class="" href="https://hostmedia.com/contact-us"> Contact us </a>
          </li>
        </ul>
        <button
          class="hamburger hamburger--collapse block lg:mr-0 mr-5 lg:hidden"
          type="button"
        >
          <div class="menu_mobile_nav">
            <div class="hamburger_menu_icon">
              <div class="line bg-[#5564AD]"></div>
              <div class="line bg-[#5564AD] middle_line"></div>
              <div class="line bg-[#5564AD]"></div>
            </div>
          </div>
        </button>
        <div id="menu_mobile" class="menu_on_mobile block lg:hidden h-[100dvh]">
          <div class="menu_on_mobile_wrapper h-[100dvh]">
            <div class="menu_on_mobile_inner_wrapper relative flex justify-center items-center h-[100dvh]">
              <div>
                  <a class="block my-3 page_font animated_menu_el" >
                      <img class="w-[5rem] mx-auto" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/h2m-mob.png" alt="host2media">
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Domains</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Website Hosting</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Professional Email</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Reseller Program</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Dev Serices</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el">
                    <div class="menu_item text-white">Contact US</div>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>

<script>
  jQuery(document).ready(function($) {
    $('.menu_mobile_nav').click(function() {
      $(this).toggleClass('active');
      $('.html, body').toggleClass('hide_scroll');
      $('.menu_on_mobile').toggleClass('active')
    });
  });
</script>