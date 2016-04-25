<?php get_header();

get_template_part('template-parts/nav');

//post loop
if ( have_posts() ) :
// start the loop
  while ( have_posts() ) : the_post();

  get_template_part('template-parts/content', get_post_format());

  endwhile;

  else :
    get_template_part('content', none);
  endif;

get_footer(); ?>
