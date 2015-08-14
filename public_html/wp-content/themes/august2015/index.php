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
                    <h2 class='pad'>Contact</h2>
                    <h4>人材をお探しの企業様</h4>
                    <p class='pad'><a href="#" class="btn btn-primary square-btn pad-btn">お問い合わせはこちら</a></p>
                    <h4>日本でお仕事をお探しの方</h4>
                    <p class='pad'><a href="#" class="btn btn-warning square-btn pad-btn btn-contact-width">ご相談はこちら</a></p>
                    <h4>日本国外でお仕事をお探しの方</h4>
                    <p class='pad'><a href="#" class="btn btn-primary square-btn pad-btn btn-contact-width">ご相談はこちら</a></p>
                    <h3>Tel: 03-6880-9083</h3>
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
            <div class="col-1-4">
                <div class="home-blog">
                    <article id="post-12" class="post-12 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">

                        <header class="home-entry-header">
                            <a href="https://modernthemes.net/demo/business/get-your-business-up-and-running/"><img width="251" height="303" src="<?php echo get_template_directory_uri() ?>/img/team_1.png" class="attachment-home-blog wp-post-image" alt="469649685"></a>

                        </header><!-- .entry-header -->


                    </article><!-- #post-## -->
                    <h4>人材紹介</h4>
                    <p class="blur-black">ITエンジニアを中心に国内外問わず、様々な人材のご紹介をいたします。</p>
                </div><!-- home-blog -->
            </div><!-- col-1-4 -->
            <div class="col-1-4">
                <div class="home-blog">
                    <article id="post-12" class="post-12 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">

                        <header class="home-entry-header">
                            <a href="https://modernthemes.net/demo/business/get-your-business-up-and-running/"><img width="251" height="303" src="<?php echo get_template_directory_uri() ?>/img/team_2.png" class="attachment-home-blog wp-post-image" alt="469649685"></a>

                        </header><!-- .entry-header -->
                    </article><!-- #post-## -->
                    <h4>日本語教育（ベトナム人向け）</h4>
                    <p class="blur-black">ご入社までの期間、ベトナム協力会社て、日本人講師による実務的な日本語教育プログラムを最長半年間提供。</p>
                </div><!-- home-blog -->
            </div><!-- col-1-4 -->
            <div class="col-1-4">
                <div class="home-blog">
                    <article id="post-12" class="post-12 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">

                        <header class="home-entry-header">
                            <a href="https://modernthemes.net/demo/business/get-your-business-up-and-running/"><img width="251" height="303" src="<?php echo get_template_directory_uri() ?>/img/team_3.png" class="attachment-home-blog wp-post-image" alt="469649685"></a>

                        </header><!-- .entry-header -->
                    </article><!-- #post-## -->
                    <h4>受け入れ定着サポート</h4>
                    <p class="blur-black">外国人受入に伴う各種手続きサポートや入社者への導入研修などを提供いたします。<br/>その他、日本人入社者向け研修のご相談も承ります。</p>
                </div><!-- home-blog -->
            </div><!-- col-1-4 -->
            <div class="col-1-4">
                <div class="home-blog">
                    <article id="post-12" class="post-12 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">

                        <header class="home-entry-header">
                            <a href="https://modernthemes.net/demo/business/get-your-business-up-and-running/"><img width="251" height="303" src="<?php echo get_template_directory_uri() ?>/img/team_4.png" class="attachment-home-blog wp-post-image" alt="469649685"></a>

                        </header><!-- .entry-header -->
                    </article><!-- #post-## -->
                    <h4>採用業務代行</h4>
                    <p class="blur-black">効率的・効果的な採用業務フローのご提案に加え採用セミナー運営代行や応募者対応、面接代行などのご相談も承ります。</p>
                </div><!-- home-blog -->
            </div><!-- col-1-4 -->
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
                <h1>外国人採用のメリット</h1>
                <hr></hr>
                <h3>
                    日本人の優秀な若手人材の確保は今後ますます難易度を増していきます。
                </h3>
                <h3>日本国外に目を向ければ、多くの若手優秀人材が日本でチャレンジしたいと考えています。</h3>
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
                <h2>Contact</h2>
            </div><!-- col-10-12 -->                        
        </div><!-- grid -->
        <div class="grid grid-pad">
            <div class="col-1-1 text-center">
                <p class="blur-black">サービスについてのご質問、</p>
                <p  class="blur-black">人材についてのご相談、海外でのお仕事探しなど、お気軽にお問い合わせください。</p>
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