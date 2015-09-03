<?php
/*
 * Author: KhangLe
 * Template Name: Contact
 * 
 */

global $theme_options;
//var_dump($theme_options);

get_header();
?>


<section id="profile" class="site-content">
    <div id="fixed-sequence" class="bg contact1-head-img part-pad">
        <div class="grid grid-pad bg-height">
            <div class="col-2-3 text-left text-left-head">
                <h1><?php echo get_contact_top_text() ?></h1>
            </div>

            <?php get_template_part('part_top_contact') ?>

            <div class="col-1-1 text-center btn-xs-headbox"><a href="#" class="btn btn-primary square-btn pad-btn">お問い合わせはこちら</a></div>
        </div><!-- grid -->  
    </div><!-- home-cta -->

    <div class="grid grid-pad" id='part0'>
        <div class="col-1-1">
            <h1 class="number-title">サービスのご利用をお教えの企業様の方へ</h1>
            <p class="blur-black">弊社サービスをお考えのお客様は、セキュリティポリシーに同意の上、下記のボタンよりメールにてお問い合わせ下さい。当社担当者より改めてご連絡させて頂きます。</p> 
        </div>
    </div>

    <div id="about" class="grid grid-pad-nano">
        <div class="col-1-1 nano">
            <div class="overthrow nano-content blur-black">
                <?php get_template_part('part_rule_contact') ?>
            </div>
        </div>
    </div>

    <div class="grid grid-pad">
        <div class="col-1-1 text-center">
            <a href="mailto:<?php echo $theme_options['ct_com_email'] ?>?subject=【人材をお探しの企業様】&body=
■御社名:%0D%0A
■御社ホームページURL:%0D%0A
■部署名:%0D%0A
■お役職名:%0D%0A
■お名前:%0D%0A
■ご連絡先TEL、E-mail:%0D%0A
■ご相談内容:%0D%0A" class="btn btn-warning btn-contact1">同意して送信</a>
        </div>
        <div class="col-1-1">
            <p class="blur-black"><span class="green">※ </span>ウェブメーラー等を使用しており、デバイスにメーラー設定を行っていない方は、プライバシーポリシーに同意の上、<span class="black-text"><?php echo $theme_options['ct_com_email'] ?></span>宛に、ご連絡お願いいたします。 <br/>
                後ほど、弊社より折り返しご連絡いたします。</p> 
        </div>
    </div>


    <?php get_template_part('part_bottom_contact') ?>

</section><!-- #content -->

<?php get_footer(); ?>