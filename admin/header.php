<?php
if(isset($_SESSION['admin']['id'])){
    $info = ORM::for_table($config['db']['pre'].'admins')->find_one($_SESSION['admin']['id']);
    $getcount = ORM::for_table($config['db']['pre'].'admins')
    ->where('id',$_SESSION['admin']['id'])
    ->count();
    $username = "";
    $adminname = "";
    $sesuserpic = "";
    if($getcount > 0){
        $username = $info['username'];
        $adminname = $info['name'];
        $sesuserpic = $info['image'];
    }
    if($sesuserpic == "")
        $sesuserpic = "default_user.png";
}



?>

<!DOCTYPE html>

<html class="app-ui">

<head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  
    <title><?php echo $config['site_title'] ?> - Admin Panel</title>

    <meta name="description" content="<?php echo $config['site_title'] ?> - Admin Dashboard" />
    <meta name="robots" content="noindex, nofollow" />

  
    <link rel="icon" type="image/png" sizes="16x16" href="../storage/logo/<?php echo $config['site_favicon']?>">



   
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

    
    <link rel="stylesheet" href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/slick/slick.min.css" />
    <link rel="stylesheet" href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/slick/slick-theme.min.css" />
    <!-- css select2 -->
    <link rel="stylesheet" href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/select2/select2.min.css" />
    <link rel="stylesheet" href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/select2/select2-bootstrap.css" />
    
    <link rel="stylesheet" id="css-font-awesome" href="<?php echo $config['site_url']; ?>/admin/assets/css/font-awesome.css" />
    <link rel="stylesheet" id="css-ionicons" href="<?php echo $config['site_url']; ?>/admin/assets/css/ionicons.css" />
    <link rel="stylesheet" id="css-icons" href="<?php echo $config['site_url']; ?>/admin/assets/less/icons.css" />
    <link rel="stylesheet" id="css-bootstrap" href="<?php echo $config['site_url']; ?>/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" id="css-app" href="<?php echo $config['site_url']; ?>/admin/assets/css/app.css" />
    <link rel="stylesheet" id="css-app-custom" href="<?php echo $config['site_url']; ?>/admin/assets/css/app-custom.css" />
    <link rel="stylesheet" id="css-app-custom" href="<?php echo $config['site_url']; ?>/admin/assets/css/paper-dashboard.css?v=2.1.1" />
    <link rel="stylesheet" id="css-app-animation" href="<?php echo $config['site_url']; ?>/admin/assets/css/animation.css" />
    <link rel="stylesheet" id="css-app-custom" href="<?php echo $config['site_url']; ?>/admin/aassets/css/demo.css" />
    <!-- End Stylesheets -->
    <link rel="stylesheet" href="<?php echo $config['site_url']; ?>/admin/assets/css/category.css" />

    <link rel="stylesheet" href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/asscrollable/asScrollable.min.css">
    <link rel="stylesheet" href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/slidepanel/slidePanel.min.css">
    <link rel="stylesheet" href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/datatables/jquery.dataTables.min.css" />


    <!--alerts CSS -->
    <link href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $config['site_url']; ?>/admin/assets/js/plugins/alertify/alertify.min.css" rel="stylesheet" type="text/css">
    
    <!-- My Custom CSS -->
    <link id="css-my-styles" href="<?php echo $config['site_url']; ?>/admin/assets/css/my-styles.css" rel="stylesheet" type="text/css">

    <?php
    if(isset($config['markad_secret_file']) && $config['markad_secret_file'] != ""){
        ?>
        <script>
            var ajaxurl = '<?php echo $config['site_url']."admin/".$config['markad_secret_file'].'.php'; ?>';
        </script>
    <?php
    }
    ?>
    <script>
        var sidepanel_ajaxurl = '<?php echo $config['site_url']."admin/ajax_sidepanel.php"; ?>';
    </script>
</head>

<body class="">

<div class="wrapper">

    <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
                    <div class="" height="60px">
                    <h3 style="text-align: center;">Admin Panel</h3>
                    </div>
                 
            </div>


            <div class="sidebar-wrapper">

                <ul class="nav">
              

                   

                    <li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i>
 Dashboard</a>
                    </li>

                    <li><a href="manage_ads.php"><i class="fa fa-file-image-o" aria-hidden="true"></i>
Manage Ads</a></li>

                   
<li><a href="subscriptions.php"><i class="fa fa-diamond" aria-hidden="true"></i>

Subscription</a></li>



<li>
                        <a href="category_setting.php"><i class="fa fa-list-ul" aria-hidden="true"></i>
 Categories</a>
                    </li>

                    <li>
                        <a href="custom_data.php"><i class="fa fa-database" aria-hidden="true"></i>
 Custom Data </a>
                    </li>

                    
                    
                    <li>
                        <a href="chat_list.php"><i class="fa fa-comments" aria-hidden="true"></i>
 Messages </a>
                    </li>

                   
                    <li>
                        <a href="review_list.php"><i class="fa fa-star" aria-hidden="true"></i>
                        Review </a>
                    </li>

                 

                   
                   
                  
                 
                  
                  
                    <li>
                        <a href="setting.php"><i class="fa fa-cogs" aria-hidden="true"></i>
Multi Setting</a>
                    </li>


                  
                   
                    <li>
                        <a href="all_pages.php"><i class="fa fa-file-text" aria-hidden="true"></i>
 Term &amp; Privacy</a>
                    </li>

                   

                    <li>
                        <a href="faq_entries.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                        FAQ</a>
                    </li>

                    <li>
                        <a href="transactions.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                     Transactions</a>
                    </li>


     </li>

                    <li><a href="advertisment.php"><i class="fa fa-file-image-o" aria-hidden="true"></i>
Advertisment</a></li>
                   
                  
                    <li>
                        <a href="users.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                       Users</a>
                    </li>

                    <li>
                        <a href="admins.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
                        Admin Setting</a>
                    </li>

                   
                    <li >
                        <a href="logout.php"><i class="ion-ios-people-outline"></i> Logout</a>
                    </li>
                </ul>

            </div>

    </div>
      <!-- Navbar -->

    <div class="main-panel">

        <nav class="navbar navbar-expand-lg navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Admin Panel</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="header-navbar-collapse">
            <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
              
                <li class="dropdown dropdown-profile">
                     <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ion-ios-contact" style="font-size: 21px"></i>&nbsp;<span class="m-r-sm"><?php echo $adminname;?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <li><a href="logout.php" class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
                </ul>
          </div>
        </div>
      </nav>

        <?php
        if(!isset($config['purchase_key']) && $config['purchase_key'] == ""){
            ?>
            <div class="app-layout-content">
                    <div class="alert alert-warning" style="margin: 10px 10px 0 10px">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Important!</strong> Please verify purchase code to use admin feature.
                        <a class="text-info" style="cursor: pointer" href="setting.php#markad_purchase_code"><strong>Click here</strong></a>
                    </div>
                </div>
        <?php
        }
        ?>