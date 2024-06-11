{OVERALL_HEADER}
<section id="main" class="clearfix contact-us">
    <div class="container">
        <div class="breadcrumb-section">
            
            <ol class="breadcrumb">
                
                <div class="pull-right back-result"><a href="{LINK_LISTING}"><i class="fa fa-angle-double-left"></i>
                    {LANG_BACK_RESULT}</a></div>
            </ol>
            
            <h2 class="title">{LANG_CONTACT_US}</h2>
        </div>
        <!-- gmap -->
        <div class="map" id="map-contact" style="height: 300px; margin-bottom: 30px;"></div>
        <div class="business-info">
            <div class="row">
                <!-- Enquiry Form-->
                <div class="col-sm-8">
                    <div class="contactUs">
                        <h2>{LANG_CONTACT_US}</h2>

                        <form id="contact-form" class="contact-form" name="contact-form" method="post" action="#">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="{LANG_YNAME}" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required="required" placeholder="{LANG_YEMAIL}" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="{LANG_SUBJECT}" name="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="{LANG_MESSAGE}"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">

                                        IF("{RECAPTCHA_MODE}"=="1"){
                                        <div class="g-recaptcha" data-sitekey="{RECAPTCHA_PUBLIC_KEY}"></div>
                                        {:IF}

                                        <span style="color:red">IF("{RECAPTCH_ERROR}"!=""){ {RECAPTCH_ERROR} {:IF}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="Submit" class="btn btn-outline">{LANG_SEND_MESSAGE}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Enquiry Form-->
                <!-- contact-detail -->
                <div class="col-sm-4">
                    <div class="contactUs-detail">
                        <h4 class="heading">{LANG_GET_TOUCH}</h4>

                        <p>{LANG_CONTACT_PAGE_TEXT}</p>
                        <hr>
                        <h4 class="heading">{LANG_CONTACT_INFORMATION}</h4>
                        <ul class="list-icons">
                            IF("{ADDRESS}"!=""){ <li><i class="fa fa-map-marker"></i>{ADDRESS}</li>{:IF}
                            IF("{PHONE}"!=""){ <li><i class="fa fa-phone"></i><a href="tel:{PHONE}">{PHONE}</a></li>{:IF}
                            IF("{EMAIL}"!=""){ <li><i class="fa fa-envelope"></i><a href="mailto:{EMAIL}">{EMAIL}</a></li>{:IF}
                        </ul>
                    </div>
                </div>
                <!-- contact-detail -->
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- container -->
</section>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    var _latitude = '{LATITUDE}';
    var _longitude = '{LONGITUDE}';
    var element = "map-contact";
    var path = '{SITE_URL}templates/{TPL_NAME}/';
    var getCity = false;
    var color = '{MAP_COLOR}';
    var site_url = '{SITE_URL}';
    simpleMap(_latitude, _longitude, element);
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c7c0359a726ff2eea5a5d01/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

{OVERALL_FOOTER}