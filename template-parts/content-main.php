<?php
/**
 * The default template for displaying loop content
 *
 *  Terapie Naturalne
 *
 */
?>

<?php $author_id=$post->post_author; ?>

<div class="card col-xs-12 col-lg-4">

<!--   <a href="<?php echo catch_that_image() ?>" rel="lightbox"><img class="card-img-top img-responsive" src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>"> -->
  <!-- <a href="<?php echo catch_that_image() ?>" rel="lightbox"><div class="card-img-top" style="background:url('<?php echo catch_that_image() ?>') no-repeat cover center center;"></div></a> -->
  <div class="card-img-top-cover">
    <a href="<?php echo get_permalink(); ?>"><img class="card-img-top img-responsive" src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>">
  </a></div>
  <div class="card-block">
      <h4 class="card-title"><?php the_title(); ?></h4>
      <span class="card-spec small">Autor: <?php echo the_author_meta( 'user_nicename', $author_id ); ?> | Data: <?php echo get_the_date(); ?></span>
      <hr>
     <!--  <p class="card-text"><?php echo $post->post_content; ?></p> -->
      <blockquote class="card-text">
      <?php echo $my_excerpt = fr_excerpt_by_id($post_id, 40, FALSE);

  // $post_id is the id of the desired post. We want an excerpt of up to 40 words, with <p> and <br /> tags stripped.

  echo '<meta property="og:description" content="' . $my_excerpt . '" />';
  // example usage for an Open Graph description tag
  ?>
      </blockquote>
      <a class="button" role="button" href="<?php echo get_permalink(); ?>">Czytaj dalej...</a>
      <hr>
  </div>
</div>










