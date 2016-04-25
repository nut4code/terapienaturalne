<?php /* Template Name: page */ ?>

<?php get_header(); ?>
<?php get_template_part('template-parts/nav'); ?>

<div id="page" class="section">

<?php
// check if the flexible content field has rows of data
if( have_rows('offer') ):

     // loop through the rows of data
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

<?php get_footer(); ?>
