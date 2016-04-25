<?php /* Template Name: main */ ?>

<?php get_header(); ?>
<?php get_template_part('template-parts/nav');?>
    <div id="strona-domowa" class="section" style="background-image: url(<?php the_field('home-bg'); ?>);">

            <div id="home-welcome-txt" class="col-xs-12"><h1><?php the_field('home-welcome-txt'); ?></h1></div>

            <div class="container">

                <div id="home-offers" class="row">
                    <?php
                        if( have_rows('home-offers') ):
                            while ( have_rows('home-offers') ) : the_row(); ?>

                                <div class="home-offer col-xs-12 col-md-4">
                                    <a href="#<?php the_sub_field('home-offers-link'); ?>" rel="scrollId">
                                    <div class="home-offers-image" style="background-image: url('<?php the_sub_field('home-offers-image'); ?>')">
                                        <div class="home-offers-name col-xs-12"><h2><?php the_sub_field('home-offers-name'); ?></h2>
                                        </div>
                                    </div>
                                     </a>
                                </div>

                        <?php   endwhile;
                        else :
                            // no rows found
                        endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>

<div id="oferta" class="section">
<div class="col-xs-12"><hr></div>
    <?php
if( have_rows('offer') ):
    while ( have_rows('offer') ) : the_row();
        if( get_row_layout() == 'offer-specific' ): ?>
        <div id="<?php the_sub_field('offer-id'); ?>" class="subsection">
            <div class="offer-banner" style="background-image: url(<?php the_sub_field('offer-banner'); ?>)">
                    <div class="offer-name col-xs-12"><h1><?php the_sub_field('offer-name'); ?></h1></div>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
            <div id="offer-description-row" class="row">
                <!-- <div id="offer-description-col" class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-1">
                <?php the_sub_field('offer-description'); ?>
                </div> -->

                <?php if( get_sub_field('offer-addition') ): ?>
                    <div id="offer-description-col" class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-2">
                    <?php the_sub_field('offer-description'); ?>
                    </div>
                    <?php else: ?>
                        <div id="offer-description-col" class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                    <?php the_sub_field('offer-description'); ?>
                    </div>
                    <?php endif; ?>

                <div id="offer-addition" class="col-xs-12 col-lg-2">

                         <?php if( have_rows('offer-addition') ): ?>
                            <h3>Zobacz również</h3>
                            <hr>
                            <div class="col-xs-12">
                            <?php while ( have_rows('offer-addition') ) : the_row(); ?>

                                <div class="offer-addition col-xs-12">
                                    <a href="<?php the_sub_field('offer-addition-link-url'); ?>">
                                    <div class="offer-addition-image" style="background-image: url('<?php the_sub_field('offer-addition-image'); ?>')">
                                        <div class="offer-addition-name col-xs-12"><h4><?php the_sub_field('offer-addition-name'); ?></h4>
                                        </div>
                                    </div>
                                     </a>
                                </div>

                        <?php   endwhile; ?>
                        </div>
                        <?php else :
                            // no rows found
                        endif; ?>

                </div>
            </div>
            <div class="col-xs-12">
            <?php $images = get_sub_field('offer-gallery');
                if ($images): ?>
                <div class="offer-carousel" class="col-xs-12">
                <?php foreach($images as $image): ?>
                    <div class="offer-slick-item">
                        <a href="<?php echo $image['sizes']['medium_large']; ?>" rel="lightbox"><img class="img-responsive" src="<?php echo $image['sizes']['medium_large']; ?>"
                        /></a>
                    </div>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
            </div>
                <div class="col-xs-12">
                    <hr>
                </div>
        </div>
        <?php elseif( get_row_layout() == 'download' ):
            $file = get_sub_field('file');
        endif;
    endwhile;
else :
    // no layouts found
endif;
?>

</div>

 <div id="o-mnie" class="section" style="background: #fff url("<?php the_field('about-bg'); ?>") no-repeat cover center center; ">
        <div id="about-container" class="container">
            <div class="row">

                <div id="about-face" class="col-xs-12 col-md-5">
                    <img class="img-responsive" alt="GrzegorzMarc" src="<?php the_field('about-img'); ?>">
                </div>
                <div id="about-text" class="col-xs-12 col-md-7">
                    <h1><?php the_field('about-name'); ?></h1>
                    <h5 class="text-success"><?php the_field('about-profession'); ?></h5>
                    <hr>
                        <span class="text-muted"><?php the_field('about-txt'); ?></span>
                    <hr>
                </div>
            </div>
        </div>
    </div>
<!--  -->
<div id="blog" class="section">
    <div class="container">

        <h1 class="text-success"><?php the_field('blog-title'); ?></h1>
        <h3 class="text-info"><?php the_field('blog-latest-posts'); ?></h3>
        <hr>
        <div class="row">
                <div class="card-deck col-xs-12">

                    <?php
                     global $post;
                     $myposts = get_posts('numberposts=3&category=1');
                     foreach($myposts as $post) :
                     ?>
                    <?php get_template_part('template-parts/content-main', get_post_format()); ?>

                        <?php
                        wp_reset_postdata();
                        $post = $temp;
                        ?>
                     <?php endforeach; ?>
                    <?php wp_reset_query(); // Restore global post data stomped by the_post(). ?>
                </div>
    </div>
    <br>


        <h3 class="text-info"><?php the_field('blog-other-posts'); ?></h3>
        <hr>
        <ul>
<?php
           global $post;
           $myposts = get_posts('numberposts=10&category=1&offset=3');
           foreach($myposts as $post) :
           ?>

          <li><h5><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a> | <?php echo get_the_date(); ?></h5></li>

              <?php
              wp_reset_postdata();
              $post = $temp;
              ?>
           <?php endforeach; ?>
           <?php wp_reset_postdata(); ?>
        </ul>
        <hr>
    </div>
</div>
        <div id="kontakt" class="section">
            <div class="container">
                <div class="row">
                <!-- info -->
                    <div id="contact-info-container" class="col-xs-12 col-md-6">
                        <h3><?php the_field('contact-info-title');?></h3>
                    <div id="contact-info-content">
                        <span class="fa-stack text-primary">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span><br><?php the_field('contact-info-phone');?>
                        <br>
                        <a href="mailto:<?php the_field('contact-info-email');?>">

                                <span class="fa-stack text-success">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                </span><br><?php the_field('contact-info-email');?>
                        </a>
                        <br>
                        <br>
                        <span class="fa-stack text-danger">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span><br><?php the_field('contact-info-address');?>
                        <br>
                        <span class="fa-stack text-warning">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                                </span><br><?php the_field('contact-info-opening-hours');?>
                    </div>
                </div>
                    <!-- form -->
                    <div id="contact-form-container" class="col-xs-12 col-md-6">
                    <h3><?php the_field('contact-form-title');?></h3>

                            <div id="contact-form-content" class="contact-form col-xs-12">
                                <?php echo do_shortcode( '[contact-form-7 id="179" title="Formularz"]' ); ?>
                            </div>

                    </div>
                </div>
                </div>
                <!-- <div class="row"> -->
                    <!-- form -->
                    <div id="contact-google-map-container">

                        <h3><?php the_field('contact-google-map-title');?></h3>

                    <!-- <div id="contact-google-map-content" class="col-xs-12"> -->

                       <?php

                            $location = get_field('gmap');

                            if( !empty($location) ):
                            ?>
                            <div class="acf-map">
                                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                            </div>
                            <?php endif; ?>


                        <!-- </div> -->
                    </div>
                <!-- </div> -->

        </div>

<?php get_footer(); ?>
