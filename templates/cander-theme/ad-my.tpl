{OVERALL_HEADER}
<link rel="stylesheet" href="{SITE_URL}templates/{TPL_NAME}/assets/plugins/datatables/jquery.dataTables.min.css">
<link rel="stylesheet" href="{SITE_URL}templates/{TPL_NAME}/assets/plugins/datatables/responsive.dataTables.min.css">
<!-- myads-page -->
<section id="main" class="clearfix myads-page">
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
                    
                    <div class="pull-right back-result"><a href="{LINK_LISTING}"><i class="fa fa-angle-double-left"></i>{LANG_BACK_RESULT}</a>
                    </div>
                </ol>
                
            </div>
            <!-- Main Content -->
            <div class="ads-info">
                <div class="row">
                    <!-- Page-Sidebar -->
                    <!-- <aside class="col-sm-3 hidden-xs hidden-sm">
                        <div class="section">
                            <div class="user-panel-sidebar">
                                <div class="collapse-box">
                                    <h5 class="collapse-title no-border">{LANG_MY_CLASSIFIED} <a class="pull-right" data-toggle="collapse" href="#MyClassified"><i class="fa fa-angle-down"></i></a></h5>
                                    <div id="MyClassified" class="panel-collapse collapse in">
                                        <ul class="acc-list">
                                            <li><a href="{LINK_DASHBOARD}" class="waves-effect"><i class="fa fa-home"></i>{LANG_DASHBOARD} </a></li>
                                            <li><a href="{LINK_PROFILE}/{USERNAME}" class="waves-effect"><i class="fa fa-user"></i> {LANG_PROFILE_PUBLIC}</a></li>
                                            <li><a href="{LINK_POST-AD}" class="waves-effect"><i class="fa fa-pencil"></i>{LANG_POST_AD}</a></li>
                                            <li><a href="{LINK_MEMBERSHIP}" class="waves-effect"><i class="fa fa-shopping-bag"></i> {LANG_MEMBERSHIP} </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="collapse-box">
                                    <h5 class="collapse-title"> {LANG_MY_ADS} <a class="pull-right" data-toggle="collapse" href="#MyAds"><i class="fa fa-angle-down"></i></a></h5>
                                    <div id="MyAds" class="panel-collapse collapse in">
                                        <ul class="acc-list">
                                            <li class="active"><a href="{LINK_MYADS}" class="waves-effect"><i class="fa fa-book"></i>{LANG_MY_ADS} <span class="badge">{MYADS}</span> </a></li>
                                            <li><a href="{LINK_FAVADS}" class="waves-effect"><i class="fa fa-heart"></i>{LANG_FAVOURITE_ADS} <span class="badge">{FAVORITEADS}</span> </a></li>
                                            <li><a href="{LINK_PENDINGADS}" class="waves-effect"><i class="fa fa-info-circle"></i> {LANG_PENDING_ADS}<span class="badge">{PENDINGADS}</span></a></li>
                                            <li><a href="{LINK_HIDDENADS}" class="waves-effect"><i class="fa fa-eye-slash"></i> {LANG_HIDDEN_ADS} <span class="badge">{HIDDENADS}</span></a></li>
                                            <li><a href="{LINK_EXPIREADS}" class="waves-effect"><i class="fa fa-calendar-times-o"></i> {LANG_EXPIRE_ADS} <span class="badge">{EXPIREADS}</span></a>
                                            <li><a href="{LINK_RESUBMITADS}" class="waves-effect"><i class="fa fa-briefcase"></i> {LANG_RESUBMITED_ADS} <span class="badge">{RESUBMITADS}</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="collapse-box">
                                    <h5 class="collapse-title no-border"> {LANG_MY_ACCOUNT} <a class="pull-right" data-toggle="collapse" href="#account"><i class="fa fa-angle-down"></i></a></h5>
                                    <div id="account" class="panel-collapse collapse in">
                                        <ul class="acc-list">
                                            <li><a href="{LINK_TRANSACTION}" class="waves-effect"><i class="fa fa-money"></i> {LANG_TRANSACTION}</a></li>
                                            <li><a href="{LINK_ACCOUNT_SETTING}" class="waves-effect"><i class="fa fa-cog"></i> {LANG_ACCOUNT_SETTING} </a></li>
                                            <li><a href="{LINK_LOGOUT}" class="waves-effect"><i class="fa fa-unlock"></i>{LANG_LOGOUT} </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside> -->
                    <!-- # End Page-Sidebar -->
                    <!-- Page-Content -->
                    <div class="col-sm-12 col-md-12 page-content mt-n4">
                        <div class="section banner">
                            <!-- banner-form -->
                            <div class="banner-form mt-n4">
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

                        <div class="my-markad section mt-n5">
                            <h2>{LANG_MY_ADS}</h2>
                            <table id="js-table-list" class="manage-table responsive-table">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-file-text"></i> {LANG_ITEM_DETAILS}</th>
                                        <th class="item-status"><i class="fa fa-bell"></i> {LANG_STATUS}</th>
                                        <th><i class="fa fa-cog"></i> {LANG_OPTION}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {LOOP: ITEM}

                                    <tr class='ajax-item-listing IF("{ITEM.status}"=="hide"){ opapcityLight {:IF}' data-item-id="{ITEM.id}">
                                        <td class="title-container"><img
                                                src="{SITE_URL}storage/products/thumb/{ITEM.picture}" alt=""
                                                style="max-height: 200px">

                                            <div class="item-title">
                                                <h4><a href="{ITEM.link}">{ITEM.product_name}</a>
                                                    <label class="label-wrap hidden-sm hidden-xs">
                                                        IF("{ITEM.featured}"=="1"){ <div class="label featured"> {LANG_FEATURED}</div> {:IF}
                                                        IF("{ITEM.urgent}"=="1"){ <div class="label urgent"> {LANG_URGENT}</div> {:IF}
                                                        IF("{ITEM.highlight}"=="1"){ <div class="label highlight"> {LANG_HIGHLIGHT}</div> {:IF}
                                                    </label>
                                                </h4>
                                                <ol class="breadcrumb">
                                                    <li><a href="{ITEM.catlink}">{ITEM.category}</a></li>
                                                    <li><a href="{ITEM.subcatlink}">{ITEM.sub_category}</a></li>
                                                </ol>
                                                <ul class="item-details">
                                                    <li><i class="fa fa-map-marker"></i><a href="{ITEM.citylink}">{ITEM.location}</a></li>
                                                    <li><i class="fa fa-clock-o"></i>{ITEM.created_at}</li>
                                                    <li><i class="fa fa-calendar-times-o"></i>{LANG_EXPIRY_DATE}: {ITEM.expire_date}</li>
                                                </ul>
                                                IF("{ITEM.price}"!="0"){ <span class="table-item-price"> {ITEM.price} </span> {:IF}
                                            </div>
                                        </td>
                                        <td class="item-status" width="12%">
                                            IF("{ITEM.status}"=="active"){ <span class="label label-success">{ITEM.status}</span>{:IF}
                                            IF("{ITEM.status}"=="pending"){ <span class="label label-warning">{ITEM.status}</span> {:IF}
                                            IF("{ITEM.status}"=="rejected"){ <span class="label label-danger">{ITEM.status}</span> {:IF}
                                            IF("{ITEM.status}"=="expire"){ <span class="label label-danger">{ITEM.status}</span> {:IF}
                                            IF("{ITEM.hide}"=="1"){ <span class="label label-info label-hidden">{LANG_HIDDEN}</span>{:IF}
                                        </td>
                                        <td class="action" width="12%">
                                            <a href="{LINK_EDIT-AD}/{ITEM.id}"><i class="fa fa-pencil"></i> {LANG_EDIT}</a>
                                            <a class="item-js-hide" href="#" data-ajax-action="hideItem">
                                                IF("{ITEM.hide}"=="0"){ <i class="fa  fa-eye-slash"></i> {LANG_HIDE} {:IF}
                                                IF("{ITEM.hide}"=="1"){ <i class="fa  fa-eye"></i> {LANG_SHOW} {:IF}</a>
                                            <a class="delete item-js-delete" href="#" data-ajax-action="deleteMyAd"><i class="fa fa-remove"></i> {LANG_DELETE}</a>
                                        </td>
                                    </tr>
                                    {/LOOP: ITEM}



                                    <tr>
                                        <td colspan="3" class="pad-zero">
                                            IF("{ADSFOUND}"=="0"){
                                            <h4>{LANG_NO_RESULT_FOUND}</h4>
                                            {:IF}
                                            <!-- Pagination-->
                                            <div class="pagination-container mar-zero">
                                                <ul class="pagination">
                                                    {LOOP: PAGES}IF("{PAGES.current}"=="0"){
                                                        <li><a href="{PAGES.link}">{PAGES.title}</a></li>
                                                    {:IF}IF("{PAGES.current}"=="1"){
                                                        <li class="active"><a>{PAGES.title}</a></li>
                                                    {:IF}{/LOOP: PAGES}
                                                </ul>
                                            </div>
                                            <!-- Pagination-->
                                        </td>
                                    </tr>



                                </tbody>



                            </table>

                        </div>
                    </div>
                    <!-- # End Page-Content -->
                </div>
                <!-- row -->
            </div>
            <!-- row -->
        </div>
    <!-- container -->
</section>
<!-- myads-page -->

<script src="{SITE_URL}templates/{TPL_NAME}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{SITE_URL}templates/{TPL_NAME}/assets/plugins/datatables/dataTables.responsive.min.js"></script>

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

{OVERALL_FOOTER}