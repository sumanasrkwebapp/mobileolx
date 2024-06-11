{OVERALL_HEADER}
<!-- home-one-info -->
<section class="clearfix home-one" id="page" data-ipapi="ip_api">
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
    <div class="section category-markad text-center" style="margin-top: 70px; margin-bottom: -70px;">

      <nav class="navbar-expand-md navbar-dark bg-light">
            <div class="navbar-collapse collapse justify-content-center order-2" id="navbarNav">
                <ul class="navbar-nav">
                    {LOOP: CAT}
                    <li class="nav-item">
                        <a class="nav-link" href="{CAT.catlink}">
                            <span class="category-title">{CAT.main_title}</span>
                        </a>
                    </li>
                    {/LOOP: CAT}
                </ul>
            </div> 
            
            
            
            
        </nav> 
         
    </div>
    
    <!-- world -->
    <div id="banner-two" style="background-image:url({SITE_URL}storage/banner/{BANNER_IMAGE});background-size: cover; margin-bottom: -40px;">
      
        <div class="d-flex align-items-center h-100">
            <div class="container">
                <div class="row text-center">

                    <div class="col-sm-12 ">
                        <div class="banner">
                            
                            <script>
                            
	window.SGPMPopupLoader=window.SGPMPopupLoader||{ids:[],popups:{},call:function(w,d,s,l,id){
		w['sgp']=w['sgp']||function(){(w['sgp'].q=w['sgp'].q||[]).push(arguments[0]);}; 
		var sg1=d.createElement(s),sg0=d.getElementsByTagName(s)[0];
		if(SGPMPopupLoader && SGPMPopupLoader.ids && SGPMPopupLoader.ids.length > 0){SGPMPopupLoader.ids.push(id); return;}
		SGPMPopupLoader.ids.push(id);
		sg1.onload = function(){SGPMPopup.openSGPMPopup();}; sg1.async=true; sg1.src=l;
		sg0.parentNode.insertBefore(sg1,sg0);
		return {};
	}};
	SGPMPopupLoader.call(window,document,'script','https://popupmaker.com/assets/lib/SGPMPopup.min.js','c3d20738');
