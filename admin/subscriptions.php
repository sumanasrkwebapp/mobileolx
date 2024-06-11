<?php
require_once('includes.php');
?>
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="assets/js/plugins/datatables/jquery.dataTables.min.css" />
<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <!-- Partial Table -->
        <div class="card">
            <div class="card-header">
                <h4>Site setting</h4>
            </div>
            <div class="card-block">
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">


                        <div class="tab-page wrap">
                            <div>

                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#membership_plan" data-toggle="tab"><i class="ion-navicon"></i>Plan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#membership_packages" data-toggle="tab"><i class="ion-flag"></i>Packages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#membership_upgrades" data-toggle="tab"><i class="ion-gear-a"></i>Upgrades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#membership_cron" data-toggle="tab"><i class="ion-arrow-graph-down-right"></i>Cron Logs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#membership_payment_methods" data-toggle="tab"><i class="ion-card"></i>Payment Methods</a>
                                    </li>
                                </ul>

                                <div id="markad_settings_controls" class="tab-contents">
                                    <div class="panel panel-default markad-main">
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="membership_plan">
                                                    <div class="card-header">
                                                        <h4>Membership Plan</h4>
                                                        <div class="pull-right">
                                                            <a href="#" data-url="panel/membership_plan_add.php" data-toggle="slidePanel" class="btn btn-success waves-effect waves-light m-r-10">Add Plan</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table id="plan_ajax_datatable" data-jsonfile="membership_plan.php" class="ajax_datatable ajax_datatable js-table-checkable table table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th>Plan Name</th>
                                                                    <th>Plan Term</th>
                                                                    <th>Amount</th>
                                                                    <th>Currency</th>
                                                                    <th style="width: 200px">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">

                                                                </tbody>
                                                            </table>

                                                        </div>


                                                    </div>
                                                  
                                                </div>

                                                <div class="tab-pane" id="membership_packages">
                                                    <div class="card-header">
                                                        <h4>Membership Package</h4>
                                                        <div class="pull-right">
                                                            <a href="#" data-url="panel/package_add.php" data-toggle="slidePanel" class="btn btn-success waves-effect waves-light m-r-10">Add Package</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table id="package_ajax_datatable" data-jsonfile="package.php" width="960" class="js-table-checkable ajax_datatable table table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th>Package Name</th>
                                                                    <th>Duration</th>
                                                                    <th>Removable</th>
                                                                    <th style="width: 200px">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">

                                                                </tbody>
                                                            </table>

                                                        </div>


                                                    </div>
                                                  
                                                </div>

                                                <div class="tab-pane" id="membership_upgrades">
                                                    <div class="card-header">
                                                        <h4>Upgrade Users</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table id="upgrade_ajax_datatable" data-jsonfile="upgrades.php" class="table ajax_datatable table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th>Username</th>
                                                                    <th>Membership</th>
                                                                    <th>Term</th>
                                                                    <th>Timing</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">

                                                                </tbody>
                                                            </table>

                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="membership_cron">
                                                    <div class="card-header">
                                                        <h4>Cron Logs</h4>
                                                        <div class="pull-right">
                                                            <a href="cron_logs.php?clear=1" class="btn btn-success waves-effect waves-light m-r-10">Clear Log</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table id="cron_ajax_datatable" data-jsonfile="cron_logs.php" width="960" class="ajax_datatable table table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th>Summary</th>
                                                                    <th>Date</th>
                                                                    <th>Details</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">

                                                                </tbody>
                                                            </table>

                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="membership_payment_methods">
                                                    <div class="card-header">
                                                        <h4>Payment Settings</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table id="payment_ajax_datatable" data-jsonfile="payment_methods.php" class="table ajax_datatable table-vcenter table-hover" data-tablesaw-mode="stack" data-plugin="animateList" data-animate="fade" data-child="tr" >
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th class="sortingNone">Logo</th>
                                                                    <th>Title</th>
                                                                    <th>Installed</th>
                                                                    <th style="width: 200px">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- .card-block -->
    </div>

</main>


<?php include("footer.php"); ?>

<script>
    $(function()
    {
        $('.ajax_datatable').each(function (data) {
            App.initDatatable($(this));
        });
        // Init page helpers (Table Tools helper)
        // App.initHelpers('table-tools');

    });
</script>
</body>

</html>

