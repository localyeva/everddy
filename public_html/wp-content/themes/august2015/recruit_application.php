<?php
/*
 * Author: KhangLe
 * Template Name: Recruit Application
 * 
 */

global $theme_options;

get_header();
?>

<section id="recruit-application" class="site-content">
    <div class="grid grid-pad">
        <div class="col-1-1">
            <h2 class="main-title">サービスサ</h2>
        </div>
    </div>
    
    <!--
    <div class="grid grid-pad">
        <div class="col-1-1 tb-bg">
            <form id="application-form" class="application-form form-horizontal" method="POST" action="<?php echo bloginfo('url') ?>/jobs-apply" novalidate="novalidate" enctype="multipart/form-data">
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick-required">
                                会社名
                                <small class="required">入力</small>
                            </label>                                                        
                        </div>                    
                        <div class="col-2-3">
                            <input class="form-control" type="text" id="contact-company-name"/>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick-required">
                                会社名
                                <small class="required">入力</small>
                            </label>
                        </div>
                        <div class="col-2-3">
                            <input class="form-control" type="text" id="contact-company-name"/>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick-required">
                                会社名
                                <small class="required">入力</small>
                            </label>
                        </div>
                        <div class="col-2-3">
                            <input class="form-control" type="text" id="contact-company-name"/>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick-required">
                                会社名
                                <small class="required">入力</small>
                            </label>
                        </div>
                        <div class="col-2-3">
                            <input class="form-control" type="text" id="contact-company-name"/>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick">
                                会社名
                            </label>
                        </div>
                        <div class="col-2-3">
                            <input class="txt" type="file"/>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick">
                                会社名
                            </label>
                        </div>
                        <div class="col-2-3">
                            <input class="txt" type="file"/>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick">
                                会社名
                            </label>
                        </div>
                        <div class="col-2-3">
                            <input class="txt" type="file"/>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick">
                                会社名
                            </label>
                        </div>
                        <div class="col-2-3">
                            <input class="form-control" type="text" id="contact-company-name"/>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick">
                                会社名
                            </label>
                        </div>
                        <div class="col-2-3">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="inq[]" value="知人の紹介"> 知人の紹介
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="inq[]" value="知人の紹介"> 知人の紹介
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="inq[]" value="知人の紹介"> 知人の紹介
                            </label>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <div class="grid detail-group">
                    <div class="col-1-1">
                        <div class="col-1-3">
                            <label class="stick">
                                会社名
                            </label>
                        </div>
                        <div class="col-2-3">
                            <textarea class="txt form-control" rows="2" cols="50">                        
                            </textarea>
                            <p>everddy Co., Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="col-1-1">
                        <hr>
                    </div>
                </div>
                <br/>
                <div class="grid detail-agreement">
                    <div class="col-1-1 nano">
                        <div class="overthrow nano-content blur-black">
                            事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容 事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容 事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容事業内容
                        </div>
                    </div>
                </div>  
                <br/>

                <div class="grid text-center">
                    <button class="btn btn-success submit-btn btn-detail-green pad-btn" type="submit" name="apply" value="job">業内容事業内容事</button>
                </div>
            </form>
        </div>
    </div>
    -->
    
    <div style="width:500px;">
        <script type="text/javascript" src="https://app-webparts-hrbc.porterscloud.com/po-b.js" data-template-id="11649"></script><script type="porters/webparts"></script>
    </div>

</section><!-- #content -->



<?php get_footer(); ?>