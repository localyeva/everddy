<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">

        <link type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/images/evaicon.png" rel="shortcut icon">

        <meta content="Everddy Co.,Ltd." name="author">
        <meta content="IT/Web業界の人材やグローバル人材の紹介ならエバディ。" itemprop="title" name="title">
        <meta content="国内外の優秀な人材をご紹介いたします。御社の成長戦略実現をサポートさせていただくパートナーとして、単なる人材の紹介に留まらず、採用計画・人材配置・外国人採用定着のノウハウなど、人事戦略全般についてご相談を承ります。" itemprop="description" name="description">
        <meta content="転職、求人、中途採用、ITエンジニア、Webエンジニア、グローバル人材、外国人採用、java、php、エバディ、everddy" itemprop="keywords" name="keywords">

        <title><?php echo wp_title('｜') ?></title>
        
        <!-- FACE BOOK start -->
        <meta property="og:title" content="IT/Web業界の人材やグローバル人材の紹介ならエバディ" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://everddy.com/" />        
        <meta property="og:image"  content="http://everddy.com/wp-content/uploads/2016/01/facebook-opg.png" />
        <!-- //FACE BOOK end -->

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" id="prefix-font-awesome-css" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" media="all">
        <link rel="stylesheet" type="text/css" id="business-style-css" href="<?php echo get_template_directory_uri() ?>/css/style.css" media="all">
        <link rel="stylesheet" type="text/css" id="business-sidr-component-css" href="<?php echo get_template_directory_uri() ?>/css/component.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/nanoscroller.css">
        <link rel="stylesheet" type="text/css" id="business-erveddy-css" href="<?php echo get_template_directory_uri() ?>/css/erveddy.css" media="all">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
        global $active_menus;
        wp_head();
        ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=1670214293254368";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div id="page" class="hfeed site">

            <header id="masthead" class="site-header" role="banner">
                <div class="grid grid-pad head-overflow grid-head">

                    <div class="site-branding col-3-12 mobile-col-2-3">

                        <div class="site-logo"> 
                            <a href="<?php echo bloginfo('url') ?>" title="Everddy Co.,Ltd" rel="home"><img src="<?php echo get_site_logo() ?>" width="250" alt="Everddy Co.,Ltd"></a> 
                        </div>

                    </div><!-- site-branding --> 

                    <div class="col-9-12 mobile-col-1-3"> 	
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <a id="showLeft" class="mobileNav push-right"><i class="fa fa-bars"></i></a>
                            <div id="main-nav"><div class="menu-menu-1-container">
                                    <ul id="menu-menu-1" class="menu">
                                        <li id="menu-item-1" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1 <?php echo $active_menus['home'] ?>"><a href="<?php echo bloginfo('url') ?>">ホーム</a></li>
                                        <li id="menu-item-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2 <?php echo $active_menus['service-detail'] ?>"><a href="<?php echo bloginfo('url') ?>/service-detail">サービス</a></li>
                                        <!--li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3 <?php echo $active_menus['service-feature'] ?>"><a href="<?php echo bloginfo('url') ?>/service-feature">ご利用メリット</a></li-->
                                        <li id="menu-item-4" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4 <?php echo $active_menus['benefit'] ?>"><a href="<?php echo bloginfo('url') ?>/benefit">外国人採用メリット</a></li>
                                        <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5 <?php echo $active_menus['profile'] ?>"><a href="<?php echo bloginfo('url') ?>/profile"><?php echo get_profile_top_text() ?></a></li>                
                                        <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5 <?php echo $active_menus['service-feature'] ?>"><a href="<?php echo bloginfo('url') ?>/service-feature">働くを考える</a></li>
                                        <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5 <?php echo $active_menus['recruit'] ?>"><a href="<?php echo bloginfo('url') ?>/recruit">求人情報</a></li>
                                        <li id="menu-item-6" class="btn-first-head menu-item menu-item-type-post_type menu-item-object-page menu-item-6 btn-head-pad"><a href="<?php echo bloginfo('url') ?>/contact" class="btn btn-primary square-btn">お問い合わせ</a></li>

                                        <li id="menu-item-7" class="btn-second-head menu-item menu-item-type-post_type menu-item-object-page menu-item-7 btn-head-pad"><a href="<?php echo bloginfo('url') ?>/contact-job" class="btn btn-warning square-btn pad-btn btn-contact-width">求職のご相談</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav><!-- #site-navigation -->       
                    </div><!-- col-9-12 -->

                </div><!-- grid -->
            </header><!-- #masthead -->

            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <h3>Menu</h3> 
                <div class="menu-menu-1-container">
                    <ul id="menu-menu-2" class="menu">
                        <li id="menu-item-1" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>">ホーム</a></li>
                        <li id="menu-item-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>/service-detail">サービス</a></li>
                        <!--li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>/service-feature">ご利用メリット</a></li-->
                        <li id="menu-item-4" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>/benefit">外国人採用メリット</a></li>
                        <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>/profile"><?php echo get_profile_top_text() ?></a></li>
                        
                        <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>/service-feature">働くを考える</a></li>
                        <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>/recruit">求人情報</a></li>

                        <li id="menu-item-6" class="btn-m-first-head menu-item menu-item-type-post_type menu-item-object-page menu-item-6 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>/contact" class="btn btn-primary square-btn">お問い合わせ</a></li>

                        <li id="menu-item-7" class="btn-m-second-head menu-item menu-item-type-post_type menu-item-object-page menu-item-7 <?php echo $active_menu ?>"><a href="<?php echo bloginfo('url') ?>/contact-job" class="btn btn-warning square-btn pad-btn">求職のご相談</a></li>

                    </ul>
                </div>		
            </nav>