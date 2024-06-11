{OVERALL_HEADER}
<!-- ad-profile-page -->
<section id="main" class="clearfix  ad-profile-page">
    <div class="container-fluid p-0">
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="{LINK_DASHBOARD}">
                {LANG_DASHBOARD}
            </a>
            <a href="{LINK_PROFILE}/{USERNAME}">
                {LANG_PROFILE_PUBLIC}
            </a>
            <a href="{LINK_POST-AD}">
                {LANG_POST_AD}
            </a>
            <a href="{LINK_MEMBERSHIP}">
                {LANG_MEMBERSHIP}
            </a>
            <a href="{LINK_MYADS}">
                {LANG_MY_ADS}<span class="badge">{MYADS}</span>
            </a>
            <a href="{LINK_FAVADS}">
                {LANG_FAVOURITE_ADS}<span class="badge">{FAVORITEADS}</span>
            </a>
            <a href="{LINK_PENDINGADS}">
                {LANG_PENDING_ADS}<span class="badge">{PENDINGADS}</span>
            </a>
            <a href="{LINK_HIDDENADS}">
                {LANG_HIDDEN_ADS} <span class="badge">{HIDDENADS}</span>
            </a>
            <a href="{LINK_EXPIREADS}">
                {LANG_EXPIRE_ADS} <span class="badge">{EXPIREADS}</span>
            </a>
            <a href="{LINK_RESUBMITADS}">
                {LANG_RESUBMITED_ADS} <span class="badge">{RESUBMITADS}</span>
            </a>
            <a href="{LINK_TRANSACTION}">
                {LANG_TRANSACTION}
            </a>
            <a href="{LINK_ACCOUNT_SETTING}">
                {LANG_ACCOUNT_SETTING}
            </a>
            <a href="{LINK_LOGOUT}">
                {LANG_LOGOUT}
            </a>
        </div>
        <div class="section category-markad text-center" style="margin-top: 20px;">
            <nav class="navbar-expand-md text-black bg-light">
                <div class="navbar-collapse collapse justify-content-center order-2" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="{LINK_DASHBOARD}" class="nav-link collapse-title">
                                {LANG_DASHBOARD}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_PROFILE}/{USERNAME}" class="nav-link collapse-title">
                                {LANG_PROFILE_PUBLIC}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_POST-AD}" class="nav-link collapse-title">
                                {LANG_POST_AD}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_MEMBERSHIP}" class="nav-link collapse-title">
                                {LANG_MEMBERSHIP}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_MYADS}" class="nav-link collapse-title">
                                {LANG_MY_ADS}<span class="badge">{MYADS}</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_FAVADS}" class="nav-link collapse-title">
                                {LANG_FAVOURITE_ADS}<span class="badge">{FAVORITEADS}</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_PENDINGADS}" class="nav-link collapse-title">
                                {LANG_PENDING_ADS}<span class="badge">{PENDINGADS}</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_HIDDENADS}" class="nav-link collapse-title">
                                {LANG_HIDDEN_ADS} <span class="badge">{HIDDENADS}</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_EXPIREADS}" class="nav-link collapse-title">
                                {LANG_EXPIRE_ADS} <span class="badge">{EXPIREADS}</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_RESUBMITADS}" class="nav-link collapse-title">
                                {LANG_RESUBMITED_ADS} <span class="badge">{RESUBMITADS}</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_TRANSACTION}" class="nav-link collapse-title">
                                {LANG_TRANSACTION}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_ACCOUNT_SETTING}" class="nav-link collapse-title">
                                {LANG_ACCOUNT_SETTING}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{LINK_LOGOUT}" class="nav-link collapse-title">
                                {LANG_LOGOUT}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="breadcrumb-section mt-n5 ml-3">
            
            <ol class="breadcrumb">
               
                <div class="pull-right back-result">
                    <a href="{LINK_LISTING}"><i class="fa fa-angle-double-left"></i>{LANG_BACK_RESULT}</a>
                </div>
            </ol>
            
        </div>
        <!-- Main Content  -->
        <div class="row">
            <!-- Page-Content -->
            <div class="col-sm-12 page-content">
                <div class="panel-user-details">
                    <!-- profile-details -->
                    <div class="user-details section">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="user-img profile-img">
                                    <img src="{SITE_URL}storage/profile/{USERIMAGE}" alt="{FULLNAME}" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="user-admin">
                                    <h3>{FULLNAME}
                                        IF("{SUB_IMAGE}"!=""){
                                        <img src="{SUB_IMAGE}" alt="{SUB_TITLE}" title="{SUB_TITLE}" width="28px"/>
                                        {:IF}
                                    </h3>

                                    <p>{ABOUT}</p>
                                    <section class="contacts">
                                        IF("{USERNAME}"!=""){ <figure class="social-links hidden"><i class="fa fa-user"></i>{USERNAME}</figure>{:IF}
                                        IF("{ADDRESS}"!=""){ <figure class="social-links"><i class="fa fa-map-marker"></i><a href="https://maps.google.com/?q={ADDRESS}" target="_blank" rel="nofollow">{ADDRESS}</a></figure>{:IF}
                                        IF("{PHONE}"!=""){ <figure class="social-links"><i class="fa fa-phone"></i><a href="tel:{PHONE}">{PHONE}</a></figure>{:IF}
                                        IF("{EMAIL}"!=""){ <figure class="social-links"><a href="mailto:{EMAIL}"><i class="fa fa-envelope"></i>{EMAIL}</a></figure>{:IF}
                                        IF("{WEBSITE}"!=""){ <figure class="social-links"><i class="fa fa-globe"></i><a href="{WEBSITE}" target="_blank" rel="nofollow">{WEBSITE}</a></figure>{:IF}
                                    </section>
                                    <!--end contacts-->
                                    <!-- social-links -->
                                    <p>{LANG_SHARE} {LANG_PROFILE}</p>
                                    <div class="social-links text-center">
                                        <div class="social-share"></div>
                                        <!--end social-->
                                    </div>
                                    <!-- social-links -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="user-ads-details">
                                    <div class="site-visit">
                                        <h3><a href="#">{PROFILEVISIT}</a></h3>
                                        <small>{LANG_VISITS}</small>
                                    </div>
                                    <div class="my-markad">
                                        <h3><a href="#">{USERPREMIUMADS}</a></h3>
                                        <small>{LANG_FEATURED}</small>
                                    </div>
                                    <div class="favourites">
                                        <h3><a href="#">{USERADS}</a></h3>
                                        <small>{LANG_TOTAL_ADS}</small>
                                    </div>
                                </div>
                                <ul class="social_share margin-top-100 pull-right">
                                    IF("{FACEBOOK}"!=""){  <li><a href="{FACEBOOK}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li> {:IF}
                                    IF("{TWITTER}"!=""){  <li><a href="{TWITTER}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>{:IF}
                                    IF("{GPLUS}"!=""){  <li><a href="{GPLUS}" target="_blank" class="google"><i class="fa fa-google-plus"></i></a></li>{:IF}
                                    IF("{LINKEDIN}"!=""){  <li><a href="{LINKEDIN}" target="_blank" class="linkden"><i class="fa fa-linkedin"></i></a></li>{:IF}
                                    IF("{INSTAGRAM}"!=""){  <li><a href="{INSTAGRAM}" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>{:IF}
                                    IF("{YOUTUBE}"!=""){  <li><a href="{YOUTUBE}" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a></li>{:IF}
                                </ul>
                                <!--end social-->
                            </div>
                        </div>
                    </div>

                    <div class="section banner">
                        <!-- banner-form -->
                        <div class="banner-form">
                            <form method="get" action="#" name="locationForm" id="ListingForm">
                                <!-- category-change -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="dropdown category-dropdown"><a data-toggle="dropdown" href="#"><span class="change-text">{LANG_SELECT_CATEGORY}</span><i class="fa fa-navicon"></i></a>{CAT_DROPDOWN}</div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="keywords" value="{KEYWORDS}" placeholder="{LANG_WHAT} ?" style="padding: 0px;">
                                    </div>
                                    <div class="col-md-3 banner-icon"><i class="fa fa-map-marker"></i>
                                        <input type="text" class="form-control location" id="searchStateCity" name="location" placeholder="{LANG_WHERE} ?" >
                                        <input type="hidden" name="placetype" id="searchPlaceType" value="">
                                        <input type="hidden" name="placeid" id="searchPlaceId" value="">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="hidden" id="input-maincat" name="cat" value="{MAINCAT}"/>
                                        <input type="hidden" id="input-subcat" name="subcat" value="{SUBCAT}"/>
                                        <input type="hidden" id="input-sort" name="sort" value="{SORT}"/>
                                        <input type="hidden" id="input-order" name="order" value="{ORDER}"/>
                                        <input type="hidden" id="input-subcat" name="username" value="{USERNAME}"/>
                                        <button data-ajax-response='map' type="submit" name="Submit" class="form-control"><i class="fa fa-search"></i> {LANG_SEARCH}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- banner-form -->
                    </div>
                    <!-- banner -->

                    <!-- profile-details -->
                    <div class="row">
                        IF("{LEFT_ADSTATUS}"=="1"){
                        <div class="hidden-xs hidden-sm col-md-2 text-center">
                            <div class="advertisement" id="markad-left">{LEFT_ADSCODE}</div>
                        </div>
                        {:IF}

                        <!-- my-markad -->
                        <div class="my-details section {CATEGORY_COLUMN}">
                            <div class="featured-top">
                                <div class="filter-section">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>{LANG_ALL_ADS}</h2>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sorting well">
                                                <div class="btn-group pull-right">
                                                    <button class="btn" id="list"><i
                                                            class="fa fa-th-list fa-white icon-white"></i></button>
                                                    <button class="btn" id="grid"><i class="fa fa-th fa"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="" id="serchlist">
                                <div class="searchresult list hideresult" style="display: none;">
                                    {LOOP: ITEM}
                                  
                                    <div class="quick-item row">
                                        <!-- item-image -->
                                        <div class="ad-listing">
                                            <div class="image bg-transfer">
                                                <figure>
                                                    <div class="item-badges">
                                                        IF("{ITEM.featured}"=="1"){ <span class="featured">{LANG_FEATURED}</span>{:IF}
                                                        IF("{ITEM.urgent}"=="1"){ <span>{LANG_URGENT}</span>{:IF}
                                                    </div>
                                                </figure>
                                                <img src="{SITE_URL}storage/products/{ITEM.picture}"
                                                     alt="{ITEM.product_name}"></div>
                                            <div class="item-info {ITEM.highlight_bg} col-sm-12">
                                                <!-- ad-info -->
                                                <div class="ad-info">
                                                    <h4 class="item-title"><a href="{ITEM.link}">{ITEM.product_name}</a>
                                                    </h4>
                                                    <ul class="contact-options pull-right" id="set-favorite">
                                                        <li><a href="#" data-item-id="{ITEM.id}" data-userid="{USER_ID}"
                                                               data-action="setFavAd" class="fav_{ITEM.id} fa fa-heart IF("
                                                               {ITEM.favorite}"=="1"){ active {:IF}"></a></li>
                                                    </ul>
                                                    <ol class="breadcrumb">
                                                        <li><a href="{ITEM.catlink}">{ITEM.category}</a></li>
                                                        <li><a href="{ITEM.subcatlink}">{ITEM.sub_category}</a>
                                                        </li>
                                                    </ol>
                                                    <ul class="item-details">
                                                        <li><i class="fa fa-map-marker"></i><a href="#">{ITEM.city}</a></li>
                                                        <li><i class="fa fa-clock-o"></i>{ITEM.created_at}</li>
                                                    </ul>
                                                    IF("{ITEM.price}"!="0"){ <span class="item-price"> {ITEM.price} </span> {:IF}

                                                    <div><a class="view-btn" href="{ITEM.link}">{LANG_VIEW_AD}</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               
                                    {/LOOP: ITEM}
                                </div>
                                <div class="searchresult grid hideresult" style="display: none;">
                                    <div class="gird-layout row">
                                        {LOOP: ITEM2}
                                            <div class="col-md-4 col-sm-6 col-xs-12 mar-bot-10 clear-left-3">
                                                <div style="border: 1px solid #f3f3f3;">
                                                    <div class="item-image-box">
                                                        <div class="item-image"><a href="{ITEM2.link}"><img src="{SITE_URL}storage/products/thumb/{ITEM2.picture}" alt="{ITEM2.product_name}" class=""></a>

                                                            <div class="item-badges">
                                                                IF("{ITEM2.featured}"=="1"){ <span class="featured">{LANG_FEATURED}</span>{:IF}
                                                                IF("{ITEM2.urgent}"=="1"){ <span>{LANG_URGENT}</span>{:IF}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info {ITEM2.highlight_bg}">
                                                        <!-- ad-info -->
                                                        <div class="ad-info">
                                                            <h4 class="item-title">
                                                                IF("{ITEM2.sub_image}"!=""){
                                                                <img src="{ITEM2.sub_image}" width="24px" alt="{ITEM2.sub_title}" title="{ITEM2.sub_title}"/>
                                                                {:IF}
                                                                <a href="{ITEM2.link}">{ITEM2.product_name}</a>
                                                            </h4>
                                                            <ol class="breadcrumb">
                                                                <li><a href="{ITEM2.catlink}">{ITEM2.category}</a></li>
                                                                <li><a href="{ITEM2.subcatlink}">{ITEM2.sub_category}</a>
                                                                </li>
                                                            </ol>
                                                            <ul class="item-details">
                                                                <li><i class="fa fa-map-marker"></i><a href="{ITEM2.citylink}">{ITEM2.city}</a></li>
                                                                <li><i class="fa fa-clock-o"></i>{ITEM2.created_at}</li>
                                                            </ul>
                                                            <div class="ad-meta">
                                                                IF("{ITEM2.price}"!="0"){ <span class="item-price"> {ITEM2.price} </span> {:IF}
                                                                <ul class="contact-options pull-right" id="set-favorite">
                                                                    <li>
                                                                        <a href="#" data-item-id="{ITEM2.id}"
                                                                           data-userid="{USER_ID}" data-action="setFavAd"
                                                                           class="fav_{ITEM2.id} fa fa-heart IF("
                                                                        {ITEM2.favorite}"=="1"){ active {:IF}"></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- ad-info -->
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        {/LOOP: ITEM2}
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                IF("{ADSFOUND}"=="0"){
                                <h4>{LANG_NO_RESULT_FOUND}</h4>
                                {:IF}
                                <!-- Pagination-->
                                <div class="pagination-container">
                                    <ul class="pagination">
                                        {LOOP: PAGES}IF("{PAGES.current}"=="0"){
                                        <li><a href="{PAGES.link}">{PAGES.title}</a></li>
                                        {:IF}IF("{PAGES.current}"=="1"){
                                        <li class="active"><a>{PAGES.title}</a></li>
                                        {:IF}{/LOOP: PAGES}
                                    </ul>
                                </div>
                                <!-- Pagination-->
                            </div>
                        </div>
                        <!-- my-markad -->
                        <!-- advertisement -->
                        IF("{RIGHT_ADSTATUS}"=="1"){
                        <div class="hidden-xs hidden-sm col-md-2 text-center">
                            <div class="advertisement" id="markad-right">{RIGHT_ADSCODE}</div>
                        </div>
                        {:IF}
                        <!-- advertisement -->
                    </div>
                </div>
            </div>
            <!-- # End Page-Content -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- ad-profile-page -->
<script>
    var getMaincatId = '{MAINCAT}';
    var getSubcatId = '{SUBCAT}';

    $(window).bind("load", function () {
        if (getMaincatId != "") {
            $('li a[data-cat-type="maincat"][data-ajax-id="' + getMaincatId + '"]').trigger('click');
        } else if (getSubcatId != "") {
            $('li ul li a[data-cat-type="subcat"][data-ajax-id="' + getSubcatId + '"]').trigger('click');
        } else {
            $('li a[data-cat-type="all"]').trigger('click');
        }
    });
</script>
<script>var loginurl = "{LINK_LOGIN}?ref=profile.php";</script>

<script async="async" type="text/javascript">
    function socialShare() {
        var socialButtonsEnabled = 1;
        if (socialButtonsEnabled == 1) {
            $('head').append($('<link rel="stylesheet" type="text/css">').attr('href', 'https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css'));
            $('head').append($('<link rel="stylesheet" type="text/css">').attr('href', 'https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css'));
            $.getScript("{SITE_URL}templates/{TPL_NAME}/assets/plugins/social-share/jssocials.min.js", function (data, textStatus, jqxhr) {
                $(".social-share").jsSocials({
                    showLabel: false,
                    showCount: false,
                    shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "whatsapp"]
                });
            });
        }
    }
    //  Social Share -------------------------------------------------------------------------------------------------------
    if ($(".social-share").length) {
        socialShare();
    }
</script>
{OVERALL_FOOTER} 