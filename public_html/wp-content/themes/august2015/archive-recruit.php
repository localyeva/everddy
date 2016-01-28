<?php
/*
 * Author: KhangLe
 * 
 */

global $theme_options;

get_header();
?>

<section id="recruit-detail" class="site-content">
    <div class="grid grid-pad">
        <div class="col-1-1">
            <hr>
            <h2 class="main-title text-center dotted-head">求人情報</h2>
        </div>
    </div>

    <?php if ($wp_query->have_posts()): ?>
        <?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
            <section id="<?php the_ID() ?>">
                <div class="grid grid-pad">
                    <div class="col-1-1">
                        <h2 class="main-title"><?php the_title() ?></h2>
                        <p class="sub-title"><?php echo get_field('sub_title'); ?></p>
                        <?php the_content() ?>
                    </div>
                </div>

                <div class="grid grid-pad">
                    <?php
                    $job_no = "-1";
                    $displayed = false;
                    if (have_rows('block_info')):
                        ?>
                        <?php
                        while (have_rows('block_info')): the_row();
                            $tname = "description_1";
                            $title = get_sub_field('title');
                            if ($title == '企業・求人概要') {
                                $tname = "description_1";
                            } else if ($title == '応募条件') {
                                $tname = "description_2";
                            } else if ($title == '勤務・就業規定・その他情報') {
                                $tname = "description_3";
                            } else if ($title == '募集要項') {
                                $tname = "description_4";
                            }
                            ?>
                            <div class="col-1-1">
                                <p class="tb-title"><?php echo get_sub_field('title') ?></p>
                                <table class="pad table-bordered table-responsive blur-black">
                                    <?php while (have_rows($tname)): the_row() ?>
                                        <?php
                                        if ($title == '募集要項' && !$displayed):
                                            ?>
                                            <tr>
                                                <th>求人No</th>
                                                <td>
                                                    <?php
                                                    $job_no = get_field('job_no');
                                                    echo get_field('job_no');
                                                    $displayed = TRUE;
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
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
                        <?php
                    endif;
                    $job_no = empty($job_no) ? "-1" : $job_no;
                    ?>
                    <div class="col-1-1 text-center">
                        <a href="javascript:void(0);" data-id="<?php echo $job_no ?>" data-href="<?php echo home_url('recruiting') ?>" class="btn btn-danger square-btn btn-recruit-apply pad-btn">応募フォーム</a>                        
                    </div>                    
                </div>
            </section>            
    <?php endwhile; ?>
            <?php endif; ?>
    <div class="grid grid-pad" style="padding-top: 40px; padding-bottom:60px">
        <div class="col-1-1 text-center">
            <?php
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } else {
                ?>
                <div class="back_left"><?php next_posts_link('&laquo; Older') ?></div>
                <div class="next_right"><?php previous_posts_link('Newer &raquo;') ?></div>
<?php } ?>        
        </div>        
    </div>        
</section><!-- #content -->

<?php get_footer(); ?>
<script type="text/javascript">
    $('.btn-recruit-apply').click(function () {
        document.cookie = "job_no=" + $(this).data('id') + ";path=/";
        location.href = $(this).data('href');
    });
</script>