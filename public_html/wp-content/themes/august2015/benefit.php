<?php
/*
 * Author: KhangLe
 * Template Name: Benefit
 * 
 */
get_header();
?>
<section id="benefit" class="site-content">
    <div id="fixed-sequence" class="bg benefit-head-img part-pad">
        <div class="grid grid-pad bg-height">
            <div class="col-2-3 text-left text-left-head">
                <h1><?php echo get_benefit_top_text() ?></h1>
                <h3><?php echo get_benefit_top_description() ?></h3>
            </div>

            <?php get_template_part('part_top_contact') ?>

            <div class="col-1-1 text-center btn-xs-headbox"><a href="#" class="btn btn-primary square-btn pad-btn">お問い合わせはこちら</a></div>
        </div><!-- grid -->  
    </div><!-- home-cta -->
    <?php
    $args = array(
        'post_type' => 'benefit',
        'posts_per_page' => -1,
        'orderby' => array('date' => 'ASC'),
    );
    $loop = new WP_Query($args);
    ?>
    <?php if ($loop->have_posts()): $xid=0; $num_posts = count($loop->posts)?>
        <?php while ($loop->have_posts()): $loop->the_post();?>
            <div class="grid grid-pad <?php echo $xid==$num_posts-1?'last-part-pad':'part-pad'?>" id='<?php echo $xid==0?'part0':'detail-part'.$xid ?>'>
                <div class="col-1-1">
                    <h1 class="number-title">
                        <?php if(get_field('image_number') != ''){?>
                        <img src='<?php echo get_field('image_number') ?>' class='img-pad'/>
                        <?php }?>
                        <?php the_title() ?>
                    </h1>    
                    <?php echo get_field('content') ?>
                </div>                
            </div>
        <?php $xid++; endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata() ?>

    <div class="grid grid-pad">
        <div class="col-1-1 text-center">
            <a href="<?php echo bloginfo('url') ?>/profile" class="btn btn-success square-btn btn-detail-green pad-btn">企業概要はこちら</a>
        </div>
    </div>
    <?php get_template_part('part_bottom_contact') ?>

</section><!-- #content -->
<?php get_footer(); ?>