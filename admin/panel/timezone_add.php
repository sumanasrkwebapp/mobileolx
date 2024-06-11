<?php
require_once('../datatable-json/includes.php');
?>
<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Add Timezone</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="addTimezone" id="sidePanel_form">
                        <div class="form-body">
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Country *</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control js-select2" name="country_code" required="" data-placeholder="Select country..">
                                            <?php $country = get_country_list(null,"",false);

                                            foreach ($country as $value){
                                                echo '<option value="'.$value['code'].'">'.$value['name'].'</option>';
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Time Zone *</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="time_zone_id" value="" placeholder="Enter the TimeZone (ISO)" class="form-control" required="">
                                        <p class="help-block">Please check the TimeZoneId code format here: <a href="http://download.geonames.org/export/dump/timeZones.txt" target="_blank">http://download.geonames.org/export/dump/timeZones.txt</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">GMT *</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="gmt" value="" placeholder="Enter the GMT value (ISO)" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">DST *</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="dst" value="" placeholder="Enter the DST value (ISO)" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">RAW</label>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="raw" value="" placeholder="Enter the RAW value (ISO)" class="form-control">
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
