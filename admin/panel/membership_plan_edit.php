<?php
require_once('../datatable-json/includes.php');

$info = ORM::for_table($config['db']['pre'].'subscriptions')
    ->where('sub_id',$_GET['id'])
    ->find_one();
?>

<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Edit Plan</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="editMembershipPlan" id="sidePanel_form">
                        <div class="form-body">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Plan Name</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="sub_title" type="Text" class="form-control" value="<?php echo stripslashes($info['sub_title']);?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Choose Package</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="group_id" id="group_id" class="form-control">
                                            <?php
                                            $rows = ORM::for_table($config['db']['pre'].'usergroups')
                                                ->order_by_asc('group_name')
                                                ->find_many();

                                            foreach ($rows as $info2)
                                            {
                                                if($info['group_id'] == $info2['group_id'])
                                                {
                                                    ?>
                                                    <option value="<?php echo $info2['group_id'];?>" selected><?php echo stripslashes($info2['group_name']);?></option>
                                                <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <option value="<?php echo $info2['group_id'];?>"><?php echo stripslashes($info2['group_name']);?></option>
                                                <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Plan Term</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="sub_term" id="sub_term" class="form-control">
                                            <option value="DAILY" <?php if($info['sub_term'] == 'DAILY'){ echo 'selected'; } ?>>Daily</option>
                                            <option value="WEEKLY" <?php if($info['sub_term'] == 'WEEKLY'){ echo 'selected'; } ?>>Weekly</option>
                                            <option value="MONTHLY" <?php if($info['sub_term'] == 'MONTHLY'){ echo 'selected'; } ?>>Monthly</option>
                                            <option value="YEARLY" <?php if($info['sub_term'] == 'YEARLY'){ echo 'selected'; } ?>>Yearly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Plan Amount</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="sub_amount" type="Text" class="form-control" id="sub_amount" value="<?php echo stripslashes($info['sub_amount']);?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Recurring Payment</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <select name="pay_mode" id="pay_mode" class="form-control">
                                        <option value="one_time" <?php if($info['pay_mode'] == 'one_time') echo "selected"; ?> >One Time Payment</option>
                                        <option value="recurring" <?php if($info['pay_mode'] == 'recurring') echo "selected"; ?> >Recurring Payment</option>
                                    </select>
                                    </div>
                                    <p class="help-block">Reccuring payment option only availlable with paypal and stripe recurring payment plugin. If these plugin not installed then choose <b>One Time Payment</b>. Otherwise its create error.</p>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Activated</label>
                                <div class="col-sm-6">
                                    <label class="css-input switch switch-sm switch-success">
                                        <input  name="active" type="checkbox" value="1" <?php if($info['active'] == '1') echo "checked"; ?> /><span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4 col-form-label">Plan Image</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="sub_image" type="Text" class="form-control" id="sub_image" value="<?php echo stripslashes($info['sub_image']);?>" placeholder="Paste Image Url">
                                    </div>
                                </div>
                            </div>
                            <div class="row hidden">
                                <label class="col-sm-4 col-form-label">Discount Badge</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="discount_badge" type="Text" class="form-control" id="discount_badge" placeholder="example : 25%"  value="<?php echo stripslashes($info['discount_badge']);?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Recommended</label>
                                <div class="col-sm-6">
                                    <label class="css-input css-checkbox css-checkbox-primary">
                                        <div class="form-group">
                                            <input type="checkbox" name="recommended" value="yes" <?php if($info['recommended'] == 'yes') echo "checked"; ?>><span></span>
                                        </div>
                                    </label>
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
<script>
    $(function()
    {
        // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
        App.initHelpers('select2');
    });
</script>
