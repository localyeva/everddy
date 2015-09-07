<?php
/*
 * Author: KhangLe
 * Template Name: Service Detail
 * 
 */
get_header();
?>
<section id="detail" class="site-content">
    <div id="fixed-sequence" class="bg detail-head-img part-pad">
        <div class="grid grid-pad bg-height">
            <div class="col-2-3 text-left text-left-head">
                <h1><?php echo get_service_detail_top_text() ?></h1>
                <h3><?php echo get_service_detail_top_description() ?></h3>
            </div>

            <?php get_template_part('part_top_contact') ?>
        </div><!-- grid -->  
    </div><!-- home-cta -->
    <?php
    $args = array(
        'post_type' => 'service-detail',
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
            <a href="<?php echo bloginfo('url') ?>/service-feature" class="btn btn-success square-btn btn-detail-green pad-btn">外国人採用メリット</a>
        </div>
    </div>
    <?php get_template_part('part_bottom_contact') ?>

</section><!-- #content -->
<?php get_footer(); ?>