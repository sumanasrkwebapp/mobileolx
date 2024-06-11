<?php
require_once('../datatable-json/includes.php');

$adminId = isset($_GET['id'])? $_GET['id'] : $_SESSION['admin']['id'];

$info = ORM::for_table($config['db']['pre'].'admins')->find_one($adminId);

?>
<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Edit Admin</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="editAdmin" id="sidePanel_form">
                        <div class="form-body">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <img src="../storage/profile/small<?php echo $info['image'];?>" alt="<?php echo $info['name'];?>" style="width: 80px; border-radius: 50%">
                                        </div>
                                        <div class="col-md-10">
                                            <div>
                                                <span class="btn btn-round btn-rose btn-file">
                                                <span class="fileinput-new">Profile Picture</span>
                                                <input type="file" id="file" name="file" placeholder=".input-sm" />
                                                <span class="fileinput-exists">Change Your Photo</span>
                                                </span>
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputfullname">Full Name</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ion-person"></i></div>
                                            <input type="text" class="form-control" id="exampleInputfullname" placeholder="Full Name" name="name" value="<?php echo $info['name'];?>">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="box-title m-b-0">Account Setting</h4>
                                <hr>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputuname">User Name</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ion-person"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname" placeholder="Username" name="username" value="<?php echo $info['username'];?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ion-android-mail"></i></div>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="<?php echo $info['email'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputpwd2">New Password</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ion-android-lock"></i></div>
                                            <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Enter New Password" name="newPassword">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="slidePanel-actions">
    <div class="btn-group-flat">
        <button type="button" class="btn btn-warning btn-sm waves-effect waves-float waves-light margin-right-10" id="post_sidePanel_data">Save</button>
        <button type="button" class="btn btn-default btn-sm waves-effect waves-float waves-light margin-right-10 slidePanel-close" aria-hidden="true" data-dismiss="modal">Close</button>
    </div>
</div>