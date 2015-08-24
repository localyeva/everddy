<?php
/*
 * Author: KhangLe
 * Template Name: Service Feature
 * 
 */
get_header();
?>

<section id="detail" class="site-content">
    <div id="fixed-sequence" class="bg merit-head-img part-pad">
        <div class="grid grid-pad bg-height">
            <div class="col-2-3 text-left text-left-head">
                <h1><?php echo get_service_feature_top_text() ?></h1>
                <h3><?php echo get_service_feature_top_description() ?></h3>
            </div>

            <?php get_template_part('part_top_contact') ?>

            <div class="col-1-1 text-center btn-xs-headbox"><a href="#" class="btn btn-primary square-btn pad-btn">お問い合わせはこちら</a></div>
        </div><!-- grid -->  
    </div><!-- home-cta -->
    
    <?php
    $args = array(
        'post_type' => 'service-feature',
        'posts_per_page' => -1,
        'orderby' => array('date' => 'ASC'),
    );
    $loop = new WP_Query($args);
    ?>
    <?php
    if ($loop->have_posts()): $xid = 1;
        $num_posts = count($loop->posts)
        ?>
        <?php while ($loop->have_posts()): $loop->the_post(); ?>
            <div class="grid grid-pad <?php echo $xid == $num_posts?'last-part-pad' : 'part-pad' ?>" id='<?php echo $xid == 0 ? 'part0' : 'part' . $xid ?>'>
                <div class="col-1-1">
                    <h1 class="number-title">
                        <?php if (!empty(get_field('image_number'))) { ?>
                            <img src='<?php echo get_field('image_number') ?>' class='img-pad'/>
                        <?php } ?>
                        <?php the_title() ?>
                    </h1>    
                    <?php echo get_field('content') ?>
                </div>
                
                <?php if (have_rows('features')): ?>
                    <?php while (have_rows('features')) : the_row(); ?>
                        <div class="col-1-1">
                            <?php echo get_sub_field('title') ?>
                            <?php echo get_sub_field('description') ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <?php
            $xid++;
        endwhile;
        ?>
    <?php endif; ?>
    <?php wp_reset_postdata() ?>

    <?php get_template_part('part_bottom_contact') ?>

</section><!-- #content -->
<?php get_footer(); ?>