</script>

                            

                            <!-- banner-form -->
                            <form autocomplete="off" class="form-inline" method="get" action="{LINK_LISTING}" accept-charset="UTF-8" style="display:block">
                                <div class="search-banner-wrapper">
                                    <div class="search-banner row justify-content-center no-gutters" style="background: transparent">

                                        <div class="col-md-6">
                                            <div class="form-group d-flex align-items-center px-3 mb-3 mb-lg-0 border-right" style="background: transparent">
                                                <label for="textwords" class="font-weight-bold text-white">{LANG_WHAT} </label>
                                                <input autocomplete="off" type="text" style="opacity: 0.6" class="form-control border-0 qucikad-ajaxsearch-input" placeholder="{LANG_WHAT_LOOK_FOR}" data-prev-value="0" data-noresult="{LANG_MORE_RESULTS_FOR}">
                                                <i class="qucikad-ajaxsearch-close fa fa-times-circle" aria-hidden="true" style="display: none;"></i>
                                                <div id="qucikad-ajaxsearch-dropdown" size="0" tabindex="0" style="display: none; overflow-y: hidden; outline: none; cursor: -webkit-grab;">
                                                    <ul>
                                                        {LOOP: CATEGORY}
                                                        <li class="qucikad-ajaxsearch-li-cats" data-catid="{CATEGORY.slug}">
                                                            IF("{CATEGORY.picture}"==""){
                                                            <i class="qucikad-as-caticon {CATEGORY.icon}"></i>
                                                            {:IF}
                                                            IF("{CATEGORY.picture}"!=""){
                                                            <img src="{CATEGORY.picture}"/>
                                                            {:IF}
                                                            <span class="qucikad-as-cat">{CATEGORY.name}</span>
                                                        </li>
                                                        {/LOOP: CATEGORY}
                                                    </ul>

                                                    <div style="display:none" id="def-cats">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group pl-3 live-location-search" style="background: transparent">
                                                <label for="city" class="font-weight-bold text-white">{LANG_WHERE} </label>
                                                <div data-option="no" class="loc-tracking"><i class="fa fa-crosshairs"></i></div>
                                               <!-- <input type="text" style="opacity: 0.6" class="form-control border-0" id="searchStateCity" name="location" placeholder="{LANG_YOUR_CITY}">-->
                                <input type="text" style="opacity: 0.6" class="form-control border-0" id="searchStateCity" data-toggle="modal" data-target="#countryModal" placeholder="{LANG_YOUR_CITY}">
                            
                                                <input type="hidden" name="latitude" id="latitude" value="">
                                                <input type="hidden" name="longitude" id="longitude" value="">
                                                <input type="hidden" name="placetype" id="searchPlaceType" value="">
                                                <input type="hidden" name="placeid" id="searchPlaceId" value="">
                                                <input type="hidden" id="input-keywords" name="keywords" value="">
                                                <input type="hidden" id="input-maincat" name="cat" value=""/>
                                                <input type="hidden" id="input-subcat" name="subcat" value=""/>
                                                <button data-ajax-response='map' type="submit" name="searchform" class="btn btn-primary ml-auto mt-2" style="opacity: 0.7; background-color: blue;">
                                                    <i class="fa fa-search"></i>
                                                    <span class="align-middle ml-2 dn-text-sm">{LANG_SEARCH}</span>
                                                </button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </form>
                            <!-- banner-form -->
                        </div>
                    </div>
                    <!-- banner -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="clearfix">
    <!-- world -->
    <div class="container-fluid">
        <!-- main-content -->
        <div class="main-content" id="serchlist">
            <!-- row -->
            <div class="row">
             <div class="col-md-4">
             
             </div>
             
             <div class="col-md-4">
                <!-- advertisement Left-->
                <!-- advertisement -->
                    IF("{RIGHT_ADSTATUS}"=="1"){
                    <div class="hidden-xs hidden-sm col-md-12 text-center">
                        <div class="advertisement" id="markad-right">{RIGHT_ADSCODE}</div>
                    </div>
                    {:IF}
                    </center>
                    <!-- advertisement -->
                 
                <!-- advertisement Left-->
             </div>
             
             <div class="col-md-4">
             
             </div>
             
            </div>
            <div class="row">
               
                <!-- product-list -->
               <!-- <div class="{CATEGORY_COLUMN}"> -->
                    <div class="col-md-12">
                    <!-- categorys -->
					<!-- category-ad -->
                    <!-- markad-section -->
                    <div class="markad-section text-center d-none" id="markad-top">{TOP_ADSCODE}</div>
                    
                    <!-- markad-section -->
                    <!-- featured-slide -->
                      <!-- featured-slide -->
                    <div class='section featured-slide IF("{POST_PREMIUM_LISTING}"=="0"){ hidden {:IF} mt-n3'>
                        <div class="row mt-n4">
                            <div class="col-sm-6">
                                <div class="section-title featured-top">
                                    <h4>{LANG_PREMIUM_ADS}</h4>
                                </div>
                            </div>
                        </div>
                        
                        <!-- featured-slider -->
                        <div class="featured-slider">
                            <div id="featured-slider" >
                                {LOOP: ITEM}
                                <div class="quick-item IF(" {ITEM.highlight}"=="1"){ highlight {:IF}">
                                <!-- item-image -->
                                <div class="item-image-box">
                                    <div class="item-image"><a href="{ITEM.link}"><img src="{SITE_URL}storage/products/thumb/{ITEM.picture}" alt="{ITEM.product_name}" class="img-responsive"></a>

                                        <div class="item-badges">
                                            IF("{ITEM.featured}"=="1"){ <span class="featured">{LANG_FEATURED}</span>{:IF}
                                            IF("{ITEM.urgent}"=="1"){ <span>{LANG_URGENT}</span>{:IF}
                                        </div>
                                    </div>
                                    <!-- item-image -->
                                </div>
                                        <div class="ad-meta">
                                            IF("{ITEM.price}"!="0"){ <span class="item-price"> {ITEM.price} </span> {:IF}
                                            <ul class="contact-options pull-right" id="set-favorite">
                                                <li><a href="#" data-item-id="{ITEM.id}" data-userid="{USER_ID}" data-action="setFavAd" class="fav_{ITEM.id} fa fa-heart IF("{ITEM.favorite}"=="1"){ active {:IF}"></a></li>
                                            </ul>
                                        </div>

                                <div class="item-info {ITEM.highlight_bg}">
                                    <!-- ad-info -->
                                    <div class="ad-info">
                                        <h4 class="item-title">
                                            IF("{ITEM.sub_image}"!=""){
                                            <img src="{ITEM.sub_image}" width="24px" alt="{ITEM.sub_title}" title="{ITEM.sub_title}" style="display: inline-block;width: 24px"/>
                                            {:IF}
                                            <a href="{ITEM.link}">{ITEM.product_name}</a>

                                        </h4>
                                        <ol class="breadcrumb">
                                            <li><a href="{ITEM.catlink}">{ITEM.category}</a></li>
                                            <li class="hidden"><a title="{ITEM.sub_category}" href="{ITEM.subcatlink}">{ITEM.sub_category}</a>
                                            </li>
                                        </ol>
                                        <ul class="item-details">
                                            <li><i class="fa fa-map-marker"></i><a href="{ITEM.citylink}">{ITEM.location}</a></li>
                                            <li><i class="fa fa-clock-o"></i>{ITEM.created_at}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          
                            {/LOOP: ITEM}
                        </div>
                    </div>
                    </div>
                                <div class="row">
                        <div class="col-md-4">
                        
                        </div>
                        
                        <div class="col-md-4">
                                           <!-- advertisement Left-->
                                <!-- advertisement -->
                                    IF("{RIGHT_ADSTATUS}"=="1"){
                                    <div class="hidden-xs hidden-sm col-md-12 text-center">
                                        <div class="advertisement" id="markad-right">{RIGHT_ADSCODE}</div>
                                    </div>
                                    {:IF}
                                    </center>
                                    <!-- advertisement -->
                                 
                                <!-- advertisement Left-->
                        </div>
                        
                        <div class="col-md-4">
                        
                        </div>
                       </div>
                     <div class="section recommended-ads mt-n5">
                       
                        <div class="row mt-n3">
                           <div class="col-sm-12">  
                                <div class="featured-top"> 
                                    <h4>{LANG_LATEST_ADS}</h4>
                                </div>
                            </div>
                        
                            {LOOP: ITEM2}

                            <div class="col-md-3 col-xs-6" style="margin-bottom: 20px;">

                                <div class="quick-item">
                                    <!-- item-image -->
                                    <div class="item-image-box">
                                        <div class="item-image" style="height:200px">
                                            <a href="{ITEM2.link}">
                                                <img src="{SITE_URL}storage/products/thumb/{ITEM2.picture}" alt="{ITEM2.product_name}" class="img-responsive">
                                            </a>
                                            <div class="item-badges">
                                                IF("{ITEM2.featured}"=="1"){ <span class="featured">{LANG_FEATURED}</span>{:IF}
                                                IF("{ITEM2.urgent}"=="1"){ <span>{LANG_URGENT}</span> {:IF}
                                            </div>
                                        </div>
                                        <!-- item-image -->
                                    </div>
                                    <div class="item-info {ITEM2.highlight_bg}">

                                            <div class="ad-meta">
                                                IF("{ITEM2.price}"!="0"){ <span class="item-price"> {ITEM2.price} </span> {:IF}
                                                <ul class="contact-options pull-right" id="set-favorite">
                                                    <li><a href="#" data-item-id="{ITEM2.id}" data-userid="{USER_ID}" data-action="setFavAd" class="fav_{ITEM2.id} fa fa-heart IF("{ITEM2.favorite}"=="1"){ active {:IF}"></a></li>
                                                </ul>
                                            </div>

                                        <div class="ad-info">
                                            <h4 class="item-title">
                                                IF("{ITEM2.sub_image}"!=""){
                                                <img src="{ITEM2.sub_image}" width="24px" alt="{ITEM2.sub_title}" title="{ITEM2.sub_title}" style="display: inline-block;width: 24px"/>
                                                {:IF}
                                                <a href="{ITEM2.link}">{ITEM2.product_name}</a>
                                            </h4>
                                            <ol class="breadcrumb">
                                                <li><a href="{ITEM2.catlink}">{ITEM2.category}</a></li>
                                                <li class="hidden"><a title="{ITEM2.sub_category}" href="{ITEM2.subcatlink}">{ITEM2.sub_category}</a></li>
                                            </ol>
                                            <ul class="item-details">
                                                <li><i class="fa fa-map-marker"></i><a href="{ITEM2.citylink}">{ITEM2.location}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    
                             {/LOOP: ITEM2}

                        </div>
                    </div>
                    </div>
            </div>
        </div>
            
            <div class="row">
                <div class="col-md-4">
                
                </div>
                
                <div class="col-md-4">
                  <!-- advertisement Left-->
                <!-- advertisement -->
                    IF("{RIGHT_ADSTATUS}"=="1"){
                    <div class="hidden-xs hidden-sm col-md-12 text-center">
                        <div class="advertisement" id="markad-right">{RIGHT_ADSCODE}</div>
                    </div>
                    {:IF}
                    </center>
                    <!-- advertisement -->
                 
                <!-- advertisement Left-->
                </div>
                
                <div class="col-md-4">
                
                </div>
            </div>
    </div>
</section>
<script>
    var loginurl = "{LINK_LOGIN}?ref=index.php";
</script>

{OVERALL_FOOTER}




