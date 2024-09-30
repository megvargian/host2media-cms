<?php
/**
 * Template Name: Homepage
 */

get_header();
while ( have_posts() ) : the_post();
    the_content();
endwhile;
echo 'test';
get_footer();