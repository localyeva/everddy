<?php
/*
 * Author: KhangLe
 * Template Name: Recruit Detail
 * 
 */

global $theme_options;

get_header();
?>


<section id="recruit-detail" class="site-content">
    <div class="grid grid-pad">
        <div class="col-1-1">
            <hr>
            <h2 class="main-title text-center dotted-head">サービスサ</h2>
        </div>
    </div>

    <?php if ($wp_query->have_posts()): ?>
        <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
            <section id="<?php the_ID() ?>">
                <div class="grid grid-pad">
                    <div class="col-1-1">
                        <h2 class="main-title"><?php the_title() ?></h2>
                        <?php the_content() ?>
                    </div>
                </div>

                <div class="grid grid-pad">
                    <?php if (have_rows('block_info')): ?>
                        <?php
                        while (have_rows('block_info')): the_row();
                            $tname = "description_1";
                            $title = get_sub_field('title');
                            if ($title == '企業・求人概要') {
                                $tname = "description_1";
                            } else if ($title == '応募条件') {
                                $tname = "description_2";
                            } else if ($title == '動務・就業規定・その他情報') {
                                $tname = "description_3";
                            }
                            ?>
                            <div class="col-1-1">
                                <p class="tb-title"><?php echo get_sub_field('title') ?></p>
                                <table class="pad table-bordered table-responsive blur-black">
                                    <?php while (have_rows($tname)): the_row() ?>
                                        <tr>
                                            <th><?php echo get_sub_field('sub_title') ?></th>
                                            <td>    
                                                <?php echo get_sub_field('content') ?>                        
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>                
                                </table>                            
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="text-center">
                        <a href="<?php echo home_url()?>/recruit-application" class="btn btn-danger square-btn btn-recruit-apply pad-btn">企業概要はこちら</a>
                    </div>
                    <div class="bottom-pad"></div>
                </div>
            </section>            
        <?php endwhile; ?>
    <?php endif; ?>

</section><!-- #content -->

<?php get_footer(); ?>