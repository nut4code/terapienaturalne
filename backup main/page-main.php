<?php /* Template Name: main */ ?>

<?php get_header(); ?>
    <div id="home" class="section">

        <div class="home-carousel" class="row">
        <?php /*repeater start*/ if(have_rows('home-bgs')): ?>
            <?php /* repeater sub_fields*/
                while(have_rows('home-bgs')): the_row(); ?>
                    <!-- sub_fields -->
                    <?php if( get_sub_field('home-bg')): ?>
            <div id="home-slick-img-1" class="home-slick-item" style="background-image: url(<?php the_sub_field('home-bg'); ?>);">
            </div>
            <!-- sub_fields end -->
            <?php endif; ?>
            <?php endwhile;?>
            <?php endif; ?>
        </div>

        <div id="home-welcome-txt" class="col-xs-12">
            <?php the_field('home-welcome-txt'); ?>
        </div>
        <div id="home-btn-down-div" class="col-xs-12">
            <a id="home-btn-down" type="button" class="btn btn-lg btn-secondary-outline"><?php the_field('home-welcome-btn-txt'); ?></a>
        </div>
    </div>

<div id="offer" class="section">

    <?php

// check if the flexible content field has rows of data
if( have_rows('offer') ):

     // loop through the rows of data
    while ( have_rows('offer') ) : the_row();

        if( get_row_layout() == 'offer-specific' ): ?>
        <div class="subsection">
            <div class="offer-banner" style="background-image: url(<?php the_sub_field('offer-banner'); ?>)">
                <div class="offer-txt-area">
                    <div class="offer-name col-xs-12"><h1><?php the_sub_field('offer-name'); ?></h1></div>
                </div>
            </div>

            <div class="col-xs-12">
            <hr>
            <?php the_sub_field('offer-description'); ?></div>

            <div class="col-xs-12">
            <?php $images = get_sub_field('offer-gallery');
                if ($images): ?>
                <div class="offer-carousel" class="col-xs-12">
                <?php foreach($images as $image): ?>
                    <div class="offer-slick-item">
                        <img class="img-responsive" src="<?php echo $image['sizes']['medium_large']; ?>"
                        />
                    </div>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
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

 <div id="about" class="section" style="background: #fff url("<?php the_field('about-bg'); ?>") no-repeat cover center center; ">
        <div id="about-container" class="container">
            <div class="row">
                <div id="about-face" class="col-xs-12 col-md-5">
                    <img class="img-responsive" alt="GrzegorzMarc" src="<?php the_field('about-img'); ?>">
                </div>
                <div id="about-text" class="col-xs-12 col-md-7">
                    <h1><?php the_field('about-name'); ?></h1>
                    <h5><?php the_field('about-profession'); ?></h5>
                    <hr>
                        <?php the_field('about-txt'); ?>
                    <hr>
                </div>
            </div>
        </div>
    </div>

<div id="contact" class="section" style="background-color: green;">

    </div>

<?php get_footer(); ?>
