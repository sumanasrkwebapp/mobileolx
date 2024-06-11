<?php
require_once('../datatable-json/includes.php');

?>
<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Add User</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="addUser" id="sidePanel_form">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <span class="btn btn-round btn-rose btn-file">
                          <span class="fileinput-new">Profile Picture<code>*</code></span>
                          <input type="file" id="file" name="file" placeholder=".input-sm" /></span>
                            <br />
                            <span class="help-block">Valid <code>jpg</code> image only</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><br>
                            <label for="exampleInputfullname">Full Name</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="ion-person"></i></div>
                                <input type="text" class="form-control" id="exampleInputfullname" placeholder="Full Name" name="name" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Gender</label>
                            <select class="form-control" name="sex">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Country</label>
                            <select class="form-control" name="country">
                                <?php
                                $country = get_country_list();
                                foreach ($country as $value){
                                    echo '<option value="'.$value['name'].'">'.$value['name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">About Us</label>
                            <textarea name="about" class="form-control" ></textarea>
                        </div>
                    </div>

                    <h4 class="box-title m-b-0">Account Setting</h4>
                    <hr>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputuname">User Name</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="ion-person"></i></div>
                                <input type="text" class="form-control" id="exampleInputuname" placeholder="Username" name="username" value="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="ion-android-mail"></i></div>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="">
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
<div class="slidePanel-actions">
    <div class="btn-group-flat">
        <button type="button" class="btn btn-warning btn-sm waves-effect waves-float waves-light margin-right-10" id="post_sidePanel_data">Save</button>
        <button type="button" class="btn btn-default btn-sm waves-effect waves-float waves-light margin-right-10 slidePanel-close" aria-hidden="true" data-dismiss="modal">Close</button>
    </div>
</div>

