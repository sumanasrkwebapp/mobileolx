{OVERALL_HEADER}
<section id="main" class="clearfix page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
              
                <div class="pull-right back-result"><a href="{LINK_LISTING}"><i class="fa fa-angle-double-left"></i>
                    {LANG_BACK_RESULT}</a></div>
                <h2 class="title">{LANG_COUNTRY}</h2>
            </ol>
            </div>
        <div class="faq-page section crl" id="getCountry">
            <div class="row">{LOOP: COUNTRYLIST}{COUNTRYLIST.tpl}{/LOOP: COUNTRYLIST}</div>
        </div>
    </div>
    <!-- container --></section>
<script>
    $('#getCountry').on('click', 'ul li a', function (e) {
        e.stopPropagation();
        e.preventDefault();

        localStorage.Quick_placeText = "";
        localStorage.Quick_PlaceId = "";
        localStorage.Quick_PlaceType = "";
        var url = $(this).attr('href');
        window.location.href = url;
    });
</script>
{OVERALL_FOOTER}