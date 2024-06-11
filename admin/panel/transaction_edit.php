<?php
require_once('../datatable-json/includes.php');

$info = ORM::for_table($config['db']['pre'].'transaction')->find_one($_GET['id']);
$item_id = $info['id'];
$status = $info['status'];
?>

<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Edit Transaction Status</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 5%" class="form form-horizontal" method="post" data-ajax-action="transactionEdit" id="sidePanel_form">
                        <div class="form-body">
                            <input type="hidden" name="id" value="<?php echo $item_id ?>">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Transaction ID:</label>
                                    <input type="text" disabled class="form-control" value="<?php echo $item_id ?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Transaction Status</label>
                                    <select name="status" class="form-control">
                                        <option value="success" <?php if($status == 'success') echo "selected"; ?>>Success</option>
                                        <option value="pending" <?php if($status == 'pending') echo "selected"; ?>>Pending</option>
                                        <option value="cancel" <?php if($status == 'cancel') echo "selected"; ?>>cancel</option>
                                        <option value="failed" <?php if($status == 'failed') echo "selected"; ?>>Failed</option>
                                    </select>
                                </div>
                            </div>




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
