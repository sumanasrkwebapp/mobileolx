<?php
require_once('../datatable-json/includes.php');

$info = ORM::for_table($config['db']['pre'].'currencies')->find_one($_GET['id']);

$code = $info['code'];
?>
<header class="slidePanel-header overlay">
    <div class="overlay-panel overlay-background vertical-align">
        <div class="service-heading">
            <h2>Edit Currency</h2>
        </div>
    </div>
</header>
<div class="slidePanel-inner">
    <div class="panel-body">
        
        <div class="row">
            <div class="col-sm-12">

                <div class="white-box">
                    <div id="post_error"></div>
                    <form name="form2" style="margin-top: 2%" class="form form-horizontal" method="post" data-ajax-action="editCurrency" id="sidePanel_form">
                        <div class="form-body">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Currency Code</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="code" value="<?php echo $info['code']; ?>" placeholder="Enter the currency code (ISO Code)" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="name" value="<?php echo $info['name']; ?>" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Html Entity</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="html_entity" value="<?php echo $info['html_entity']; ?>" placeholder="Enter the html entity code" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Font Arial</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="font_arial" value="<?php echo $info['font_arial']; ?>" placeholder="Enter the font arial code" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Font Code2000</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="font_code2000" value="<?php echo $info['font_code2000']; ?>" placeholder="Enter the font code2000 code" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Unicode Decimal</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="unicode_decimal" value="<?php echo $info['unicode_decimal']; ?>" placeholder="Enter the unicode decimal code" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Unicode Hex</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="unicode_hex" value="<?php echo $info['unicode_hex']; ?>" placeholder="Enter the unicode hex code" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Symbol in left</label>
                                <div class="col-sm-8">
                                    <label class="css-input switch switch-sm switch-success">
                                        <div class="form-group">
                                            <input  name="in_left" type="checkbox" value="1"  <?php echo ($info['in_left'] == 1)? "checked" : ""?>/><span></span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Decimal Places</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="decimal_places" value="<?php echo $info['decimal_places']; ?>" placeholder="Enter the decimal places" class="form-control">
                                        <p class="help-block">Number after decimal. Ex: 2 =&gt; 150.00 [or] 3 =&gt; 150.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Decimal Separator</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="decimal_separator" value="<?php echo $info['decimal_separator']; ?>" placeholder="Enter the decimal separator" maxlength="1" class="form-control">
                                        <p class="help-block">Ex: "." =&gt; 100.00 [or] "," =&gt; 100,00</p>
                                    </div>
                                </div>
                            </div>

                            <!-- text input -->
                            <div class="row">
                                <label class="col-sm-4 col-form-label">Thousand Separator</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" name="thousand_separator" value="<?php echo $info['thousand_separator']; ?>" placeholder="Enter the thousand separator" maxlength="1" class="form-control">
                                        <p class="help-block">Ex: "," =&gt; 100,000.00 [or] whitespace =&gt; 100 000.000</p>
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

