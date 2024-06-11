<!-- footer -->
<div class="hidden-xs">  
         <footer class="_1jYKO " data-aut-id="footer" id="footer">
         <div class="_2sI8Z row" data-aut-id="top-desktop-footer">
            <div class="f3R3d row" style="padding: 16px 100px 16px 135px; text-align: center;">
                        <div class="fRN33 col-xs-12 col-md-3" style="text-align: left;">

                   <div class="ft-logo"><img src="{SITE_URL}storage/logo/{SITE_LOGO}" alt="Footer Logo"></div>
                    <p>{FOOTER_TEXT}</p>

</div>

            <div class="fRN33 col-xs-12 col-md-3">{LANG_HELP_SUPPORT}<ul>
                <li><a class="_2XmAi" rel="" data-aut-id="" href="{LINK_FAQ}">{LANG_FAQ}</a></li>
                <li><a class="_2XmAi" rel="" data-aut-id="" href="{LINK_CONTACT}">{LANG_CONTACT}</a></li>
            </ul></div>
            <div class="fRN33 col-xs-12 col-md-3">{LANG_INFORMATION}<ul>
                {LOOP: HTMLPAGE}
                <li><a class="_2XmAi" rel="" data-aut-id="" href="{HTMLPAGE.link}">{HTMLPAGE.title}</a></li>
                {/LOOP: HTMLPAGE}
                IF("{COUNTRY_TYPE}"=="multi"){
                <li><a class="_2XmAi" rel="" data-aut-id="" href="{LINK_COUNTRY}">{LANG_COUNTRIES}</a></li>
                {:IF}
                <li><a class="_2XmAi" rel="" data-aut-id="" href="{LINK_SITEMAP}">{LANG_SITE_MAP}</a></li>
            </ul></div>
            <div class="fRN33 col-xs-12 col-md-3">{LANG_CONTACT_US}<ul>
                IF("{ADDRESS}"!=""){
                <li>{ADDRESS}</li>
                {:IF}
                IF("{PHONE}"!=""){
                <li><a href="tel:{PHONE}" target="_blank" rel="noopener noreferrer" class="_2XmAi" data-aut-id="">{PHONE}</a></li>
                {:IF}
                IF("{EMAIL}"!=""){
                <li><a href="mailto:{EMAIL}" target="_blank" rel="noopener noreferrer" class="_2XmAi" data-aut-id="">{EMAIL}</a></li>
                {:IF}
                <li>       
                        IF("{FACEBOOK_LINK}"!=""){ <a href="{FACEBOOK_LINK}" target="_blank"><i class="fa fa-facebook-square"></i></a>{:IF}
                        IF("{TWITTER_LINK}"!=""){ <a href="{TWITTER_LINK}" target="_blank"><i class="fa fa-twitter-square"></i></a>{:IF}
                        IF("{GOOGLEPLUS_LINK}"!=""){ <a href="{GOOGLEPLUS_LINK}" target="_blank"><i class="fa fa-google-plus-square"></i></a>{:IF}
                        IF("{YOUTUBE_LINK}"!=""){ <a href="{YOUTUBE_LINK}" target="_blank"><i class="fa fa-youtube-square"></i></a>{:IF}
                </li>
            </div>

</div></div>
<div class="_1P8AV text-center" data-aut-id="bottom-footer">
    <div class="text-center">
        <p>{COPYRIGHT_TEXT}</p>
            </div>
        </div>
        </footer>
</div>
<!-- footer -->
IF("{SWITCHER}"=="1"){
<!--/styleswitch-->
<div class="styleswitch">
    <div class="styleswitch-lover">
        <a href="#" class="toggler"><i class="fa fa-cog fa-spin"></i></a>
        <h4>{LANG_CHANGE_COLOR}</h4>
        <ul class="preset-list clearfix" id="styleswitch">
            <li><a href="javascript: void(0)" title="switch styling" id="color1">#f44336</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color2">#E91E63</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color3">#9C27B0</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color4">#673AB7</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color5">#3F51B5</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color6">#2196F3</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color7">#03A9F4</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color8">#00BCD4</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color9">#009688</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color10">#4CAF50</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color11">#8BC34A</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color12">#CDDC39</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color13">#4611a7</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color14">#FFC107</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color15">#FF9800</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color16">#FF5722</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color17">#795548</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color18">#9E9E9E</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color19">#607D8B</a></li>
            <li><a href="javascript: void(0)" title="switch styling" id="color20">#776B26</a></li>
        </ul>

        <br>
        <h4>{LANG_CHANGE_THEME}</h4>

        <div class="dropdown theme-dropdown" id="theme-dropdown">
            <button class="btn dropdown-toggle btn-default-lite" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-expanded="false"><span id="selected_theme">Classic</span><span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation" data-theme="cander-theme"><a role="menuitem" tabindex="-1" rel="alternate" href="#">Classic Theme</a></li>
                <li role="presentation" data-theme="material-theme"><a role="menuitem" tabindex="-1" rel="alternate" href="#">Material Theme</a></li>
                <li role="presentation" data-theme="explore-theme"><a role="menuitem" tabindex="-1" rel="alternate" href="#">Explore Theme</a></li>
            </ul>
        </div>

    </div>
</div>
{:IF}
<!--/End:styleswitch-->


<script>
    // Language Var
    var LANG_ENABLE_CHAT_YOURSELF = "{LANG_ENABLE_CHAT_YOURSELF}";
    var LANG_JUST_NOW = "{LANG_JUST_NOW}";
    var LANG_PREVIEW = "{LANG_PREVIEW}";
    var LANG_SEND = "{LANG_SEND}";
    var LANG_FILENAME = "{LANG_FILENAME}";
    var LANG_STATUS = "{LANG_STATUS}";
    var LANG_SIZE = "{LANG_SIZE}";
    var LANG_DRAG_FILES_HERE = "{LANG_DRAG_FILES_HERE}";
    var LANG_STOP_UPLOAD = "{LANG_STOP_UPLOAD}";
    var LANG_ADD_FILES = "{LANG_ADD_FILES}";
    var LANG_TYPE_A_MESSAGE = "{LANG_TYPE_A_MESSAGE}";
    var LANG_ADD_FILES_TEXT = "{LANG_ADD_FILES_TEXT}";
    var LANG_LOGGED_IN_SUCCESS = "{LANG_LOGGED_IN_SUCCESS}";
    var LANG_ERROR_TRY_AGAIN = "{LANG_ERROR_TRY_AGAIN}";
    var LANG_ERROR = "{LANG_ERROR}";
    var LANG_CANCEL = "{LANG_CANCEL}";
    var LANG_DELETED = "{LANG_DELETED}";
    var LANG_ARE_YOU_SURE = "{LANG_ARE_YOU_SURE}";
    var LANG_YOU_WANT_DELETE = "{LANG_YOU_WANT_DELETE}";
    var LANG_YES_DELETE = "{LANG_YES_DELETE}";
    var LANG_AD_DELETED = "{LANG_AD_DELETED}";
    var LANG_SHOW = "{LANG_SHOW}";
    var LANG_HIDE = "{LANG_HIDE}";
    var LANG_HIDDEN = "{LANG_HIDDEN}";
    var LANG_ADD_FAV = "{LANG_ADD_FAVOURITE}";
    var LANG_REMOVE_FAV = "{LANG_REMOVE_FAVOURITE}";
    var LANG_SELECT_CITY = "{LANG_SELECT_CITY}";
</script>
<script src="{SITE_URL}templates/{TPL_NAME}/js/modernizr.min.js"></script>
<script src="{SITE_URL}templates/{TPL_NAME}/js/bootstrap.min.js"></script>
<script src="{SITE_URL}templates/{TPL_NAME}/js/owl.carousel.min.js"></script>
<script src="{SITE_URL}templates/{TPL_NAME}/js/scrollup.min.js"></script> 
<script src="{SITE_URL}templates/{TPL_NAME}/js/jquery.nicescroll.min.js"></script>
<script src='{SITE_URL}templates/{TPL_NAME}/js/custom2.js' type='text/javascript'></script>
<script src="{SITE_URL}templates/{TPL_NAME}/js/custom.js"></script>
<!-- Sweet-Alert  -->
<script src="{SITE_URL}templates/{TPL_NAME}/js/sweetalert/sweetalert.min.js"></script>
<script src="{SITE_URL}templates/{TPL_NAME}/js/sweetalert/jquery.sweet-alert.custom.js"></script>
<script src='{SITE_URL}templates/{TPL_NAME}/js/user-ajax.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>

    /* THIS PORTION OF CODE IS ONLY EXECUTED WHEN THE USER THE LANGUAGE & THEME(CLIENT-SIDE) */
    $(function () {
        $('#lang-dropdown').on('click', '.dropdown-menu li', function (e) {
            var lang = $(this).data('lang');
            if (lang != null) {
                var res = lang.substr(0, 2);
                $('#selected_lang').html(res);
                $.cookie('Quick_lang', lang,{ path: '/' });
                location.reload();
            }
        });

        $('#theme-dropdown').on('click', '.dropdown-menu li', function (e) {
            var theme = $(this).data('theme');
            var thm = theme.substr(0, theme.indexOf('-'));
            $('#selected_theme').html(thm);
            $.cookie('Quick_theme', theme,{ path: '/' });
            location.reload();
        });
    });
    $(document).ready(function () {
        var lang = $.cookie('Quick_lang');
        if (lang != null) {
            var res = lang.substr(0, 2);
            $('#selected_lang').html(res);
        }
        var theme = $.cookie('Quick_theme');
        if (theme != null) {
            var thm = theme.substr(0, theme.indexOf('-'));
            $('#selected_theme').html(thm);
        }

    });
</script>

IF("{LOGGED_IN}&{ICHAT}"=="1&on"){
<script>
    var session_uname = "{USERNAME}";
    var session_img = "{USERPIC}";
    var filename = "{ICHAT_SECRET_FILE}.php";
    var plugin_directory = "plugins/ichat/"+filename;
</script>
<link type="text/css" rel="stylesheet" media="all" href="{SITE_URL}plugins/ichat/app/includes/chatcss/chat.css"/>
<div id="ichat-rtl"></div>
<script>
    if ($("body").hasClass("rtl")) {
        $('#ichat-rtl').append('<link rel="stylesheet" type="text/css" href="{SITE_URL}plugins/ichat/app/includes/chatcss/chat-rtl.css">');

        var rtl = true;
    }else{
        var rtl = false;
    }
</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="{SITE_URL}plugins/ichat/app/plugins/smiley/js/emojione.min.js"></script>
<script type="text/javascript" src="{SITE_URL}plugins/ichat/app/plugins/smiley/smiley.js"></script>
<script type="text/javascript" src="{SITE_URL}plugins/ichat/app/includes/chatjs/lightbox.js"></script>
<script type="text/javascript" src="{SITE_URL}plugins/ichat/app/includes/chatjs/chat.js"></script>
<script type="text/javascript" src="{SITE_URL}plugins/ichat/app/includes/chatjs/custom.js"></script>
<script type="text/javascript" src="{SITE_URL}plugins/ichat/app/plugins/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="{SITE_URL}plugins/ichat/app/plugins/uploader/jquery.ui.plupload/jquery.ui.plupload.js"></script>


<!--This div for modal light box chat box image-->
<table id="lightbox" style="display: none;height: 100%">
    <tr>
        <td height="10px"><p><img src="{SITE_URL}plugins/ichat/app/plugins/images/close-icon-white.png" width="30px" style="cursor: pointer"/></p></td>
    </tr>
    <tr>
        <td valign="middle">
            <div id="content"><img src="#"/></div>
        </td>
    </tr>
</table>
<!--This div for modal light box chat box image-->
{:IF}

</body></html>