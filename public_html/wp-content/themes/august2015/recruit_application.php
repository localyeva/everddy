<?php
/*
 * Author: KhangLe
 * Template Name: Recruiting
 * 
 */

global $theme_options;

get_header();
?>

<section id="recruit-application" class="site-content">
    <div class="grid grid-pad no-pad">
        <div class="col-1-1">
            <h2 class="main-title">お申し込みフォーム</h2>
            <h3>お申し込みになった求人のNOは<strong id="job_no"></strong>です。</h3>
            <script type="text/javascript" src="https://app-webparts-hrbc.porterscloud.com/po-b.js" data-template-id="11649"></script><script type="porters/webparts"></script>
        </div>
    </div>
</section><!-- #content -->

<?php get_footer(); ?>

<script type="text/javascript">
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
    $(function(){
        var job_no = getCookie('job_no');
        if(job_no != "-1"){
            $('#job_no').html(job_no);
        }

        $.blockUI({message: '<span><img src="<?php echo get_template_directory_uri() ?>/img/loading.gif" /> Loading...</span>',
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#fff',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: 1,
                color: '#000'
            }
        });
        
        setTimeout(function(){
            var isDone = false;
            while(!isDone){
                if($('.po-webparts-container').size() > 0){
                    isDone = true;
                    $.unblockUI()
                    break;
                }
            }
            
        }, 3000);
        
        /*
        setTimeout(function(){
            $('.main-title').addClass("po-webparts-container");
            
        }, 2000);
        */
    })
</script>