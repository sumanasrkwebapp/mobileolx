<?php
require_once('includes.php');
if(isset($_POST['approve'])) {
    if (!check_allow()) {
        ?>
        <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#sa-title').trigger('click');
            });
        </script>
        <?php

    } else {
        $items = ORM::for_table($config['db']['pre'].'product')
            ->select_many('id','product_name','user_id')
            ->where('status','pending')
            ->find_many();

        if (count($items) > 0) {
            foreach($items as $info){
                //Ad approve Email to seller
                $product_id = $info['id'];
                $item_title = $info['product_name'];
                $item_author_id = $info['user_id'];

                $product = ORM::for_table($config['db']['pre'].'product')->find_one($product_id);
                $product->set('status', 'active');
                $product->save();

                /*SEND RESUBMISSION AD APPROVE EMAIL*/
                //email_template("ad_approve",$item_author_id,null,$product_id,$item_title);
            }
        }
        transfer($_SERVER['REQUEST_URI'],'Approved Successfully');
        exit;
    }
}
?>

<link rel="stylesheet" href="assets/js/plugins/datatables/jquery.dataTables.min.css" />
<main class="app-layout-content">

    
    <div class="container-fluid p-y-md">
        
        <div class="card">
                        <div class="card-block">
                
                <div class="row">
                    <div class="col-sm-12">


                        <div class="wrap tab-page">
                            <div>

                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#all_ads" data-toggle="tab"><i class="ion-navicon"></i>All ADS List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#active_ads" data-toggle="tab"><i class="ion-flag"></i>Active ADS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pending_ads" data-toggle="tab"><i class="ion-gear-a"></i>Pending ADS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hidden_ads" data-toggle="tab"><i class="ion-android-notifications"></i>Hidden By User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#resubmitted_ads" data-toggle="tab"><i class="ion-ios-world"></i>Resubmitted ADS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#expired_ads" data-toggle="tab"><i class="ion-ios-email"></i>Expire ADS</a>
                                    </li>
                                </ul>

                                <div id="markad_settings_controls" class="tab-contents">
                                    <div class="panel panel-default markad-main">
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="all_ads">
                                                    <div class="card-header">
                                                        <h4>All Ads</h4>
                                                        
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table class="js-table-checkable table table-vcenter table-hover ajax_datatable" id="all_ajax_datatable" data-jsonfile="post.php">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th><i class="ion-image"></i> Title</th>
                                                                    <th class="hidden-xs hidden-sm">Username</th>
                                                                    <th class="hidden-xs w-30">Location</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Posted</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Status</th>
                                                                    <th class="text-center" style="width: 128px;">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                

                                                </div>

                                                <div class="tab-pane" id="active_ads">
                                                    <div class="card-header">
                                                        <h4>Active Ads</h4>
                                                       
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table class="js-table-checkable table table-vcenter table-hover table-sm ajax_datatable" id="active_ajax_datatable" data-jsonfile="post.php?status=active">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th><i class="ion-image"></i> Title</th>
                                                                    <th class="hidden-xs hidden-sm">Username</th>
                                                                    <th class="hidden-xs w-30">Location</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Posted</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Status</th>
                                                                    <th class="text-center" style="width: 128px;">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">

                                                                </tbody>
                                                            </table>

                                                        </div>


                                                    </div>
                                                  
                                                </div>

                                                <div class="tab-pane" id="pending_ads">
                                                    <div class="card-header">
                                                        <h4>Pending Ads</h4>
                                                        <div class="pull-right">
                                                            <form method="post">
                                                                <button type="submit" name="approve" id="approve" class="btn btn-warning waves-effect waves-light m-r-10"><i class="fa fa-refresh"></i> Approve All</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table class="js-table-checkable table table-vcenter table-hover ajax_datatable" id="pending_ajax_datatable" data-jsonfile="post.php?status=pending">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th><i class="ion-image"></i> Title</th>
                                                                    <th class="hidden-xs hidden-sm">Username</th>
                                                                    <th class="hidden-xs w-30">Location</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Posted</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Status</th>
                                                                    <th class="text-center" style="width: 128px;">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                

                                                </div>

                                                <div class="tab-pane" id="hidden_ads">
                                                    <div class="card-header">
                                                        <h4>Hidden Ads</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table class="js-table-checkable table table-vcenter table-hover ajax_datatable" id="hidden_ajax_datatable" data-jsonfile="post.php?hide=1">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th><i class="ion-image"></i> Title</th>
                                                                    <th class="hidden-xs hidden-sm">Username</th>
                                                                    <th class="hidden-xs w-30">Location</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Posted</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Status</th>
                                                                    <th class="text-center" style="width: 128px;">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">

                                                                </tbody>
                                                            </table>
                                                        </div>


                                                    </div>
                                                  
                                                </div>

                                                <div class="tab-pane" id="resubmitted_ads">
                                                    <div class="card-header">
                                                        <h4>Re-Submitted Ads</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table class="js-table-checkable table table-vcenter table-hover ajax_datatable" id="resubmit_ajax_datatable"  data-jsonfile="post_resubmit.php">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th><i class="ion-image"></i> Title</th>
                                                                    <th class="hidden-xs w-30">Location</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Posted</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Status</th>
                                                                    <th class="text-center" style="width: 128px;">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="ajax-services">

                                                                </tbody>
                                                            </table>
                                                        </div>


                                                    </div>
                                                   
                                                </div>

                                                <div class="tab-pane" id="expired_ads">
                                                    <div class="card-header">
                                                        <h4>Expire Ads</h4>
                                                        <div class="pull-right">
                                                            <a href="#" data-url="panel/post_renew.php" data-toggle="slidePanel" class="btn btn-success waves-effect waves-light m-r-10">Renew All Ads</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="js-table-list">
                                                            <table class="js-table-checkable table table-vcenter table-hover ajax_datatable" id="expired_ajax_datatable" data-jsonfile="post.php?status=expire">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center w-5 sortingNone">
                                                                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                                                                            <input type="checkbox" id="check-all" name="check-all"><span></span>
                                                                        </label>
                                                                    </th>
                                                                    <th><i class="ion-image"></i> Title</th>
                                                                    <th class="hidden-xs hidden-sm">Username</th>
                                                                    <th class="hidden-xs w-30">Location</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Posted</th>
                                                                    <th class="hidden-xs hidden-sm" style="width:100px">Status</th>
                                                                    <th class="text-center" style="width: 128px;">Actions</th>
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
            
        </div>
        
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

        // Init page helpers (BS Notify Plugin)
        App.initHelpers('notify');
    });
</script>
</body>

</html>

