<?php
require_once('../datatable-json/includes.php');

$success = "";
$error = "";

if(!isset($_GET['code']))
{
    exit('Error: 404 Page not found');
}
?>
<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Region Add → <?php echo get_countryName_by_id($_GET['code']); ?></h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="addState" id="sidePanel_form">
                        <div class="form-body">
                            <input type="hidden" name="code" value="<?php echo $_GET['code']?>">
                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Local Name</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" value="" placeholder="Local Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="asciiname" value="" placeholder="Enter the name (In English)" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Active</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="css-input switch switch-sm switch-success">
                                            <input  name="active" type="checkbox" value="1" /><span></span>
                                        </label>
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
