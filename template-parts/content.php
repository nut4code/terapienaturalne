<?php
/**
 * The default template for displaying content
 *
 *  Terapie Naturalne
 *
 */
?>

<div class="section-post">
  <div class="container post-bg">
  <hr>
    <div class="col-xs-12 post-area">

        <div class="col-xs-12 post-title">
          <h1><?php the_title(); ?></h1>
        </div>
        <!-- <div class="col-xs-12 post-perm"><?php the_permalink(); ?></div> -->
        <div class="col-xs-12 post-spec"><p>
        <span class="post-spec-author">Autor: <?php the_author(); ?></span> <span class="post-spec-divider">|</span> <span class="entry-date">Data utworzenia: <?php echo get_the_date(); ?></span></p><hr></div>
        <div class="col-xs-12 post-content"><?php the_content( __( 'Continue reading <span class="meta-nav">→</span>', 'terapienaturalne' ) ); ?></div>


    </div>
    <hr>
    </div>
</div>



<!-- <div id="oferta" class="section">
  <div class="col-xs-12">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php the_permalink(); ?>
      <?php the_title(); ?>
      <?php the_content( __( 'Continue reading <span class="meta-nav">→</span>', 'terapienaturalne' ) ); ?>
      <?php
      get_the_category_list( ', ' );
      $tags_list = get_the_tag_list( '', ', ' );
      ?>
  </div>
</div> -->
