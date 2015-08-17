<?php
/*
 * Author: KhangLe
 * Template Name: Index
 * 
 */
get_header();
?>

<section id="content" class="site-content">
    <div class="bg head-img">
        <div class="grid grid-pad bg-height">
            <div class="col-2-3 text-left text-left-head">
                <h1><?php echo get_top_text() ?></h1>
                <?php echo get_top_descript() ?>
            </div>

            <div class="col-1-3 push-right contact-box">

                <div class="col-1-1">
                    <h2 class='pad'><?php echo get_contact_text() ?></h2>
                    <h4>人材をお探しの企業様</h4>
                    <p class='pad'><a href="#" class="btn btn-primary square-btn pad-btn">お問い合わせはこちら</a></p>
                    <h4>日本でお仕事をお探しの方</h4>
                    <p class='pad'><a href="#" class="btn btn-warning square-btn pad-btn btn-contact-width">ご相談はこちら</a></p>
                    <h4>日本国外でお仕事をお探しの方</h4>
                    <p class='pad'><a href="#" class="btn btn-primary square-btn pad-btn btn-contact-width">ご相談はこちら</a></p>
                    <h3>Tel: <?php echo $theme_options['ct_com_telephone'] ?></h3>
                </div>
            </div>

            <div class="col-1-1 text-center btn-xs-headbox"><a href="#" class="btn btn-primary square-btn pad-btn">お問い合わせはこちら</a></div>
        </div><!-- grid -->  
    </div><!-- home-cta -->


    <div class="home-cta service-padding">
        <div class="grid grid-pad">
            <div class="col-1-1 text-center">
                <h2><?php echo get_service_text() ?></h2>
                <?php echo get_service_descript() ?>
            </div><!-- col-10-12 -->
        </div><!-- grid -->  
    </div><!-- home-cta -->

    <div class="home-cta">
        <div class=" grid">

            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => 4,
                'orderby' => array('date' => 'ASC'),
            );
            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()): ?>
                <?php while ($loop->have_posts()): $loop->the_post(); ?>
                    <div class="col-1-4">
                        <div class="home-blog">
                            <article id="post-12" class="post-12 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                                <header class="home-entry-header">
                                    <a href="javascript:void(0)">
                                        <img class="attachment-home-blog wp-post-image img-responsive" width="251" height="303" src="<?php echo get_field('image') ?>" />
                                    </a>
                                </header>
                            </article>
                            <h4><?php the_title() ?></h4>
                            <p class="blur-black">
                                <?php echo get_field('short_description') ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            
        </div><!-- grid -->  
    </div><!-- home-cta -->

    <div class="home-cta service-padding">
        <div class="grid grid-pad">
            <div class="col-1-1 text-center">
                <h2><?php echo get_benefit_service_text() ?></h2>
            </div><!-- col-10-12 -->
        </div><!-- grid -->  
    </div><!-- home-cta -->

    <div class="home-services home-service-padding">
        <div class="grid home-divider-1">
            <div class="col-1-2"> 
                <aside id="text-4" class="widget widget_text">			
                    <div class="textwidget">
                        <img class="aligncenter img-responsive" src="<?php echo get_benefit_service_image() ?>" width="82%" />
                    </div>
                </aside>        		
            </div><!-- col-1-2 -->

            <?php get_template_part('part_service_benefits') ?>

        </div><!-- grid -->

    </div><!-- home-services -->

    <div class="bg foot-img">
        <div class="grid grid-pad bg-height">
            <div class="col-1-1 text-center text-pos">
                <h1><?php echo get_benefit_foreign_text() ?></h1>
                <hr/>
                <?php echo get_benefit_foreign_descript() ?>
                <a>
                    <button class="btn btn-foot">
                        <span>詳細はこちら</span>
                        <i class="eve-arrow"></i>
                    </button>
                </a>
            </div>

        </div><!-- grid -->  
    </div><!-- home-cta -->   

    <div class="home-cta padding-cta"> 
        <div class="grid grid-pad">
            <div class="col-1-1 text-center">
                <h2><?php echo get_contact_text() ?></h2>
            </div><!-- col-10-12 -->                        
        </div><!-- grid -->
        <div class="grid grid-pad">
            <div class="col-1-1 text-center">
                <?php echo get_contact_descript() ?>
            </div><!-- col-10-12 -->                        
        </div><!-- grid -->
        <div class="grid grid-pad">                        
            <div class="col-1-1 text-center">
                <a href="#" class="btn btn-primary square-btn btn-large-text pad-btn" style="margin-right:20px">人材をお探しの企業様</a>                                        
                <a href="#" class="btn btn-warning square-btn btn-large-text pad-btn">お仕事をお探しの方</a>
            </div><!-- col-2-12 -->
        </div><!-- grid -->
    </div> <!-- home-cta --> 



</section><!-- #content -->

<?php get_footer(); ?>