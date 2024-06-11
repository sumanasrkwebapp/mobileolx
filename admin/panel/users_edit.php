<?php
require_once('../datatable-json/includes.php');

$fetchuser = ORM::for_table($config['db']['pre'].'user')->find_one($_GET['id']);

$fetchusername  = $fetchuser['username'];
$fetchuserpic     = $fetchuser['image'];

if($fetchuserpic == "")
    $fetchuserpic = "default_user.png";

?>
<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Edit User</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="editUser" id="sidePanel_form">
                        <div class="form-body">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <img src="../storage/profile/small_<?php echo $fetchuserpic; ?>" alt="<?php echo $fetchuser['name'];?>" style="width: 80px; border-radius: 50%">
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
                                            <input type="text" class="form-control" id="exampleInputfullname" placeholder="Full Name" name="name" value="<?php echo $fetchuser['name'];?>">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Status   <?php echo $fetchuser['status']."231" ?></label>
                                        <select class="form-control" name="status">

                                            <option value="0" <?php echo ($fetchuser['status'] == "0")? "selected" : "" ?>>Active</option>
                                            <option value="1" <?php echo ($fetchuser['status'] == "1")? "selected" : "" ?>>Verify</option>
                                            <option value="2" <?php echo ($fetchuser['status'] == "2")? "selected" : "" ?>>Ban</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Gender</label>
                                        <select class="form-control" name="sex">
                                            <option value="Male" <?php if($fetchuser['sex'] == "Male") { echo "selected"; }?>>Male</option>
                                            <option value="Female" <?php if($fetchuser['sex'] == "Female") { echo "selected"; }?>>Female</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Country</label>
                                        <select class="form-control" name="country">
                                            <?php $country = get_country_list($fetchuser['country']);
                                            foreach ($country as $value){
                                                echo '<option value="'.$value['name'].'" '.$value['selected'].'>'.$value['name'].'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">About Us</label>
                                        <textarea name="about" class="form-control" ><?php echo $fetchuser['description'];?></textarea>
                                    </div>
                                </div>

                                <h4 class="box-title m-b-0">Account Setting</h4>
                                <hr>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputuname">User Name</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ion-person"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname" placeholder="Username" name="username" value="<?php echo $fetchuser['username'];?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ion-android-mail"></i></div>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="<?php echo $fetchuser['email'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputpwd2">New Password</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ion-android-lock"></i></div>
                                            <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Enter New Password" name="password">
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
