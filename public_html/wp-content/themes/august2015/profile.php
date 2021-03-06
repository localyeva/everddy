<?php
/*
 * Author: KhangLe
 * Template Name: Profile
 * 
 */

global $theme_options;

get_header();
?>


<section id="profile" class="site-content">
    <div id="fixed-sequence" class="bg profile-head-img part-pad">
        <div class="grid grid-pad bg-height">
            <div class="col-2-3 text-left text-left-head">
                <h1><?php echo get_profile_top_text() ?></h1>      
                <h3></h3>
            </div>                            

            <?php get_template_part('part_top_contact') ?>
        </div><!-- grid -->  
    </div><!-- home-cta -->

    <?php if(get_profile_button_status()): ?>
    <div class="grid grid-pad part-pad top-pad">
        <div class="col-1-2 text-right">
            <a href="#" class="btn btn-strange pad-btn">会社概要</a>
        </div>
        <div class="col-1-2">                                      
            <a href="#" class="btn btn-strange pad-btn">代表メッセージ</a>
        </div>
    </div><!-- grid -->
    <?php endif; ?>
    <?php
    $args = array(
        'post_type' => 'ceo-message',
        'posts_per_page' => 1,
        'orderby' => array('date' => 'DESC'),
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()){
        while ($loop->have_posts()){
            $loop->the_post();
        
    ?>
    <div class="grid grid-pad top-pad">
        <div class="col-3-12">
            <img src='<?php echo get_field('image') ?>' class="img-responsive"/>
        </div>
        <div class="col-9-12">                                      
            <?php echo $post->post_content ?>
        </div>
    </div>
    <?php }
    }
    wp_reset_postdata();
    ?>
    <div class="grid grid-pad">
        <div class="col-1-1 tb-bg">
            <h1 class="number-title tb-title" ><?php echo get_profile_top_text() ?></h1>
            <table class="table table-responsive blur-black">
                <tr>
                    <th>会社名</th>
                    <td><?php echo $theme_options['ct_com_name_jp'] ?><br/><span class="black-text"><?php echo $theme_options['ct_com_name_en'] ?></span></td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td><?php echo $theme_options['ct_com_postal_code'] ?><br>
                        <?php echo $theme_options['ct_com_address_jp'] ?><br/>
                        <?php echo $theme_options['ct_com_address_en'] ?><br/>
                        zip: <?php echo $theme_options['ct_com_zip_code'] ?><br/><br/>
                        電話番号: <?php echo $theme_options['ct_com_telephone'] ?><br/>
                        FAX番号: <?php echo $theme_options['ct_com_fax'] ?>
                    </td>
                </tr>
                <tr>
                    <th>メール</th>
                    <td><span class="black-text"><?php echo $theme_options['ct_com_email'] ?></span></td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td><?php echo $theme_options['ct_com_establishment'] ?></td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td><?php echo $theme_options['ct_com_capital'] ?><br/><?php echo $theme_options['ct_com_capital_en'] ?></td>
                </tr>
                <tr>
                    <th>役員</th>
                    <td><?php echo $theme_options['ct_com_officer'] ?><br/><span class="black-text"><?php echo $theme_options['ct_com_officer_en'] ?></span></td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>
                        <?php echo $theme_options['ct_com_content'] ?>
                    </td>
                </tr>
                <tr>
                    <th>アクセス</th>
                    <td id='map'>
                        <?php echo stripcslashes($theme_options['ct_com_on_map']) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <?php get_template_part('part_bottom_contact') ?>

</section><!-- #content -->

<?php get_footer(); ?>