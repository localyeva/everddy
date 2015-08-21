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
                <h1>会社概要/代表メッセージ</h1>      
                <h3></h3>
            </div>                            

            <?php get_template_part('part_top_contact') ?>

            <div class="col-1-1 text-center btn-xs-headbox"><a href="#" class="btn btn-primary square-btn pad-btn">お問い合わせはこちら</a></div>
        </div><!-- grid -->  
    </div><!-- home-cta -->

    <div class="grid grid-pad part-pad top-pad">
        <div class="col-1-2 text-right">
            <a href="#" class="btn btn-strange pad-btn">会社概要</a>
        </div>
        <div class="col-1-2">                                      
            <a href="#" class="btn btn-strange pad-btn">代表メッセージ</a>
        </div>
    </div><!-- grid -->

    <div class="grid grid-pad">
        <div class="col-1-1">
            <h1 class="number-title">会社概要</h1><br/>                        
        </div>
        <div class="col-1-1 table-responsive">
            <table class="table blur-black">
                <tr>
                    <th>会社名</th>
                    <td><?php echo $theme_options['ct_com_name_jp'] ?><br/><span class="black-text"><?php echo $theme_options['ct_com_name_en'] ?></span></td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒105-0012<br>
                        東京都港区芝大門1-10-11　芝大門センタービル10F<br/>
                        10F Shiba Daimon Centre, 1-10-11 Shiba Daimon, Minato Ku, Tokyo, Japan<br/>
                        zip: 105-0012<br/><br/>
                        電話番号: 03-6880-9083<br/>
                        FAX番号: 03-6880-9201
                    </td>
                </tr>
                <tr>
                    <th>メール</th>
                    <td><span class="black-text">info@everddy.com</span></td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td>平成27年5月27日</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>500万円<br/>5,000,000 JPY</td>
                </tr>
                <tr>
                    <th>役員</th>
                    <td>代表取締役社長　金　明正<br/><span class="black-text">CEO Kim Myung Jeong</span></td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>
                        <ul>
                            <li>人材紹介事業（厚生労働大臣許可番号＠＠＠＠＠＠＠＠＠＠）</li>
                            <li>人事・採用のコンサルティング事業</li>
                            <li>総合人材サービス全般</li>
                            <li>労働者派遣事業</li>
                            <li>有料職業紹介事業</li>
                            <li>再就職支援事業</li>
                            <li>アウトソーシング事業</li>
                            <li>ITソリューションサービス事業</li>
                            <li>コンサルティング事業</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>アクセス</th>
                    <td id='map'>
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="443" src="https://maps.google.com/maps?hl=en&q=9 Dinh Tien Hoang, Dakao, Q1, HCM, Viet Nam&ie=UTF8&t=m&z=17&iwloc=B&output=embed"></iframe>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <?php get_template_part('part_bottom_contact') ?>

</section><!-- #content -->

<?php get_footer(); ?>