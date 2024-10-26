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
	<div class="w-full bg-[#FEFEFE]">
    <header>
      <nav>
        <div class="w-full py-2 bg-[#5564AD]">
          <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-5">
              <div class="col-span-6">
                <a href="<?php echo get_home_url(); ?>">
                  <img class="w-24" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/blog-logo.png" alt="host2mediaBlog">
                </a>
              </div>
              <div class="col-span-6 flex items-center justify-end">
                <ul
                  class="flex justify-end items-center text-white"
                >
                  <li class="mx-2 Mulish-light text-[0.75rem]">
                    <a href="https://host2media.com"> Host2Media.com </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <nav
        class="py-5 flex flex-row justify-center items-center lg:px-16 md:px-16 sm:px-8"
      >
        <ul class="basic-2/4 lg:flex items-center hidden text-sm xl:text-lg">
          <li class="mx-3">
            <a class="" href="#"> Services </a>
          </li>
          <li class="mx-3">
            <a class="" href="#"> Customers </a>
          </li>
          <li class="mx-3">
            <a class="" href="#"> Industries </a>
          </li>
          <li class="mx-3">
            <a class="" href="#"> Security </a>
          </li>
          <li class="mx-3">
            <a class="" href="#"> Community </a>
          </li>
          <li class="mx-3">
            <form action="/">
              <div class="relative custom-search-form">
                <input type="text" required class="border rounded Mulish-light text-sm px-2 py-2 w-full pr-8" placeholder="Search for a topic...">
                <button type="submit" class="absolute right-[6px] top-[20%]">
                  <img class="w-6" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/search-black.svg" alt="search">
                </button>
              </div>
            </form>
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
                    <div class="menu_item text-white">Services</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Customers</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Industries</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Security</div>
                  </a>
                  <a class="block my-3 page_font animated_menu_el" href="#">
                    <div class="menu_item text-white">Community</div>
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