<?php global $theme_options; ?>
<a href="#0" class="cd-top">Top</a>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="grid grid-pad">
        <div class="col-1-2 pull-right footer-pad">
            <aside id="text-6" class="widget widget_text">
                <div class="title">株式会社エバディ</div>
                <div class='title green-text'>everddy Co., Ltd.</div>
                <b class="white-text">Address</b>
                <?php if (isset($theme_options['ct_com_postal_code'])): ?>
                    <p>〒<?php echo $theme_options['ct_com_postal_code'] ?></p>
                <?php endif; ?>
                <?php if (isset($theme_options['ct_com_address_jp'])): ?>
                    <p><?php echo $theme_options['ct_com_address_jp'] ?></p>
                <?php endif; ?>
                <?php if (isset($theme_options['ct_com_address_en'])): ?>
                    <p><?php echo $theme_options['ct_com_address_en'] ?></p>
                <?php endif; ?>
                <?php if (isset($theme_options['ct_com_zip_code'])): ?>
                    <?php var_dump($theme_options['ct_com_zip_code']) ?>
                    <p>zip<?php echo ":".$theme_options['ct_com_zip_code'] ?></p>
                    <p>zip2&nbsp;<?php echo $theme_options['ct_com_zip_code'] ?></p>
                    <p>zip3: <?php echo esc_html($theme_options['ct_com_zip_code']) ?></p>
                <?php endif; ?>

                <p><span class="dif-text">Tel: </span><span><?php echo esc_html($theme_options['ct_com_telephone']) ?> - </span><span class="dif-text">Fax: </span><span><?php echo esc_html($theme_options['ct_com_fax']) ?></span></p>
            </aside>
        </div>
    </div><!-- grid -->

</footer><!-- #colophon -->
</div><!-- #page -->        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.rwdImageMaps.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.nanoscroller.min.js"></script>        
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.overthrow.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/modernizr.js"></script> <!-- Modernizr -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/classie.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script> <!-- Modernizr -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/business.scripts.js"></script>
<?php wp_footer(); ?>
</body>
</html>