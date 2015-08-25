<?php
/*
 * Author: KhangLe
 * Template Name: Contact_1
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
                <h1><?php echo get_contact_1_top_text() ?></h1>
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
            <div class="overthrow nano-content blur-black">株式会社エバディ（以下「当社」といいます）は、人材ビジネスを営む企業の責任として、みなさまの個人情報を保護するために細心の注意をはらっています。具体的には、以下の方針に基づき、個人情報の管理・運用を行っていますので、当社の提供する情報サービス（以下、「本サービス」といいます）をご利用いただく前に必ずお読みください。本サービスにおいて個人情報を登録された場合に、当社の個人情報の取扱いに関して同意をいただいたものといたします。
                <br/><br/>
                個人情報とは<br/><br/>
                当社では、個人情報を以下のように定義しています。「個人に関する情報であって、当該情報に含まれる氏名、生年月日その他の記述、または個人別に付けられた番号、記号その他の符号、画像若しくは音声によっ
            </div>
        </div>
    </div>

    <div class="grid grid-pad">
        <div class="col-1-1 text-center">
            <a href="#" class="btn btn-warning btn-contact1">同意して送信</a>
        </div>
        <div class="col-1-1">
            <p class="blur-black"><span class="green">※ </span>ウェブメーラー等を使用しており、デバイスにメーラー設定を行っていない方は、プライバシーポリシーに同意の上、<span class="black-text"><?php echo $theme_options['ct_com_email'] ?></span>宛に、ご連絡お願いいたします。 <br/>
                後ほど、弊社より折り返しご連絡いたします。</p> 
        </div>
    </div>


    <?php get_template_part('part_bottom_contact') ?>

</section><!-- #content -->

<?php get_footer(); ?>