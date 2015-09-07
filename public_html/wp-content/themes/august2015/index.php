<?php
/*
 * Author: KhangLe
 * Template Name: Index
 * 
 */
get_header();
?>

<section id="content" class="site-content">
    <div id="fixed-sequence" class="bg head-img">
        <div class="grid grid-pad bg-height">
            <div class="col-2-3 text-left text-left-head">
                <h1><?php echo get_top_text() ?></h1>
                <?php echo get_top_descript() ?>
            </div>

            <?php get_template_part('part_top_contact') ?>            
        </div><!-- grid -->  
    </div><!-- home-cta -->


    <div class="home-cta service-padding">
        <div class="grid grid-pad">
            <div class="col-1-1 text-center">
                <h2 class="main-title"><?php echo get_service_text() ?></h2>
                <?php echo get_service_descript() ?>
            </div><!-- col-10-12 -->
        </div><!-- grid -->  
    </div><!-- home-cta -->

    <div class="home-cta">
        <div class="grid grid-pad">

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
                                    <a href="<?php echo bloginfo('url') ?>/<?php echo get_field('redirect_url') ?>">
                                        <img class="attachment-home-blog wp-post-image img-responsive" src="<?php echo get_field('image') ?>" alt="<?php echo get_the_title() ?>" />
                                    </a>
                                </header>
                            </article>
                            <h4>
                                <a href="<?php echo bloginfo('url') ?>/<?php echo get_field('redirect_url') ?>" class="green-text"><?php the_title() ?></a>
                            </h4>
                            <p class="blur-black">
                                <?php echo get_field('short_description') ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>

        </div><!-- grid -->  
    </div><!-- home-cta -->

    <div class="home-cta service-padding">
        <div class="grid grid-pad">
            <div class="col-1-1 text-center">
                <h2 class="main-title"><?php echo get_benefit_service_text() ?></h2>
            </div><!-- col-10-12 -->
        </div><!-- grid -->  
    </div><!-- home-cta -->

    <?php
    $args = array(
        'post_type' => 'service-merit',
        'posts_per_page' => 1,
        'orderby' => array('date' => 'DESC'),
    );
    $loop = new WP_Query($args);
    ?>
    <?php if ($loop->have_posts()): ?>
        <?php while ($loop->have_posts()): $loop->the_post(); ?>
            <div class="home-services home-service-padding">
                <div class="grid home-divider-1">
                    <div class="col-1-2"> 
                        <aside id="text-4" class="widget widget_text">			
                            <div class="textwidget">
                                <img class="aligncenter img-responsive" src="<?php echo get_field('image') ?>" width="82%" />
                            </div>
                        </aside>        		
                    </div><!-- col-1-2 -->

                    <div class = "col-1-2">
                        <aside id = "text-3" class = "widget widget_text">
                            <div class = "textwidget">
                                <?php echo get_field('content') ?>
                                
                                <?php if(get_service_button_status()): ?>
                                <div class = "home-point button">
                                    <a href="<?php echo bloginfo('url') ?>/<?php echo get_field('redirect_url') ?>">
                                        <button class = "btn btn-warning btn-service">
                                            <span>詳細はこちら</span>
                                            <img src = "<?php echo get_template_directory_uri() ?>/img/arrow.png"/>
                                        </button>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </aside>
                    </div><!--col-1-2 -->  

                    <?php // get_template_part('part_service_benefits') ?>

                </div><!-- grid -->

            </div><!-- home-services -->
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata() ?>
            
    <div class="bg foot-img">
        <div class="grid grid-pad bg-height">
            <div class="col-1-1 text-center text-pos">
                <h1><?php echo get_benefit_foreign_text() ?></h1>
                <hr/>
                <?php echo get_benefit_foreign_descript() ?>
                <a href="<?php echo bloginfo('url') ?>/benefit">
                    <button class="btn btn-foot">
                        <span>詳細はこちら</span>
                        <i class="eve-arrow"></i>
                    </button>
                </a>
            </div>

        </div><!-- grid -->  
    </div><!-- home-cta -->   

    <?php get_template_part('part_bottom_contact') ?>

</section><!-- #content -->

<?php get_footer(); ?>