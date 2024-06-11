{OVERALL_HEADER}
<link rel="stylesheet" href="{SITE_URL}templates/{TPL_NAME}/assets/plugins/datatables/jquery.dataTables.min.css">
<link rel="stylesheet" href="{SITE_URL}templates/{TPL_NAME}/assets/plugins/datatables/responsive.dataTables.min.css">
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
               
                <div class="pull-right back-result"><a href="{LINK_LISTING}"><i class="fa fa-angle-double-left"></i>{LANG_BACK_RESULT}</a></div>
            </ol>
            
        </div>
        <!-- Main Content -->
        <div class="row">
            <!-- Page-Content -->
            <div class="col-sm-12 col-md-12 page-content mx-3">
                <table class="table table-striped sep ver-mspace" id="myTable">
                    <thead>
                    <tr class="no-mar no-pad">
                        <th></th>
                        <th class="dl sep-right">{LANG_AD_TITLE}</th>
                        <th class="dl sep-right">{LANG_AMOUNT}</th>
                        <th class="dc sep-right ">{LANG_PREMIUM}</th>
                        <th class="dc sep-right">{LANG_PAYMENT_METHOD}</th>
                        <th class="dc sep-right">{LANG_DATE}</th>
                        <th class="dc sep-right ">{LANG_STATUS}</th>
                    </tr>
                    </thead>
                    IF("{T_BLANK}"=="0"){
                    <tbody>
                    <tr>
                        <td colspan="18" class="notice text-16 dc">{LANG_NO_RESULT_FOUND}</td>
                    </tr>
                    </tbody>
                    {:IF}
                    <tbody>
                    {LOOP: TRANSACTIONS}
                    <tr class="altrow">
                        <td class=" details-control"></td>
                        <td class="dc"><a href="{TRANSACTIONS.product_link}" target="_blank">{TRANSACTIONS.product_name}</a></td>
                        <td class="dl">
                            <div class="dl">
                                IF("{CURRENCY_POS}"=="BEF"){ {CURRENCY_SIGN} {:IF}
                                {TRANSACTIONS.amount}
                                IF("{CURRENCY_POS}"=="AFT"){ {CURRENCY_SIGN} {:IF}
                            </div>
                        </td>
                        <td class="dc">{TRANSACTIONS.premium}</td>
                        <td class="dc"><span>{TRANSACTIONS.payment_by}</span></td>
                        <td class="dc"><span>{TRANSACTIONS.time}</span></td>
                        <td class="dc">{TRANSACTIONS.status}</td>
                    </tr>
                    {/LOOP: TRANSACTIONS}
                    </tbody>
                </table>
            </div>
            <!-- Page-Content -->
        </div>
        <!-- Main Content -->
    </div>
    <!-- container -->
</section>
<!-- ad-dashboard-page -->

<script src="{SITE_URL}templates/{TPL_NAME}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{SITE_URL}templates/{TPL_NAME}/assets/plugins/datatables/dataTables.responsive.min.js"></script>

<script>
    //var LANG_SEARCH = "{LANG_SEARCH}";

    $(document).ready(function () {
        $('#myTable').DataTable({
            responsive: {
                details: {
                    type: 'column'
                }
            },
            "language": {
                "paginate": {
                    "previous": "{LANG_PREVIOUS}",
                    "next": "{LANG_NEXT}"
                },
                "search": "{LANG_SEARCH}",
                "lengthMenu": "{LANG_DISPLAY} _MENU_",
                "zeroRecords": "{LANG_NO_FOUND}",
                "info": "{LANG_PAGE} _PAGE_ - _PAGES_",
                "infoEmpty": "{LANG_NO_RESULT_FOUND}",
                "infoFiltered": "( {LANG_TOTAL_RECORD} _MAX_)"
            },
            columnDefs: [{
                className: 'control',
                orderable: false,
                targets: 0
            }]
        });
    });

</script>
{OVERALL_FOOTER}