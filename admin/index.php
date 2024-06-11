<?php
require_once('includes.php');

$total_active_item = ORM::for_table($config['db']['pre'].'product')->where('status','active')->count();
$total_pending_item = ORM::for_table($config['db']['pre'].'product')->where('status','pending')->count();
$banned_user = ORM::for_table($config['db']['pre'].'user')->where('status',2)->count();
$total_user = ORM::for_table($config['db']['pre'].'user')->count();

$quick_fetch= ORM::for_table($config['db']['pre'].'balance')->find_one(1);
$totalearning = $quick_fetch['total_earning']." ".$config['currency_sign'];
?>

<div class="content" style="margin-top: 0">

    
    <div class="container-fluid p-y-md">
        <!-- Stats -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="ion-ios-bell-outline fa-1-5x text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Active Ads</p>
                                    <p class="card-title"><?php echo $total_active_item; ?><p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i>
                            Update Now
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="ion-ios-information-outline fa-1-5x text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">New Ads</p>
                                    <p class="card-title"><?php echo $total_pending_item; ?><p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i>
                            In the last hour
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="ion-ios-people-outline fa-1-5x text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Users</p>
                                    <p class="card-title"><?php echo $total_user; ?><p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="ion-cash fa-1-5x text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Income</p>
                                    <p class="card-title"><?php echo $totalearning; ?><p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i>
                            Last day
                        </div>
                    </div>
                </div>
            </div>
            


        </div>
        
        

        <div class="row">
            <div class="col-lg-8">
                <!-- Transactions history Widget -->
                <div class="card">
                    <div class="card-header">
                        <h4>Posts Statistic</h4>
                    </div>
                    <div class="card-block">
                        <div style="height: 358px;"><canvas class="js-chartjs-lines4"></canvas></div>
                    </div>
                </div>
                
                <!-- End Transactions history Widget -->
            </div>
            

            <div class="col-lg-4">
                <!-- Weekly users Widget -->
                <div class="card">
                    <div class="card-header">
                        <h4>Weekly users </h4>
                    </div>
                    <div class="card-block">
                        <div style="height: 358px;"><canvas class="js-chartjs-bars3"></canvas></div>
                    </div>
                </div>
                
                <!-- End Weekly users Widget -->
            </div>
            <!-- .col-lg-4 -->
        </div>
        

        
        
        </div>
        
    </div>
    
    
    </div>
</div>

<?php include("footer.php"); ?>

<!--Code For Chart-->
<!-- Page Plugins -->
<!--<script src="assets/js/plugins/slick/slick.min.js"></script>-->

<script src="assets/js/demo.js"></script>

<script src="assets/js/plugins/slick/slick.min.js"></script>
<script src="assets/js/plugins/chartjs/Chart.min.js"></script>

<?php
$today = date('Y-m-d');
$todayPost = ORM::for_table($config['db']['pre'].'product')->where_like('created_at', ''.$today.'%')->count();
$todayUser = ORM::for_table($config['db']['pre'].'user')->where_like('created_at', ''.$today.'%')->count();

$minusValue = $today;
$minusValue2 = $today;
$minusValue3 = $today;
$chartPostValue = "'".$todayPost."'";
$chartUserValue = "'".$todayUser."'";
$chartWeeklyLable = "'".date('M-d')."'";
for ($x = 0; $x <= 5; $x++) {
    $minusValue = date('M-d', strtotime('-1 day', strtotime($minusValue)));
    $chartWeeklyLable .= ",'".$minusValue."'";

    $minusValue2 = date('Y-m-d', strtotime('-1 day', strtotime($minusValue2)));
    $rows = ORM::for_table($config['db']['pre'].'product')->where_like('created_at', ''.$minusValue2.'%')->count();
    $chartPostValue .= ",'".$rows."'";

    $minusValue3 = date('Y-m-d', strtotime('-1 day', strtotime($minusValue3)));
    $rows = ORM::for_table($config['db']['pre'].'user')->where_like('created_at', ''.$minusValue3.'%')->count();
    $chartUserValue .= ",'".$rows."'";
}
?>


<script>
    // Lines Chart Data 3
    var $dashChartLinesData3 = {
        labels: [<?php echo $chartWeeklyLable; ?>],
        datasets: [
            {
                label: 'This Week',
                fillColor: App.hexToRgba( App.colors.blue, 50 ),
                pointColor: App.colors.blue,
                data: [<?php echo $chartUserValue; ?>]
            }
        ]
    };

    // Lines Chart Data 4
    //var $dashChartLinesData4 = {
    //    labels: [<?php //echo $chartWeeklyLable; ?>//],
    //    datasets: [
    //        {
    //            label: 'This Week',
    //            strokeColor: App.colors.blue,
    //            pointColor: '#fff',
    //            pointStrokeColor: App.colors.blue,
    //            data: [<?php //echo $chartPostValue; ?>//]
    //        }
    //    ]
    //};
</script>
<!--Code For Chart-->
<!-- Page JS Code -->
<script src="assets/js/pages/index.js"></script>

<script>
    // Lines Chart Data 3
    var $dashChartLinesData3 = {
        labels: [<?php echo $chartWeeklyLable; ?>],
        datasets: [
            {
                label: 'This Week',
                fillColor: App.hexToRgba( App.colors.blue, 50 ),
                pointColor: App.colors.blue,
                data: [<?php echo $chartUserValue; ?>]
            }
        ]
    };

    // Lines Chart Data 4
    var $dashChartLinesData4 = {
        labels: [<?php echo $chartWeeklyLable; ?>],
        datasets: [
            {
                label: 'This Week',
                strokeColor: App.colors.blue,
                pointColor: '#fff',
                pointStrokeColor: App.colors.blue,
                data: [<?php echo $chartPostValue; ?>]
            }
        ]
    };
</script>
<!--Code For Chart-->
<!-- Page JS Code -->
<script src="assets/js/pages/index.js"></script>
<script>
    $(function()
    {
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>
<!--<script>-->
<!--    $(function()-->
<!--    {-->
<!--        // Init page helpers (Slick Slider plugin)-->
<!--        App.initHelpers('slick');-->
<!--    });-->
<!--</script>-->

</body>

</html>